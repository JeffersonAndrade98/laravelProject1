<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >
    <title>Document</title>
</head>
<body>
    <section>
		<div class="formCad">
			<main class="container">
				<h2>Cadastro</h2>
				<form aciton="/newcadastro" method="POST";>
					<br>
					<div class="input-field">
						<input type="text" id="nome" autofocus="autofocus"
							placeholder="Informe seu nome" />
						<div class="underline"></div>
					</div>
					<br>
					<div class="input-field">
						<input type="tel" id="telefone"
							placeholder="Informe seu telefone" maxlength="11" />
						<div class="underline"></div>
					</div>
					<br>
					<div class="input-field">
						<input type="text" id="cidade"
							placeholder="Informe a cidade" maxlength="11" />
						<div class="underline"></div>
					</div>
					<input type="submit" value="Enviar">
				</form>
			</main>
		</div>
	</section>
</body>
</html>