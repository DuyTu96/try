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
                <i class="fas fa-list-alt"></i> |
                <span>Categories</span></a>
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
                                                                        @if (session('alert'))
                                                                        <div class="alert alert-success">
                                                                            {{ session('alert') }}</div>
                                                                        @endif
                                                                        @if ($errors->any())
                                                                        <div class="alert alert-danger">
                                                                            {{ $errors->first() }}</div>
                                                                        @endif
                                                                        <form
                                                                            action="{{ route('admin.categories.index') }}"
                                                                            method="post">
                                                                            @csrf
                                                                            <div class="form-group">
                                                                                <label for="">Tên Danh mục</label>
                                                                                <input type="text" class="form-control"
                                                                                    name="name" id=""
                                                                                    placeholder="Tên danh mục mới">
                                                                            </div>
                                                                            <button type="submit"
                                                                                class="btn btn-primary">Thêm danh
                                                                                mục</button>
                                                                        </form>

                                                                    </div>

                                                                    <div class="col-md-7">
                                                                        <h3 style="margin: 0;"><strong>List
                                                                                Category</strong></h3>
                                                                        <hr>
                                                                        <div class="vertical-menu">
                                                                            <div class="item-menu active">Danh mục
                                                                            </div>
                                                                            @forelse ($categories as $category)
                                                                            <div class="item-menu">
                                                                                <span><i class="fas fa-arrow-right"></i>
                                                                                    {{ $category->name }}</span>
                                                                                <div class="category-fix">
                                                                                    <a class="btn-category btn-primary"
                                                                                        href="{{ route('admin.categories.edit', $category->id) }}"><i
                                                                                            class="fa fa-edit"></i></a>
                                                                                    <a href="{{ route('admin.categories.delete', $category->id) }}">
                                                                                    <button onclick="return conformDelete();" type="submit"
                                                                                        class="btn-category btn-danger"><i
                                                                                            class="fas fa-times"></i></button>
                                                                                        </a>
                                                                                </div>
                                                                            </div>
                                                                            @empty
                                                                            Form Category Empty!!! Pls Add Data To Table
                                                                            Categories!
                                                                            @endforelse

                                                                        </div>
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
