<nav class="nav">
      <ul class="menu">
          <li class="menu_item"><a href="../index.php">HOME</a></li>
          <li class="menu_item"><a href="#">REGESTRATION</a>
          <ul class="submenu">
                <li class="submenu_item"><a href="../view/registration-form.php">CUSTOMER</a></li>
                <li class="submenu_item"><a href="../view/registration-form.php">EMPLOYEE</a></li>
                <li class="submenu_item"><a href="../view/registration-form.php">SELLER</a></li>
            </ul>
        </li>
          <li class="menu_item"><a href="../view/home-page.php" class="btn login-btn">
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
          <li class="menu_item"><a href="../view/about.php">ABOUT US</a></li>
          <li class="menu_item"><a href="../view/ticket.php">TICKET PRICE</a>
          <li class="menu_item"><a href="#">CONTACT</a></li>
      
      
      </ul>
  
  
  </nav>