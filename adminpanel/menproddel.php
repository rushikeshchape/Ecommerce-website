<?php
    include 'connection.php';

    $id = $_GET['id'];
    $deletequery = "DELETE FROM `men-collection` WHERE id=$id";

    $query = mysqli_query($con,$deletequery);
    if($query){
        ?>
            <script>
                alert("Deleted Successfully");          
            </script>
        <?php
    }else{
        ?>
         <script>
                alert("Not Deleted");
            </script>
        <?php
    }
    header('location:menprodlist.php');
?>