<?php
defined('BASEPATH') OR exit('No direct script access allowed');

abstract class Base extends CI_Controller {

	protected $usuarioLogado;

	public function __construct(){
		
	    parent::__construct();

	    $usuario = $this->session->userdata('usuarioLogado'); 

	    if(empty($usuario)){

	    	redirect("/Login");

	    }else{

	    	$this->usuarioLogado = $usuario;

	    }
	}

	protected function IsMaster(){
		if(!empty($this->usuarioLogado) && $this->usuarioLogado->TIP_MASTER == 1){
			return true;
		}else{
			return false;
		}
	}

	protected function VerificaUsuarioAtivo(){
		$this->load->Model("ServicoUsuario");

		$usuario = $this->ServicoUsuario->RetornarUsuarioCodigo($this->usuarioLogado->COD_USUARIO);

		if(empty($usuario)){
			return false;
		}else if($usuario->TIP_ATIVO == 0){
			return false;
		}else{
			return true;
		}

	}
}
