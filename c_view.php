<?php
include 'dbcon1.php';

if (isset($_GET['c_id'])) 
{
	echo $id = $_GET['c_id'];
	$i = "SELECT * from customer where c_id = $id";
	$result = mysqli_query($con,$i);

	$a = mysqli_fetch_array($result);


}


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body style='background-image: linear-gradient(to right,#61f913,#29B6F6);'>
	<div class="container"> 
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
	<center><h1>Customer Details</h1></center>
	<form method="post" action="customersinsert.php" class="form-group">

		<i class="fa fa-user" aria-hidden="true"></i> 
			    Name:
                <input type="text" name="name" value="<?php echo $a['c_name']?>" placeholder="Enter Name" class="form-control">
				<br><br>
				<i class="fa fa-envelope" aria-hidden="true"></i>
				Email:
				<input type="text" name="email" value="<?php echo $a['email']?>" placeholder="Enter Email" class="form-control">
				<br><br>
				Current Balance:
				<input type="number" name="current_balance" value="<?php echo $a['current_balance']?>" placeholder="Enter Balance" class="form-control">
				<br>
						
		        <a href="transfer.php?c_id=<?php echo $a['c_id']?>" class="btn btn-info" class="form-control">transfer</a>
		
	</form>
    </div>
    <div class="col-md-2"></div>
	</div>
	</div>


</body>
</html>