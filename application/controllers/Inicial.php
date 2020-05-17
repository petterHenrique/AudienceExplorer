<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include "Base.php";

class Inicial extends Base {

	public function __construct(){
	    parent::__construct();
	}

	public function index()
	{
		$this->load->view('Inicial');
	}

	public function pesquisar(){
		try{

			if(!$this->VerificaUsuarioAtivo()){
				throw new Exception("Seu usuário ainda não possúi permissão para encontrar os Públicos secretos, Verifique se a assinatura do seu plano funcionou!", 1);
			}

			$dados = $this->input->post("param");

			$this->load->Model("ServicoDados");

			$dados = $this->ServicoDados->RetornarSegmentosFacebook($dados);

			$response = array(
				'sucesso' => true,
				'dados' => $dados
			);

		    $dados['resultado'] = $dados;
		    
		    $this->load->view("resultadoPesquisaFacebook", $dados);

		}catch (Exception $e) {

			$response = array(
				'sucesso' => false,
				'mensagem' => $e->getMessage()
			);

		    $this->output
		        ->set_status_header(200)
		        ->set_content_type('application/json', 'utf-8')
		        ->set_output(json_encode($response));
		}
	}
}
