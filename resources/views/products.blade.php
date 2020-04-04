@extends('layouts.app1')

	@section('content')
	<!-- BREADCRUMB -->
	<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li class="active">Products</li>
			</ul>
		</div>
	</div>
	<!-- /BREADCRUMB -->

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- MAIN -->
				<div id="main" class="col-md-12">
					<!-- store top filter -->
					<div class="store-filter clearfix">
						<div class="pull-right">
							<div class="page-filter">
								<span class="text-uppercase">Show:</span>
								<select class="input">
										<option value="0">10</option>
										<option value="1">20</option>
										<option value="2">30</option>
									</select>
							</div>
							<ul class="store-pages">
								<li><span class="text-uppercase">Page:</span></li>
								<li class="active">1</li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#"><i class="fa fa-caret-right"></i></a></li>
							</ul>
						</div>
					</div>
					<div id="store">
						<!-- row -->
                        <div class="row">
                                @foreach ($products as $product )
                                <!-- Product Single -->
                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                        <div class="product product-single">
                                            <div class="product-thumb">
                                            <a href="Product/{{ $product->id}}"><button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button></a>
                                                <img src="{{ Storage::url( $product->images[0]->name ) }}" alt="" style="height:250px">
                                            </div>
                                            <div class="product-body">
                                                <h3 class="product-price" style="text-align:center !imporant;width:100%">Price:{{ number_format($product->price,3 )}}</h3>
                                                <h2 class="product-name"><a style="text-align:center" href="Product/{{ $product->id  }}">{{ substr($product->title, 0, 30)}}</a></h2>
                                                <h2 class="product-name"><a href="#">Location:{{ $product->location }}</a></h2>
                                                <div class="product-btns">
                                                    <a href="sms:{{$product->user->phone}}&body=enquire%20from%20smart%20market%20product%20{{$product->title}}%20with%20price%20{{$product->price}}%20http://127.0.0.1:8000/Product{{$product->id}}"><button class="main-btn icon-btn"><i class="fa fa-comment"></i></button></a>
                                                    <a href="whatsapp://:{{$product->user->phone}}&body=enquire%20from%20smart%20market%20product%20{{$product->title}}%20with%20price%20{{$product->price}}%20http://127.0.0.1:8000/Product{{$product->id}}"><button class="main-btn icon-btn"><i class="fab fa-whatsapp"></i></button></a>
                                                    <a href="tel:{{ $product->user->phone }}"> <button class="main-btn icon-btn"><i class="fa fa-phone"></i></button></a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                        </div>
						<!-- /row -->
					</div>
					<!-- /STORE -->

					<!-- store bottom filter -->
					<div class="store-filter clearfix">
						<div class="pull-left">
							<div class="row-filter">
								<a href="#"><i class="fa fa-th-large"></i></a>
								<a href="#" class="active"><i class="fa fa-bars"></i></a>
							</div>
							<div class="sort-filter">
								<span class="text-uppercase">Sort By:</span>
								<select class="input">
										<option value="0">Position</option>
										<option value="0">Price</option>
										<option value="0">Rating</option>
									</select>
								<a href="#" class="main-btn icon-btn"><i class="fa fa-arrow-down"></i></a>
							</div>
						</div>
						<div class="pull-right">
							<div class="page-filter">
								<span class="text-uppercase">Show:</span>
								<select class="input">
										<option value="0">10</option>
										<option value="1">20</option>
										<option value="2">30</option>
									</select>
							</div>
							<ul class="store-pages">
								<li><span class="text-uppercase">Page:</span></li>
								<li class="active">1</li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#"><i class="fa fa-caret-right"></i></a></li>
							</ul>
						</div>
					</div>
					<!-- /store bottom filter -->
				</div>
				<!-- /MAIN -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->
	@endsection

