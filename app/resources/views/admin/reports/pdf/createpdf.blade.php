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
						<div>
							@if( $request->type == 0 )
								{{trans('fields.' . $request->field)}}
							@elseif( $request->type == 1)
								{{trans('fields.' . $request->field . 'A')}}
							@elseif( $request->type == 2)
								{{trans('fields.' . $request->field . 'B')}}
							@elseif( $request->type == 3)
								{{trans('fields.' . $request->field . 'C')}}
							@endif

							@if( !empty($request->condicion) and $request->type == 0)
								{{ trans('fields.' . $request->condicion) }}
								{{ $request->number }}
							@endif

							@if( !empty($request->fecha_inicio) and !empty($request->fecha_fin))
								del {{ date("d/m/Y", strtotime($request->fecha_inicio)) }}
								al {{ date("d/m/Y", strtotime($request->fecha_fin)) }}
							@endif

							@if( !empty($request->actualCenter) )
										<strong> {{ $request->actualCenter }}</strong>
							@endif
					</div>
					<div>
						<strong>Numero total de pacientes en el reporte: {{ $request->num }}</strong>
					</div>
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
				<th class="C7">Fecha Registro</th>
				<th class="C1">No. de Registro</th>
				<th class="C2">DAS</th>
				<th class="C2">Municipio</th>
				<th class="C3">Nombre Paciente</th>
				<th class="C4">Edad</th>
				<th class="C5">Pueblo</th>
				<th class="C6">CSC</th>
				<th class="C7">FUR</th>
				<th class="C7">FPP</th>
			</tr>
		</thead>
		<tbody>
			@foreach($dataBallots as  $centro => $paciente)
				@foreach($paciente as $key => $ballot)
					<tr>
						<td>{{ date("d/m/Y", strtotime($ballot->conclusion->fecha)) }}</td>
						<td>{{ $ballot->no_registro }}</td>
						<td>{{ $centro }}</td>
						<td>{{ $ballot->municipio }}</td>
						<td>{{ $ballot->nombre_paciente }}</td>
						<td>{{ $ballot->edad_paciente }} Años</td>
						<td>{{ $ballot->pueblo_paciente }}</td>
						<td>{{ $ballot->distancia_se_si_cercana }} Km.</td>
						<td class="center">{{ date("d/m/Y", strtotime($ballot->fecha_ultima_regla)) }}</td>
						<td class="center">{{ date("d/m/Y", strtotime($ballot->fecha_probable_parto)) }}</td>
					</tr>
				@endforeach
			@endforeach
			<tr></tr>
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
			@foreach($dataBallots as $center => $paciente)
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
			<tr></tr>
		</tbody>
	</table>
</body>
</html>
