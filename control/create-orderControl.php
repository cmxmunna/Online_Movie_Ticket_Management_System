<?php 
 include "header.php";
 require_once '../model/model.php';
	$successfulMessage = $errorMessage = $getwayErr= "";

		$id= $_GET['movie_id'];
		$connection = new db();
		$conn=$connection->OpenCon();     
		$Query=$connection->viewTicketProfile($conn,"ticketlist",$id);
	
		if($Query->num_rows > 0)
		{
			while($row=$Query->fetch_assoc())
			{
				$moviename = $row['moviename'];
				$category = $row['category'];
				$date = $row['date'];
				$time = $row['time'];
				$price = $row['price'];
				$image = $row['image'];
			}
		} 
		if(isset($_POST['confirm']))
		{
			if(empty($_POST['payment_method']))
			{
				$getwayErr = "Choose a payment Method!!!";
			}
			else
			{
				$order_id = (time()* 36025);
				$username = $_POST['username'];
				$movie_id = $_POST['movie_id'];
				$movie_name = $_POST['moviename']; 
				$category = $_POST['category']; 
				$date = $_POST['date']; 
				$time = $_POST['time']; 
				$amount = $_POST['price']; 
				$payment_method = $_POST['payment_method'];
				$number = $_POST['number'];
				$status = "New Order Placed";
				$order_date = $_POST['order_date'];
	
				$userQuery=$connection->CreateOrder($conn,"orders",$order_id,$username,$movie_id, $movie_name,$category,$date,$time,$amount,$payment_method,$number,$status,$order_date);
				$flag=1;
				if($flag==1)
				{
					$successfulMessage = "ORDER PLACED SUCCESFULLY , <br>see order <a href='../view/view-customer-order-history.php'>History</a>";
				}
				else
				{ 
					$errorMessage = "error occurred"; 
				}
				$conn->close();
			}
			
		}

		

		
		
		
	
?>