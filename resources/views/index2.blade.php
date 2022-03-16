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
				<p><br/>
				</p>
			</header>

		<!-- Signup Form -->
			<form method="post" action="">
				@csrf
                <select>
                    <option selected>Colonia</option>
                    @foreach($inicio as $ini)
                    <option name="opcion1">{{$ini->asentamiento}}</option>
                    @endforeach
                </select>
                <br>
                <select>
                    <option selected>Municipio</option>
                    @foreach($inicio as $ini2)
                    <option name="opcion2">{{$ini2->municipio}}</option>
                    @endforeach
                </select>
                <br>
                <select>
                    <option selected>Ciudad</option>
                    @foreach($inicio3 as $ini3)
                    <option name="opcion2">{{$ini3->ciudad}}</option>
                    @endforeach
                </select>
			</form>

		<!-- Scripts -->
		<script src="assets/js/main.js"></script>

	</body>
</html>