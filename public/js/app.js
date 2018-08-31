// funcion que cambia form de contacto segun radio button
$(document).ready(function() {
  // se programa un click al cargar página
  $("#persona").click();
  $('#form-empresa').hide();
  // se muestra form persona y se oculta form empresa
  $( "#persona" ).on( "click", function() {
    $('#form-persona').show();
    $('#form-empresa').hide();
  });
  // se muestra form empresa y se oculta form persona
  $( "#empresa" ).on( "click", function() {
    $('#form-persona').hide();
    $('#form-empresa').show();
  });

  //FUNCION JQUERY QUE CAMBIA BOTON MAPPU POR MENU HAMBURGUESA, SOLO DISPONIBLE PARA PANTALLAS ANCHAS
  function cambiarMenu(ev)
  {
    var $img = $(this).find('img');
    $img.attr('src', ev.data.src);
  }
  $("#menuToggle")
  .on('mouseover', { src: 'images/menu.png'}, cambiarMenu)
  .on('mouseout', { src: 'images/boton-mappu.svg'}, cambiarMenu)
// al hacer hover se activa un click para mostrar menu despegable
  $("#menuToggle").on({
    mouseover: function(){
      $("#boton-mappu").click();
    },
    mouseout: function(){
      cambiarMenu;
    }
  });

});
