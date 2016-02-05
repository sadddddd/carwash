@extends('layouts.master')

@section('content')
	<nav role="navigation" class="navbar navbar-inner navbar-fixed-top">
  
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
                <li class="active"><a href="#">Home</a></li>
                <li><a href="maintenance.html">Maintenance</a></li>
                <li><a href="scheduling.html">Scheduling</a></li>
				<li><a href="transaction.html">Transaction</a></li>
				<li><a href="transaction.html">Reports</a></li>
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
                        <li><a href="login.html"><font color=white><i class="fa fa-sign-out fa-fw"></i> Logout</a></font>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </div>
</nav>
<br>
<div class="jumbotron" style="background-color:transparent;">
    <div class="container">
	<font color=white>
        <h1>TBK Carwash</h1>
        <p>New  Carwash and Autodetailing in San Juan!</p>
	</font>
    </div>
</div>

@stop