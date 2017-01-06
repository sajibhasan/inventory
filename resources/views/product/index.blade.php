@extends('admin.master')
@section('content')
   
    <div id="page-wrapper">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Products</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="row" >
                <div class="col-lg-12" >
                    <a href="{{ route('product.create')}}" class="btn btn-emp btn-info" role="button"> <i class="fa fa-plus"></i>
                        <b>Add New Product</b></a>
                </div>
            </div>
            <br/>

            </br>
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th><span>ID</span></th>
                                <th><span>Brand</span></th>
                                <th><span>Supliers</span></th>
                                <th><span>Product Name</span></th>
                                <th><span>Product Type</span></th>
                                <th><span>Total</span></th>
                               
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach( $productlist as $key=>$product)
                                <tr>
                                    <td class="text-center">{{ ++$key }}</td>
                                    <td class="text-center">{{ $product->brand_name}}</td>
                                    <td class="text-center">{{ $product->suplier_name}}</td>
                                    <td class="text-center">{{ $product->product_name }}</td>
                                    <td class="text-center">{{ $product->product_type}}</td>
                                    <td class="text-center">{{$product->total_product}}</td>
                                    <td class="text-center" style="width: 20%;">
                                    <a href="#" class="table-link">
                                        <span class="fa-stack">
                                            <i class="fa fa-square fa-stack-2x"></i>
                                            <i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
                                        </span>
                                    </a>
                                    </td>
                                </tr>
                            @endforeach
                           </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>

@endsection