@extends('layouts.app')
@section('content')

<div class="jumbotron" id="servicios-jumbotron">

	<div class="container">
		<h1><b>Somos mAppu</b></h1> <br>
		<!-- Colocar imagen encabezado araucarias y agregar textos del word. agregar menu navegación interna landing page-->
		<img src="images/valle-1.jpg" class="img-fluid" alt="araucarias">
		<br>

		<div class="col-sm-12 col-md-12">
			<div class="thumbnail">
				<!-- <h3>Desarrollo de Aplicaciones móviles</h3> -->
				<div class="caption">
					<br>
					<p>
						mAppu es una empresa local de la región de La Araucanía, que busca instaurarse como un referente en el desarrollado de aplicaciones móviles. No obstante, deseamos que nuestras aplicaciones se conviertan en verdaderas herramientas al servicio de nuestra comunidad, potenciando emprendimientos, generando redes e invitando a innovar.
						<br><br><br><br>
					</p>
				</div>
				<div class="contactanos" align="right">
					<!-- <button class="form-control navbar-toggler" data-toggle="collapse" data-target="#">
						Ver más
					</button> -->
				</div>
			</div>
		</div>
		<br>

		<h1><b>Visión</b></h1> <br>
		<div class="col-sm-12 col-md-12">
			<div class="thumbnail">
				<div class="caption">
					<br>
					<p>
					Convertirnos en una empresa referente del desarrollo de aplicaciones móviles, que prestan servicios innovadores y de alto impacto a la comunidad.
						<br><br><br><br>
					</p>
				</div>
				<div class="contactanos" align="right">
					<!-- <button class="form-control navbar-toggler" data-toggle="collapse" data-target="#">
						Ver más
					</button> -->
				</div>
			</div>
		</div>
		<br />

		<h1><b>Misión</b></h1> <br>
		<div class="col-sm-12 col-md-12">
			<div class="thumbnail">

				<div class="caption">
					<br>
					<p>
					Desarrollar aplicaciones móviles y herramientas informáticas de alto impacto social, resguardado altos niveles de eficiencia, calidad y simpleza.
						<br><br><br><br>
					</p>
				</div>
				<div class="contactanos" align="right">
					<!-- <button class="form-control navbar-toggler" data-toggle="collapse" data-target="#">
						Ver más
					</button> -->
				</div>
			</div>
		</div>
		<br />

		<h1><b>Valores</b></h1> <br>
		<div class="col-sm-12 col-md-12">
			<div class="thumbnail">

				<div class="caption">
					<br>
					<p>
						•	Innovación.
						<br />
						•	Compromiso social.
						<br />
						•	Simplicidad.
						<br />
						•	Respeto a la diversidad individual de las personas y de los pueblos.
						<br />
						•	Probidad.

						<br><br><br><br>
					</p>
				</div>
				<div class="contactanos" align="right">
				<!-- <button class="form-control navbar-toggler" data-toggle="collapse" data-target="#">
					Ver más
				</button> -->
				</div>
			</div>
		</div>
		<br />

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
