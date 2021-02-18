<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://kit.fontawesome.com/3e0c251e14.js" crossorigin="anonymous"></script>

<style>

.navbar
{
   background-image: linear-gradient(to right,#61f913,#29B6F6);
   padding: 0;    
}
.web-logo
{
  position: relative;
  left: 18px;
  display: none;
  
}
.mob-logo 
{
  position: relative;
  left: 18px;
  display: block;
}
.navbar-nav li
{
	padding: 0 10px;
	color: #fff !important;;
	font-weight: 600;
	float: right;
	text-align: left;
}


</style>
</head>
<body style='background-image: linear-gradient(to right,#61f913,#29B6F6);'>
	<nav class="navbar navbar-expand-md navbar-light">
	
	<h1 class="web-logo">Welcome</h1>  
	<h1 class="mob-logo">Welcome</h1>

	    <div class="collapse navbar-collapse" id="a">
        
        <ul class="navbar-nav ml-auto">

        <li class="nav-item">

        <a href="c_home.php" style="color: white;">Home</a></li>    	
      
        <li class="nav-item">

        <a href="c_form.php" style="color: white;">Create Account</a></li>

         <li class="nav-item">

        <a href="c_display.php" style="color: white;">Our Customers</a>

       
       </ul> 
</div>

</nav>
<!-- navbar end -->
	<div class="container" style="margin-top: 100px;">
		<div class="row">
			<div class="col-md-2"><h1 style="color: green;">Create Account</h1></div>
			<div class="col-md-8 Card shadow">
				<form class="form-group " method="post" action="c_insert.php">
			    <i class="fa fa-user" aria-hidden="true"></i> 
			    Name:
                <input type="text" name="c_name" placeholder="Enter Name" class="form-control">
				<br><br>
				<i class="fa fa-envelope" aria-hidden="true"></i>
				Email:
				<input type="text" name="email" placeholder="Enter Email" class="form-control">
				<br>
				Current Balance:
				<input type="number" name="current_balance" placeholder="Enter Balance" class="form-control">
				<br>
				<input type="submit" name="submit" value="submit" class="btn btn-info">
				

				</form>
			</div>
			<div class="col-md-2"></div>
			
			
		</div>
		
	</div>

</body>
</html>

