@extends('admin.layouts.main')
@section('content')
<!-- content -->
<div id="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">User</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-user"></i>
                <span>List User</span>
                <div class="card-body">
                    <div>
                        <!--/.row-->
                        <div class="bootstrap-table">
                            <div class="table-responsive">
                                <a href="{{ route('admin.users.create') }}" class="btn btn-primary">Thêm Thành viên</a>
                                <hr>
                                @if (session('alert'))
                                <div class="alert alert-success">{{ session('alert') }}</div>
                                @endif
                                <table class="table table-bordered" style="margin-top:20px;">

                                    <thead>
                                        <tr class="bg-primary">
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Phone</th>
                                            <th>Avatar</th>
                                            <th>Birthday</th>
                                            <th>Level</th>
                                            <th width='12%'>Tùy chọn</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($users as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->address }}</td>
                                            <td>{{ $user->phone }}</td>
                                            <td><img style="width: 60px; height: 60px;" src="{{ $user->avatar }}"
                                                    alt=""></td>
                                            <td>{{ $user->birthday }}</td>
                                            <td>
                                                @if ($user->role == 1)
                                                User
                                                @else
                                                Admin
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.users.edit', $user->id) }}"
                                                    class="btn btn-warning"><i class="fas fa-edit"
                                                        aria-hidden="true"></i></a>
                                                <a href="{{ route('admin.users.delete', $user->id) }}"><button onclick="return conformDelete()" class="btn btn-danger"><i class="fa fa-trash"
                                                    aria-hidden="true"></i></button></a>
                                            </td>
                                        </tr>
                                        @empty
                                        Form User Empty!!! Pls Add Data To User Table!
                                        @endforelse
                                    </tbody>
                                </table>
                                <div align='right'>
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="#">Trở lại</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">tiếp theo</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright © Your Website 2019</span>
                </div>
            </div>
        </footer>

    </div>
    <!-- end content -->
    <!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->
@endsection
