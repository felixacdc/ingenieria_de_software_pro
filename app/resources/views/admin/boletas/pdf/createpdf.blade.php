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
				<img src="img/logo.jpg">
			</div>
			
			<div id="company">
				<br>
				<!-- <hr style="color: #1B8EC7;"> -->
		    	<h2 class="name">MINISTERIO DE SALUD PÚBLICA Y ASISTENCIA SOCIAL</h2>
		        <div>FICHA DE RIESGO OBSTÉTRICO</div>
		        <div>Suchitepequez</div>
		        <!-- <div><a href="mailto:company@example.com">company@example.com</a></div> -->
		        <!-- <hr style="color: #1B8EC7;"> -->
	     	</div>
		</div>	    

    </header>
	
	<!-- <h1>Listado de registros</h1> -->

	<table>
	<div style="page-break-after: always;"></div>
		<thead>
			<tr>
				<th>No. de Registro</th>
				<th>DAS</th>
				<th>Distrito</th>
				<th>Nombre Paciente</th>
				<th>Edad</th>
				<th>Pueblo</th>
				<th>Centro de Salud mas Cercano</th>
				<th>FUR</th>
				<th>FPP</th>
				<th>Embarazos</th>
				<th>Partos</th>
				<th>Cesareas</th>
				<th>Abortos</th>
				<th>Hijos Vivos</th>
				<th>Hijos Muertos</th>
			</tr>
		</thead>
		<tbody>
			@foreach($data as $paciente)
				<tr>
					<td>{{ $paciente->no_registro }}</td>
					@foreach($DAS as $centro)
						<th>{{ $centro->centro }}</th>
					@endforeach
					<th>{{ $paciente->nombre_paciente }}</th>
					<th>{{ $paciente->edad_paciente }}</th>
					<th>{{ $paciente->pueblo_paciente }}</th>
					<th>{{ $paciente->distancia_se_si_cercana }}</th>
					<th>{{ $paciente->fecha_ultima_regla }}</th>
					<th>{{ $paciente->fecha_probable_parto }}</th>
					<th>{{ $paciente->no_embarazos }}</th>
					<th>{{ $paciente->no_partos }}</th>
					<th>{{ $paciente->no_cesarias }}</th>
					<th>{{ $paciente->no_abortos }}</th>
					<th>{{ $paciente->no_hijos_vivos }}</th>
					<th>{{ $paciente->no_hijos_muertos }}</th>					
				</tr>
			@endforeach
		</tbody>	
	</table>
	<table>
	<div style="page-break-after: always;"></div>
		<thead>
			<tr>
				<th>No. de Registro</th>
				<th>DAS</th>
				<th>Distrito</th>
				<th>Nombre Paciente</th>
				<th>Edad</th>
				<th>Pueblo</th>
				<th>Centro de Salud mas Cercano</th>
				<th>FUR</th>
				<th>FPP</th>
				<th>Embarazos</th>
				<th>Partos</th>
				<th>Cesareas</th>
				<th>Abortos</th>
				<th>Hijos Vivos</th>
				<th>Hijos Muertos</th>
			</tr>
		</thead>
		<tbody>
			@foreach($data as $paciente)
				<tr>
					<td>{{ $paciente->no_registro }}</td>
					@foreach($DAS as $centro)
						<th>{{ $centro->centro }}</th>
					@endforeach
					<th>{{ $paciente->nombre_paciente }}</th>
					<th>{{ $paciente->edad_paciente }}</th>
					<th>{{ $paciente->pueblo_paciente }}</th>
					<th>{{ $paciente->distancia_se_si_cercana }}</th>
					<th>{{ $paciente->fecha_ultima_regla }}</th>
					<th>{{ $paciente->fecha_probable_parto }}</th>
					<th>{{ $paciente->no_embarazos }}</th>
					<th>{{ $paciente->no_partos }}</th>
					<th>{{ $paciente->no_cesarias }}</th>
					<th>{{ $paciente->no_abortos }}</th>
					<th>{{ $paciente->no_hijos_vivos }}</th>
					<th>{{ $paciente->no_hijos_muertos }}</th>					
				</tr>
			@endforeach
		</tbody>	
	</table>
</body>
</html>