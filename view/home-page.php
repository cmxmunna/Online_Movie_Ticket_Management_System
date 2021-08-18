<?php include('../control/sessioncontrol.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home</title>
	<link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
</head>
<body>
	<div class="header"><h2>Online Ticket System</h2></strong></div>
	<?php include '../view/topnav.php';?>
	<span class="fs-35">HOME PAGE</span><br>
	<span class="fs-25">Welcome, <span style="color: red"><?php echo $user; ?></span></span><br>
	<span class="fs-20">Account Type: <span style="color: green"><?php echo $type; ?></span></span>
	<br><br><br><br>
	<?php
		if($type=="Admin")
		{
			include('../view/admin-dashboard.php');
		}
		else if($type=="Employee")
		{
			include('../view/employee-dashboard.php');
		}
		else if($type=="Seller")
		{
			include('../view/seller-dashboard.php');
		}
		else if($type=="User")
		{
			include('../view/user-dashboard.php');
		} 
	?>
	
	<?php include '../view/footer.php' ; ?>

</body>
</html>