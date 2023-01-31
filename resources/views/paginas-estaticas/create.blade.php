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
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Configuraciones
                    <!--begin::Separator-->
                    <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                    <!--end::Separator-->
                    <!--begin::Description-->
                    <small class="text-muted fs-7 fw-bold my-1 ms-1">Páginas Estáticas</small>
                    <!--end::Description-->
                    <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                    <small class="text-muted fs-7 fw-bold my-1 ms-1">Nueva Página</small>
                </h1>
                <!--end::Title-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center gap-2 gap-lg-3">
                <!--begin::Primary button-->
                <a href="{{ url('panel-administrativo/configuraciones/paginas-estaticas') }}" class="btn btn-sm btn-primary"><i class="fas fa-arrow-left"></i> Regresar</a>
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
                <div class="card-header">
                    <div class="card-title">
                        <h2>Nueva Página</h2>
                    </div>
                </div>
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <form class="form fv-plugins-bootstrap5 fv-plugins-framework" method="POST"
                        action="{{ url('panel-administrativo/configuraciones/paginas-estaticas/guardar-pagina') }}">
                        @csrf
                        <div class="row g-9 mb-8">
                            <!--begin::Col-->
                            <div class="col-md-12 fv-row">
                                <label class="required fs-6 fw-bold mb-2">Titulo</label>
                                <input type="text" name="nombre" class="form-control form-control-solid"
                                    value="{{ old('nombre') }}" placeholder="" />
                                @if ($errors->has('nombre'))
                                    <span class="text-danger">
                                        {{ $errors->first('nombre') }}
                                    </span>
                                @endif
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-12 fv-row">
                                <label class="required fs-6 fw-bold mb-2">Contenido</label>
                                <textarea type="text" name="contenido" class="form-control form-control-solid" placeholder="Escribe el contenido..."
                                    rows="8" id="ckeditor_classic">{{ old('contenido') }}</textarea>
                                @if ($errors->has('contenido'))
                                    <span class="text-danger">
                                        {{ $errors->first('contenido') }}
                                    </span>
                                @endif
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--begin::Actions-->
                        <div class="text-end">
                            <a href="{{ url('panel-administrativo/configuraciones/preguntas-y-respuestas') }}"
                                class="btn btn-light me-3">Cancelar</a>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                        <!--end::Actions-->
                    </form>
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
    <script src="{{ asset('assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js') }}"></script>
    <script>
        "use strict";
        var KTFormsCKEditorClassic = {
            init: function() {
                ClassicEditor.create(document.querySelector("#ckeditor_classic")).then((o => {
                    console.log(o)
                })).catch((o => {
                    console.error(o)
                }))
            }
        };
        KTUtil.onDOMContentLoaded((function() {
            KTFormsCKEditorClassic.init()
        }));
        // ClassicEditor
        //     .create(document.querySelector('#ckeditor_classic'))
        //     .then(editor => {
        //         console.log(editor);
        //     })
        //     .catch(error => {
        //         console.error(error);
        //     });
    </script>

    <!--end::Page Vendors Javascript-->
@endsection
