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
            <li class="breadcrumb-item active">Category</li>
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
                                                <!--/.row-->
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="panel panel-default">
                                                            <div class="panel-body">
                                                                <div class="row">
                                                                    <div class="col-md-5">
                                                                        <form action="{{ route('admin.categories.edit', $categories->id) }}" method="post">
                                                                            @csrf
                                                                        <div class="form-group">
                                                                            <label for="">Sửa Danh mục</label>
                                                                            <input type="text" class="form-control"
                                                                                name="name" id="" value="{{ $categories->name }}"
                                                                                placeholder="Tên danh mục mới">
                                                                        </div>
                                                                        <button type="submit"
                                                                            class="btn btn-primary">Sửa danh
                                                                            mục</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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
