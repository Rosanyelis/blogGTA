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
            <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Noticias</h1>
            <!--end::Title-->
        </div>
        <!--end::Page title-->
        <!--begin::Actions-->
        <div class="d-flex align-items-center gap-2 gap-lg-3">
            <!--begin::Primary button-->
            <a href="{{ url('panel-administrativo/noticias') }}" class="btn btn-sm btn-primary"><i class="fas fa-arrow-left"></i> Regresar</a>
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
                    <h2>Nueva Noticia</h2>
                </div>
            </div>
            <!--begin::Card body-->
            <div class="card-body pt-0">
                <form class="form fv-plugins-bootstrap5 fv-plugins-framework" method="POST"
                    action="{{ url('panel-administrativo/noticias/'.$data->id.'/actualizar-noticia') }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-12 fv-row">
                            <label class="required fs-6 fw-bold mb-2">Imagen de Portada de Noticia</label>
                            <input type="file" name="url_imagen" class="form-control form-control-solid" placeholder=""  />
                            @if ($errors->has('url_imagen'))
                                <span class="text-danger">
                                    {{ $errors->first('url_imagen') }}
                                </span>
                            @endif
                        </div>
                        <!--end::Col-->
                        <div class="col-md-12 fv-row">
                            <label class="required fs-6 fw-bold mb-2">Preview de Imagen de Portada de Noticia</label><br>
                            <img src="{{ asset(''.$data->url_imagen.'') }}" alt="{{ $data->titulo }}" class="w-600px">
                        </div>
                        <!--begin::Col-->
                        <div class="col-md-12 fv-row">
                            <label class="required fs-6 fw-bold mb-2">Titulo de Noticia</label>
                            <input type="text" name="titulo" value="{{ $data->titulo }}" class="form-control form-control-solid" placeholder="Servidor Publicado de GTA Latam"  />
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-12 fv-row">
                            <label class="required fs-6 fw-bold mb-2">Contenido de Noticia</label>
                            <textarea name="contenido" id="kt_docs_ckeditor_classic">{{ $data->contenido }}</textarea>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--begin::Actions-->
                    <div class="text-end">
                        <button type="reset" class="btn btn-light me-3">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Actualizar</button>
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
    ClassicEditor
    .create(document.querySelector('#kt_docs_ckeditor_classic'))
    .then(editor => {
        console.log(editor);
    })
    .catch(error => {
        console.error(error);
    });
</script>
<!--end::Page Vendors Javascript-->
@endsection
