@extends('layouts.master')

@section('content')
<center>
	<br>
	<br>
<div class="row-lg-2" style="alignment:center">

                      <div class="container" style="background-color:#cc0000">
					  <font color=white>
					  	<h1>TBK Carwash and Autodetailing</h1>
						</font>
					  </div>
                       
						<table>
						<tr  rowspan="90"> <td>  </td>
						<tr> <td>
							<div class="jumbotron" style="background-color:transparent" >
							
								<div class="container">
								<font color="white">
									<h1>&nbsp;</h1>
								</font>	
								</div>
							</div>
							<!--this should be a post method!!-->
							<form method="get" action="/Home" accept-charset="UTF-8">
								<table>
									
									<tr>	<td> <font color=white>Username &nbsp; &nbsp; 	</font>	</td> <td><input id="login_username" class="form-control" type="text"  required style="margin-bottom:4px"></td> 
									<tr>	<td> <font color=white>Password &nbsp; &nbsp;	</font>	</td><td> <input id="login_password" class="form-control" type="password" required></td> 
											
									
									<tr>	<td colspan="2"> <br>
									
									<input class="btn btn-danger btn-block" type="submit" id="sign-in" value="Log in">
								
								</table>
							</form>
									<br><br><br><br><br><br><br><br>
                      </td>
					  </table>
					  <br>
					   <font color=white>   2016. All rights reserved. </font>
             


</center>

@stop