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
            <li class="breadcrumb-item active">Edit Products</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
            <div class="card-header">
                    <i class="fas fa-box-open"></i> |
                    <span>Edit Products</span></a>
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
                                                    <form action="{{ route('admin.products.edit', $products->id) }}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                    <div class="col-xs-6 col-md-12 col-lg-12">
                                                        <div class="panel panel-primary">

                                                            <div class="panel-body">
                                                                <div class="row" style="margin-bottom:40px">

                                                                    <div class="col-md-8">
                                                                        <div class="form-group">
                                                                            <label>Danh mục</label>
                                                                            <select name="category_id"
                                                                                class="form-control">
                                                                                @forelse ($categories as $category)
                                                                                  <option value='{{ $category->id }}' 
                                                                                    @if ($products->category_id == $category->id)
                                                                                        selected
                                                                                    @endif
                                                                                    >{{ $category->name }}</option>
                                                                                @empty
                                                                                  Form Categories Empty!!! Pls Add Data To Categories Table!!!  
                                                                                @endforelse
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>Tên sản phẩm</label>
                                                                            <input type="text" name="name"
                                                                                class="form-control" value="{{ $products->name }}">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>Giá sản phẩm (Giá chung)</label>
                                                                            <input type="number" name="price"
                                                                                class="form-control" value="{{ $products->price }}">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>Sản phẩm có nổi bật</label>
                                                                            <select name="is_highlight"
                                                                                class="form-control">
                                                                                <option
                                                                                @if ($products->is_highlight == 0)
                                                                                    selected
                                                                                @endif
                                                                                value="0">Không</option>
                                                                                <option
                                                                                @if ($products->is_highlight == 1)
                                                                                    selected
                                                                                @endif
                                                                                value="1">Có</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                                <label>Số Lượng</label>
                                                                                <input type="number" name="quantity"
                                                                                    class="form-control" value="{{ $products->quantity }}">
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
                                                                                src="{{ $products->images }}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label>Mô Tả</label>
                                                                            <textarea name="description"
                                                                                style="width: 100%;height: 100px;">{{ $products->description }}o</textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <button class="btn btn-success"
                                                                            name="add-product" type="submit">Sửa sản
                                                                            phẩm</button>
                                                                        <button class="btn btn-danger" type="reset">Huỷ
                                                                            bỏ</button>
                                                                    </div>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
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
