@extends('admin.layouts.apps')

@section('title','Table Item - Test Project')

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
        <h1 class="h3 mb-0 text-gray-800">Item List</h1>
        <a href="{{route('admin-pages-item-create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Add New Item</a>
    </div>

    <!-- Content Row -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                    </tbody>
                </table>
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
        $(document).ready(function() {
            $('#dataTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{route('admin-pages-item-datatables')}}",
                columns: [
                    { data: 'name' },
                    { data: 'qty' },
                    { data: 'price' },
                    { render: function ( data, type, row ) {
                        return  `<a href="{{route('admin-pages-item-edit','')}}/${row.id}" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm"><i
                                        class="fas fa-edit fa-sm text-white-50"></i> Edit</a>
                                <a href="" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i
                                    class="fas fa-trash fa-sm text-white-50"></i> Remove</a>`;
                        }
                    },
                ]
            });
        });
    </script>
@endsection
