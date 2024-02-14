<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Product</title>
    <link rel="stylesheet" href="css/insertprod.css">
</head>

<body>
    <form action="" method="post" \>
        <div class="container">
            <div class="head">
                <div class="title">Insert Product</div>
            </div>
            <div class="content">
                <form action="#">
                    <div class="user-details">
                        <div class="input-box">
                            <span class="details">Product Type</span>
                            <input type="text" name="prodtype" placeholder="Enter Product Type" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Brand</span>
                            <input type="text" name="brand" placeholder="Enter Brand Name" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Product Name</span>
                            <input type="text" name="name" placeholder="Enter Product Name" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Product Price</span>
                            <input type="text" name="price" placeholder="Enter Product Price" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Image 1</span>
                            <input type="file" name="image1" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Image 2</span>
                            <input type="file" name="image2" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Image 3</span>
                            <input type="file" name="image3" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Image 4</span>
                            <input type="file" name="image4" required>
                        </div>
                        <div class="input-address">
                            <span class="details">Description</span>
                            <textarea name="description" cols="75" rows="10" required></textarea>
                        </div>




                    </div>

                </form>
                <div class="button">
                    <input type="submit" name="submit" value="Add Product">
                </div>
           
    </form>
    </div>
    </div>



    <?php

include "connection.php";

if(isset($_POST['submit'])){
  $prodtype = $_POST['prodtype'];
  $brand = $_POST['brand'];
  $name = $_POST['name'];
  $price = $_POST['price'];
  $image1 = $_POST['image1'];
  $image2 = $_POST['image2'];
  $image3 = $_POST['image3'];
  $image4 = $_POST['image4'];
  $description = $_POST['description'];
 
  $insertquery = "insert into featureproduct(`prodtype`, `brand`, `name`, `price`, `image1`, `image2`, `image3`, `image4`, `description`) VALUES('$prodtype', '$brand', '$name', '$price', '$image1', '$image2', '$image3', '$image4', '$description')";

  $iquery = mysqli_query($con, $insertquery);

  if($iquery){
      ?>
      <script>
          alert("Inserted Successfully");
        </script>
        <?php
  }
  else{
      ?>
    <script>
    alert("Not Inserted Successfully");
  </script>
  <?php
  }
  }
 
  
  ?>
</body>
</html>