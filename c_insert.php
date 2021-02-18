<?php
include 'dbcon1.php';
if (isset($_POST['submit']))
{
	echo $a = $_POST['c_name'];
	echo $b = $_POST['email'];
	echo $c = $_POST['current_balance'];

	$data = "INSERT INTO customer(c_name,email,current_balance)values('$a','$b','$c')";
	$result = mysqli_query($con,$data);

	if ($result) 
	{
		header('location:c_display.php');
    }
    else
    {
        echo "<script> alert('Please fill correct details')     </script>";
    }

}
?>