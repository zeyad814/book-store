@extends('admin.layout.auth')
@section('title','Addproducts')
@section('adminContent')

<div class="mobile-menu-overlay"></div>
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">

            <div class="pd-20 card-box mb-30">
                <div class="clearfix">


                    <div class="pull-left">
                        <h4 class="text-blue h4">ADD PRODUCT</h4>
                        <p class="mb-30">Fill this form to add doctor</p>
                    </div>
                    <div class="pull-right">
                    </div>

                </div>
                <form action="{{ route('submit_update_product',['id'=>$products->id]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">name</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" type="text" value="{{ old('name') }}" name="name">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Price</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" value="{{ old('price') }}" name="price" type="number">
                            @error('price')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">author</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" name="author"  type="text">
                            @error('author')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Description</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" name="description" value="{{ old('description') }}" type="text">
                            @error('discription')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Image</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" name="image" value="{{ old('image') }}" type="file">
                            @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Discount</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" name="discount" value="{{ old('discount') }}" type="number">
                            @error('discount')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Stock</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" name="stock" value="{{ old('stock') }}" type="number">
                            @error('stock')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Number of Pages</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" name="number_of_pages" value="{{ old('number_of_pages') }}" type="number">
                            @error('number_of_pages')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Category</label>
                        <div class="col-sm-12 col-md-10">
                            <select class="custom-select col-12" name="category_id">
                                @foreach ($categores as $category)
                                    <option {{ old('major_id') == $category->id ? 'selected' : '' }} value="{{ $category->id }}">
                                        {{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('major_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label"></label>
                        <div class="col-sm-12 col-md-10">
                            <input class="btn btn-primary btn-lg" type="submit">
                        </div>
                    </div>

                </form>
                <div class="collapse collapse-box" id="basic-form1">
                    <div class="code-box">
                        <div class="clearfix">
                            <a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left"
                                data-clipboard-target="#copy-pre"><i class="fa fa-clipboard"></i> Copy Code</a>
                            <a href="#basic-form1" class="btn btn-primary btn-sm pull-right" rel="content-y"
                                data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Code</a>
                        </div>
                        <pre><code class="xml copy-pre" id="copy-pre">

                </code></pre>
                    </div>
                </div>
            </div>


            </code></pre>
        </div>
    </div>
</div>
</div>
<div class="footer-wrap pd-20 mb-20 card-box">
    DeskApp - Bootstrap 4 Admin Template By
    <a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
</div>
</div>
</div>

@endsection
