<?php 
	include('../control/update-ticketControl.php'); 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Update Ticket</title>
	<link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
</head>
<body>
	<div class="header"><h2>Online Ticket System</h2></strong></div>
	<p><a href="../view/home-page.php" class="link-hvr">← Back to Home</a><p>
	<p><a href="../view/view-all-tickets.php" class="link-hvr">← Back to All Ticket</a><p>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<table align="center">
			<tr>
				<td colspan="2"><h1>UPDATE TICKET</h1></td>
			</tr>
			<tr>
				<td><label>Movie ID </label></td>
				<td><span class="green f20">: <?php echo $id ?></span>
				<input type="hidden" name="movie_id" value="<?php echo $id ?>"> </td>
				<td rowspan="5"><img src="../resources/movie_img/<?php echo $image ?>" alt="Food" width="150px"></td>
			</tr>
			<tr>
				<td><label>Movie Name </label></td>
				<td>: <input type="text" name="moviename" id="moviename" value="<?php echo $moviename ?>">
					<span id="movienameErr"class="red">*</span></td>
			</tr>
			<tr>
				<td><label>Category </label></td>
				<td>: <input type="text" name="category" id="category" value="<?php echo $category ?>">
					<span id="categoryErr" class="red">*</span></td>
			</tr>
			<tr>
				<td><label>Showing Date</label></td>
				<td>: <input type="text" name="date" id="date" value="<?php echo $date ?>">
					<span id="dateErr" class="red">*</span></td>
			</tr>
			<tr>
				<td><label>Showing Time</label></td>
				<td>: <input type="text" name="time" id="time" value="<?php echo $time ?>">
					<span id="timeErr" class="red">*</span></td>
			</tr>
			<tr>
				<td><label>Price </label></td>
				<td>: <input type="text" name="price" id="price" value="<?php echo $price ?>">
					<span id="priceErr" class="red">*</span></td>
			</tr>
			<tr><td><br></td></tr>
			<tr>
				<td><input type="submit" name="submit" value="Update" class="btn"></td>
			</tr>
			<tr>
				<td colspan="2"><p class="green"><?php echo $successfulMessage; ?></p></td>
			</tr>
			<tr>
				<td colspan="2"><p class="red"><?php echo $errorMessage; ?></p></td>
			</tr>
		</table>
	</form>

 	<?php include 'footer.php' ; ?>
    <script src="../javascript/ofos.js?v=<?php echo time(); ?>"></script>
</body>
</html>