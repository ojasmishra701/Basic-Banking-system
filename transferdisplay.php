<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
	<table class="table table-striped table-primary">
		<tr>
			<th>T_id</th>
			<th>Transfered To</th>
            <th>Amount Transfered</th>
            <th>C_id</th>
			<th>Tranfered By</th>
		</tr>
	
	<?php
    include ("dbcon1.php");
    $data = "SELECT * from transfer";
    $result = mysqli_query($con,$data);
    while ($a = mysqli_fetch_array($result)) {
    
    ?>
    <tr>
    <td><?php echo $a['t_id'] ?></td>
    <td><?php echo $a['t_name'] ?></td>
    <td><?php echo $a['amount']?>Rs</td>
    <td><?php echo $a['c_id'] ?></td>
    <td><?php echo $a['c_name']?></td>
    </tr>
<?php }?>

 
</body>
</html>