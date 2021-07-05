<!-- Modal -->
<div class="modal fade" id="modal-upload" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Subir archivo</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="dashboard" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="uploadModal">
                <div class="uploadModal__field">
                    <h1>Nombre del archivo</h1>
                    <input name="filename" type="text" placeholder="Documento hipoteca" required>
                </div>
                <div class="uploadModal__field">
                    <h1>Adjuntar archivo</h1>
                    <div class="input-group mb-3">
                        <div class="custom-file">
                            <input type="file" name="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" required>
                            <label class="custom-file-label" for="inputGroupFile01">Buscar archivo</label>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="uploadModal__buttons">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Subir</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js" crossorigin="anonymous"></script>
    <script>
        bsCustomFileInput.init()
    </script>
</div>
