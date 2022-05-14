const baseURL = 'http://localhost/godo/';

/* idtabla, columns (array de objetos), nombre de registros (usuarios) */
function datatablesUser() {
    $(document).ready(function () {
        $('#users').DataTable({
            "ajax": {
                "url": baseURL + "Users/getusers",
                "dataSrc": ""
            },
            "columns": [
                { "data": "iduser" },
                { "data": "user" },
                { "data": "name" },
                { "data": "email" },
                { "data": "typeuser" },
                { "data": "options" }
            ],
            "order": [[0, 'desc']],
            "responsive": true,
            "language": {
                "lengthMenu": "Mostrar _MENU_ usuarios",
                "zeroRecords": "No se encontraron usuarios con los datos solicitados",
                "info": "Mostrando del _PAGE_ al _PAGES_ de un total de _MAX_ registros",
                "infoEmpty": "No hay registros encontrados",
                "infoFiltered": "(_MAX_ registros consultados)",
                "search": "Buscar: ",
                "paginate": {
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            }
        });
    });
}

datatablesUser();