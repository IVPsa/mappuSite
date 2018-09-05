@extends('layouts.app')
@section('content')
<div class="jumbotron" id="servicios-jumbotron">

	<div class="container">
		<h1><b>Aplicaciones móviles Android</b></h1> <br>

		<div class="row">
			<div class="col-xs-12 col-md-12">
				<img class="img-fluid" src="images/AppsAla Medida.jpg" />
			</div>

			<div class="col-md-12 col-xs-12">
				<div style="margin:15px 15px 15px 15px;">
					<h3>¿Qué es una  aplicacion movil Android?</h3>
					<p class="text-justify">
				Las aplicaciones móviles Android, son herramientas desarrolladas para ser ejecutadas en Smartphone o Tablet con sistema operativa Android, logrando así cabal uso de las funcionabilidades de tu deposito móvil.
					</p>
          <center>
            <img class="img-fluid" src="images/App-Android.png" alt="imagen asesoria">

          </center>

				</div>

			</div>



		</div>


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
