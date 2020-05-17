<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}

	public function logar(){
		try{

			$email = $this->input->post("email");
			$senha = $this->input->post("senha");

			$this->load->Model("ServicoUsuario");

			$usuario = $this->ServicoUsuario->RetornarUsuarioEmailSenha($email, $senha);

			if(empty($usuario)){
				$dados['erro'] = "E-mail ou senha inválidos, ou usuário não encontrado";
				$this->load->view("Login", $dados);
			}else{
				$this->session->set_userdata('usuarioLogado', $usuario);
				redirect("Inicial/index");
			}

		}catch (Exception $e) {
			$dados['erro'] = "E-mail ou senha inválidos, ou usuário não encontrado";
			$this->load->view("Login", $dados);
		}
	}

	public function deslogar(){
		$this->session->sess_destroy();

		redirect("Inicial/index");
	}


	public function criarConta(){

		$this->load->view("CriarConta");

	}


	public function SalvarConta(){

		try{

			$nome = $this->input->post("nome");
			$email = $this->input->post("email");
			$senha = $this->input->post("senha");
			$cpf = $this->input->post("cpf");

			$this->load->Model("ServicoUsuario");

			$entidade = [
				'DES_USUARIO' => $nome,
				'DES_EMAIL' => $email,
				'DES_SENHA' => md5($senha),
				'NUM_CPF' => $cpf,
				'COD_PLANO' => 1, //FIXO PQ SÓ TEMOS UM PLANO ATUALIDADE
				'TIP_MASTER' => false
			];

			$this->ServicoUsuario->Salvar($entidade);

			redirect("Login/SelecionarPlano");

		}catch (Exception $e) {
			$dados['erro'] = $e->getMessage();
			$this->load->view("CriarConta", $dados);
		}

	}

	public function SelecionarPlano(){
		$this->load->view("SelecionarPlano");
	}
}
