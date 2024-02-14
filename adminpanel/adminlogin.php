<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="css\login.css">
</head>
<body>
    <div class="container" >
        <!-- sign in page -->
        <div class="form-container sign-in-container">
          <form method="POST" action="adminlogin.php" class="form">
            <h1 class="form__title">Admin Login</h1>
            <div class="form__input-group">
              <label for="email">E-mail: </label>
              <input type="text" class="form__input" name="email"  maxlength="200" required> 
            </div>
            <div class="form__input-group">
              <label for="pass">Password: </label>
              <input type="password"  6class="form__input" name="password"  maxlength="20" required> 
            </div>
            <div class="form__input-group">
              <button type="submit" name="submit" class="form__button">Submit</button>
            </div>
         </form>
        </div>
        </body>
        </html>
        <?php
            include "connection.php";
            if(isset($_POST['submit'])){
           $email = $_POST['email'];
           $password = $_POST['password'];
          
           $stmt = $con->prepare("SELECT * FROM `admin` WHERE email = ?");
           $stmt->bind_param("s",$email);
           $stmt->execute();
           $stmt_result = $stmt->get_result();
           if($stmt_result->num_rows > 0){
             $data = $stmt_result->fetch_assoc();
             if($data['password'] === $password){
              ?>
              <script>
                alert("Login Successfully");
              </script>
              <?php
               ?>
               <script>
                 location.replace("index.php ");
               </script>
                 <?php
             }else{
              ?>
              <script>
                alert("Invalid Email or Password");
              </script>
              <?php
             }
           }else{
            ?>
            <script>
              alert("Invalid Email or Password");
            </script>
            <?php
           }
          }
              ?>