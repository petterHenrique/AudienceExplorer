<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include (APPPATH."models/vendor/autoload.php");
use Curl\Curl;

class ServicoDados extends CI_Model {

	private $tokenAplicativoFacebook = "3036661449748013|EsPKRqYdUc6jcaMBHDEQvzWslvk";

	public function RetornarSegmentosFacebook($parametro){
		
		$url = $this->MontarUrl($parametro);

		$curl = new Curl();

		$curl->get($url);

		if ($curl->error) {

			throw new Exception("Erro: ${$curl->errorCode} Mensagem: ${$curl->errorMessage}", 1);

		} else {

			$resultadosPesquisa = json_decode(json_encode($curl->response));
			
			$resultado = array();

			if(!empty($resultadosPesquisa) && !empty($resultadosPesquisa->data)){

				foreach ($resultadosPesquisa->data as $pesquisa) {

					$dtoResultado = new StdClass();
					$dtoResultado->tamanhoAudiencia = $pesquisa->audience_size;
					$dtoResultado->nome = $pesquisa->name;
					//$dtoResultado->topico = $pesquisa->topic;
					$dtoResultado->sugestoes = implode(" || ",$pesquisa->path);
					$dtoResultado->sugestoesArr = $pesquisa->path;
					

					array_push($resultado, $dtoResultado);
				}
			}
		    return $resultado;
		}
	}

	private function MontarUrl($parametro){

		$parametro = ucfirst($parametro);

		$url = "https://graph.facebook.com/search?type=adinterest&q=[".$parametro."]&limit=10000&locale=pt_BR&access_token=".$this->tokenAplicativoFacebook;

		return $url;
	}

}