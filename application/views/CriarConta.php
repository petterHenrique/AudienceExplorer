<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Logar - AudienceExplorer</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<style>
		html,
		body {
		  height: 100%;
		}

		body {
		  display: -ms-flexbox;
		  display: -webkit-box;
		  display: flex;
		  -ms-flex-align: center;
		  -ms-flex-pack: center;
		  -webkit-box-align: center;
		  align-items: center;
		  -webkit-box-pack: center;
		  justify-content: center;
		  padding-top: 40px;
		  padding-bottom: 40px;
		  background-color: #f5f5f5;
		}

		.form-signin {
		  width: 100%;
		  max-width: 600px;
		  padding: 15px;
		  margin: 0 auto;
		}
		.form-signin .checkbox {
		  font-weight: 400;
		}
		.form-signin .form-control {
		  position: relative;
		  box-sizing: border-box;
		  height: auto;
		  padding: 10px;
		  font-size: 16px;
		}
		.form-signin .form-control:focus {
		  z-index: 2;
		}
		.form-signin input[type="email"] {
		  margin-bottom: -1px;
		  border-bottom-right-radius: 0;
		  border-bottom-left-radius: 0;
		}
		.form-signin input[type="password"] {
		  margin-bottom: 10px;
		  border-top-left-radius: 0;
		  border-top-right-radius: 0;
		}
	</style>
</head>
<body class="text-center">
	 <form class="form-signin" method="POST" action="<?=base_url()?>index.php/Login/SalvarConta">
	  <?php if(isset($erro) && !empty($erro)){ ?>
		<div class="alert alert-danger" role="alert">
		  	<?php echo $erro; ?>
		</div>
	  <?php 
		}
	  ?>
      <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Crie sua conta</h1>
     

		<div class="form-group">
		    <label for="exampleInputEmail1">Nome:</label>
		    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome usuário">
		</div>
		<div class="form-group">
		    <label for="exampleInputEmail1">E-mail:</label>
		    <input type="text" class="form-control" id="email" name="email" placeholder="E-mail">
		</div>
		<div class="form-group">
		    <label for="exampleInputEmail1">Senha:</label>
		    <input type="text" class="form-control" id="senha" name="senha" placeholder="Senha">
		</div>
		<div class="form-group">
		    <label for="exampleInputEmail1">Cpf:</label>
		    <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Cpf">
		</div>
		<button type="submit" class="btn btn-success">Cadastrar</button> 
	</form>
</body>
</html>