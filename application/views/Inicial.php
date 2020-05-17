<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <header>
	  <div class="collapse bg-dark" id="navbarHeader">
	    <div class="container">
	      <div class="row">
	        <div class="col-sm-8 col-md-7 py-4">
	          <h4 class="text-white">About</h4>
	          <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
	        </div>
	        <div class="col-sm-4 offset-md-1 py-4">
	          <h4 class="text-white">Contact</h4>
	          <ul class="list-unstyled">
	            <li><a href="#" class="text-white">Follow on Twitter</a></li>
	            <li><a href="#" class="text-white">Like on Facebook</a></li>
	            <li><a href="<?=base_url()?>index.php/Login/deslogar" class="text-white">Deslogar</a></li>
	          </ul>
	        </div>
	      </div>
	    </div>
	  </div>
	  <div class="navbar navbar-dark bg-dark shadow-sm">
	    <div class="container d-flex justify-content-between">
	      <a href="#" class="navbar-brand d-flex align-items-center">
	        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="mr-2" viewBox="0 0 24 24" focusable="false"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
	        <strong>Album</strong>
	      </a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="navbar-toggler-icon"></span>
	      </button>
	    </div>
	  </div>
	</header>

	<main role="main">
	  <section class="jumbotron text-center">
	    <div class="container">
	      	<div class="col-12">
	      		<h1>Dificuldade em vender e encontrar o público certo no Facebook?</h1>
			      </br>
			      <h3>Já investiu muito dinheiro em tráfego pago e não teve resultados?</h3>
			      </br>
			      <h4 class="text-danger">Saiba que nenhum negócio trás liberdade financeira sem existir a venda, e se você não vender você quebra :(</h4>
			      </br>
			      <h4>Encontre seu público secreto dentro do Facebook e tenha alta lucrativadade com baixo custo.
			      E o melhor seu concorrente <b class="text-warning">NÃO FAZ IDEIA QUE EXISTE!</b>
			      </h4>
	      	</div>
	    </div>
	    <div class="container">
	    	<div class="row">
	    		<div class="col-12">
	    			<div class="input-group">
					    <input type="text" id="param" class="form-control" placeholder="Informe sua palavra chave" aria-label="Input group example" aria-describedby="btnGroupAddon">
					    <div class="input-group-prepend bg-success" style="cursor:pointer;">
					      <div class="input-group-text" id="pesquisar">Pesquisar Público Secreto</div>
					    </div>
					</div>
	    		</div>
	    		<div class="col-12">
	    			<table class="table">
					  <thead>
					    <tr>
					      <th scope="col">Nome</th>
					      <th scope="col">Tamanho Audiencia</th>
					      <th scope="col">Sugestões</th>
					      <th scope="col">Ação</th>
					    </tr>
					  </thead>
					  <tbody id="dados">
					   
					  </tbody>
					</table>
	    		</div>
	    	</div>
	    </div>
	  </section>
	</main>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script>
		$(() => {

			$("#pesquisar").click(function(){

				let param = $("#param").val();

				Pesquisar(param);

			});

		});

		function Pesquisar(param){

			$.ajax({
				url: "<?=base_url()?>index.php/Inicial/pesquisar",
				method: "POST",
				data: {param: param},
				success: function(res){
					console.log(res);

					$("#dados").html(res);

				}
			});

		}
	</script>
</body>
</html>