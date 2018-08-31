@extends('layouts.app')
@section('content')

<div class="jumbotron" id="servicios-jumbotron">

	<div class="container">
		<h1><b>Somos mAppu</b></h1> <br>
		<!-- Colocar imagen encabezado araucarias y agregar textos del word. agregar menu navegación interna landing page-->
		<img src="images/valle-1.jpg" class="img-fluid" alt="araucarias">
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
