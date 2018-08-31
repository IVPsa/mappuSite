<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contacto;
use App\MotivoContacto;

use Snowfire\Beautymail\Beautymail;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
	public function beautifulMail(Request $request)
	{

		$nombres = $request->input('nombres');
		$email = $request->input('email');
		$telefono = $request->input('telefono');
		$mensaje = $request->input('mensaje');
		$selector = $request->input('selector-persona');
		$direccion = $request->input('direccion');
		$sitioWeb = $request->input('sitio-web');
		$tipoRespuesta = $request->input('opcion-respuesta');
		$beautymail = app()->make(\Snowfire\Beautymail\Beautymail::class);		
		$beautymail->send('emails.contacto', [
			'tipoRespuesta' => $tipoRespuesta,
			'nombres' => $nombres,
			'email' => $email,
			'telefono' => $telefono,
			'mensaje' => $mensaje,
			'direccion' => $direccion,
			'sitioWeb' => $sitioWeb,
			'selector' => $selector], 

			function($message)
			{
				$message			
				->from('hola@mappu.cl')
				->to('riquelme.nan@gmail.com')
				->to('hola@mappu.cl')
				->subject('Contacto mAppu');
			});

		return redirect('/')->with('success', 'Mensaje enviado, nos comunicaremos con ud a la brevedad');
	}


	public function enviarMailPersona(Request $request)
	{
		$nombres = $request->input('nombres');
		$email = $request->input('email');
		$telefono = $request->input('telefono');
		$mensaje = $request->input('mensaje');
		$selector = $request->input('selector-persona');
		$direccion = $request->input('direccion');
		$sitioWeb = $request->input('sitio-web');
		$tipoRespuesta = $request->input('opcion-respuesta');

		Mail::send('emails.send',[
			'tipoRespuesta' => $tipoRespuesta,
			'nombres' => $nombres,
			'email' => $email,
			'telefono' => $telefono,
			'mensaje' => $mensaje,
			'direccion' => $direccion,
			'sitioWeb' => $sitioWeb,
			'selector' => $selector],
			function ($mensaje)
			{
				$mensaje->from('postmaster@mg.mappu.cl', 'Hola mAppu');
				$mensaje->to('hriquelme@outlook.com');
				$mensaje->subject('Formulario Contacto Personas');
				$mensaje->cc('riquelme.nan@gmail.com');
			});
		return redirect('/')->with('success', 'Mensaje enviado, nos comunicaremos con ud a la brevedad');
	}


	public function enviarMailEmpresa(Request $request)
	{
		$nombres = $request->input('nombres');
		$email = $request->input('email');
		$telefono = $request->input('telefono');
		$mensaje = $request->input('mensaje');
		$selector = $request->input('selector-empresa');
		$direccion = $request->input('direccion');
		$sitioWeb = $request->input('sitio-web');
		$tipoRespuesta = $request->input('opcion-respuesta');

		Mail::send('emails.send',[
			'tipoRespuesta' => $tipoRespuesta,
			'nombres' => $nombres,
			'email' => $email,
			'telefono' => $telefono,
			'mensaje' => $mensaje,
			'direccion' => $direccion,
			'sitioWeb' => $sitioWeb,
			'selector' => $selector],
			function ($mensaje)
			{
				$mensaje->from('postmaster@mg.mappu.cl', 'Hola mAppu');
				$mensaje->to('hriquelme@outlook.com');
				$mensaje->subject('Formulario Contacto Empresas');
				$mensaje->cc('riquelme.nan@gmail.com');
			});
		return redirect('/')->with('success', 'Mensaje enviado, nos comunicaremos con ud a la brevedad');
	}
}