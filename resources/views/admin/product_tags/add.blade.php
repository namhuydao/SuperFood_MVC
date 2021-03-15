@if(!checkPer($_SESSION['user']['id'], 'product_view'))
    @php(header('Location: /superFood/admin/dashboard'))
@endif
@extends('admin.layouts.master')
@section('title'){{'Add Product Tag'}}@endsection
@section('content')
    <div id="layoutSidenav">
        @include('admin.layouts.sideNav')
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Quản lý Tags sản phẩm</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="/superFood/admin/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">Thêm Tag</li>
                    </ol>
                </div>
                <div style="width: 40%; margin: auto">
                    <form action="/superFood/admin/productTags/store" method="POST">
                        <div class="form-group">
                            <label for="productTagNameAdd">Tên:</label>
                            <input type="text" name="productTagNameAdd" class="form-control" id="productTagNameAdd">
                        </div>
                        <button class="btn btn-primary">Thêm</button>
                    </form>
                </div>
            </main>
            @include('admin.layouts.footer')
        </div>
    </div>
@endsection