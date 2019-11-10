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
                <i class="fas fa-user"></i>
                <span>List User</span>
                <div class="card-body">
                    <div>
                        <!--/.row-->
                        <div class="row">
                            <div class="col-xs-12 col-md-12 col-lg-12">
                                <div class="panel panel-primary">
                                    <div class="panel-body">
                                        <div class="row justify-content-center" style="margin-bottom:40px">

                                            <div class="col-md-8 col-lg-8 col-lg-offset-2">

                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="text" name="email" class="form-control">
                                                    <div class="alert alert-danger" role="alert">
                                                        <strong>email đã tồn tại!</strong>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>password</label>
                                                    <input type="text" name="password" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Full name</label>
                                                    <input type="full" name="full" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <input type="address" name="address" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Phone</label>
                                                    <input type="phone" name="phone" class="form-control">
                                                </div>

                                                <div class="form-group">
                                                    <label>Level</label>
                                                    <select name="level" class="form-control">
                                                        <option value="1">admin</option>
                                                        <option selected value="2">user</option>
                                                    </select>
                                                </div>
                                                <button class="btn btn-success" type="submit">Thêm thành
                                                    viên</button>
                                                <button class="btn btn-danger" type="reset">Huỷ
                                                    bỏ</button>
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
