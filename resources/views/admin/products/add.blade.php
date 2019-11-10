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
                        <!--/.row-->
                        <div class="row">
                            <div class="col-xs-12 col-md-12 col-lg-12">
                                <div class="panel panel-primary">
                                    <div class="panel-body">
                                        <div class="row justify-content-center" style="margin-bottom:40px">

                                            <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <h1 class="page-header">Thêm sản phẩm</h1>
                                                    </div>
                                                </div>
                                                <!--/.row-->
                                                <div class="row">
                                                    <div class="col-xs-6 col-md-12 col-lg-12">
                                                        <div class="panel panel-primary">
                                                            <div class="panel-heading">Thêm sản phẩm</div>
                                                            <div class="panel-body">
                                                                <div class="row" style="margin-bottom:40px">

                                                                    <div class="col-md-8">
                                                                        <div class="form-group">
                                                                            <label>Danh mục</label>
                                                                            <select name="category"
                                                                                class="form-control">
                                                                                <option value='1' selected>Nam</option>
                                                                                <option value='3'>---|Áo khoác nam
                                                                                </option>
                                                                                <option value='2'>Nữ</option>
                                                                                <option value='4'>---|Áo khoác nữ
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>Mã sản phẩm</label>
                                                                            <input type="text" name="code"
                                                                                class="form-control">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>Tên sản phẩm</label>
                                                                            <input type="text" name="name"
                                                                                class="form-control">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>Giá sản phẩm (Giá chung)</label>
                                                                            <input type="number" name="price"
                                                                                class="form-control">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>Sản phẩm có nổi bật</label>
                                                                            <select name="featured"
                                                                                class="form-control">
                                                                                <option value="0">Không</option>
                                                                                <option value="1">Có</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>Trạng thái</label>
                                                                            <select name="state" class="form-control">
                                                                                <option value="1">Còn hàng</option>
                                                                                <option value="0">Hết hàng</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label>Ảnh sản phẩm</label>
                                                                            <input id="img" type="file" name="img"
                                                                                class="form-control hidden"
                                                                                onchange="changeImg(this)">
                                                                            <img id="avatar" class="thumbnail"
                                                                                width="100%" height="350px"
                                                                                src="img/import-img.png">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label>Thông tin</label>
                                                                            <textarea name="info"
                                                                                style="width: 100%;height: 100px;"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label>Miêu tả</label>
                                                                            <textarea id="editor" name="describe"
                                                                                style="width: 100%;height: 100px;"></textarea>
                                                                        </div>
                                                                        <button class="btn btn-success"
                                                                            name="add-product" type="submit">Thêm sản
                                                                            phẩm</button>
                                                                        <button class="btn btn-danger" type="reset">Huỷ
                                                                            bỏ</button>
                                                                    </div>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!--/.row-->
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
