<!-- Modal -->
<div class="modal fade" id="slide3" role="dialog" >
  <div class="modal-dialog modal-lg" >
    <div class="modal-content"style="background-color:#017989">
      <div class="modal-body"style="height:435px;">
        <!-- agregar boton cerrar-->
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3>Aplicaciones mAppu</h3>
        <br>
        <div class="row" align="center">
          <div class="col-xs-4 col-md-4">
            <img src="images/nosotros.png"  class="img-fluid" />
          </div>

          <div class="col-xs-4 col-md-4" >
            <div id="cajas">
              <img src="images/appsalamedida.png" height="60%" width="60%" class="img-responsive" />
              <p id="textoParrafos">Tu oficina en tus manos</p>
            </div>
          </div>

          <div class="col-xs-4 col-md-4" >
            <div id="cajas">
              <img src="images/pensando.png" height="50%" width="50%" class="img-responsive" />
              <p id="textoParrafos">Desarrollando tus ideas</p>
            </div>
          </div>
        </div>

        <div align="center" style="margin-top:-25px;">
          <a href="{{route('apps.mappu')}}"><input type="button" class="verMas"value="Ver más"></a>
        </div>

      </div>
    </div>
  </div>
</div>
