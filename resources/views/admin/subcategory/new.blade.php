@extends('layouts.admin')
@section('contents')
<div class="block-header">
    <div class="row">
        <div class="col-lg-6 col-md-8 col-sm-12">
            <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> New Product category</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html"> <i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item active">New Product category</li>
            </ul>
        </div>
        <div class="col-lg-6 col-md-4 col-sm-12 text-right">

        </div>
    </div>
</div>
<div class="container">
    <div class="list-display-box">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h1 style="margin-top:20px;margin-bottom:40px">
                    Please enter new Product Category
                </h1>
                <form method="POST" action="{{ route('Subcategory.store') }}" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        <select name="category" id="category"  class="form-control" >
                            <option>Choose Product category..</option>
                            @foreach ($categories as $category )
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="text" name="name" class="form-control"  aria-describedby="titleHelp" placeholder="Enter Product title">
                            @if($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                    </div>

                    <button type="submit">Add Product subcategory</button>


                </form>
            </div>
        </div>
    </div>
</div>



@endsection
