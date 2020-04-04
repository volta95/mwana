@extends('layouts.admin')

@section('contents')

    <div class="block-header">
        <div class="row">
            <div class="col-lg-6 col-md-8 col-sm-12">
                <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Dashboard</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"> <i class="fas fa-home"></i></a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ul>
            </div>
            <div class="col-lg-6 col-md-4 col-sm-12 text-right">

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="bg-blue box text-center">
                <div class="body">
                    <div class="p-15 text-light">
                        <h3>15,000</h3>
                        <span>Visitor's</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="bg-red box text-center">
                <div class="body">
                    <div class="p-15 text-light">
                        <h3>1,500</h3>
                        <span>Registered user's</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="bg-turqu box text-center">
                <div class="body">
                    <div class="p-15 text-light">
                        <h3>150</h3>
                        <span>Online user's</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="bg-yellow box text-center">
                <div class="body">
                    <div class="p-15 text-light">
                        <h3>15</h3>
                        <span>Forum's Discussion</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row space-down">
        <div class="col-12 element-style" style="padding: 30px;">
            <div id="curve_chart" style="height: 400px"></div>
        </div>
    </div>
    <div class="row space-down">
        <div class="col-lg-4 col-md-4 cl-sm-12">
            <div class="element-style">
                <ul class="dash-items">
                    <li>
                        <a href="">
                            <i class="far fa-envelope"></i>Inbox <span class="dash-number border-turqu">20</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="far fa-comments"></i>Messages <span class="dash-number border-yellow">142</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="far fa-eye"></i>Profile Visitor<span class="dash-number border-red">1256</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="far fa-bell"></i>Notification <span class="dash-number border-blue">20</span>
                        </a>
                    </li>
                    <li>
                        <a href=""><i class="fas fa-bug"></i>Report <span class="dash-number border-turqu">132</span>
                        </a>
                    </li>
                </ul>

            </div>
        </div>
        <div class="col-lg-4 col-md-4 cl-sm-12">
            <div class="element-style">

            </div>
        </div>
        <div class="col-lg-4 col-md-4 cl-sm-12">
            <div class="element-style">
                <h4 class="todo-title">Todo Lists</h4>
                <ul class="todo-lists">
                    <li class="todo-click checked">
                        <div class="todo-icon">
                            <i class="fas fa-bars"></i>
                        </div>
                        <div class="todo-input">
                            <label class="img" for="todo-box"></label>
                            <input id="todo-box" type="checkbox">
                            <span class="todo-content">
                                Design website
                            </span>
                        </div>
                    </li>
                    <li class="todo-click">
                        <div class="todo-icon">
                            <i class="fas fa-bars"></i>
                        </div>
                        <div class="todo-input">
                            <label class="img" for="todo-box"></label>
                            <input id="todo-box" type="checkbox">
                            <span class="todo-content">
                                Design website
                            </span>
                        </div>
                    </li>
                    <li class="todo-click">
                        <div class="todo-icon">
                            <i class="fas fa-bars"></i>
                        </div>
                        <div class="todo-input">
                            <label class="img" for="todo-box"></label>
                            <input id="todo-box" type="checkbox">
                            <span class="todo-content">
                                Design website
                            </span>
                        </div>
                    </li>
                    <li class="todo-click">
                        <div class="todo-icon">
                            <i class="fas fa-bars"></i>
                        </div>
                        <div class="todo-input">
                            <label class="img" for="todo-box"></label>
                            <input id="todo-box" type="checkbox">
                            <span class="todo-content">
                                Design website
                            </span>
                        </div>
                    </li>
                    <li class="todo-click">
                        <div class="todo-icon">
                            <i class="fas fa-bars"></i>
                        </div>
                        <div class="todo-input">
                            <label class="img" for="todo-box"></label>
                            <input id="todo-box" type="checkbox">
                            <span class="todo-content">
                                Design website
                            </span>
                        </div>
                    </li>

                </ul>

            </div>
        </div>
    </div>
    <div class="row space-down">
        <div class="col-lg-8 col-md-8 cl-sm-12">
            <div class="element-style table-padding">
                <h5>Product subcategories</h5>
                <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="th-sm">Name

                            </th>
                            <th class="th-sm">Position

                            </th>
                            <th class="th-sm">Office

                            </th>
                            <th class="th-sm">Age

                            </th>
                            <th class="th-sm">Start date

                            </th>
                            <th class="th-sm">Salary

                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                        </tr>
                        <tr>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>63</td>
                            <td>2011/07/25</td>
                            <td>$170,750</td>
                        </tr>
                        <tr>
                            <td>Ashton Cox</td>
                            <td>Junior Technical Author</td>
                            <td>San Francisco</td>
                            <td>66</td>
                            <td>2009/01/12</td>
                            <td>$86,000</td>
                        </tr>
                        <tr>
                            <td>Cedric Kelly</td>
                            <td>Senior Javascript Developer</td>
                            <td>Edinburgh</td>
                            <td>22</td>
                            <td>2012/03/29</td>
                            <td>$433,060</td>
                        </tr>
                        <tr>
                            <td>Airi Satou</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>33</td>
                            <td>2008/11/28</td>
                            <td>$162,700</td>
                        </tr>
                        <tr>
                            <td>Brielle Williamson</td>
                            <td>Integration Specialist</td>
                            <td>New York</td>
                            <td>61</td>
                            <td>2012/12/02</td>
                            <td>$372,000</td>
                        </tr>
                        <tr>
                            <td>Herrod Chandler</td>
                            <td>Sales Assistant</td>
                            <td>San Francisco</td>
                            <td>59</td>
                            <td>2012/08/06</td>
                            <td>$137,500</td>
                        </tr>
                        <tr>
                            <td>Rhona Davidson</td>
                            <td>Integration Specialist</td>
                            <td>Tokyo</td>
                            <td>55</td>
                            <td>2010/10/14</td>
                            <td>$327,900</td>
                        </tr>
                        <tr>
                            <td>Colleen Hurst</td>
                            <td>Javascript Developer</td>
                            <td>San Francisco</td>
                            <td>39</td>
                            <td>2009/09/15</td>
                            <td>$205,500</td>
                        </tr>
                        <tr>
                            <td>Sonya Frost</td>
                            <td>Software Engineer</td>
                            <td>Edinburgh</td>
                            <td>23</td>
                            <td>2008/12/13</td>
                            <td>$103,600</td>
                        </tr>
                        <tr>
                            <td>Jena Gaines</td>
                            <td>Office Manager</td>
                            <td>London</td>
                            <td>30</td>
                            <td>2008/12/19</td>
                            <td>$90,560</td>
                        </tr>
                        <tr>
                            <td>Quinn Flynn</td>
                            <td>Support Lead</td>
                            <td>Edinburgh</td>
                            <td>22</td>
                            <td>2013/03/03</td>
                            <td>$342,000</td>
                        </tr>
                        <tr>
                            <td>Charde Marshall</td>
                            <td>Regional Director</td>
                            <td>San Francisco</td>
                            <td>36</td>
                            <td>2008/10/16</td>
                            <td>$470,600</td>
                        </tr>
                        <tr>
                            <td>Haley Kennedy</td>
                            <td>Senior Marketing Designer</td>
                            <td>London</td>
                            <td>43</td>
                            <td>2012/12/18</td>
                            <td>$313,500</td>
                        </tr>
                        <tr>
                            <td>Tatyana Fitzpatrick</td>
                            <td>Regional Director</td>
                            <td>London</td>
                            <td>19</td>
                            <td>2010/03/17</td>
                            <td>$385,750</td>
                        </tr>
                        <tr>
                            <td>Michael Silva</td>
                            <td>Marketing Designer</td>
                            <td>London</td>
                            <td>66</td>
                            <td>2012/11/27</td>
                            <td>$198,500</td>
                        </tr>
                        <tr>
                            <td>Paul Byrd</td>
                            <td>Chief Financial Officer (CFO)</td>
                            <td>New York</td>
                            <td>64</td>
                            <td>2010/06/09</td>
                            <td>$725,000</td>
                        </tr>
                        <tr>
                            <td>Gloria Little</td>
                            <td>Systems Administrator</td>
                            <td>New York</td>
                            <td>59</td>
                            <td>2009/04/10</td>
                            <td>$237,500</td>
                        </tr>
                        <tr>
                            <td>Bradley Greer</td>
                            <td>Software Engineer</td>
                            <td>London</td>
                            <td>41</td>
                            <td>2012/10/13</td>
                            <td>$132,000</td>
                        </tr>
                        <tr>
                            <td>Dai Rios</td>
                            <td>Personnel Lead</td>
                            <td>Edinburgh</td>
                            <td>35</td>
                            <td>2012/09/26</td>
                            <td>$217,500</td>
                        </tr>
                        <tr>
                            <td>Jenette Caldwell</td>
                            <td>Development Lead</td>
                            <td>New York</td>
                            <td>30</td>
                            <td>2011/09/03</td>
                            <td>$345,000</td>
                        </tr>
                        <tr>
                            <td>Yuri Berry</td>
                            <td>Chief Marketing Officer (CMO)</td>
                            <td>New York</td>
                            <td>40</td>
                            <td>2009/06/25</td>
                            <td>$675,000</td>
                        </tr>
                        <tr>
                            <td>Caesar Vance</td>
                            <td>Pre-Sales Support</td>
                            <td>New York</td>
                            <td>21</td>
                            <td>2011/12/12</td>
                            <td>$106,450</td>
                        </tr>
                        <tr>
                            <td>Doris Wilder</td>
                            <td>Sales Assistant</td>
                            <td>Sidney</td>
                            <td>23</td>
                            <td>2010/09/20</td>
                            <td>$85,600</td>
                        </tr>
                        <tr>
                            <td>Angelica Ramos</td>
                            <td>Chief Executive Officer (CEO)</td>
                            <td>London</td>
                            <td>47</td>
                            <td>2009/10/09</td>
                            <td>$1,200,000</td>
                        </tr>
                        <tr>
                            <td>Gavin Joyce</td>
                            <td>Developer</td>
                            <td>Edinburgh</td>
                            <td>42</td>
                            <td>2010/12/22</td>
                            <td>$92,575</td>
                        </tr>
                        <tr>
                            <td>Jennifer Chang</td>
                            <td>Regional Director</td>
                            <td>Singapore</td>
                            <td>28</td>
                            <td>2010/11/14</td>
                            <td>$357,650</td>
                        </tr>
                        <tr>
                            <td>Brenden Wagner</td>
                            <td>Software Engineer</td>
                            <td>San Francisco</td>
                            <td>28</td>
                            <td>2011/06/07</td>
                            <td>$206,850</td>
                        </tr>
                        <tr>
                            <td>Fiona Green</td>
                            <td>Chief Operating Officer (COO)</td>
                            <td>San Francisco</td>
                            <td>48</td>
                            <td>2010/03/11</td>
                            <td>$850,000</td>
                        </tr>
                        <tr>
                            <td>Shou Itou</td>
                            <td>Regional Marketing</td>
                            <td>Tokyo</td>
                            <td>20</td>
                            <td>2011/08/14</td>
                            <td>$163,000</td>
                        </tr>
                        <tr>
                            <td>Michelle House</td>
                            <td>Integration Specialist</td>
                            <td>Sidney</td>
                            <td>37</td>
                            <td>2011/06/02</td>
                            <td>$95,400</td>
                        </tr>
                        <tr>
                            <td>Suki Burks</td>
                            <td>Developer</td>
                            <td>London</td>
                            <td>53</td>
                            <td>2009/10/22</td>
                            <td>$114,500</td>
                        </tr>
                        <tr>
                            <td>Prescott Bartlett</td>
                            <td>Technical Author</td>
                            <td>London</td>
                            <td>27</td>
                            <td>2011/05/07</td>
                            <td>$145,000</td>
                        </tr>
                    </tbody>

                </table>

            </div>

        </div>
        <div class="col-lg-4 col-md-4 cl-sm-12 ">
            <div class="pie-chart element-style">
                <div id="donutchart" style="width: 98%; height:95%;"></div>
            </div>

        </div>
    </div>

@endsection
