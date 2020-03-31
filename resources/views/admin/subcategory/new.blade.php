@extends('layouts.app')

@section('content')
	<!-- BREADCRUMB -->
	<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li><a href="#">Products</a></li>
				<li><a href="#">Create</a></li>

			</ul>
		</div>
	</div>
	<!-- /BREADCRUMB -->
<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h1 style="margin-top:20px;margin-bottom:40px">
                Please enter product detail to start sell with us
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
        <div class="col-lg-6 col-md-6 col-sm-12">
            didiaadhjavaohlk
        </div>
    </div>

</div>



@endsection
