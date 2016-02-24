@extends('layouts.master')

@section('sidebar')
    
<<<<<<< HEAD
        <nav role="navigation" class="navbar navbar-inner navbar-fixed-top" style=" width:200px; height:1000px; background-image:url({{ URL::asset('images/bg.jpg'); }});" >
            <div class="sidebar-nav navbar-collapse" >
                    
                    <ul class="nav" id="side-menu" style=" width:200px; height:1000px; color:white;position:absolute; top:50px;">
=======
        <nav role="navigation" class="navbar navbar-inner navbar-fixed-top" >
            <div class="sidebar-nav navbar-collapse" >
                    
                    <ul class="nav" id="side-menu" style=" width:200px; height:500px; color:white;position:absolute; top:50px;">
>>>>>>> 1b9db34e36ca0038c0a633e20f1aceedf4ca4997
                      
                        <li>
                            <a href="/CustomerDetails">1.0 Customer</a>
                        </li>
                    
                        <li>
                            <a href="/SupplierDetails"> 2.0 Supplier</a>
                        </li>
                        <li>
                            <a href="#"> 3.0 Car Details <span class="glyphicon glyphicon-menu-down"></span> </a>
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
                            <a href="#"> 4.0 Products and Services <span class="glyphicon glyphicon-menu-down"></span> </a>
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
                            <a href="#"> 5.0 Package, Promo and Discounts <span class="glyphicon glyphicon-menu-down"></span> </a>
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
            </nav>
    
@section('content')
<div class="container" style="position:absolute; top:55px; left:200px; background-color:black opacity:0.4 ;  ">
<<<<<<< HEAD
    <div class="panel-body" style=" width:1100px; min-width:1100px; color:white;">
=======
    <div class="panel-body" style=" width:1100px; min-height:1700px; min-width:500px; color:white;">
>>>>>>> 1b9db34e36ca0038c0a633e20f1aceedf4ca4997
                     
                    @yield('contentMaintenance')
    </div>
</div>

</div>
@stop