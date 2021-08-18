<?php 
    include('../control/sessioncontrol.php');
    require_once ('../model/model.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>View USers</title>
    <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
</head>

<body>
    <div class="header">
        <h2>Online Ticket System</h2></strong>
    </div>
    <div class="main-body">
      <p><a href="../view/home-page.php" class="link-hvr">← Back to Home</a>
      <p>
      <h1>USERS LIST</h1>

      <?php
        //Db connect";
        $connection = new db();
        $conn=$connection->OpenCon();
        $userQuery=$connection->ShowUsers($conn,"userinfo");     

        //$conn->query($sql);
        echo "<table border='1'>
        <tr>
            <th>ID</th>
            <th>FUll Name</th>
            <th>User Name</th>
            <th>Password</th>
            <th>Email</th>
            <th>User Type</th>
            <th>Addresss</th>
            <th>Phone Number</th>
            <th>Date of Birth</th>
            <th>Gender</th>
            <th>Image</th>
            <th>Action</th>
        </tr>";

        if($userQuery->num_rows > 0)
        {
          while($row=$userQuery->fetch_assoc())
          { $id = $row['id'];
            $img = $row['image'];
            echo "<tr>";
            echo "<td>". $row['id'] ."</td>";
            echo "<td>". $row['name'] ."</td>";
            echo "<td>". $row['username'] ."</td>";
            echo "<td> ******* </td>";
            echo "<td>". $row['email'] ."</td>";
            echo "<td>". $row['type'] ."</td>";
            echo "<td>". $row['address'] ."</td>";
            echo "<td>". $row['phone'] ."</td>";
            echo "<td>". $row['dob'] ."</td>";
            echo "<td>". $row['gender'] ."</td>";
            echo "<td> <img src='../resources/user_img/$img' width='150'></td>";
            echo "<td> <a href='../control/delete-userControl.php?user_id=$id' class='link-hvr'>Delete</a> </td>";
            echo "</tr>";
          }
          echo "</table>";
          $conn->close();
        }
      ?>
    </div>
    <br><br><br><br><br><br>

    <?php include 'footer.php' ; ?>
</body>

</html>