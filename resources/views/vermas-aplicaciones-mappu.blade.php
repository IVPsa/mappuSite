@extends('layouts.app')
@section('content')
<div class="jumbotron" id="servicios-jumbotron">

	<div class="container">
		<h1><b>Aplicaciones mAppu</b></h1> <br>

		<div class="row">
			<div class="col-xs-12 col-md-12">
				<img class="img-fluid" src="images/AppsAla Medida.jpg" />
			</div>

			<div class="col-md-12 col-xs-12">
				<div style="margin:15px 15px 15px 15px;">
					<!-- <h3>¿Qué es una  aplicacion movil Android?</h3> -->
					<p class="text-justify">
						Las grandes ideas no nacen de personas súper dotadas, sino de personas extraordinarias, que al enfrentarse a las dificultades vieron algo más que barreras, vieron oportunidades. Creemos que nuestra tierra está llena de personas extraordinarias. Personas trabajadoras, llenas de experiencia, que día tras día ven soluciones donde otros solo ven necesidades.

		Te invitamos brindarnos tus ideas, a crear en conjunto aplicaciones gratuitas, que simplifiquen labores, que conecten personas, que apoyen al proceso social, que ayuden a los vulnerables, que engrandezcan nuestra tierra.

		Búscanos en redes sociales, únete a nuestras campañas, expresa tus ideas y comparte tus ideales.

					</p>


				</div>
				<div style="margin:15px 15px 15px 15px;">
	        <h3>Dando vida a tus proyectos.</h3>
	        <p class="text-justify">
						Tras horas y horas de arduo trabajo, de seguro en más de alguna oportunidad, has fantaseado con lo fácil que sería, si esa labor se realizara de manera automatizada, por un programa en tu ordenador o por una aplicación móvil en tu teléfono.
 En mAppu te invitamos a soñar y fantasear con todas aquellas grandes ideas, que harán que tu negocio despegue. cuéntanos tus proyectos y nosotros a través de nuestro trabajo le daremos vida.


	        </p>
	        <center>
	          <img class="img-fluid" src="images/Aplicaciones-mAppu.png" alt="imagen asesoria">

	        </center>

	      </div>
				<div style="margin:15px 15px 15px 15px;">
					<h3>¿Por qué una Aplicación?</h3>
					<p class="text-justify">
						Las aplicaciones o Apps son herramientas informáticas desarrolladas para ayudar a los usuarios a realizar labores o tareas que en muchos casos resultas ser complejas, tediosas o requieren de mucho tiempo. Por lo tanto, una aplicación en tu negocio:

					</p>
					<center>
						<img class="img-fluid" src="images/Aplicaciones-mAppu.png" alt="imagen asesoria">

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
