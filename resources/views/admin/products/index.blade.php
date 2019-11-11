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
            <li class="breadcrumb-item active">Products</li>
        </ol>
        <!-- DataTables Example -->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-box-open"></i> |
                <span>Products</span></a>
                <div class="card-body">
                    <div>
                        <!--/.row-->
                        <div class="bootstrap-table">
                            <div class="table-responsive">
                                {{-- alert --}}
                                <a href="{{ route('admin.products.create') }}" class="btn btn-primary">Thêm sản phẩm</a>
                                <table class="table table-bordered" style="margin-top:20px;">

                                    <thead>
                                        <tr class="bg-primary">
                                            <th>ID</th>
                                            <th>Thông tin sản phẩm</th>
                                            <th>Giá sản phẩm</th>
                                            <th>Tình trạng</th>
                                            <th>Danh mục</th>
                                            <th width='18%'>Tùy chọn</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($products as $product)
                                        <tr>
                                            <td>{{ $product->id }}</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-3"><img src="{{ $product->images }}" alt="Áo đẹp"
                                                            width="100px" class="thumbnail">
                                                    </div>
                                                    
                                                    <div class="col-md-9">
                                                        <p>Tên sản phẩm : {{ $product->name }}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{ $product->price }} VND</td>
                                            <td>
                                                @if ($product->quantity == 0)
                                                <a class="btn btn-danger" href="#" role="button">Hết Hàng</a>
                                                @else
                                                <a class="btn btn-success" href="#" role="button">Còn Hàng</a>
                                                @endif

                                            </td>
                                            <td>{{ $product->category_id }}</td>
                                            <td>
                                                <a href="{{ route('admin.products.edit', $product->id) }}"
                                                    class="btn btn-warning"><i class="fas fa-edit"
                                                    aria-hidden="true"></i></a>
                                                <a href="#" class="btn btn-danger"><i class="fa fa-trash"
                                                        aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                        @empty
                                        From Products Empty!!! Pls Add Data to
                                        Products Table!!!
                                        @endforelse

                                    </tbody>
                                </table>
                                <div align='right'>
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="#">Trở
                                                lại</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">2</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">3</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">tiếp
                                                theo</a></li>
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
