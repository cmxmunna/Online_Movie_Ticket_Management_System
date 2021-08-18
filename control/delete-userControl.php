<?php
    require_once '../model/model.php';
        $user_id = $_GET['user_id'];

        $connection = new db();
        $conn=$connection->OpenCon();
        $userQuery=$connection->DeleteUser($conn,"userinfo",$user_id);
		$flag=1;
		if($flag==1)
		{
			header("location: ../view/view-users.php");
			$successfulMessage = "Delete Success"; 
		}
		else
		{ 
			$errorMessage = "error occurred while Deleting"; 
		}
		$conn->close();
?>