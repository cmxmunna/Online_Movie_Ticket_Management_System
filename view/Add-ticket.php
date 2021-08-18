<?php 
	include('../control/Add-ticket-control.php'); 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add Ticket</title>
	<link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
</head>
<body>
	<div class="header"><h2>Online Ticket System</h2></strong></div>
	<p><a href="../view/home-page.php" class="link-hvr">← Back to Home</a><p>
	<p>Back to <a href="view-all-tickets.php" class="link-hvr">View Ticket List</a></p>

    <div class="main-body">
	<h1>Add Ticket</h1>

	<form action="" method="POST" onsubmit="return AddTicketValidation()" enctype="multipart/form-data">  
		<table>
			<tr>
				<td><label for="moviename">Movie Name</label></td>
				<td> : <input type="text" name="moviename" id="moviename">
				<span id="movienameErr" class="red">* </span></td>
			</tr>
			<tr>
				<td><label for="category">Category</label></td>
				<td> : 
					<select name="category" id="category">
						<option value="">Select</option>
						<option value="Action">Action</option>
						<option value="Rimantic">Rimantic</option>
						<option value="Horror">Horror</option>
					</select>
				<span id="categoryErr" class="red">*</span></td>
			</tr>
			<tr>
				<td><label for="date">Showing Date &nbsp;&nbsp;</label></td>
				<td> : <input type="date" name="date" id="date">
				<span id="dateErr" class="red">*</span></td>
			</tr>
			<tr>
				<td><label for="time">Showing Time &nbsp;&nbsp;</label></td>
				<td> : 
					<select name="time" id="time">
							<option value="">Select</option>
							<option value="8.00-10.00 AM">8.00-10.00 AM</option>
							<option value="10.00-12.00 PM">10.00-12.00 PM</option>
							<option value="12.00-2.00 PM">12.00-2.00 PM</option>
							<option value="2.00-4.00 PM">2.00-4.00 PM</option>
							<option value="4.00-6.00 PM">4.00-6.00 PM</option>
							<option value="6.00-8.00 PM">6.00-8.00 PM</option>
					</select>
					<span id="timeErr" class="red">*</span></td>
			</tr>
			<tr>
				<td><label for="price">Price</label></td>
				<td> : <input type="text" name="price" id="price">
				<span id="priceErr" class="red">*</span></td>
			</tr>
			<tr>
				<td><label for="image">Movie Image</label></td>
				<td> : <input type="file" name="image" id="image">
				<span id="imageErr" class="red">*</span></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="ADD"></td>
			</tr>
		</table>
		
    </form>

	<p style="color:green;"><?php echo $successfulMessage; ?></p>
	<p style="color:red;"><?php echo $errorMessage; ?></p>

	<br>

	</div>
 	<?php include 'footer.php' ; ?>
    <script src="../javascript/movie.js?v=<?php echo time(); ?>"></script>

</body>
</html>