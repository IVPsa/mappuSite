@extends('beautymail::templates.minty')

@section('content')

@include('beautymail::templates.minty.contentStart')
<tr>
	<td class="title">
		Bienvenid@ a mAppu
	</td>	
</tr>
<tr>
	<td>Motivo: {{$selector}}</td>
</tr>
<tr>
	<td>Tipo de respuesta: {{$tipoRespuesta}}</td>
</tr>

<table>
	<tr>
		<td>Nombres:</td>
		<td>{{$nombres}}</td>
	</tr>
	<tr>
		<td>Email:</td>
		<td>{{$email}}</td>
	</tr>
	<tr>
		<td>Teléfono:</td>
		<td>{{$telefono}}</td>
	</tr>
	<tr>
		<td>Mensaje:</td>
		<td>{{$mensaje}}</td>
	</tr>
	<tr>
		<td>Sito web:</td>
		<td>{{$sitioWeb}}</td>
	</tr>
	<tr>
		<td>Dirección:</td>
		<td>{{$direccion}}</td>
	</tr>
</table>

@include('beautymail::templates.minty.contentEnd')

@stop