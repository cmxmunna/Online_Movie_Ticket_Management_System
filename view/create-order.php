<?php 
	include('../control/create-orderControl.php'); 
	include('../control/sessioncontrol.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Profile</title>
	<link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
</head>
<body>
	<div class="header"><h2>Online Ticket System</h2></strong></div>
	<p><a href="../view/home-page.php" class="link-hvr">← Back to Home</a><p>
	<p><a href="../view/view-menu-for-order.php" class="link-hvr">✘ Cancel and Back to Menu</a><p>
	<form action="" method="POST" onsubmit="return peymentGetwayValidation()">
		<table align="center">
			<tr>
				<td colspan="2"><h1>CONFIRM ORDER</h1></td>
			</tr>
			<tr>
				<td><label>Movie ID </label></td>
				<td>: <span class="green f20"><?php echo $id ?></span>
				<input type="hidden" name="username" value="<?php echo $user ?>">
				<input type="hidden" name="movie_id" value="<?php echo $id ?>"> </td>
				<td rowspan="5"><img src="../resources/movie_img/<?php echo $image ?>" alt="Movie" width="150px"></td>
			</tr>
			<tr>
				<td><label>Movie Name </label></td>
				<td>: <span class="green f20"> <?php echo $moviename ?></span>
					  <input type="hidden" name="moviename" id="moviename" value="<?php echo $moviename ?>"></td>
			</tr>
			<tr>
				<td><label>Category </label></td>
				<td>: <span class="green f20"> <?php echo $category ?></span>
				 <input type="hidden" name="category" id="category" value="<?php echo $category ?>"></td>
			</tr>
			<tr>
				<td><label>Showing Date </label></td>
				<td style="width: 300px"><fieldset><span class="green f20"> <?php echo $date ?></span></fieldset> 
				<input type="hidden" name="date" id="date" value="<?php echo $date ?>"></td>
			</tr>
			<tr>
				<td><label>Showing Time </label></td>
				<td style="width: 300px"><fieldset><span class="green f20"> <?php echo $time ?></span></fieldset> 
				<input type="hidden" name="time" id="time" value="<?php echo $time ?>"></td>
			</tr>
			<tr>
				<td><label>Price </label></td>
				<td>: <span class="green f20"> <?php echo $price ." TK"?></span>
					<input type="hidden" name="price" id="price" value="<?php echo $price ?>">
					<input type="hidden" name="order_date" id="order_date" value="<?php echo date('d-M-Y h:i A') ?>">
				</td>
			</tr>
			<tr>
				<td><label>Payment Method</label></td>
				<td>: <select name="payment_method" id="payment_method" onchange="peymentGetway()">
					<option value="">Select</option>
					<option value="BKASH">Bkash</option>
					<option value="NAGAD">Nagad</option>
					<option value="ROCKET">Rocket</option>
				</select>
				<span class="red">*<?php echo $getwayErr;?></span></td>
			</tr>
			<tr>
				<td><span id="getwayLoad"></span></td>
				<td><span id="numberBoxLoad"></span></td>
			</tr>
			<tr><td><br></td></tr>
			<tr>
				<td><input type="submit" name="confirm" value="CONFIRM" class="btn"></td>
				<td>
					<p style="color:green;"><?php echo $successfulMessage; ?></p>
					<p style="color:red;"><?php echo $errorMessage; ?></p>
				</td>
			</tr>
		</table>
	</form>
	<br><br><br><br><br><br>
 	<?php include 'footer.php' ; ?>
    <script src="../javascript/movie.js?v=<?php echo time(); ?>"></script>
</body>
</html>