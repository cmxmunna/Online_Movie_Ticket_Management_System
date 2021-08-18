<?php
class db
{
	// Database Connection
	function OpenCon()
	{
		$dbhost = "localhost";
		$dbuser = "root";
		$dbpass = "";
		$db = "ticket";
		$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
		if($conn-> connect_error)
		{
			die("Database Connection failed ..." .$conn-> OpenCon_error);
		}
		return $conn;
	}

	// Usser Registration
	function Register($conn,$table,$name,$username,$password,$email,$address,$phone,$type,$dob,$gender,$image)
	{
		$stmt = $conn -> prepare("INSERT INTO $table (name, username, password, email, address, phone, type, dob, gender, image) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt -> bind_param("ssssssssss",$name,$username,$password,$email,$address,$phone,$type,$dob,$gender,$image);
		$stmt -> execute();  
		return $stmt; 
	}
	
	// User Login and CRUD System
	function login($conn, $table, $username, $password)
	{
		$stmt = $conn -> query("SELECT name, username, password, email, type, address, phone, dob, gender FROM ". $table." WHERE username='". $username."' AND password='". $password."'");
		return $stmt;
	}

	// view all users 
	function ShowUsers($conn,$table)
	{
		$stmt = $conn->query("SELECT * FROM  $table");
		return $stmt;
	}
	
	function viewProfile($conn,$table,$username)
	{
		$stmt = $conn -> query("SELECT name, username, password, email, type, address, phone, dob, gender, image FROM ". $table." WHERE username='". $username."'");
		return $stmt;
	}

	function UpdateProfile($conn,$table,$update_name, $update_username, $update_email, $update_address, $update_phone, $update_dob, $update_gender)
	{
		$result=$conn->query("UPDATE $table SET name='$update_name',username='$update_username', email='$update_email', address='$update_address',
		 phone='$update_phone', dob='$update_dob', gender='$update_gender' where username='$update_username'");
		return $result;
	}

	function UpdatePassword($conn,$table,$update_password,$username)
	{
		$result=$conn->query("UPDATE $table SET password='$update_password' where username='$username'");
		return $result;
	}

	function DeleteUser($conn,$table,$user_id)
	{
		$result=$conn->query("DELETE FROM $table WHERE id ='$user_id'");
		return $result;
	}

	//Ticket Item 
	function InsertItem($conn, $table, $moviename ,$category , $date, $time ,$price ,$image)
	{
		$stmt = $conn->prepare("INSERT INTO $table (moviename ,category , date, time, price ,image) VALUES (?, ?, ?, ?, ?, ?)");
		$stmt -> bind_param("ssssss",$moviename ,$category , $date, $time ,$price ,$image);
		$stmt -> execute();  
		$stmt -> close();
		return $stmt; 
	}

	function UpdateTicketProfile($conn,$table,$update_moviename, $update_category, $update_date, $update_time, $update_price, $movie_id)
	{
		$result=$conn->query("UPDATE $table SET moviename='$update_moviename',category='$update_category', date='$update_date', time='$update_time', price='$update_price' where id='$movie_id'");
		return $result;
	}

	function viewTicketProfile($conn,$table,$movie_id)
	{
		$stmt = $conn -> query("SELECT id, moviename, category, date, time, price, image FROM ". $table." WHERE id='". $movie_id."'");
		return $stmt;
	}

	function ShowItem($conn,$table)
	{
		$stmt = $conn->query("SELECT * FROM  $table");
		return $stmt;
	}

	function DeleteItem($conn,$table,$movie_id)
	{
		$result=$conn->query("DELETE FROM $table WHERE id ='$movie_id'");
		return $result;
	}

	function CreateOrder($conn, $table,$order_id,$username,$movie_id, $movie_name,$category,$date,$time,$amount,$payment_method,$number,$status,$order_date)
	{
		$stmt = $conn->prepare("INSERT INTO $table (order_id,username, movie_id, movie_name, category, date, time, amount, payment_method, number, status, order_date) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt -> bind_param("ssssssssssss",$order_id,$username,$movie_id, $movie_name,$category,$date,$time,$amount,$payment_method,$number,$status,$order_date);
		$stmt -> execute();  
		$stmt -> close();
		return $stmt; 
	}

	function ShowOrderDetails($conn,$table)
	{
		$stmt = $conn->query("SELECT * FROM  $table");
		return $stmt;
	}

	function ShowOrderHistory($conn,$table,$customername)
	{
		$stmt = $conn->query("SELECT * FROM  $table WHERE username ='$customername'");
		return $stmt;
	}

	function ShowOrder($conn,$table,$order_id)
	{
		$stmt = $conn -> query("SELECT * FROM ". $table." WHERE order_id='". $order_id."'");
		return $stmt;
	}

	function UpdateOrderDetails($conn,$table,$update_status,$order_id)
	{
		$result=$conn->query("UPDATE $table SET status ='$update_status' where order_id ='$order_id'");
		return $result;
	}

	function CloseCon($conn)
	{
		$conn -> close();
	}
}
?>