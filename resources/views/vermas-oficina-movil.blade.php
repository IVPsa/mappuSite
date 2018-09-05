@extends('layouts.app')
@section('content')

<div class="jumbotron" id="servicios-jumbotron">

	<div class="container">
		<h1><b>Oficina móvil</b></h1> <br>

		<div class="row">
			<div class="col-xs-12 col-md-12">
				<img class="img-fluid" src="images/Aplicasiones-mAppu.jpg" />
			</div>

			<div class="col-md-12 col-xs-12">
				<div style="margin:15px 15px 15px 15px;">
					<h3>¿Qué es Oficina móvil?</h3>
					<p class="text-justify">
			Oficina móvil es una iniciativa, que busca potenciar el rendimiento de trabajadores auto-empleados, emprendimientos, pequeñas y medianas empresas; a través de un conjunto de aplicaciones, orientadas en la Administración, coordinación, control y dirección de los procesos desarrolladas al interior de cada negocio.
					</p>


				</div>

			</div>
      <div style="margin:15px 15px 15px 15px;">
        <h3>¿Qué esperamos lograr?</h3>
        <p class="text-justify">
          Esperamos poder brindar una mano de ayuda, a todos aquellos emprendedores que día tras día, trabajan duramente para levantar sus negocios, pero no cuentan de los recursos suficientes, para la adquisición de caros softwares empresariales, o que talvez, desconocen las potenciales ventajas de la tecnología puesta a su disposición.
Para esto, deseamos ofrecer alternativas gratuitas, simples y que por, sobre todo, puedan ser ejecutadas desde la comodidad de un dispositivo móvil.

        </p>
        <center>
          <img class="img-fluid" src="images/Aplicaciones-mAppu.png" alt="imagen asesoria">

        </center>

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
