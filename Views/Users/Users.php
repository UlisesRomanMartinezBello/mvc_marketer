<?php headerLayout($pageData); ?>
<?php getModal('modalUsers', $pageData); ?>

<!-- Section -->
<div class="container-fluid pb-5 pt-1">
    <div class="row">
        <div class="col-sm-12">
            <div class="card p-3 bg-primary text-light">
                <div class="card-header border-light pb-4">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-between">
                        <h1 class="text-light h5 fw-bold text-uppercase">
                            <?= $pageData['page_title'] ?>
                            <a href="#">
                                <i class="fas fa-question-circle"></i>
                            </a>
                        </h1>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#users-modal">
                            <i class="fas fa-user-plus"></i>
                            Agregar usuario
                        </button>
                    </div>
                </div>

                <div class="card-body">
                    <div class="pt-4">
                        <table class="table bg-transparent text-light table-hover" id="users">
                            <thead>
                                <tr class="fw-bold">
                                    <th scope="col">Folio</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Usuario</th>
                                    <th scope="col">Correo</th>
                                    <th scope="col">Rol</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody class="small border-0">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php footerLayout($pageData); ?>