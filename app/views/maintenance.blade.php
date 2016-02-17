@extends('layouts.master')

@section('content')
<nav role="navigation" class="navbar navbar-inner navbar-fixed-top drop_shadow">
  
<div class="navbar-inner sidebar" role="navigation"  style="width:141px;height:1200px; border:2px solid; border-color:black; border-top:0px;">
                <div class="sidebar-nav navbar-collapse" >
                    <ul class="nav" id="side-menu">
                      
                        <li>
                            <a href="/CustomerDetails">1.0 Customer Details</a>
                        </li>
                    
                        <li>
                            <a href="/SupplierDetails"> 2.0 Supplier</a>
                        </li>
                        <li>
                            <a href="#"> 3.0 Car Details</a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/CarType">3.1 Car Type</a>
                                </li>
                                <li>
                                    <a href="/CarBrand">3.2 Car Brand</a>
                                </li>
                                 <li>
                                    <a href="/CarModel">3.3 Car Model</a>
                                </li>
                            </ul>
                            <li>
                            <a href="#"> 4.0 Products and Services</a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/Categories">4.1 Products and Services Category</a>
                                </li>
                                <li>
                                    <a href="/ServiceDetails">4.2 Service Details </a>
                                </li>
                                 <li>
                                    <a href="/ProductDetails">4.3 Product Details</a>
                                </li>
                            </ul>
                            
                    
                            <!-- /.nav-second-level -->
                        </li>
                        
                        <li>
                            <a href="#"> 5.0 Package, Promo and Discounts </a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/Package">5.1 Packages</a>
                                </li>
                                <li>
                                    <a href="/Promo">5.2 Promos</a>
                                </li>
                                 <li>
                                    <a href="/FreqCard">5.3 Frequency Card</a>
                                </li>
                            </ul>
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>

        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="navbar-brand">TBK Carwash</div>
        </div>
        <!-- Collection of nav links and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li ><a href="/Home">Home</a></li>
                <li class="active"><a href="#">Maintenance</a></li>
                <li><a href="#">Scheduling</a></li>
                <li><a href="#">Transaction</a></li>
                <li><a href="#">Reports</a></li>
            </ul>
            <ul class="nav navbar-top-links navbar-right">
              
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        Account
                    </a>
                    <ul class="dropdown-menu dropdown-user" style="background-color:#cc0000; ">
                        <li><a href="#"><font color=white> User Profile</a></font>
                        </li>
                        <li><a href="#"><font color=white>Settings</a></font>
                        </li>
                        <li class="divider"></li>
                        <li><a href="/Login"><font color=white>Logout</a></font>
                        </li>
                        
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </div>

</nav> -->

<div class="container" style="position:absolute; top:55px; left:122px; background-color:black opacity:0.4 ;  ">
    <div class="panel-body" style=" width:1216px; min-height:1700px; ">
                     
                    @yield('contentMaintenance')
    </div>
</div>

</div>
@stop