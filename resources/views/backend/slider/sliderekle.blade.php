@extends('backend_template')

@section('title')

    @endsection

@section('breadcrumb')
    <div class="col-sm-6">
        <h1>Slider Bölümü</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Yönetim Paneli</a></li>
            <li class="breadcrumb-item active">Slider</li>
            <li class="breadcrumb-item active">Slider Ekleme</li>
        </ol>
    </div>
    @endsection

@section('content')
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Slider Ekleme Formu</h3>
            <div class="card-tools">

            </div>
        </div>
        <div class="card-body">

            @if($errors->any())

                @foreach($errors->all() as $key)
                    {{ $key."<br>" }}
                @endforeach

            @endif

            <form action="{{ route('admin.slider.sliderekledata') }}" role="form" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Slider Başlık</label>
                        <input type="text" name="slider_ad" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Slider İçerik</label>
                        <textarea name="slider_isim" class="form-control" rows="3" placeholder="Enter ..."></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Resim Yükle</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input name="slider_resim" type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text" id="">Upload</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Gönder</button>
                </div>
            </form>


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