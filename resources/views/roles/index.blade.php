@extends('layouts.app')
@section('styles')
@endsection
@section('contenido')
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">panel-administrativo/Configuraciones
                    <!--begin::Separator-->
                    <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                    <!--end::Separator-->
                    <!--begin::Description-->
                    <small class="text-muted fs-7 fw-bold my-1 ms-1">Roles</small>
                    <!--end::Description-->
                </h1>
                <!--end::Title-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center gap-2 gap-lg-3">
                <!--begin::Primary button-->
                <a href="{{ url('panel-administrativo/configuraciones/roles/nuevo-rol') }}" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i> Nuevo Rol</a>
                <!--end::Primary button-->
            </div>
        <!--end::Actions-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Category-->
            <div class="card card-flush">
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::Table-->
                    <table id="kt_datatable_example_5"
                        class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
                        <thead>
                            <tr class="fw-bolder fs-6 text-gray-800 px-7">
                                <th class="min-w-60px">#</th>
                                <th>Rol</th>
                                <th>Descripción</th>
                                <th class="text-end min-w-70px">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nombre }}</td>
                                <td>{{ $item->descripcion }}</td>
                                <td class="text-end">
                                    <a href="{{ url('panel-administrativo/configuraciones/roles/'.$item->id.'/editar-rol') }}">
                                        <i class="fas fa-pen-square fs-1"></i>
                                    </a>&nbsp;&nbsp;
                                    @if ($item->nombre != 'Superadmin' AND $item->nombre != 'Administrador')
                                    <a href="javascript:void();" data-bs-toggle="modal" data-bs-target="#Delete-{{ $item->id }}">
                                        <i class="fas fa-trash text-danger fs-1"></i>
                                    </a>
                                    <div class="modal fade" tabindex="-1" id="Delete-{{ $item->id }}">
                                        <div class="modal-dialog">
                                            <form method="POST" action="{{ url('panel-administrativo/configuraciones/roles/'.$item->id.'/eliminar-rol') }}" class="modal-content">
                                                @csrf
                                                @method('DELETE')
                                                <div class="modal-header p-3">
                                                    <h5 class="modal-title"></h5>
                                                    <!--begin::Close-->
                                                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                                        <i class="fas fa-times"></i>
                                                    </div>
                                                    <!--end::Close-->
                                                </div>
                                                <div class="modal-body text-center">
                                                    <i class="fas fa-exclamation-triangle text-warning fs-5x"></i>
                                                    <h3 class="mt-5">¿Está Seguro de Eliminar el Registro?</h3>
                                                    <p class="mt-5">Si existen usuarios dependientes de este rol, no podrá eliminarlo.</p>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
                                                    <button type="submit" class="btn btn-danger">Si, Estoy Seguro</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    @endif

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Category-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
@endsection
@section('scripts')
    <!--begin::Page Vendors Javascript(used by this page)-->
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script>
        "use strict";
        $("#kt_datatable_example_5").DataTable({
            "language": {
                "sProcessing": "Procesando...",
                    "sLengthMenu": "_MENU_",
                    "sZeroRecords": "No se encontraron resultados",
                    "sEmptyTable": "Ningún dato disponible en esta tabla",
                    "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                    "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                    "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                    "sInfoPostFix": "",
                    "sSearch": "Buscar:",
                    "sUrl": "",
                    "sInfoThousands": ",",
                    "sLoadingRecords": "Cargando...",
                    "oPaginate": {
                        "sFirst": "Primero",
                        "sLast": "Último",
                        "sNext": "Siguiente",
                        "sPrevious": "Anterior"
                    },
                    "oAria": {
                        "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                    }
                // "lengthMenu": " _MENU_",
            },
            "dom": "<'row'" +
                "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
                "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
                ">" +

                "<'table-responsive'tr>" +

                "<'row'" +
                "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
                "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
                ">"
        });

    </script>
    <!--end::Page Vendors Javascript-->
@endsection
