<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Listado de Pacientes</title>
	<link rel="stylesheet" type="text/css" href="css/pdf.css">
</head>
<body>
	<header class="clearfix">
		
		<div id="container">

			<div id="logo">
				<img src="css/logo.jpg">
			</div>
			
			<div id="company">
				<br>
				<!-- <hr style="color: #1B8EC7;"> -->
		    	<h2 class="name">MINISTERIO DE SALUD PÚBLICA Y ASISTENCIA SOCIAL</h2>
		        <div>FICHA DE RIESGO OBSTÉTRICO</div>
		        <div>Suchitepequez</div>
		        <div><a href="mailto:company@example.com">company@example.com</a></div>
		        <!-- <hr style="color: #1B8EC7;"> -->
	     	</div>
		</div>	    

    </header>
	
	<h1>Listado de registros</h1>

	<table>
	<div style="page-break-after: always;"></div>
		<thead>
			<tr>
				<th>No. de Registro</th>
				<th>DAS de Residencia</th>
				<th>DAS de ocurrencia</th>
				<th>Distrito</th>
				<th>Nombre de la Embarazada</th>
				<th>Edad</th>
				<th>Pueblo</th>
				<th>Nombre de Esposo o Conviviente</th>
				<th>Edad de esposo</th>
				<th>Pueblo</th>
				<th>Escolaridad</th>
				<th>Ocupación</th>
			</tr>
		</thead>
		<tbody>
			<!-- @foreach($users as $user)
				<tr>
					<td>{{ $user->id }}</td>
					<th>{{ $user->name }}</th>
					<th>{{ $user->email }}</th>
					<th>{{ $user->name }}</th>
					<th>{{ $user->email }}</th>
					<th>{{ $user->name }}</th>
					<th>{{ $user->email }}</th>
					<th>{{ $user->name }}</th>
					<th>{{ $user->email }}</th>
					<th>{{ $user->name }}</th>
					<th>{{ $user->email }}</th>
					<th>{{ $user->name }}</th>
				</tr>
			@endforeach -->
		</tbody>	
	</table>
</body>
</html>