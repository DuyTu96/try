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
            <li class="breadcrumb-item active">Tables</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-user"></i>
                <span>List User</span>
                <div class="card-body">
                    <div>
                        <div class="row">
                            <div class="col-xs-12 col-md-12 col-lg-12">
                                <div class="panel panel-primary">
                                    <div class="panel-body">
                                        <div class="row justify-content-center" style="margin-bottom:40px">

                                            <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
                                                <div class="row">
                                                </div>
                                                <!--/.row-->
                                                <div class="row">
                                                    <div class="col-xs-12 col-md-12 col-lg-12">

                                                        <div class="panel panel-primary">
                                                            <div class="panel-heading">Danh sách đơn đặt hàng đã xử lý
                                                            </div>
                                                            <div class="panel-body">
                                                                <div class="bootstrap-table">
                                                                    <div class="table-responsive">
                                                                        <a href="#" class="btn btn-warning"><span
                                                                                class="glyphicon glyphicon-gift"></span>Đơn
                                                                            Chưa xử lý</a>
                                                                        <table class="table table-bordered"
                                                                            style="margin-top:20px;">
                                                                            <thead>
                                                                                <tr class="bg-primary">
                                                                                    <th>ID</th>
                                                                                    <th>Tên khách hàng</th>
                                                                                    <th>Email</th>
                                                                                    <th>Sđt</th>
                                                                                    <th>Địa chỉ</th>
                                                                                    <th>Thời gian</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>2</td>
                                                                                    <td>Nguyễn văn An</td>
                                                                                    <td>Lu@gmail.com</td>
                                                                                    <td>015232412</td>
                                                                                    <td>Bắc ninh</td>
                                                                                    <td>2018-12-06 12:17:17</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>1</td>
                                                                                    <td>Nguyễn thế phúc</td>
                                                                                    <td>admin@gmail.com</td>
                                                                                    <td>0906013526</td>
                                                                                    <td>Thường tín , hà nội</td>
                                                                                    <td>2018-12-06 02:05:30</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/.row-->


                                            </div>
                                            <!--end main-->
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
