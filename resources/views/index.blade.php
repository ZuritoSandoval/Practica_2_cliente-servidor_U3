<!DOCTYPE HTML>

<html>
	<head>
		<title>Codigos postales</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<h1>Base de datos de direccion</h1>
				<p>Ingresa tu codigo postal <br/>
				</p>
			</header>

		<!-- Signup Form -->
			<form method="post" action="{{route('inicio')}}">
				@csrf
				<input type="text" name="codigo" id="codigo" placeholder="Codigo postal" />
				<button type="submit">Enviar</button>
			</form>

		<!-- Scripts -->
		<script src="assets/js/main.js"></script>

	</body>
</html>