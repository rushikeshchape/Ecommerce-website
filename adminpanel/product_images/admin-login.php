<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>
        <div class="container" >
          <!-- sign in page --> 
    <div class="form-container sign-in-container">
            <form method="POST" action="admin-login.php" class="form">
              <h1 class="form__title">Admin Login</h1>
              <div class="form__input-group">
                <label for="email">Username: </label>
                <input type="text" class="form__input" name="username"  maxlength="20" required> 
              </div>
              <div class="form__input-group">
                <label for="pass">Password: </label>
                <input type="text" class="form__input" name="password"  maxlength="20" required> 
              </div>
              <div class="form__input-group">
                <button type="submit" name="submit" class="form__button">Submit</button>
              </div>
           </form>
          </div>
      </body>
</html>

