<!-- Modal -->
<div class="modal fade" data-bs-backdrop="static" id="users-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-primary text-light p-1">
            <div class="modal-header border-0">
                <h5 class="modal-title"><i class="fas fa-user-plus"></i> Agregar Usuario</h5>
                <button type="button" class="btn-close btn-light bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body border-0">
                <form autocomplete="off">
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fas fa-envelope"></i>
                            </span>
                            <input type="email" class="form-control" id="email" placeholder="Agrega un correo electrónico">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="user" class="form-label">Nombre:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fas fa-user"></i>
                            </span>
                            <input type="text" class="form-control" id="name" placeholder="Agrega un nombre y apellido">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="user" class="form-label">Usuario:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fas fa-at"></i>
                            </span>
                            <input type="text" class="form-control" id="user" placeholder="Agrega un nombre de usuario">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fas fa-key"></i>
                            </span>
                            <input type="text" class="form-control" id="password" placeholder="Agrega una contraseña">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="type-user" class="form-label">Tipo de usuario:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fas fa-user-shield"></i>
                            </span>
                            <select class="form-select" id="type-user">
                                <option selected>Selecciona un tipo de usuario</option>
                                <option value="1">Administrador</option>
                                <option value="2">Usuario</option>
                                <option value="3">Usuario restringido</option>
                            </select>
                        </div>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                            <i class="fas fa-times-circle"></i>
                            Cancelar
                        </button>
                        <button type="button" class="btn btn-primary">
                            <i class="fas fa-plus-circle"></i>
                            Registrar usuario
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->