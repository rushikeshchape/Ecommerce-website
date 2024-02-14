<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All PRODUCTS</title>
    <link rel="stylesheet" href="css/users.css">
</head>
<body>
    
<div class="header_fixed">
    <table>
        <thead>
            <tr>
              
                <th>Image</th>
                <th>Product Type</th>
                <th>Brand</th>
                <th>Name</th>
                <th>Category</th>
                <th>Price</th>
                <th>Action</th>

           

            </tr>
        </thead>
       
      
</body>
</html>
<?php
    
  include 'connection.php';
    $query = "SELECT * FROM `acc-collection` ORDER BY id ASC";
    $result = mysqli_query($con,$query);
    while($product = mysqli_fetch_array($result)) {  
       ?> <tbody>
            <tr>
            
                <td> <img src="product_images/<?php echo $product['image1']; ?>" name="image1"  alt="profileimage"></td>
                <td><?php echo $product['prodtype']; ?> </td>
                <td><?php echo $product['brand']; ?></td>
                <td><?php echo $product['name']; ?></td>
                <td><?php echo $product['category']; ?></td>
                <td>Rs <?php echo $product['price']; ?></td>
                <td>Delete</td>
            </tr>
        </tbody>
        <tbody>
            
  <?php
    }  
    $query = "SELECT * FROM `men-collection` ORDER BY id ASC";
    $result = mysqli_query($con,$query);
    while($product = mysqli_fetch_array($result)) {  
       ?> <tbody>
            <tr>
            
                <td> <img src="product_images/<?php echo $product['image1']; ?>" name="image1"  alt="profileimage"></td>
                <td><?php echo $product['prodtype']; ?> </td>
                <td><?php echo $product['brand']; ?></td>
                <td><?php echo $product['name']; ?></td>
                <td><?php echo $product['category']; ?></td>
                <td>Rs <?php echo $product['price']; ?></td>
                <td>Delete</td>

            </tr>
        </tbody>
        <tbody>
            
  <?php
    }  
?>   