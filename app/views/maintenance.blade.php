@extends('layouts.master')

@section('content')
<nav role="navigation" class="navbar navbar-inner navbar-fixed-top">
  
<div class="navbar-inner sidebar" role="navigation"  style="width:141px;height:1200px; border:2px solid; border-color:black; border-top:0px;">
                <div class="sidebar-nav navbar-collapse" >
                    <ul class="nav" id="side-menu">
                      
                        <li>
                            <a href="/CustomerDetails"><i class="fa  fa-user fa-fw"></i> 1.0 Customer Details</a>
                        </li>
					
						<li>
                            <a href="/SupplierDetails"><i class="fa  fa-wrench fa-fw"></i> 2.0 Supplier</a>
                        </li>
						<li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> 3.0 Car Details<span class="fa arrow"></span></a>
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
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> 4.0 Products and Services<span class="fa arrow"></span></a>
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
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> 5.0 Package, Promo and Discounts<span class="fa arrow"></span></a>
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
                <li ><a href="home.html">Home</a></li>
                <li class="active"><a href="#">Maintenance</a></li>
                <li><a href="#">Scheduling</a></li>
				<li><a href="#">Transaction</a></li>
				<li><a href="#">Reports</a></li>
            </ul>
			<ul class="nav navbar-top-links navbar-right">
              
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user" style="background-color:#cc0000; ">
                        <li><a href="#"><font color=white><i class="fa fa-user fa-fw"></i> User Profile</a></font>
                        </li>
                        <li><a href="#"><font color=white><i class="fa fa-gear fa-fw"></i> Settings</a></font>
                        </li>
                        <li class="divider"></li>
                        <li><a href="/Login"><font color=white><i class="fa fa-sign-out fa-fw"></i> Logout</a></font>
                        </li>
						
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </div>

</nav>
<div class="container"  style="position:absolute; top:10%; left:80%;" >
							<button type="button" class="btn btn-danger btn-circle btn-lg" title="Add"><i class="glyphicon-plus"></i> </button>
							<button type="button" class="btn btn-danger btn-circle btn-lg" title="Update"><i class="fa fa-edit"></i> </button>
							<button type="button" class="btn btn-danger btn-circle btn-lg" title="Delete"><i class="fa fa-times"></i> </button>
						</div>

@stop