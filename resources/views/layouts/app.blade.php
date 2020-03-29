<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

     <!-- Scripts -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
     <script src="{{ asset('js/bootstrap.js') }}" defer></script>

     <!-- Fonts -->
     <link rel="dns-prefetch" href="//fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

     <!-- Styles -->
     <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">

         <div class="nav-banner">
            <div class="container">
                <div class="row logo-auth">
                    <div class="col-lg-9 col-md-9 col-sm-6 col-xs-6">
                        <div class="logo-top">
                                syucdagsklhj;
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <div class="account-top">

                                <div class=" nav-auth-user">
                                    <i class="fa fa-user"></i>
                                </div>
                                <div class=" nav-auth-words">
                                    <h6>MY ACCOUNT</h6>
                                @guest

                                        <a class="login-link" href="{{route('login')}}"><i class="fas fa-key"></i>&nbspLOGIN</a>
                                    @else

                                        <a href="#" class="dropdown-bt user-name" id="dropdwn" data-toggle="dropdown">{{Auth::user()->name}}<i class="fas fa-caret-down"></i></a>
                                         <ul class="account animated flipInY" id="account">
                                             <li><a href="page-profile2.html"><i class="icon-user"></i>My Product</a></li>
                                             <li><a href="{{ route('logout') }}" aria-haspopup="true" aria-expanded="false" v-pre onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();"><i class="icon-power"></i>Logout</a>
                                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                     @csrf
                                                 </form>
                                             </li>
                                         </ul>

                                     </div>

                                 @endguest
                                </div>

                        </div>
                    </div>
                </div>
            </div>

             <div class="navi-bar">
                <div class="container">
                   <div class="row">
                       <div class="col-ld-9 col-md-9 col-sm-12 navi-item">
                           <ul class="navig">
                                <li> CATEGORIES
                                    <i  class="fas fa-bars nav-toggle" id="nav-toggle"></i>

                                </li>
                                <li><a href="/">HOME</a></li>
                                <li><a href="{{ url('Product/create') }}">SALE</a></li>
                                <li><a href="">SMART INVESTOR</a></li>
                           </ul>
                       </div>
                   </div>
                </div>
            </div>
        </div>
            <div class="container">
                    <div class="cat-dropdown" id="dropdown-item">
                        <ul>
                            <li><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">ELECTRONICS <i class="fa fa-angle-right"></i></a></li>
                            <li>ELECTRONICS</li>
                            <li>CARS</li>
                            <li>CAKE</li>
                            <li>ELECTRONICS</li>
                            <li>CARS</li>
                            <li>CAKE</li>
                            <li>ELECTRONICS</li>
                            <li>CARS</li>
                        </ul>
                    </div>
            </div>

            <main class="py-4">
                @yield('content')
            </main>

    </div>
<script>
    const navButton = document.getElementById('nav-toggle');
const dropDownItem=document.getElementById('dropdown-item');

navButton.addEventListener('click', () => {
     dropDownItem.classList.toggle("show");

});
const dropDwn = document.getElementById('dropdwn');
const account = document.getElementById('account');
dropDwn.addEventListener( 'click',()=>{
    account.classList.toggle("show");
});
</script>
    <script src="{{ asset('js/wow.js') }}" defer></script>
    <script src="{{ asset('js/viewer.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/2e5f65967e.js" crossorigin="anonymous"></script>

</body>
</html>
