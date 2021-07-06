<!-- Modal -->
<div class="modal fade" id="Delete{{$id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Borrar archivo</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="/file/{{$id}}" method="POST">
            @csrf
            @method('DELETE')
            <div class="uploadModal">
                <div class="uploadModal__field">
                    <h1>Desea borrar el archivo?</h1>
                    <button type="submit" class="btn btn-danger">Borrar archivo</button>
                </div>
            </div>
            <hr>
            <div class="uploadModal__buttons">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>
