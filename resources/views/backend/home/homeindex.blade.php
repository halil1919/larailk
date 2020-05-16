@extends('backend_template')

@section('title')

    @endsection

@section('breadcrumb')
    <div class="col-sm-6">
        <h1>Blank Page</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Yönetim Paneli</a></li>
            <li class="breadcrumb-item active">Slider</li>
        </ol>
    </div>
    @endsection

@section('content')
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Slider Listesi</h3>

            <div class="card-tools">

            </div>
        </div>
        <div class="card-body">
            orta alan
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            Footer
        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->
    @endsection

@push('customCss')

    @endpush

@push('customJS')

    @endpush