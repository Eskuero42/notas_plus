<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'AdminLTE')</title>

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

    <script>
        $(document).ready(function() {
            $(".tablaCurso").each(function() {
                $(this).DataTable({
                    responsive: true,
                    lengthChange: false,
                    autoWidth: false,
                    buttons: [{
                            extend: "excel",
                            text: '<i class="fas fa-file-excel"></i> Excel',
                        },
                        {
                            extend: "pdf",
                            text: '<i class="fas fa-file-pdf"></i> PDF',
                        },
                        {
                            extend: "print",
                            text: '<i class="fas fa-print"></i> Imprimir',
                            title: 'Lista de estudiantes',
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
                }).buttons().container().appendTo($(this).closest('.dataTables_wrapper').find(
                    '.col-md-6:eq(0)'));
            });
        });
    </script>

    <!--FIN SCRIPTS DE PAGINACION PDF ETC-->

    <!--ALERTAS-->
    <script>
        $(document).ready(function() {
            @if (session('success'))
                var Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000
                });

                Toast.fire({
                    icon: 'success',
                    title: '{{ session('success') }}'
                });
            @endif
        });
    </script>

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
