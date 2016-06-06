<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Registros</title>
	<style type="text/css">
		.oculto
		{
			color: white;
		}
		.header {
			height: 50px;
			width: 100%;
		}
		.logo img {
			height: 90%;
			padding-left: 2px;
			padding-top: 2px;
			width: 90%;
		}
		.logo {
			display: inline-block;
			width: 25%;
		}
		.title {
			display: inline-block;
			width: 74%;
		}

		.title p {
			font-size: 1em;
			padding-left: 50px;
		}

		.boleta {
			font-size: 12px;
			height: 125px;
			width: 100%;
		}

		.boletaHeader {
			width: 100%;
		}
		.boletaTitle {
			display: inline-block;
			font-size: 16px;
			text-align: right;
			width: 70%;
		}
		.boletaTitle strong {
			padding-right: 35px;
		}
		.boletaNumero {
			display: inline-block;
			width: 29%;
		}
		.boletaNumero input {
			font-size:  8px;
			text-align: center;
			width: 75px;
		}
		.boletaBody {
			width: 100%;
		}
		.boletaBodyLeft {
			display: inline-block;
			font-size: 10px;
			width: 50%;
		}
		.boletaBodyRight {
			display: inline-block;
			font-size: 10px;
			width: 49%;
		}
		.label{
			display: inline-block;
			padding-top: 7px;
			width: 40%;
		}
		.input{
			display: inline-block;
			width: 59%;
		}

		.input input {
			text-align: center;
			border: none;
			border-bottom: solid 1px black;
			width: 200px;
		}
		.labelRight {
			display: inline-block;
			width: 50%;
		}
		.inputRight {
			display: inline-block;
			width: 49%;
		}
		.inputRight input {
			border: none;
			border-bottom: solid 1px black;
			font-size: 8px;
			text-align: center;
			width: 150px;
		}
		.divLeft {
			display: inline-block;
			width: 50%;
		}
		.divLeftx {
			display: inline-block;
			width: 49%;
		}
		.labelx {
			display: inline-block;
			width: 50%;
		}
		.inputx {
			display: inline-block;
			width: 49%;
		}
		.inputx input {
			border: none;
			border-bottom: solid 1px black;
			font-size: 8px;
			text-align: center;
			width: 63px;
		}
		.divR {
			padding-top: 3px;
		}

		.divR strong {
			padding-top: 2px;
		}
		.boletaFoother{
			font-size: 10px;
			width: 100%;
		}
		.boletaFoother input {
			width: 100%;
		}
		#label {
			display: inline-block;
			padding-top: 5px;
			width: 20%;
		}
		#area {
			display: inline-block;
			width: 77.3%;
		}
		.medicos {
			border: solid 1.3px black;
			margin-right: 18px;
			width: 100%;
		}
		.medicosTitle {
			background: #0074B7;
			border-bottom: solid 1.3px black;
			font-size: 14px;
			text-align: center;
			width: 99.95%;
		}
		.medicosBody {
			width: 100%;
		}
		.medicosBodyLeft {
			display: inline-block;
			font-size: 10px;
			width: 50%;
		}
		.medicosBodyRight {
			display: inline-block;
			font-size: 10px;
			padding-right: 2.8px;
			width:49%;
		}
		.medicLabel{
			display: inline-block;
			padding-top: 5px;
			width: 20%;
		}
		.medicLabel strong {
			padding-left: 5px;
		}
		.medicInput {
			display: inline-block;
			width: 79%;
		}
		.medicInput input {
			border: none;
			border-bottom: solid 1px black;
			width: 100%;
		}
		.medicosFoother {
			font-size : 10px;
			width: 100%;
		}
		.fox {
			display: inline-block;
			padding-top: 5px;
			width: 10%;
		}
		.fox strong {
			padding-left: 5px;
		}
		.foxx {
			display: inline-block;
			width: 89%;
		}
		.foxx input {
			border: none;
			width: 100%;
		}
		.blo {
			display: inline-block;
			font-size: 10px;
			width: 22%;
		}
		.bloLabel {
			display: inline-block;
			padding-top: 5px;
			width: 10;
		}
		.bloLabel strong {
			padding-left: 5px;
		}
		.bloInput {
			display: inline-block;
			width: 54%;
		}
		.bloInput input {
			text-align: center;
			width: 100%;
		}
		.elementBlo {
			font-size: 10px;
			width: 100%;
		}
		.elementBlo strong {
			font-size: 11px;
			padding-left: 5px;
		}
		.elementBlo input {
			border:none;
			border-bottom: 1px solid black;
			border-top: 1px solid black;
			padding-left: 5px;
			width: 100%;
		}
		.eleStron {
			padding-top: -10px;
		}
		.eleInt {
			padding-top: -10px;
		}
		.firmas{
			font-size: 10px;
			width: 100%;
		}
		.firmasLesf {
			display: inline-block;
			padding-top: 15px;
			text-align: center;
			width: 50%;
		}
		.firmasLesf input {
			border:none;
			border-bottom: solid 1px black;
			color: white;
			margin: 0 auto;
			width: 240px;
		}
		.firmasLesf p {
			margin-top: -3px;
		}

		.firmasRight {
			display: inline-block;
			padding-top: 15px;
			text-align: center;
			width: 49%;
		}
		.firmasRight input {
			border:none;
			border-bottom: solid 1px black;
			color: white;
			margin: 0 auto;
			width: 175px;
		}
		.firmasRight p {
			margin-top: -3px;
		}
		.firmaFoother{
			width: 100%;
		}

		.firmaFoother input
		{
			border:none;
			border-bottom: solid 1px black;
			color: white;
			width: 499px;
		}

		.boletaContra {
			padding-right: 16px;
			border: none;
			border-top-color: #ff0000;
			border-top-style: dashed;
			border-top-width:2px;
			widows: 100%;
		}
		.titleContra {
			text-align: center;
			width: 100%;
		}
		.correlativoContra {
			font-size: 10px;
			width: 100%;
		}
		.correlativoContraLeft {
			display: inline-block;
			margin-top: 6px;
			text-align: right;
			width: 80%;
		}
		.correlativoContraRight {
			display: inline-block;
			width: 19%;
		}
		.correlativoContraRight input {
			border:none;
			border-bottom: solid 1px black;
			font-size: 10px;
			width: 100%;
		}
		.bodyContra {
			width: 100%;
		}
		.leftBodyContra {
			display: inline-block;
			font-size: 10px;
			padding-bottom: 5px;
			width: 22%;
		}
		.rightBodyContra {
			display: inline-block;
			font-size: 10px;
			width: 77%;
		}
		.rightBodyContra input{
			border:none;
			border-bottom: 1px solid black;
			width: 100%;
		}
		.footherContraReferencia {
			padding-top: 15px;
			text-align: center;
		}
		.footherContraReferencia p{
			margin-top: -2px;
		}
		.firmasRightDos {
			padding-top: 10px;
		}
		.firmasLesfDos {
			padding-top: 10px;
		}
		.bodyContra {
			width: 100%;
		}
		.trileft {
			display: inline-block;
			width: 55%;
		}
		.tricenter {
			display: inline-block;
			width: 22%;
		}
		.triright {
			display: inline-block;
			width: 21%;
		}
		.rightBodyContraDos {
			width: 60%;
		}
		.leftBodyContraDos {
			margin-top: 5px;
			width: 40%;
		}
		.tricenter {
			font-size: 10px;
		}
		.tricenter input {
			border:none;
			border-bottom: 1px black solid;
			text-align: center;
		}
		.triright {
			font-size: 10px;
		}
		.triright input {
			width: 79%;
			border:none;
			border-bottom: 1px black solid;
			text-align: center;
		}
	</style>
</head>
<body>
@include('admin.boletas.pdf.partials.header')
<div class="boleta">
@include('admin.boletas.pdf.partials.personales')
<!------------------------------>
<br>
@include('admin.boletas.pdf.partials.complementarios')
<!---------------------------------->
<!---------------------------------->
</div>
<br><br><br><br><br><br><br><br><br><br><br><br>
@include('admin.boletas.pdf.partials.obstetricos')
<br>
@include('admin.boletas.pdf.partials.embarazo')
<br>
@include('admin.boletas.pdf.partials.historial')
<br/>
@include('admin.boletas.pdf.partials.conclusion')


</body>
</html>
