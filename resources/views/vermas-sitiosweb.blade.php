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
			<!-- <li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#ofertas" role="tab">Paquetes y ofertas</a>
			</li> -->
		</ul>
		<div class="tab-content" id="tab-apps-mappu">
			<div class="tab-pane active text-center" id="playstore" role="tabpanel">
				<br />
				<div style="margin:15px 15px 15px 15px;">
					<h3>¿Qué es un sitio web?</h3>
					<p class="text-justify">
						Un sitio web, portal o cibersitio es una colección de páginas web, relacionadas y comunes a un dominio o subdominio en la World Wide Web (www) dentro de Internet.

						En general, Un sitio web es el conjunto de archivos o documentos electrónicos, organizados en una o más páginas web típicamente orientados a un tema en particular o a un propósito específico.
					</p>

					<h3>¿Por qué un sitio web potenciara mi negocio?</h3>
					<p class="text-justify">
						A partir del 2007, con la aparición del primer Smartphone (El Iphone), los dispositivos móviles se han convertido prácticamente, en un elemento de primera necesidad, y con ellos el acceso a internet. En 2017 el 71.7% de los chilenos contaba con acceso a internet en un 94% en primera instancia gracias a estos dispositivos (estudio de penetración del Smartphone en el mercado latinoamericano, realizado por IMS 2017). En base a lo anterior, te planteamos 5 razones por las cuales un sitio web bien construido potencia tu negocio:
						<ul>
							<li><b>Presencia en internet:</b><br /> como mencionábamos anteriormente, gran porcentaje de tus potenciales clientes tiene acceso a internet, y lo utilizara al momento de buscar Cómo suplir una necesidad. Además, el portal web, es la carta de presentación de tu empresa, permitiéndote competir y promocionar tu marca, sin importar el tamaño de tu negocio.</li>
							<br />
							<li><b>Atención 24/7: </b><br />una gran ventaja del sitio web, es que te permite tener una vitrina abierta a tus clientes, sin importar el día o a la hora en que estos realicen sus búsquedas.</li>
							<br />
							<li><b>Rompe las barreras geográficas:</b><br /> tu sitio web es la bandera de tu marca, que puede ser vista por tu cliente objetivo, sin importar la ciudad o región en la que ambos se encuentren.</li>
							<br />
							<li><b>Publicidad al alcance de tu bolsillo:</b><br /> los canales de búsqueda han cambiado gracias al internet, lo que antes se promocionaba en radio, periódico o televisión, hoy también se hace a través medios sociales digitales (Facebook, twitter, etc) y buscadores de internet (google, yahoo, etc.) en los cuales puedes publicar tus ofertas a muy bajo costo o simplemente gratis.</li>
							<br />
							<li><b>Fideliza a tus clientes:</b><br /> con tanta competencia entregando el mismo producto, los consumidores ya no se dejan llevar directamente por el precio, sino por su valor agregado, lo que para ellos es importante y que hace que se identifiquen con la marca. Tu sitio web es la herramienta perfecta para desarrollar una estrategia de contenido que enamore a tus clientes.</li>
							<br />
						</ul>
					</p>
				</div>
			</div>
			<div class="tab-pane" align="left" id="descripcion" role="tabpanel">
				<br />
				<div style="margin:15px 15px 15px 15px ;">
					<h3>mAppu te ofrece:</h3>
					<p class="text-justify">
						<ul>
							<li><b>Dominio y hosting:</b> <br>incluimos todo lo necesario para poner tu sitio web en línea y al alcance de tus clientes. </li>
							<br>
							<li><b>Asesoría comercial:</b><br> Nuestro equipo de ingeniería te ayudara a enfocar tu negocio, colaborativamente determinaremos el target de tu producto, y lo que este necesita para entregarse al mercado.</li>
							<br>
							<li><b>Desarrollo web:</b><br> construimos el portal web que represente a tu marca, a través de un proceso de generación conjunta de ideas e intereses.</li>
							<br>
							<li><b>Desarrollo de estrategias de contenido:</b><br> Fideliza a tus clientes, has que se sientan parte de tu negocio, nuestros profesionales te ayudaran a crear aquel contenido que enamore a tus clientes.</li>
							<br>
							<li><b>Soporte:</b><br> según nuestro amigo Murphy “Si algo malo puede pasar, pasará” para esos casos cuenta con nosotros, para resolver tus problemas o simplemente para resolver alguna duda.</li>
						</ul>
					</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container">

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
