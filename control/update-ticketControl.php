<?php 
    include "header.php";
    require_once ('../model/model.php');

	session_start();
	$username ="";
	$successfulMessage = $errorMessage = "";
	if(isset($_SESSION['username']))
    {
        $username = $_SESSION['username'];
    } 
    else
    {
        header("location: ../view/login-form.php");
    }
    $id= $_GET['movie_id'];
    $connection = new db();
    $conn=$connection->OpenCon();    
    $userQuery=$connection->viewTicketProfile($conn,"ticketlist",$id);

    if($userQuery->num_rows > 0)
    {
        while($row=$userQuery->fetch_assoc())
        {
            $moviename = $row['moviename'];
            $category = $row['category'];
            $date = $row['date'];
            $time = $row['time'];
            $price = $row['price'];
            $image = $row['image'];
        }
    }

    if(isset($_POST['submit']))
    {
        $movie_id = $_POST['movie_id'];
        $update_moviename = $_POST['moviename'];
        $update_category = $_POST['category'];
        $update_date = $_POST['date'];
        $update_time = $_POST['time'];
        $update_price = $_POST['price'];

        $userQuery2=$connection->UpdateTicketProfile($conn,"ticketlist",$update_moviename, $update_category, $update_date, $update_time, $update_price, $movie_id);
			$flag=1;
			if($flag==1)
			{
                header('location: ../view/view-all-tickets.php');
				$successfulMessage = "Food Data Updated | Refresh this page to see Updated Data <button onload='Reload()'>Reload</button>"; 
			}
			else
			{ 
				$errorMessage = "error occurred while updating"; 
			}
			$conn->close();
    }
?>