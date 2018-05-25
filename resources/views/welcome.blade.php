<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel y Datatables Jquery</title>

        <!-- Fonts -->
        {{--<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">--}}

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('css/datatables.css') }}">
        {{--<link rel="stylesheet" type="text/css" href="{{ asset('css/dataTables.bootstrap.css') }}"/>--}}

    </head>
    <body>
    <br><br><br><br><br>
        <div class="container">
            <table class="table table-striped" id="myTable">
                <thead>
                    <tr>
                        {{--<th><input type="checkbox" id="checkall" title="Select all" onClick="toggle(this)"/></th>--}}
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Email</th>
                        <th>SMS</th>
                        <th>DNI</th>
                        <th>SEXO</th>
                        {{--<th>DIRECCION</th>--}}
                        {{--<th>F. CREACION</th>--}}
                        {{--<th>F. UPDATE</th>--}}
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    <br><br><br><br><br>


        <script src="{{ asset('js/jquery-3.2.1.js') }}"></script>
        <script src="{{ asset('js/datatables.js') }}"></script>
        {{--<script type="text/javascript" src="{{ asset('js/dataTables.bootstrap.js') }}"></script>--}}
        <script>
            $(document).ready(function() {

                var table = $('#myTable').DataTable({
                   "ajax": 'http://localhost/laravel-datatable/public/suscriptores',
                   "dataSrc": "",
                   "columns": [
                        { "data": "id" },
                        { "data": "nombre" },
                        { "data": "apellido" },
                        { "data": "email" },
                        { "data": "sms" },
                        { "data": "dni" },
                        { "data": "sexo" },
                  ],

                  "language": {
                        "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
                        "infoEmpty": "Mostrando 0 a 0 de 0 registros",
                        "lengthMenu": "Mostrar _MENU_ registros",
                        "search": "Buscar:",
                        "paginate": {
                          "first":      "Primero",
                          "last":       "Ultimo",
                          "next":       "Siguiente",
                          "previous":   "Anterior"
                        },
                        "zeroRecords":  "No se encontraron registros coincidentes",
                        "infoFiltered":   "(filtrado de _MAX_ registros totales)",

                  },


                });

              $('#myTable tbody').on( 'click', 'tr', function () {
                $(this).toggleClass('selected');
              } );


            } );
        </script>
    </body>
</html>
