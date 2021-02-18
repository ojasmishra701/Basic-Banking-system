<?php
include 'dbcon1.php';
if (isset($_GET['c_id'])) 
{
	echo $id = $_GET['c_id'];
	$data = "SELECT * FROM customer WHERE c_id = $id";
	$result = mysqli_query($con,$data);

	$a = mysqli_fetch_array($result);
    $c_name = $a['c_name'];
}
 

?>
<!--update -->
<?php
include 'dbcon1.php';
 if (isset($_POST['submit'])) 
 {
    $id1 = $_POST['id1'];
   	$amount = $_POST['amount'];

	if ($a['current_balance']>=$amount) 
	{
		$update = "UPDATE customer SET current_balance = current_balance - $amount WHERE c_id = $id";
		$result = mysqli_query($con,$update);

		$update = "UPDATE customer SET current_balance = current_balance + $amount WHERE c_id = $id1";
		$result = mysqli_query($con,$update);

        $data = "SELECT * FROM customer WHERE c_id = $id1";
        $result = mysqli_query($con,$data);

        $a = mysqli_fetch_array($result);

        $name = $a['c_name'];
        $data = "INSERT INTO transfer(t_name,amount,c_id,c_name)values('$name', '$amount','$id','$c_name')";
        $result = mysqli_query($con,$data);

        if ($result) 
        {
        	echo '<script>alert("Transfered succesfully")</script>';
            header('Location:transferdisplay.php');
        }
        else
	   {
       echo '<script>alert("insufficient balance")</script>';  
	   } 
	  

	}
	
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
    			
    		    <center><h1><?php echo $a['c_name']?>Transfer Money</h1></center>
    			<form method="post" class="form-group">
    				Name:
    				<select class="form-control" name="id1">
    					<option >Select</option>
    					<?php
                        include 'dbcon1.php';
                        $data = "SELECT * FROM customer";
                        $result = mysqli_query($con,$data);
                        while ($a = mysqli_fetch_array($result)) {
                           
                        

                        ?>
                        <option value="<?php echo $a['c_id']?>"><?php echo $a['c_name']?></option>
                    <?php }?>
    				</select>
    				<br><br>
    			
    			    Amount:
    				<input type="number" name="amount" placeholder="Enter Amount" class="form-control">
    				<br><br>
    				

    				<input type="submit" name="submit" value="submit" class="btn btn-info form-control">

    			</form>
    		</div>
    		<div class="col-md-2"></div>
    	</div>
    </div>
	

</body>
</html>