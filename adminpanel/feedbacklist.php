<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="stylesheet" href="css/users.css">
</head>
<body>
    
<div class="header_fixed">
        <table>
            <thead>
                <tr>
                    <!-- <th>S no</th> -->
                    <th>Name</th>
                   <th>E-mail</th>
                   <th>Action</th>
                    </tr>
            </thead>
       
      
</body>
</html>
<?php
    
  include 'connection.php';
    $query = "SELECT * FROM `feedback` ORDER BY id ASC";
    $result = mysqli_query($con,$query);
    while($product = mysqli_fetch_array($result)) {  
        $id=$product['id'];
       ?> <tbody>
            <tr>
                <!-- <td> <?php echo $product['id']; ?> </td> -->
                <td><?php echo $product['namefeed']; ?> </td>
                <td><?php echo $product['emailfeed']; ?></td>
                <td><a href="feedback.php?id=<?php echo $product['id']; ?>"><button class="feedbackviewbtn">View</button></a> <a href="feedbackdel.php?id=<?php echo $product['id']; ?>"><button class="feedbackviewbtn">Delete</button></a></td>
             
            </tr>
        </tbody>
        <tbody>
  <?php
    }  
?>   