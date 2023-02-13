@extends('dashboard.layouts.app')
@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0"> All Products</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pe-0 float-start float-sm-end">
                    <li class="breadcrumb-item"><a href="index.html" class="default-color">Home</a></li>
                    <li class="breadcrumb-item active ps-0">All Products</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table-bordered border table table-striped dataTable p-0">
                            <thead>
                            <tr>
                                <th>SKU</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Status</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product )
                                <tr>
                                    <td>{{$product->sku}}</td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->category->name}}</td>
                                    <td>
                                        <span
                                            class="@if($product->status == 'active')text-success @else text-danger @endif ">{{$product->status}} </span>
                                    </td>
                                    <td class="tr-image"><img class="image-20" src="{{$product->image_url}}"></td>
                                    <td>
                                        <a class="pe-2" href="{{route('dashboard.product.edit',$product->id)}}"> <i
                                                class="fa fa-pencil"></i></a>

                                        <a id="sweetalert-08" class="fa fa-trash-o text-danger"
                                           href="{{route('dashboard.product.destroy',$product->id)}}"
                                           aria-label="Try me! Example: A warning message, with a function attached to the 'Confirm'-button">
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
    </div>
@endsection
