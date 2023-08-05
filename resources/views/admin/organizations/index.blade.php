@extends('admin.layout')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Quản lý phòng ban </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('employees.index') }}">Quản lý phòng ban</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Danh sách phòng ban</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="row justify-content-between">
                                <div class="col-4">
                                    <button type="button" class="btn btn-outline-success d-flex align-items-center">
                                        <span class="mdi mdi-plus-box-outline mr-1"></span> Thêm mới phòng ban
                                    </button>
                                </div>
                                <div class="col-4">
                                    <div class="form-check form-switch float-right">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckChecked" checked>
                                        <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox
                                            input</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col">
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th class="text-center align-middle">{{ __('admin.label.image') }}</th>
                                            <th class="text-center align-middle">{{ __('admin.label.title') }}</th>
                                            <th class="text-center align-middle">{{ __('admin.label.link') }}</th>
                                            <th class="text-center align-middle">{{ __('admin.label.status.title') }}</th>
                                            <th class="text-center align-middle">{{ __('admin.label.action') }}</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        {{-- @foreach ($data['banners'] as $result) --}}
                                        <tr>
                                            <td><img class="image-list-product" src="" alt="Ảnh lỗi">
                                            </td>
                                            <td class="align-middle">
                                                <a href="">
                                                    1
                                                </a>
                                            </td>
                                            <td class="align-middle">
                                                <a href="">
                                                    2
                                                </a>
                                            </td>
                                            <td class="text-center align-middle">
                                                {{-- @if ($result['status'] == Banner::STATUS_ACTIVE)
                                                <span class='badge badge-pill badge-soft-success font-size-11'
                                                    style='line-height: unset!important;'>{{ __('admin.label.status.active') }}</span>
                                            @else
                                                <span class='badge badge-pill badge-soft-danger font-size-11'
                                                    style='line-height: unset!important;'>{{ __('admin.label.status.inactive') }}</span>
                                            @endif --}}
                                                3
                                            </td>
                                            <td class="text-center align-middle">
                                                {{-- <a href="{{ route('admin.banners.edit', ['banner' => $result['id']]) }}"
                                                class="btn btn-primary mr-3" style="margin-right: 10px;"><i
                                                    class="bx bx-pencil"></i></a>
                                            <a href="javascript:void(0)" data-id="{{ $result['id'] }}" data-toggle="modal"
                                                data-message="{{ __('admin.label.confirm_delete') }}"
                                                data-url="{{ route('admin.banners.destroy', ['banner' => $result['id']]) }}"
                                                class="btn btn-danger delete" data-bs-toggle="modal"
                                                data-bs-target=".deleteModal">
                                                <i class="bx bx-trash"></i>
                                            </a> --}}
                                            </td>
                                        </tr>
                                        {{-- @endforeach --}}
                                    </tbody>
                                </table>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
