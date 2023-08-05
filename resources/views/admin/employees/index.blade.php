@extends('admin.layout')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Nhân viên </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('employees.index')}}">Nhân viên</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Danh sách nhân viên</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Line chart</h4>
                            {{-- <canvas id="lineChart" style="height:250px"></canvas> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
