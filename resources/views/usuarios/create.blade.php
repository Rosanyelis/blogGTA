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
                <small class="text-muted fs-7 fw-bold my-1 ms-1">Usuarios</small>
            </h1>
            <!--end::Title-->
        </div>
        <!--end::Page title-->
        <!--begin::Actions-->
        <div class="d-flex align-items-center gap-2 gap-lg-3">
            <!--begin::Primary button-->
            <a href="{{ url('panel-administrativo/configuraciones/usuarios') }}" class="btn btn-sm btn-primary"><i class="fas fa-arrow-left"></i> Regresar</a>
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
                    <h2>Nuevo Usuario</h2>
                </div>
            </div>
            <!--begin::Card body-->
            <div class="card-body pt-0">
                <form class="form fv-plugins-bootstrap5 fv-plugins-framework" method="POST" action="{{ url('panel-administrativo/configuraciones/usuarios/guardar-usuario') }}">
                    @csrf
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-12 fv-row">
                            <label class="required fs-6 fw-bold mb-2">Nombre de Usuario</label>
                            <input type="text" name="username" class="form-control form-control-solid" value="{{ old('username') }}" placeholder=""  />
                            @if ($errors->has('username'))
                                <span class="text-danger">
                                    {{ $errors->first('username') }}
                                </span>
                            @endif
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-12 fv-row">
                            <label class="required fs-6 fw-bold mb-2">Correo Electrónico</label>
                            <input type="text" name="email" class="form-control form-control-solid" value="{{ old('email') }}" placeholder=""  />
                            @if ($errors->has('email'))
                                <span class="text-danger">
                                    {{ $errors->first('email') }}
                                </span>
                            @endif
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-12 fv-row">
                            <label class="required fs-6 fw-bold mb-2">Contraseña</label>
                            <input type="password" name="password" class="form-control form-control-solid"   />
                            @if ($errors->has('password'))
                                <span class="text-danger">
                                    {{ $errors->first('password') }}
                                </span>
                            @endif
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-12 fv-row">
                            <label class="required fs-6 fw-bold mb-2">Roles</label>
                            <select name="rol_id" class="form-select" aria-label="Select example">
                                <option>Seleccione...</option>
                                @foreach ($roles as $item)
                                <option value="{{ $item->id }}" @if ($item->id == old('rol_id')) selected @endif>{{ $item->nombre }} - {{ $item->descripcion }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('rol_id'))
                                <span class="text-danger">
                                    {{ $errors->first('rol_id') }}
                                </span>
                            @endif
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--begin::Actions-->
                    <div class="text-end">
                        <a href="{{ url('panel-administrativo/configuraciones/usuarios') }}" class="btn btn-light me-3">Cancelar</a>
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
