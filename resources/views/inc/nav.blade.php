<div id="navigation">
    <!-- container -->
    <div class="container">
        <div id="responsive-nav">
            <!-- category nav -->
            <div class="category-nav show-on-click">
                <span class="category-header">Categories <i class="fa fa-list"></i></span>
                <ul class="category-list">
                    @foreach ($categories as $category )
                        <li class="dropdown side-dropdown">
                            <a class="" data-toggle="dropdown" aria-expanded="true">{{ $category->name }} <i style="float:right" class="fa fa-angle-right"></i></a>
                            <div class="custom-menu" >

                                        <ul class="list-links">

                                        @foreach ($category->subcategories as $subcategory )
                                        <li><a href="{{  url('/view/'.$subcategory->id) }}"> {{ $subcategory->name   }}</a></li>
                                        @endforeach

                                        </ul>

                            </div>
                        </li>
                    @endforeach


                </ul>
            </div>
            <!-- /category nav -->

            <!-- menu nav -->
            <div class="menu-nav">
                <span class="menu-header">Menu <i class="fa fa-bars"></i></span>
                <ul class="menu-list">
                    <li><a href="/">Home</a></li>
                    <li><a href="{{ url('Product/create') }}">Sales</a></li>
                    <li><a href="/Investment">Smart Investment</a></li>
                </ul>
            </div>
            <!-- menu nav -->
            {{-- <div class="search">
                <div class="row">
                    <div class="col-md-3 col-md-offset-6">
                        <form action="" class="search-form">
                            <div class="form-group has-feedback">
                                <label for="search" class="sr-only">Search</label>
                                <input type="text" class="form-control" name="search" id="search" placeholder="search">
                                  <span class="glyphicon glyphicon-search form-control-feedback"></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    <!-- /container -->
</div>
