@extends('admin.layout.auth')
@section('title','products')
@section('adminContent')

<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>DataTable</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    DataTable
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <div class="dropdown">
                            <a
                                class="btn btn-primary dropdown-toggle"
                                href="#"
                                role="button"
                            >
                                January 2018
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Export List</a>
                                <a class="dropdown-item" href="#">Policies</a>
                                <a class="dropdown-item" href="#">View Assets</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Simple Datatable start -->
            <div class="card-box mb-30">
                <div class="pd-20">
                    <a
                    class="col-12 btn btn-primary"
                    href="{{ route('add_product') }}"
                    role="button"
                >
                    Add product
                </a>
                </div>
                <div class="pd-20">
                    <h4 class="text-blue h4">Data Table Products</h4>
                </div>
                <div class="pb-20">
                    <table class="data-table table stripe hover nowrap">
                        <thead>

                            <tr>
                                <th class="table-plus datatable-nosort">Name</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>author</th>
                                <th>discount</th>
                                <th>Stock</th>
                                <th>Category</th>
                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </thead>
                        @forelse ($products as $product )
                        <tbody>
                            <tr>
                                <td class="table-plus">{{$product->name}}</td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->description}}</td>
                                <td>{{$product->author}}</td>
                                <td>{{$product->discount}}</td>
                                <td>{{$product->stock}}</td>
                                <td>{{$product->category->name}}</td>
                                <td>
                                    <div class="dropdown">
                                        <a
                                            class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                            href="#"
                                            role="button"
                                            data-toggle="dropdown"
                                        >
                                            <i class="dw dw-more"></i>
                                        </a>
                                        <div
                                            class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
                                        >
                                            <a class="dropdown-item" href="{{ route('update_product',['id'=>$product->id]) }}"
                                                ><i class="dw dw-edit2"></i> Edit</a
                                            >
                                            <form action="{{ route('delete_product',['id'=>$product->id]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                            <button class="dropdown-item" type="submit"
                                                ><i class="dw dw-delete-3"></i> Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <h1>sorry we dont have any prodcuts</h1>
                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Simple Datatable End -->
            <!-- multiple select row Datatable start -->

            <!-- multiple select row Datatable End -->
            <!-- Checkbox select Datatable start -->



            <!-- Export Datatable End -->
        </div>

@endsection
