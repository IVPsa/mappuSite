<?php

use Illuminate\Database\Seeder;

class MotivoContactoTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    App\MotivoContacto::create([ 'descripcion' => 'Servicio de Asesoria Smart']);
    App\MotivoContacto::create([ 'descripcion' => 'Servicio de Asesoria Smart']);
    App\MotivoContacto::create([ 'descripcion' => 'Desarrollo de App y páginas web']);
    App\MotivoContacto::create([ 'descripcion' => 'Tengo una idea de App']);
    App\MotivoContacto::create([ 'descripcion' => 'Busco Trabajo']);
    App\MotivoContacto::create([ 'descripcion' => 'Tengo una crítica']);

  }
}
