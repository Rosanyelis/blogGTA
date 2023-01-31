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
            <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Productos</h1>
            <!--end::Title-->
        </div>
        <!--end::Page title-->
        <!--begin::Actions-->
        <div class="d-flex align-items-center gap-2 gap-lg-3">
            <!--begin::Primary button-->
            <a href="{{ url('panel-administrativo/productos') }}" class="btn btn-sm btn-primary"><i class="fas fa-arrow-left"></i> Regresar</a>
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
                    <h2>Nuevo Producto</h2>
                </div>
            </div>
            <!--begin::Card body-->
            <div class="card-body pt-0">
                <form class="form fv-plugins-bootstrap5 fv-plugins-framework" method="POST"
                    action="{{ url('panel-administrativo/productos/'.$data->id.'/actualizar-producto') }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-12 fv-row">
                            <label class="required fs-6 fw-bold mb-2">Imagen de Producto</label>
                            <input type="file" name="url_imagen" class="form-control form-control-solid" placeholder=""  />
                            @if ($errors->has('url_imagen'))
                                <span class="text-danger">
                                    {{ $errors->first('url_imagen') }}
                                </span>
                            @endif
                        </div>
                        <!--end::Col-->
                        <!--end::Col-->
                        <div class="col-md-12 fv-row">
                            <label class="required fs-6 fw-bold mb-2">Preview de Imagen de Producto</label><br>
                            <img src="{{ asset(''.$data->url_imagen.'') }}" alt="{{ $data->nombre }}" class="w-100px">
                        </div>
                        <!--begin::Col-->
                        <!--begin::Col-->
                        <div class="col-md-12 fv-row">
                            <label class="required fs-6 fw-bold mb-2">Nombre de Producto</label>
                            <input type="text" name="nombre" class="form-control form-control-solid" placeholder="Servidor Publicado de GTA Latam" value="{{ $data->nombre }}"  />
                            @if ($errors->has('nombre'))
                                <span class="text-danger">
                                    {{ $errors->first('nombre') }}
                                </span>
                            @endif
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-bold mb-2">Cantidad</label>
                            <input type="number" name="cantidad" class="form-control form-control-solid" placeholder="20" value="{{ $data->cantidad }}">
                            @if ($errors->has('cantidad'))
                                <span class="text-danger">
                                    {{ $errors->first('cantidad') }}
                                </span>
                            @endif
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-bold mb-2">Precio</label>
                            <input type="text"  name="precio" class="form-control form-control-solid" placeholder="20" value="{{ $data->precio }}">
                            @if ($errors->has('precio'))
                                <span class="text-danger" value name="cantidad">
                                    {{ $errors->first('precio') }}
                                </span>
                            @endif
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--begin::Actions-->
                    <div class="text-end">
                        <button type="reset" class="btn btn-light me-3">Cancelar</button>
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

<!--end::Page Vendors Javascript-->
@endsection
