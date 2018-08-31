@extends('layouts.app')
@section('content')

<div class="jumbotron" id="servicios-jumbotron">
	<div class="container">
		<h1><b>Desarrollo de aplicaciones</b></h1>
		

		<div class="contactanos" align="right">
			<a href="{{route('contacto')}}"><button type="button" class="form-control">Contáctanos</button></a>
		</div>

		<br />
		<h1><b>NUESTROS CLIENTES</b></h1>
		<br />

		<div class="separador"></div>
		<div class="container">

			<div class="row">

				<div class="col-md-2 col-xs-12">
					<div style="margin:15px 15px 15px 15px ;">

						<img src="images/pc.png" class="img-fluid" id="escalGrises" alt="">
						<h2 class="textoNombres"><b>Nombre</b></h2>
						<p class="text-justify">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
						</p>
						<button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#clienteLayout" name="button">VER CLIENTE</button>
					</div>
				</div>

				<div class="col-md-2 col-xs-12">
					<div style="margin:15px 15px 15px 15px ;">

						<img src="images/pc.png" class="img-fluid" id="escalGrises" alt="">
						<h2 class="textoNombres"><b>Nombre</b></h2>
						<p class="text-justify">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
						</p>
						<button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#clienteLayout" name="button">VER CLIENTE</button>
					</div>
				</div>

				<div class="col-md-2 col-xs-12">
					<div style="margin:15px 15px 15px 15px ;">

						<img src="images/pc.png" class="img-fluid" id="escalGrises" alt="">
						<h2 class="textoNombres"><b>Nombre</b></h2>
						<p class="text-justify">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
						</p>
						<button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#clienteLayout" name="button">VER CLIENTE</button>
					</div>
				</div>

				<div class="col-md-2 col-xs-12">
					<div style="margin:15px 15px 15px 15px ;">

						<img src="images/pc.png" class="img-fluid" id="escalGrises" alt="">
						<h2 class="textoNombres"><b>Nombre</b></h2>
						<p class="text-justify">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
						</p>
						<button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#clienteLayout" name="button">VER CLIENTE</button>
					</div>
				</div>

				<div class="col-md-2 col-xs-12">
					<div style="margin:15px 15px 15px 15px ;">

						<img src="images/pc.png" class="img-fluid" id="escalGrises" alt="">
						<h2 class="textoNombres"><b>Nombre</b></h2>
						<p class="text-justify">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
						</p>
						<button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#clienteLayout" name="button">VER CLIENTE</button>
					</div>
				</div>

				<div class="col-md-2 col-xs-12">
					<div style="margin:15px 15px 15px 15px ;">

						<img src="images/pc.png" class="img-fluid" id="escalGrises" alt="">
						<h2 class="textoNombres"><b>Nombre</b></h2>

						<p class="text-justify">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
						</p>
						<button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#clienteLayout" name="button">VER CLIENTE</button>
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
</div>
</div>
@include('modals.clienteLayout')
@endsection
