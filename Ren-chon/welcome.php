<!DOCTYPE html>

<html>

	<head>
		<title>Ren Chon</title>
		<meta charset="utf-8">
		
		<style type="text/css">

			body{
			background-image: url("https://pbs.twimg.com/media/CpC1N0pUsAA6lLy.jpg");
			background-repeat: no-repeat;
			background-size: cover;
			padding: 0;
			margin: 0;
			}
			
			#login-sidebar{
				display: grid;
				margin: 0 0 0 4%;
				width: 25%;
				height: 100%;
				position: absolute;
				background-color: rgb(255,182,193, 0.9);
			}

			.login-table{
				margin: auto;
				font-weight: normal;
			}


		</style>
	</head>

	<body>
		<div class="container">
			<content id="login-sidebar">
				<table class="login-table" >
					<tr>
						<th><img src="https://pm1.narvii.com/6274/91e724ccdf21f9002929ae41d560fdcc09a0d3bc_hq.jpg" width="30%"> <h2> Rede da Ren-Chon </h2></th>
					</tr>
					<tr>
						<td>
							<div class="container">
								<br><br><br><br><br><br>
								<form action="/action_page.php">
								  	<input type="text" name="usuario" placeholder="Usuário"><br><br>
								  	<input type="password" name="senha" placeholder="Senha"><br><br>
								  	<input type="submit" value="Login">
								</form><br>
								<a href="">Cadastrar</a>
								<p>Esqueceu a senha?</p>
							</div>
						</td>	
					</tr>
				</table>
			</content>
	</div>


	</body>
</html>