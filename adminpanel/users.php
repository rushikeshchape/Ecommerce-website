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
                    
                    <th>Image</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Gender</th>
                    <th>E-mail Id</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
            </thead>
       
      
</body>
</html>
<?php
    
  include 'connection.php';
    $query = "SELECT * FROM `register` ORDER BY id ASC";
    $result = mysqli_query($con,$query);
    while($product = mysqli_fetch_array($result)) {  
       ?> <tbody>
            <tr>

                <td> <img src="product_images/<?php echo $product['profile']; ?>" name="profile"  alt="profileimage"></td>
                <td><?php echo $product['firstname']; ?> </td>
                <td><?php echo $product['lastname']; ?></td>
                <td><?php echo $product['gender']; ?></td>
                <td><?php echo $product['email']; ?></td>
                <td><?php echo $product['address']; ?></td>
                <td><a href="userdel.php?id=<?php echo $product['id']; ?>"><button class="feedbackviewbtn">Delete</button></a> </td>
            </tr>
        </tbody>
        <tbody>
  <?php
    }  
?>   