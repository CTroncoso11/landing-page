<!-- Modal -->
<div class="modal fade" id="Rename" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Cambiar nombre</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="/file/" method="POST">
            @csrf
            @method('PUT')
            <div class="uploadModal">
                <div class="uploadModal__field">
                    <h1>Nuevo nombre</h1>
                    <input name="new-filename" type="text" placeholder="Documento 2021" required >
                </div>
            </div>
            <hr>
            <div class="uploadModal__buttons">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">
                  Cambiar nombre
                </button>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>
