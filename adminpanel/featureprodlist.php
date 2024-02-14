<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feature Product list</title>
    <link rel="stylesheet" href="css/users.css">
</head>
<body>
    
<div class="header_fixed">
        <table>
            <thead>
                <tr>
                    <!-- <th>S no</th> -->
                    <th>Product Name</th>
                    <th>Product Type</th>
                    <th>image1</th>
                    <th>image2</th>
                    <th>image3 Id</th>
                    <th>image4</th>
                    <th>price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <button class="btncs"><a href="insertfeature.php">Add Product</a></button>

       
      
</body>
</html>
<?php
    
  include 'connection.php';
    $query = "SELECT * FROM `featureproduct` ORDER BY id ASC";
    $result = mysqli_query($con,$query);
    while($product = mysqli_fetch_array($result)) {  
       ?> <tbody>
            <tr>
                <!-- <td> <?php echo $product['id']; ?> </td> -->
                <td><?php echo $product['name']; ?> </td>
                <td><?php echo $product['prodtype']; ?></td>
                <td> <img src="product_images/<?php echo $product['image1']; ?>" name="profile"  alt="profileimage"></td>
                <td> <img src="product_images/<?php echo $product['image2']; ?>" name="profile"  alt="profileimage"></td>
                <td> <img src="product_images/<?php echo $product['image3']; ?>" name="profile"  alt="profileimage"></td>
                <td> <img src="product_images/<?php echo $product['image4']; ?>" name="profile"  alt="profileimage"></td>
                <td><?php echo "Rs ".$product['price']; ?> </td>

                <td><a href="featureproddel.php?id=<?php echo $product['id']; ?>"><button class="feedbackviewbtn">Delete</button></a> </td>
            </tr>
        </tbody>
        <tbody>
  <?php
    }  
?>   