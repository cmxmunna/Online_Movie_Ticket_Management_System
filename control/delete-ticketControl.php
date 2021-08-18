<?php
    require_once '../model/model.php';
        $movie_id = $_GET['movie_id'];

        $connection = new db();
        $conn=$connection->OpenCon();
        $userQuery=$connection->DeleteItem($conn,"ticketlist",$movie_id);
		$flag=1;
		if($flag==1)
		{
			header("location: ../view/view-all-tickets.php");
			$successfulMessage = "Delete Success"; 
		}
		else
		{ 
			$errorMessage = "error occurred while Deleting"; 
		}
		$conn->close();
?>