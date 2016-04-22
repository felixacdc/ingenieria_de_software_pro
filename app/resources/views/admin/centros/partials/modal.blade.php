<div class="modal fade" tabindex="-1" role="dialog" id="editModal" aria-labelledby="editModallLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<<<<<<< HEAD
        <h4 class="modal-title">Actualizar Centro</h4>
      </div>
      <div class="modal-body">
          <form id="editForm" action="" method="PUT">

              <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">

              @include('admin.centros.partials.inputsForm')
              
              <div class="modal-footer">
                  {!!Form::submit('Editar', array('class' => 'btn btn-primary'))!!}
                  <button type="button" class="btn btn-danger" data-dismiss="modal">cerrar</button>
              </div>
          </form>
=======
        <h3 class="modal-title titleEdit"></h3>
      </div>
      <div class="modal-body" id="containerBase">
          
>>>>>>> 02f4521dfd123663d84a3e675194aac05b51ed5c
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
