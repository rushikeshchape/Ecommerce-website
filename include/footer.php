<footer>
<link rel="stylesheet" href="css\home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <footer class="footer-distributed">

        <div class="footer-left">

            <h3>E-commerce<span>Website</span></h3>

            <p class="footer-links">
                <a href="#">Home</a>
                ·
                <a href="#">About</a>
                ·
                <a href="#">Contact</a>
            </p>

            <p class="footer-company-name">E-commerce Website © 2022</p>


        </div>

        <div class="footer-right">

        <p style="position: absolute;left: 388px;">Contact Us</p>

            <form action="index.php" method="post">
                <input type="text"  name="namefeed" class="feedback-name" placeholder="Name" required>
                <input type="text" name="emailfeed" class="feedback-email" placeholder="Email" required>
                <textarea name="feedback" class="message" placeholder="Feedback / Report" required></textarea>
                <input type="submit" value="Send" name="submit" style="width: 143px;">
            </form> 

        </div>

    </footer>
</footer>
<?php
include 'connection.php';
if(isset($_POST['submit'])){
    $name = $_POST['namefeed'];
    $email = $_POST['emailfeed'];
    $feedback = $_POST['feedback'];

    $insertquery = "insert into feedback(namefeed, emailfeed, feedback) values('$name','$email','$feedback')";
      
      $iquery = mysqli_query($con, $insertquery);

      if($iquery){
        ?>
        <script>
          alert("Feedback Submitted");
        </script>
       
        <?php
         }else{
          ?>
          <script>
            alert("Feedback not Submitted! Try Again ");
          </script>
          <?php
        }
      
    }
?>
