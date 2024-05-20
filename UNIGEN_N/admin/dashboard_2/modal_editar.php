<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Publicación</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="formPublicacion">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="id" class="form-label">Id:</label>
                        <input type="text" class="form-control" id="id" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="contenido" class="form-label">Contenido:</label>
                        <input type="text" class="form-control" id="contenido">
                    </div>
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Titulo:</label>
                        <input type="text" class="form-control" id="titulo">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary" onclick="guardarCambios()">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function guardarCambios() {
        var id = $('#id').val();
        var contenido = $('#contenido').val();
        var titulo = $('#titulo').val();

        $.ajax({
            url: 'guardar_cambios.php',
            method: 'POST',
            data: { id: id, contenido: contenido, titulo: titulo },
            success: function(response) {
                alert(response);
                $('#exampleModal').modal('hide');
                location.reload();
            },
            error: function(xhr, status, error) {
                console.error('Error en la solicitud AJAX:', error);
            }
        });
    }
</script>
