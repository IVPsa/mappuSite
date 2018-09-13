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
			<div class="tab-pane active text-center" id="playstore" role="tabpanel" align="center">
				<br>
				<h3>E-Commerce el mercado del hoy.</h3>
				<p class="text-justify">



					El e-commerce o comercio electrónico, es una realidad ya instaurada en nuestro país, gracias al fuerte uso del internet por parte de los chilenos, mientras que el comercio tradicional cada día se vuelve más y más competitivo, debido al gran terreno perdido frente a comercios informales, que al tener bajos costos administrativos (arriendo, patentes, servicios básicos) arrasan con estrategias de precios bajos.

					Un cambio importante que se ha generado gracias a la influencia del internet en el mercado, es que hoy los consumidores y en especial las nuevas generaciones, se informan mucho más antes de comprar, en consecuencia, son más exigentes con sus gustos y necesidades, desterrando el precio del primer lugar de los factores decisivos al momento de concretar una compra.
				</p>
				<p class="text-justify">	Campañas de lanzamiento online: en conjunto a tu estrategia comercial y a tu plan de contenidos, desarrollamos y ponemos en marcha un plan de lanzamiento para su empresa, con las principales ofertas o promociones, en los diversos canales online.</p>
				<br>
					<h3>7 Ventajas de las tiendas virtuales.</h3>

				Sin perder de vista el horizonte comentado anteriormente, te presentamos siete buenas razones para incorporar una tienda virtual a tu negocio.

				<ul class="text-justify">
					<li>1.<b>	Acceso a un mercado mucho más grande:</b><br />
						si tu producto es específico para cierto nicho del mercado y/o no está sujeto a barreas geográficas; una tienda virtual te permitirá llegar a cada potencial cliente que realice una búsqueda por internet.</li>
						<br>
						<li>2.	<b>Bajos costos operacionales:</b><br /> para operar tu tienda virtual, solo necesitas un dispositivo con acceso a internet, pagar una pequeña anualidad para mantener tu sitio en línea.</li>
						<br>
						<li>3.	<b>Atención 24/7:</b><br /> una gran ventaja de las tiendas virtuales es que no tienen horario de trabajo, días libres o festivos; 24 horas al día, los 7 días de la semana, los 365 días del año, listo para vender.</li>
						<br>
						<li>4.	<b>Vitrinas ordenadas y específicas:</b><br /> ordena, clasifica y realza tus productos. Gracias a los sistemas de búsquedas inteligentes incorporados en los catálogos virtuales, permite a tus clientes llegar rápidamente al producto deseado, visualizar alternativas. Y una vez allí cautívalos con las mágicas cualidades de tus productos.</li>
						<br>
						<li>5.	<b>Control de stock y despacho:</b><br /> nuevamente la tecnología nos da una mano con nuestro negocio, lleva un registro en tiempo real del stock de tus productos, y nunca olvides a donde debes enviarlo.</li>
						<br>
						<li>6.	<b>Registro de ventas:</b><br /> como empresario es importante conocer los números de nuestro negocio, lo que no siempre resulta fácil cuando nos diluimos con la operación directa o el día a día de nuestras vidas, no obstante, para nuestra tienda virtual este es un proceso automático registrado en cada operación.</li>
						<br>
						<li>7.	<b>Conocer a nuestro público:</b><br /> puede que no te hayas detenido a pensar que la mayor ventaja de una tienda virtual es su registro histórico de ventas, y cuando hablamos de esto no nos referimos a que producto tuvo mayor éxito, si no a la base misma de los intereses de nuestros clientes, con el levantamiento de esta información, puedes crear campañas publicitarias que enamoren a tus compradores y direccionar oportunamente tu negocio frente a los cambios del mercado.</li>
						<br>
					</ul>

			</div>

			<div class="tab-pane" align="left" id="descripcion" role="tabpanel">
				<br>
				<h3>mAppu te ofrece:</h3>
				<lu>
					<li>
						<b>Campañas de lanzamiento online:</b><br /> en conjunto a tu estrategia comercial y a tu plan de contenidos, desarrollamos y ponemos en marcha un plan de lanzamiento para su empresa, con las principales ofertas o promociones, en los diversos canales online.
					</li>
					<br>
					<li>
						<b>Dominio y hosting:</b><br /> incluimos todo lo necesario para poner tu sitio web en línea y al alcance de tus clientes.
					</li>
					<br>
					<li>
						<b>Asesoría comercial:</b><br /> Nuestro equipo de ingeniería te ayudara a enfocar tu negocio, colaborativamente determinaremos el target de tu producto, y lo que este necesita para entregarse al mercado.
					</li>
					<br>
					<li>
						<b>Desarrollo web:</b><br /> construimos el portal web que represente a tu marca, a través de un proceso de generación conjunta de ideas e intereses.
					</li>
					<br>
					<li>
						<b>Desarrollo de estrategias de contenido:</b><br /> Fideliza a tus clientes, has que se sientan parte de tu negocio, nuestros profesionales te ayudaran a crear aquel contenido que enamore a tus clientes.
					</li>
					<br>
					<li>
						<b>Soporte:</b><br /> según nuestro amigo Murphy “Si algo malo puede pasar, pasará” para esos casos cuenta con nosotros, para resolver tus problemas o simplemente para resolver alguna duda.
					</li>
				</lu>

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
