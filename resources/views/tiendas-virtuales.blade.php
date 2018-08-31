@extends('layouts.app')
@section('content')

<div class="jumbotron" id="servicios-jumbotron">
	<div class="container" id="appsmappu-container">
		<h1><b>Desarrollo de tiendas Virtuales</b></h1>
		<img class="img-fluid" src="images/apps-mappu.jpg" alt="imagen asesoria">

		<ul class="nav nav-pills nav-fill" id="myTab" role="tablist">
			<li class="nav-item">
				<a class="nav-link active" id="info" data-toggle="tab" href="#playstore" role="tab">Información</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#descripcion" role="tab">Descripción del servicio</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#ofertas" role="tab">Paquetes y ofertas</a>
			</li>
		</ul>
		<div class="tab-content" id="tab-apps-mappu">
			<div class="tab-pane active text-center" id="info" role="tabpanel" align="center">

			</div>

			<div class="tab-pane" align="center" id="descripcion" role="tabpanel">

			</div>

			<div class="tab-pane" align="center" id="ofertas" role="tabpanel">

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
