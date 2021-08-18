<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Landing Page</title>
	<link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">

</head>
<body>
	<nav class="nav">
      <ul class="menu">
          <li class="menu_item"><a href="index.php">HOME</a></li>
          <li class="menu_item"><a href="#">REGESTRATION</a>
          <ul class="submenu">
                <li class="submenu_item"><a href="view/registration-form.php">CUSTOMER</a></li>
                <li class="submenu_item"><a href="view/registration-form.php">EMPLOYEE</a></li>
                <li class="submenu_item"><a href="view/registration-form.php">SELLER</a></li>
            </ul>
        </li>
          <li class="menu_item"><a href="view/home-page.php" class="btn login-btn">
					<?php
						if(isset($_SESSION['username']))
						{
							echo $_SESSION['username'];
						}
						else
						{
							echo "LOGIN";
						}
					?>
				</a></li>
          <li class="menu_item"><a href="view/about.php">ABOUT US</a></li>
          <li class="menu_item"><a href="view/ticket.php">TICKET PRICE</a>
          <li class="menu_item"><a href="#">CONTACT</a></li>
      </ul>
  </nav>
	<br><br><br><br>
	<div class="row">
		<div class="col-3 center">
			<span class="welcome"><h1>WELCOME TO  MOVIE  THEATER</h1></span>
		</div>
	</div>
	<br><br><br>
	<div class="col-1">
		<table align="center">
			<tr><td><br><br></td></tr>
			<tr>
				<td class="poster"><img src="resources/images/1.jpg" alt="Movie Poster" width="280px"></td>
				<td class="poster"><img src="resources/images/2.jpg" alt="Movie Poster" width="280px"></td>
				<td class="poster"><img src="resources/images/3.jpg" alt="Movie Poster" width="280px"></td>
				<td class="poster"><img src="resources/images/4.jpg" alt="Movie Poster" width="280px"></td>
				<td class="poster"><img src="resources/images/5.jpg" alt="Movie Poster" width="280px"></td>
			</tr>
			<tr>
				<td class="poster"><img src="resources/images/6.jpg" alt="Movie Poster" width="280px"></td>
				<td class="poster"><img src="resources/images/7.jpg" alt="Movie Poster" width="280px"></td>
				<td class="poster"><img src="resources/images/8.jpg" alt="Movie Poster" width="280px"></td>
				<td class="poster"><img src="resources/images/9.jpg" alt="Movie Poster" width="280px"></td>
				<td class="poster"><img src="resources/images/10.jpg" alt="Movie Poster" width="280px"></td>
			</tr>
			<tr>
				<td class="poster"><img src="resources/images/1.jpg" alt="Movie Poster" width="280px"></td>
				<td class="poster"><img src="resources/images/2.jpg" alt="Movie Poster" width="280px"></td>
				<td class="poster"><img src="resources/images/3.jpg" alt="Movie Poster" width="280px"></td>
				<td class="poster"><img src="resources/images/4.jpg" alt="Movie Poster" width="280px"></td>
				<td class="poster"><img src="resources/images/5.jpg" alt="Movie Poster" width="280px"></td>
			</tr>
			<tr>
				<td class="poster"><img src="resources/images/6.jpg" alt="Movie Poster" width="280px"></td>
				<td class="poster"><img src="resources/images/7.jpg" alt="Movie Poster" width="280px"></td>
				<td class="poster"><img src="resources/images/8.jpg" alt="Movie Poster" width="280px"></td>
				<td class="poster"><img src="resources/images/9.jpg" alt="Movie Poster" width="280px"></td>
				<td class="poster"><img src="resources/images/10.jpg" alt="Movie Poster" width="280px"></td>
			</tr>
		</table>
	</div>
	
	<br><br><br><br>
 <?php include 'view/footer.php' ; ?>

</body>
</html>