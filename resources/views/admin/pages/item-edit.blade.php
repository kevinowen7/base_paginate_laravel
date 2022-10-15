@extends('admin.layouts.apps')

@section('title','Edit Item - Test Project')

@section('meta')
    @include('admin.include.meta')
@endsection

@section('sidebar')
    @include('admin.include.sidebar')
@endsection

@section('header')
    @include('admin.include.header')
@endsection

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Item</h1>
    </div>

    <div class="form-group row">
        <div class="card col-lg-8">
            <div class="card-body">
                <form class="user" method="POST" action="">
                    {{ csrf_field() }}
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <span>Nama Item</span>
                            <input type="text" class="form-control form-control-user" id="item_name" name="item_name" placeholder="Masukan Nama Item" value="{{$item->name}}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <span>Jumlah Item</span>
                            <input type="number" class="form-control form-control-user" id="qty" name="qty" placeholder="Masukan Jumlah" value="{{$item->qty}}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <span>Harga Item</span>
                            <input type="text" class="form-control form-control-user" id="price" name="price" placeholder="Masukan Harga" value="{{$item->price}}" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user" style="width:150px">
                        Submit
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection

@section('footer')
    @include('admin.include.footer')
@endsection

@section('custom-script')
    @include('admin.include.custom-script')
    <script>
        $("#price").on("keyup change", function(e) {
            let currentValue = convertTextToPrice(convertPriceToText($("#price").val().replace(/[^\d,]/g,'')));
            $("#price").val(currentValue);
        });
        $("#price").val(convertTextToPrice($("#price").val()));
    </script>
@endsection
