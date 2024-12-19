<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lumine Zise</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/recurso7.png') }}"type="image/x-icon">

    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">

    <!-- FullCalendar -->
    <link rel="stylesheet" href="{{ asset('plugins/fullcalendar/main.css') }}">

    <!-- Google Fonts -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{ asset('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
    <!-- Toastr -->
    <link rel="stylesheet" href="{{ asset('plugins/toastr/toastr.min.css') }}">

    <link rel="stylesheet" href="{{ asset('styles/style.css') }}">

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        @include('admin.layouts.partials.navbar')

        <!-- Sidebar -->
        @include('admin.layouts.partials.sidebar')

        <!-- Content Wrapper -->
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <h1>@yield('page-title', 'Bienvenido')</h1>
                </div>
            </section>
            <section class="content">
                @yield('content')
            </section>
        </div>

        <!-- Footer -->
        @include('admin.layouts.partials.footer')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
    <script src="{{ asset('plugins/fullcalendar/main.js') }}"></script>

    <!--SCRIPTS DE PAGINACION PDF ETC-->
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    <!-- SweetAlert2 -->
    <script src="{{ asset('plugins/sweetalert2/sweetalert2.min.js') }}"></script>
    <!-- Toastr -->
    <script src="{{ asset('plugins/toastr/toastr.min.js') }}"></script>

    <!--SCRIPTS DE PAGINACION PDF ETC-->
    <script>
       $(document).ready(function() {
    $(".tablaCurso").each(function() {
        const tabla = $(this);  // Referencia a la tabla actual

        tabla.DataTable({
            responsive: true,
            lengthChange: false,
            autoWidth: false,
            buttons: [
                {
                    extend: "print",
                    text: '<i class="fas fa-print"></i> Imprimir',
                    className: 'btn btn-info',
                    title: 'Lista de Profesores',  // Título dinámico para la impresión
                    customize: function(win) {
                        // Ocultar las columnas "Foto" y "Acciones" en la impresión
                        const fotoIndex = $(win.document.body).find('table thead th').toArray().findIndex(function(th) {
                            return $(th).text().trim() === "Foto";
                        });
                        const accionesIndex = $(win.document.body).find('table thead th').toArray().findIndex(function(th) {
                            return $(th).text().trim() === "Acciones";
                        });

                        if (fotoIndex >= 0) {
                            $(win.document.body).find('table tbody tr').each(function() {
                                $(this).find('td').eq(fotoIndex).css("display", "none");
                            });
                            $(win.document.body).find('table thead th').eq(fotoIndex).css("display", "none");
                        }

                        if (accionesIndex >= 0) {
                            $(win.document.body).find('table tbody tr').each(function() {
                                $(this).find('td').eq(accionesIndex).css("display", "none");
                            });
                            $(win.document.body).find('table thead th').eq(accionesIndex).css("display", "none");
                        }
                    }
                },
                {
                    extend: "excel",
                    text: '<i class="fas fa-file-excel"></i> Excel',
                    className: 'btn btn-success',
                    exportOptions: {
                        columns: function (idx, data, node) {
                            return idx !== 1 && idx !== 7; // Excluir las columnas "Foto" y "Acciones"
                        }
                    }
                },
                {
                    extend: "pdf",
                    text: '<i class="fas fa-file-pdf"></i> PDF',
                    className: 'btn btn-danger',
                    orientation: 'landscape',
                    pageSize: 'A4',
                    exportOptions: {
                        columns: function (idx, data, node) {
                            return idx !== 1 && idx !== 7; // Excluir las columnas "Foto" y "Acciones"
                        }
                    },
                    customize: function(doc) {
                        const header = doc.content[1].table.header[0];
                        const fotoIndex = header.findIndex(function(cell) {
                            return cell.text === "Foto"; 
                        });

                        const accionesIndex = header.findIndex(function(cell) {
                            return cell.text === "Acciones";
                        });

                        if (fotoIndex >= 0) {
                            header.splice(fotoIndex, 1);
                            doc.content[1].table.body.forEach(function(row) {
                                row.splice(fotoIndex, 1);
                            });
                        }

                        if (accionesIndex >= 0) {
                            header.splice(accionesIndex, 1);
                            doc.content[1].table.body.forEach(function(row) {
                                row.splice(accionesIndex, 1);
                            });
                        }

                        // Personalización del estilo en el PDF
                        doc.styles.tableHeader.alignment = 'center'; 
                        doc.content[1].table.widths = ['5%', '15%', '25%', '20%', '20%', '15%']; // Ajustar el ancho de las columnas
                    }
                }
            ],
            language: {
                search: "<i class='fas fa-search'></i>",
                searchPlaceholder: "Buscar...",
                emptyTable: "No hay datos disponibles en la tabla",
                info: "Mostrando _START_ a _END_ de _TOTAL_ registros",
                infoEmpty: "Mostrando 0 a 0 de 0 registros",
                infoFiltered: "(filtrado de _MAX_ registros totales)",
                lengthMenu: "Mostrar _MENU_ registros",
                loadingRecords: "Cargando...",
                processing: "Procesando...",
                zeroRecords: "No se encontraron resultados",
                paginate: {
                    first: "Primero",
                    last: "Último",
                    next: "Siguiente",
                    previous: "Anterior"
                }
            }
        }).buttons().container().appendTo(
            tabla.closest('.dataTables_wrapper').find('.col-md-6:eq(0)')
        );
    });
});

    </script>
    
    
    <!--ALERTAS-->
    <script>
        $(document).ready(function() {
            @if (session('success'))
                var Toast = Swal.mixin({
                    toast: true,
                    position: 'center', // Cambié la posición a 'center' para que aparezca en el centro
                    showConfirmButton: false,
                    timer: 2500,
                    customClass: {
                        popup: 'big-toast' // Agregar una clase personalizada para el tamaño
                    }
                });

                Toast.fire({
                    icon: 'success',
                    title: '{{ session('success') }}'
                });
            @endif
        });
    </script>

    <style>
        /* Estilo personalizado para hacer el toast más grande */
        .big-toast {
            font-size: 18px !important;
            /* Ajusté el tamaño del texto a un valor más moderado */
            padding: 15px !important;
            /* Ajusta el padding para hacerlo más grande */
            border-radius: 10px;
            /* Redondea las esquinas */
            background-color: #28a745 !important;
            /* Color de fondo (verde, por ejemplo) */
            color: #fff !important;
            /* Color del texto */
        }

        /* Aumentar el tamaño del texto del mensaje */
        .big-toast .swal2-title {
            font-size: 20px !important;
            /* Aseguramos un tamaño de texto más moderado */
            color: #fff !important;
            /* Asegurar que el texto sea blanco */
        }
    </style>

    <!-- CALENDARIO -->
    <script>
        $(function() {
            // FullCalendar initialization
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                locale: 'es',
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                },
                events: [{
                    title: 'Evento ejemplo',
                    start: new Date(),
                    backgroundColor: '#0073b7',
                    borderColor: '#0073b7',
                }, ],
            });
            calendar.render();
        });
    </script>

    <script>
        $(window).on('load', function() {
            // Agregar un retraso de 1 segundo antes de ocultar el preloader
            setTimeout(function() {
                $('.preloader').fadeOut('slow'); // Oculta el preloader con una transición suave
            }, 1000); // Puedes ajustar este tiempo
        });
    </script>

</body>

</html>
