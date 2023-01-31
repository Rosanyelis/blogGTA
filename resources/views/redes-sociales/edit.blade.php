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
                <small class="text-muted fs-7 fw-bold my-1 ms-1">Redes Sociales</small>
                <!--end::Description-->
                <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                <small class="text-muted fs-7 fw-bold my-1 ms-1">Editar Red Social</small>
            </h1>
            <!--end::Title-->
        </div>
        <!--end::Page title-->
        <!--begin::Actions-->
        <div class="d-flex align-items-center gap-2 gap-lg-3">
            <!--begin::Primary button-->
            <a href="" class="btn btn-sm btn-primary"><i class="fas fa-arrow-left"></i> Regresar</a>
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
                    <h2>Editar Red Social</h2>
                </div>
            </div>
            <!--begin::Card body-->
            <div class="card-body pt-0">
                <form class="form fv-plugins-bootstrap5 fv-plugins-framework" method="POST" action="{{ url('panel-administrativo/configuraciones/redes-sociales/'.$data->id.'/actualizar-red-social') }}">
                    @csrf
                    @method('PUT')
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-4 fv-row">
                            <label class="required fs-6 fw-bold mb-2">Redes Sociales</label>
                            <select class="form-select form-select-solid" name="nombre">
                                <option value="">Seleccione...</option>
                                <option value="Facebook" @if ($data->nombre == 'Facebook') selected @endif>Facebook</option>
                                <option value="Twitter" @if ($data->nombre == 'Twitter') selected @endif>Twitter</option>
                                <option value="YouTube" @if ($data->nombre == 'YouTube') selected @endif>YouTube</option>
                                <option value="Discord" @if ($data->nombre == 'Discord') selected @endif>Discord</option>
                                <option value="Instagram" @if ($data->nombre == 'Instagram') selected @endif>Instagram</option>
                            </select>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-8 fv-row">
                            <label class="required fs-6 fw-bold mb-2">Url</label>
                            <input type="text" name="url" class="form-control form-control-solid" value="{{ $data->url }}" placeholder=""  />
                            @if ($errors->has('url'))
                                <span class="text-danger">
                                    {{ $errors->first('url') }}
                                </span>
                            @endif
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--begin::Actions-->
                    <div class="text-end">
                        <a href="{{ url('panel-administrativo/configuraciones/redes-sociales') }}" class="btn btn-light me-3">Cancelar</a>
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

<!--end::Page Vendors Javascript-->
@endsection
