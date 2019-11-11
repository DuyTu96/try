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
            <li class="breadcrumb-item active">Users</li>
        </ol>
        <!-- DataTables Example -->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-user"></i> |
                <span>Edit User</span>
                <div class="card-body">
                    <div>
                        <!--/.row-->
                        <div class="row">
                            <div class="col-xs-12 col-md-12 col-lg-12">
                                <div class="panel panel-primary">
                                    <div class="panel-body">
                                        <div class="row justify-content-center" style="margin-bottom:40px">

                                            <div class="col-md-8 col-lg-8 col-lg-offset-2">
                                                <form action="" method="post"
                                                    enctype="multipart/form-data">
                                                    @method('PUT')
                                                    @csrf
                                                    @if ($errors->any())
                                                    <div class="alert alert-danger">
                                                        {{ $errors->first() }}</div>
                                                    @endif
                                                    <div class="form-group">
                                                        <label>Name</label>
                                                        <input type="full" name="name" class="form-control"
                                                            value="{{ $users->name }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="email" name="email" class="form-control"
                                                            value="{{ $users->email }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Password</label>
                                                        <input type="password" name="password" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Avatar</label>
                                                        <input type="file" name="avatar" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Birthday</label>
                                                        <input type="date" name="birthday" class="form-control"
                                                            value="{{ $users->birthday }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Address</label>
                                                        <input type="address" name="address" class="form-control"
                                                            value="{{ $users->address }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Phone</label>
                                                        <input type="phone" name="phone" class="form-control"
                                                            value="{{ $users->phone }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Role</label>
                                                        <select name="role" class="form-control">
                                                            <option @if ($users->role == 1)
                                                                selected
                                                                @endif
                                                                value="1">User</option>
                                                            <option @if ($users->role == 2)
                                                                selected
                                                                @endif
                                                                value="2">Admin</option>
                                                        </select>
                                                    </div>
                                                    <button class="btn btn-success" type="submit">Sửa thành
                                                        viên</button>
                                                    <button class="btn btn-danger" type="reset">Huỷ
                                                        bỏ</button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                            </div>
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
