<!DOCTYPE html>
<html>

<head>
   <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet">
     <link rel="stylesheet" href="{{ asset('css/panel.css') }}">
    <script src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Year', 'Sales', 'Expenses'],
                ['2004', 1000, 400],
                ['2005', 1170, 460],
                ['2006', 660, 1120],
                ['2007', 1030, 540]
            ]);

            var options = {
                title: 'Company Performance',
                curveType: 'function',
                legend: {
                    position: 'bottom'
                }
            };

            var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

            chart.draw(data, options);

            var datas = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],
                ['Work', 11],
                ['Eat', 2],
                ['Commute', 2],
                ['Watch TV', 2],
                ['Sleep', 7]
            ]);

            var optionss = {
                title: 'My Daily Activities',
                pieHole: 0.4,
                legend: 'none'
            };

            var charts = new google.visualization.PieChart(document.getElementById('donutchart'));
            charts.draw(datas, optionss);
        }
    </script>

</head>

<body class="d-flex flex-column h-100">


    <div id="navbar">
        <div class="row">
            <div class="col-lg-9 col-md-3 col-sm-4">
                <div class="logo">
                    <img src="images/huper.png" class="logo-img">
                    <span class="toggle-nav"><a href="#"><i class="fas fa-bars"></i></a></span>
                </div>
            </div>
            <div class="col-lg-3 col-md-9 col-sm-8">
                <ul class="top-nav-list">

                    <li><a href=""><i class="far fa-envelope"></i> </a></li>
                    <li><a href=""><i class="far fa-comments"></i></a></li>
                    <li><a href=""><i class="far fa-bell"></i></a></li>
                    <li><a href=""><i class="fas fa-sliders-h"></i></a></li>
                    <li><a href="#" aria-haspopup="true" aria-expanded="false" v-pre onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><i class="fas fa-power-off"></i></a></li>

                </ul>
            </div>
        </div>
    </div>
    <div class="contents">
        <div class="side-bar display">
            <div class="user-account">
                <img src="images/profile.jpeg" class="nav-profile">
                <div class="dropdown">
                    <span>Welcome,</span><br>
                    <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown" aria-expanded="false"><strong>Masenu Msuya</strong></a>
                    <ul class="dropdown-menu dropdown-menu-right account animated flipInY" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 80%; left: 0px; transform: translate3d(-70px, 42px, 0px);">
                        <li><a href=""><i class="far fa-user"></i>My Profile</a></li>
                        <li><a href=""><i class="far fa-envelope"></i>Messages</a></li>
                        <li><a href="javascript:void(0);"><i class="fas fa-user-cog"></i>Settings</a></li>
                        <li class="divider"></li>
                        <li><a href="#" aria-haspopup="true" aria-expanded="false" v-pre onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><i class="fas fa-power-off"></i>Logout</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </ul>
                </div>
                <hr>
            </div>

            <ul class="side-nav-list">
                <li class="main-item"><a href="/home"><i class="fas fa-tachometer-alt"></i>Dashboard</a></li>
                <li class="main-item"><a href=""><i class="far fa-envelope"></i>Inbox App</a></li>
                <li class="main-item"><a href=""><i class="far fa-comments"></i>Chat App</a></li>
                <li class="main-item dropdown-link"><a class="d-link" href="#"><i class="fas fa-bars"></i>Product Category <i class="arrow fas fa-chevron-left"></i></a>
                    <ul class="nav-dropdown">
                    <li><a href="{{route('Category.index')}}"><i class="fas fa-ellipsis-h"></i> View Categories</a></li>
                    <li><a href="{{ route('Category.create')}}"><i class="fas fa-ellipsis-h"></i> Add Categories</a></li>
                    </ul>
                </li>
                <li class="main-item dropdown-link"><a href="#"><i class="fas fa-store-alt"></i>Product Subcategory<i class="arrow fas fa-chevron-left"></i></a>
                    <ul class="nav-dropdown">
                        <li>
                        <a href="{{url('Subcategory')}}"><i class="fas fa-ellipsis-h"></i>view subcategories</a>
                        </li>
                        <li>
                        <a href="{{ url('Subcategory/create') }}"><i class="fas fa-ellipsis-h"></i>Add subcategory</a>
                        </li>
                    </ul>

                </li>
                <li class="main-item dropdown-link"><a href="#"><i class="fas fa-users"></i>Forums category<i class="arrow fas fa-chevron-left"></i></a>
                    <ul class="nav-dropdown">
                        <li>
                            <a href=""><i class="fas fa-ellipsis-h"></i>view Categories</a>
                        </li>
                        <li>
                            <a href=""><i class="fas fa-ellipsis-h"></i>Add category</a>
                        </li>
                    </ul>

                </li>
                <li class="main-item dropdown-link"><a href="#"><i class="fas fa-list"></i>Forums Subcategory<i class="arrow fas fa-chevron-left"></i></a>
                    <ul class="nav-dropdown">
                        <li>
                            <a href=""><i class="fas fa-ellipsis-h"></i>view subcategories</a>
                        </li>
                        <li>
                            <a href=""><i class="fas fa-ellipsis-h"></i>add subcategory</a>
                        </li>
                    </ul>

                </li>
                <li class="main-item"><a href=""><i class="far fa-user"></i>Registered user's</a></li>

            </ul>


        </div>
        <main role="main" class="flex-shrink-0 content">
        @yield('contents')
        </main>
        <footer class="footer mt-auto py-3">
            <img src="images/huper.png" class="footer-logo">
        </footer>


    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>


</body>
</html>

