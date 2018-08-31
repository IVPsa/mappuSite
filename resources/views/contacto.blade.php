@extends('layouts.app')
@section('content')

<div class="body-contacto">
  <div class="main-agileits">
    <div class="mainw3-agileinfo form">
      <div class="contact-w3lsleft">
        <div class="contact-grid agileits">
          <h3 align="center">Contáctate con nosotros</h3>
          <div class="radio-select">
            <input type="radio" name="opcion-contacto" id="persona"> 
            <label for="persona">Soy persona</label>
            <input type="radio" name="opcion-contacto" id="empresa">
            <label for="empresa">Soy empresa</label>
          </div>
          <!-- Agregar opcion de presupuesto (input con mascara de $)opcional que se active con desarrollos -->
          <form id="form-persona" method="post" action="{{ route('beautifulMail') }}">
            {{ csrf_field() }}
            <select name="selector-persona" required>
              <option value="" selected>Motivo de consulta</option>
              <option value="Desarrollo de sitios web">Desarrollo de sitios web</option>
              <option value="Desarrollo de tienda virtual">Desarrollo de tienda virtual</option>
              <option value="Servicio de marketing digital">Servicio de marketing digital</option>
              <option value="Desarrollo de aplicaciones">Desarrollo de aplicaciones</option>
              <option value="Tengo una idea de App">Tengo una idea de App</option>
              <option value="Busco Trabajo">Busco Trabajo</option>
              <option value="Tengo una opinión">Tengo una opinión</option>
            </select>
            <input type="text" name="nombres" placeholder="Nombres y Apellidos" required="">
            <input type="text" class="w3ls-no" name="telefono" placeholder="Teléfono" required="">
            <input type="text" class="w3ls-no" name="direccion" placeholder="Dirección (Opcional)">
            <input type="text" class="w3ls-no" name="sitio-web" placeholder="Página web (Opcional)">
            <input type="email" name="email" placeholder="Email" required="">
            <textarea name="mensaje" placeholder="Mensaje" required=""></textarea>

            <div class="radio-select">
              <p>Tipo de respuesta</p>
              <input type="radio" name="opcion-respuesta" id="res-correo" checked value="Correo"> 
              <label for="res-correo">Correo</label>
              <input type="radio" name="opcion-respuesta" id="res-llamada" value="Llamada"> 
              <label for="res-llamada">Llamada</label>
              <input type="radio" name="opcion-respuesta" id="res-ambos" value="Correo y llamada"> 
              <label for="res-ambos">Ambos</label>
            </div>

            <input type="submit" value="Enviar">
          </form>

          <form id="form-empresa" method="post" action="{{ route('enviar.contacto.empresa') }}">
            {{ csrf_field() }}
            <select name="selector-empresa" required>
              <option value="" selected>Motivo de consulta</option>
              <option value="Desarrollo de sitios web">Desarrollo de sitios web</option>
              <option value="Desarrollo de tienda virtual">Desarrollo de tienda virtual</option>
              <option value="Servicio de marketing digital">Servicio de marketing digital</option>
              <option value="Desarrollo de aplicaciones">Desarrollo de aplicaciones</option>
              <option value="Tengo una idea de App">Tengo una idea de App</option>
              <option value="Tengo una opinión">Tengo una opinión</option>
            </select>
            <input type="text" name="nombres" placeholder="Razón social" required="">
            <input type="text" class="w3ls-no" name="telefono" placeholder="Teléfono" required="">
            <input type="text" class="w3ls-no" name="direccion" placeholder="Dirección (Opcional)">
            <input type="text" class="w3ls-no" name="sitio-web" placeholder="Página web (Opcional)">
            <input type="email" name="email" placeholder="Email" required="">
            <textarea name="mensaje" placeholder="Mensaje" required=""></textarea>

            <div class="radio-select">
              <p>Tipo de respuesta</p>
              <input type="radio" name="opcion-respuesta" id="res-correo" checked value="Correo"> 
              <label for="res-correo">Correo</label>
              <input type="radio" name="opcion-respuesta" id="res-llamada" value="Llamada"> 
              <label for="res-llamada">Llamada</label>
              <input type="radio" name="opcion-respuesta" id="res-ambos" value="Correo y llamada"> 
              <label for="res-ambos">Ambos</label>
            </div>

            <input type="submit" value="Enviar">
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
