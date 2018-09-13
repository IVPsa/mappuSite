@extends('layouts.app')
@section('content')

<div class="jumbotron" id="servicios-jumbotron">
	<div class="container" id="appsmappu-container">
		<h1><b>Aplicaciones mAppu</b></h1>
		<img class="img-fluid" src="images/asesoría-smart.jpg" alt="imagen asesoria">

		<ul class="nav nav-pills nav-fill" id="myTab" role="tablist">
			<li class="nav-item">
				<a class="nav-link active" id="home-tab" data-toggle="tab" href="#playstore" role="tab">Oficina Móvil</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="profile-tab" data-toggle="tab" href="#appstore" role="tab">Aplicaciones mAppu</a>
			</li>
		</ul>
		<div class="tab-content" id="tab-apps-mappu">
			<div class="tab-pane active text-center" id="playstore" role="tabpanel" align="center">
				<!--imagen del modal misma y pegar contenido del word dos columnas 1 imagen y otra texto-->
			</div>
			<div class="tab-pane" align="center" id="appstore" role="tabpanel">
				<!--imagen del modal misma y pegar contenido del word dos columnas 1 imagen y otra texto-->
			</div>
		</div>

		<br>
		<div class="publicidad">
			<div class="row">
				<div class="col-md-6">
					<h4>Tú podrias potenciar tu negocio</h4>
					<p>Atrévete a innovar con nosotros</p>
				</div>

				<div class="col-md-6">
					<form>
						<label>¿Deseas estar al tanto de nuestras novedades?</label>
						<div class="form-row align-items-right">
							<div class="row flex-items-xs-middle flex-items-xs-between" align="right">
								<div class="col-md-7">
									<input type="text" class="form-control" name="email" placeholder="mail@ejemplo.com">
								</div>
								<div class="col-md-5">
									<input type="submit" class="form-control" value="Suscribirme">
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>

		<br>
		<div class="contactanos" align="right">
			<a href="{{route('contacto')}}"><button type="button" class="form-control">Contáctanos</button></a>
		</div>


	</div>
</div>

@endsection
