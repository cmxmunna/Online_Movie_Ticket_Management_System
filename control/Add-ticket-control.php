<?php 
    include "header.php";
	require_once ('../model/model.php');

	session_start();
	$id = "";
	$user ="";
    $type ="";
    if(isset($_SESSION['id']))
    {
        $id = $_SESSION['id'];
    }
	if(isset($_SESSION['name']))
    {
        $user = $_SESSION['name'];
    } 
    if(isset($_SESSION['type']))
    {
        $type = $_SESSION['type'];
    }
    else
    {
        header("location: ../view/login-form.php");
    }
	
	$moviename = $category = $date = $time = $price = $image = "";
	$successfulMessage = '';
	$errorMessage = '';

	if(isset($_POST['submit']))
	{
		$moviename = $_POST['moviename'];
		$category = $_POST['category'];
		$date = $_POST['date'];
		$time = $_POST['time'];
		$price = $_POST['price'];
	
		
		$target_dir = "../resources/movie_img/";
		$target_file = $target_dir . basename($_FILES["image"]["name"]);
						
		if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file))
		{
			$image = $_FILES["image"]["name"];
		} 
		else 
		{
			$errorMessage = "error occurred while Inserting New Record";
		}	

		$connection = new db();
		$conn=$connection->OpenCon();    
		$userQuery=$connection->InsertItem($conn,"ticketlist",$moviename ,$category ,$date,$time ,$price ,$image); 
					
		$flag=1;
		if($flag==1)
		{
			$successfulMessage = "New Record Inserted by $user"; 
		}
		else
		{ 
			$errorMessage = "error occurred while Inserting New Record";
		}	
		$conn->close();
	
	}
				
										
	
?>
