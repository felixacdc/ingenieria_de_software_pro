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

	<!-- <div style="page-break-after: always;"></div> -->
		<thead>
			<tr>
				<th class="C1">No. de Registro</th>
				<th class="C2">DAS</th>
				<th class="C3">Nombre Paciente</th>
				<th class="C4">Edad</th>
				<th class="C5">Pueblo</th>
				<th class="C6">Centro de Salud mas Cercano</th>
				<th class="C7">FUR</th>
				<th class="C7">FPP</th>
			</tr>
		</thead>
		<tbody>
			@foreach($data as  $centro => $paciente)
				@foreach($paciente as $key => $ballot)
					<tr>
						<td>{{ $ballot->no_registro }}</td>
						<td>{{ $centro }}</td>
						<td>{{ $ballot->nombre_paciente }}</td>
						<td>{{ $ballot->edad_paciente }}</td>
						<td>{{ $ballot->pueblo_paciente }}</td>
						<td>{{ $ballot->distancia_se_si_cercana }}</td>
						<td>{{ $ballot->fecha_ultima_regla }}</td>
						<td>{{ $ballot->fecha_probable_parto }}</td>
					</tr>
				@endforeach
			@endforeach
		</tbody>
	</table>

	<table>
	<!-- <div style="page-break-after: always;"></div> -->
		<thead>
			<tr>
				<th class="C8">Embarazos</th>
				<th class="C8">Partos</th>
				<th class="C8">Cesareas</th>
				<th class="C8">Abortos</th>
				<th class="C8">Hijos Vivos</th>
				<th class="C8">Hijos Muertos</th>
				<th colspan="7" class="C8">Antecedentes Obstétricos</th>
				<th colspan="12" class="C3">Embarazo Actual</th>
				<th colspan="6" class="C8">Historia Clínica General</th>
			</tr>
		</thead>
		<tbody>
			@foreach($data as $paciente)
				@foreach($paciente as $key => $ballot)
					<tr>
						<td>{{ $ballot->no_embarazos }}</td>
						<td>{{ $ballot->no_partos }}</td>
						<td>{{ $ballot->no_cesarias }}</td>
						<td>{{ $ballot->no_abortos }}</td>
						<td>{{ $ballot->no_hijos_vivos }}</td>
						<td>{{ $ballot->no_hijos_muertos }}</td>

						<!-- Columna 1 -->
						<td class="celdas">
							@if($ballot->antecedentes->dato1 == 1)
								<img src="img/si.png" alt="">
							@else
								<img src="img/no.png" alt="">
							@endif</td>
						<td class="celdas">
							@if($ballot->antecedentes->dato2 == 1)
								<img src="img/si.png" alt="">
							@else
								<img src="img/no.png" alt="">
							@endif</td>
						<td class="celdas">
							@if($ballot->antecedentes->dato3 == 1)
								<img src="img/si.png" alt="">
							@else
								<img src="img/no.png" alt="">
							@endif</td>
						<td class="celdas">
							@if($ballot->antecedentes->dato4 == 1)
								<img src="img/si.png" alt="">
							@else
								<img src="img/no.png" alt="">
							@endif</td>
						<td class="celdas">
							@if($ballot->antecedentes->dato5 == 1)
								<img src="img/si.png" alt="">
							@else
								<img src="img/no.png" alt="">
							@endif</td>
						<td class="celdas">
							@if($ballot->antecedentes->dato6 == 1)
								<img src="img/si.png" alt="">
							@else
								<img src="img/no.png" alt="">
							@endif</td>
						<td class="celdas">
							@if($ballot->antecedentes->dato7 == 1)
								<img src="img/si.png" alt="">
							@else
								<img src="img/no.png" alt="">
							@endif</td>
						<!-- Columna 2 -->
						<td class="celdas2">
							@if($ballot->embarazoActual->dato1 == 1)
								<img src="img/si.png" alt="">
							@else
								<img src="img/no.png" alt="">
							@endif</td>
						<td class="celdas2">
							@if($ballot->embarazoActual->dato2 == 1)
								<img src="img/si.png" alt="">
							@else
								<img src="img/no.png" alt="">
							@endif</td>
						<td class="celdas2">
							@if($ballot->embarazoActual->dato3 == 1)
								<img src="img/si.png" alt="">
							@else
								<img src="img/no.png" alt="">
							@endif</td>
						<td class="celdas2">
							@if($ballot->embarazoActual->dato4 == 1)
								<img src="img/si.png" alt="">
							@else
								<img src="img/no.png" alt="">
							@endif</td>
						<td class="celdas2">
							@if($ballot->embarazoActual->dato5 == 1)
								<img src="img/si.png" alt="">
							@else
								<img src="img/no.png" alt="">
							@endif</td>
						<td class="celdas2">
							@if($ballot->embarazoActual->dato6 == 1)
								<img src="img/si.png" alt="">
							@else
								<img src="img/no.png" alt="">
							@endif</td>
						<td class="celdas2">
							@if($ballot->embarazoActual->dato7 == 1)
								<img src="img/si.png" alt="">
							@else
								<img src="img/no.png" alt="">
							@endif</td>
						<td class="celdas2">
							@if($ballot->embarazoActual->dato8 == 1)
								<img src="img/si.png" alt="">
							@else
								<img src="img/no.png" alt="">
							@endif</td>
						<td class="celdas2">
							@if($ballot->embarazoActual->dato9 == 1)
								<img src="img/si.png" alt="">
							@else
								<img src="img/no.png" alt="">
							@endif</td>
						<td class="celdas2">
							@if($ballot->embarazoActual->dato10 == 1)
								<img src="img/si.png" alt="">
							@else
								<img src="img/no.png" alt="">
							@endif</td>
						<td class="celdas2">
							@if($ballot->embarazoActual->dato11 == 1)
								<img src="img/si.png" alt="">
							@else
								<img src="img/no.png" alt="">
							@endif</td>
						<td class="celdas2">
							@if($ballot->embarazoActual->dato12 == 1)
								<img src="img/si.png" alt="">
							@else
								<img src="img/no.png" alt="">
							@endif</td>

						<!-- Columna 3 -->
						<td class="celdas">
							@if($ballot->historiaClinica->dato1 == 1)
								<img src="img/si.png" alt="">
							@else
								<img src="img/no.png" alt="">
							@endif</td>
						<td class="celdas">
							@if($ballot->historiaClinica->dato2 == 1)
								<img src="img/si.png" alt="">
							@else
								<img src="img/no.png" alt="">
							@endif</td>
						<td class="celdas">
							@if($ballot->historiaClinica->dato3 == 1)
								<img src="img/si.png" alt="">
							@else
								<img src="img/no.png" alt="">
							@endif</td>
						<td class="celdas">
							@if($ballot->historiaClinica->dato4 == 1)
								<img src="img/si.png" alt="">
							@else
								<img src="img/no.png" alt="">
							@endif</td>
						<td class="celdas">
							@if($ballot->historiaClinica->dato5 == 1)
								<img src="img/si.png" alt="">
							@else
								<img src="img/no.png" alt="">
							@endif</td>
						<td class="celdas">
							@if($ballot->historiaClinica->dato6 == 1)
								<img src="img/si.png" alt="">
							@else
								<img src="img/no.png" alt="">
							@endif</td>
					</tr>
				@endforeach
			@endforeach
		</tbody>
	</table>
</body>
</html>
