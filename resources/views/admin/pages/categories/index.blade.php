@extends('admin.layout.auth')
@section('title','Categories')
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
                                    Category DataTable
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">

                    </div>
                </div>
            </div>
            <!-- Simple Datatable start -->
            <div class="card-box mb-30">
                <div class="pd-20">
                    <a
                    class="col-12 btn btn-primary"
                    href="{{ route('add_category') }}"
                    role="button"
                >
                    Add category
                </a>
                </div>
                <div class="pd-20">
                    <h4 class="text-blue h4">Categories Data Table </h4>
                </div>
                <div class="pb-20">
                    <table class="data-table table stripe hover nowrap">
                        <thead>

                            <tr>
                                <th class="table-plus datatable-nosort">ID</th>
                                <th class="table-plus datatable-nosort">Name</th>
                                <th>Image</th>
                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </thead>
                        @forelse ($categories as $category )
                        <tbody>
                            <tr>
                                <td class="table-plus">{{$category->id}}</td>
                                <td class="table-plus">{{$category->name}}</td>
                                <td>{{$category->image}}</td>
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
                                            <form action="{{ route('delete_category',['id' => $category->id]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                            <button type="submit" class="dropdown-item"><i class="dw dw-delete-3"></i> Delete</button>
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
