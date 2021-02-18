<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
	<table class="table table-striped table-primary">
		<tr>
			<th>c_id</th>
			<th>C_Name</th>
            <th>Balance</th>
			<th>Action</th>
		</tr>
	
	<?php
    include ("dbcon1.php");
    $data = "SELECT * from customer";
    $result = mysqli_query($con,$data);
    while ($a = mysqli_fetch_array($result)) {
    
    ?>
    <tr>
    <td><?php echo $a['c_id'] ?></td>
    <td><?php echo $a['c_name'] ?></td>
    <td><?php echo $a['current_balance']?></td>
   
    
    
    <td>
    	<a href="transfer.php?c_id=<?php echo $a['c_id'] ?>"class="btn btn-primary">Transfer</a>
    	
    	
    </tr>
    <?php }?>
</table>
</body>
</html>