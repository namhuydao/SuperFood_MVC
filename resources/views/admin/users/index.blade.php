@extends('admin.layouts.master')
@section('title'){{'Users'}}@endsection
@section('content')
    <div id="layoutSidenav">
        @include('admin.layouts.sideNav')
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Quản lý người dùng</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="/superFood/admin/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">Quản lý người dùng</li>
                    </ol>
                    <a href="/superFood/admin/users/create" class="btn btn-primary addBtn">Thêm người dùng
                    </a>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table mr-1"></i>
                            Bảng người dùng
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>Ảnh đại diện</th>
                                        <th>Tên</th>
                                        <th>Họ</th>
                                        <th>Email</th>
                                        <th>Nhóm quyền</th>
                                        <th>Hành động</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $key => $user)
                                        <tr>
                                            <td class="text-center"><img src="/superFood/backend/assets/images/{{ $user->image }}" alt="" width="100" height="100"></td>
                                            <td>{{$user->firstname}}</td>
                                            <td>{{$user->lastname}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>
                                                @foreach ($roles as $role)
                                                    @if ($user->role_id == $role->id)
                                                        {{$role->name}}
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>
                                                <a class="btn btn-primary" href="/superFood/admin/users/edit/{{$user->id}}">Sửa</a>
                                                <a class="user_delete btn btn-danger" href="/superFood/admin/users/delete/{{$user->id}}">Xóa</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            @include('admin.layouts.footer')
        </div>
    </div>
@endsection