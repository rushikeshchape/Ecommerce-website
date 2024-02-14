<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet" href="css/feedback.css">
</head>

<body>
    <div class="navbar"><a href="#"> Feedback</a></div>
    <?php
include('connection.php');
$id=$_GET['id'];
$query = " SELECT * FROM `feedback` WHERE id='$id' ";
$result = mysqli_query($con,$query);
while($data = mysqli_fetch_array($result)) {  

?>
 <div class="container">
        <div class="userdetail">
            <h3 class="name">Name : <?php echo $data['namefeed']; ?></h3>
            <h3 class="email">E-mail : <?php echo $data['emailfeed']; ?></h3>
        </div>
        <div class="feedback"><?php echo $data['feedback']; ?></div>
    </div>

    <?php
                }
            
       ?>

</body>

</html>
