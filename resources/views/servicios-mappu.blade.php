@extends('layouts.app')
@section('content')

<div class="jumbotron" id="servicios-jumbotron">

	<div class="container">
		<h1><b>Servicios mAppu</b></h1>
		<br>
		<img class="img-fluid" src="images/asesoria-smart.jpg" alt="imagen asesoria">
		<br>
		<div class="row titulos">
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<h3>Desarrollo de sitio web</h3>
					<div class="caption">
						<br>
						<p>Construimos tu sitio web en base a tus exigencias, Nuestro equipo profesional analizara tus necesidades brindándote la asesoría correspondiente, para que tu página web se convierta, en una potente herramienta al servicio de tu empresa.
						</p>
						<br><br>
					</div>
					<div class="contactanos" align="right">
						<a href="{{route('vermas.web')}}"><button class="form-control navbar-toggler">
							Ver más
						</button></a>
					</div>
				</div>
			</div>

			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<h3>Desarrollo de tiendas Virtuales</h3>
					<div class="caption">
						<br>
						<p>Comienza a vender online con tu tienda virtual, nuestro equipo de profesionales te ayudara a crear una potente estrategia comercial, y campañas de lanzamiento para tus productos.
							<br><br><br><br><br>
						</p>
					</div>
					<div class="contactanos" align="right">
						<a href="{{route('tiendas.virtuales')}}">
							<button class="form-control navbar-toggler">
								Ver más
							</button>
						</a>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<h3>Desarrollo de Aplicaciones móviles</h3>
					<div class="caption">
						<br>
						<p>Tienes un proyecto en mente, una Apps que potenciara tu negocio, nuestro equipo profesional te espera para desarrollar tu aplicación móvil, nativa en Android o multi-plataforma.
							<br><br><br><br>
						</p>
					</div>
					<div class="contactanos" align="right">
						<a href="{{route('vermas.aplicaciones-movil')}}">
							<button class="form-control navbar-toggler" >
								Ver más
							</button>
						</a>
					</div>
				</div>
			</div>
		</div>

		<div class="row titulos">
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<h3>Desarrollo de Aplicaciones Web</h3>
					<div class="caption">
						<p>
							<br>
							Necesitas una herramienta web que te ayude a organizar, vender, controlar, reportar, administrar o dirigir tu negocio, y que al mismo tiempo que te permita acceder desde tu ordenador, notebook, o dispositivos móviles.
							<br><br><br>
						</p>
					</div>
					<div class="contactanos" align="right">
						<a href="{{route('vermas.aplicaciones-web')}}">
							<button class="form-control navbar-toggler" >
								Ver más
							</button>
						</a>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<h3>Oficina móvil</h3>
					<div class="caption">
						<p>Porque sabemos que los tiempos han cambiado y con él, el cómo trabajamos, porque sabemos que tu Smartphone es más que solo un teléfono. En mAppu nos hemos propuesto el reto de llevar tu oficina a tu bolsillo, creando aplicaciones móviles gratuitas que te ayuden a administrar y potenciar tu negocio, desde la comodidad de tu bolsillo.</p>
					</div>

					<div class="contactanos" align="right">
						<a href="{{route('vermas.vermas-oficina-movil')}}">
							<button class="form-control navbar-toggler" >
								Ver más
							</button>
						</a>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<h3>Aplicaciones mAppu</h3>
					<div class="caption">
						<p>
							<br>
							En mAppu creemos que la tecnología debe estar al servicio de las personas, y que aún nos encontramos lejos de sacarle el máximo provechos a nuestros dispositivos móviles. te invitamos a soñar en aquella Apps que solucione tu vida, Dinos tu idea y nosotros la desarrollaremos para el mundo.
							<br><br>
						</p>
					</div>
					<div class="contactanos" align="right">
						<a href="{{route('vermas.vermas-aplicaciones-mAppu')}}">
							<button class="form-control navbar-toggler" >
								Ver más
							</button>
						</a>
					</div>
				</div>
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
