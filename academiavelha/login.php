<?php
    require_once 'head.php';  
	
	include_once 'conexao.php';

	session_start();
	ob_start();

  ?>

  <?php

	//echo "senha".password_hash(123, PASSWORD_DEFAULT);


		$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

		if(!empty($dados["btnlogin"])){
			var_dump($dados);

			$sql = "SELECT matricula, nome, email, senha 
                        FROM funcionario 
                        WHERE email =:usuario  
                        LIMIT 1";
        	$resultado= $conn->prepare($sql);

			$resultado->bindParam(':usuario', $dados['usuario'], PDO::PARAM_STR);
       		
			$resultado->execute();

			if(($resultado) AND ($resultado->rowCount() != 0)){
				$linha = $resultado->fetch(PDO::FETCH_ASSOC);
				var_dump($linha);

				if(password_verify($dados['senha'], $linha['senha'])){
					$_SESSION['nome'] = $linha['nome'];
					header("Location: administrativo.php");
				}
				else{
					$_SESSION['msg'] = "Usuário ou Senha não encontrados";
				}


			}			
			else{
				$_SESSION['msg'] = "Usuário ou Senha não encontrados";
			}



		}

		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		

	?>


<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Fazer login</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div>
			<div class="card-body">
				<form method="POST" action="">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Usuário" name="usuario">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="Senha" name="senha">
					</div>
				
					<div class="form-group">
						<input type="submit" value="Cadastre-se" class="btn float-right ">
					</div>

					<div class="form-group">
						<input type="submit" value="Login" class="btn float-right login_btn" name="btnlogin">
					</div>
				</form>
			</div>
			<div class="card-footer">
				
				<div class="d-flex justify-content-center links">
					<a href="#">Esqueceu a Senha?</a>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
   
  ?>