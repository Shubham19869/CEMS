<?php
include_once 'classes/db1.php';?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>cems</title>
        <title></title>
        <style>
            span.error{
                color: red;
            }      
            /* Background for entire page */
body {
    background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
    color: white;
    font-family: Arial, sans-serif;
}

/* Centering the form */
.content {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 40vh; /* Reduced height */
    padding: 20px 0;
}

/* Login form container */
.form-container {
    background: rgba(255, 255, 255, 0.1); /* Light transparent background */
    padding: 25px;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(255, 255, 255, 0.2);
    width: 350px;
    text-align: center;
}

/* Labels */
.form-group label {
    display: block;
    text-align: left;
    font-size: 16px;
    font-weight: bold;
    margin-bottom: 5px;
    color: white;
}

/* Input fields */
.form-control {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: none;
    border-radius: 5px;
    background: rgba(255, 255, 255, 0.2);
    color: white;
    font-size: 14px;
}

.form-control::placeholder {
    color: rgba(255, 255, 255, 0.7);
}

/* Button styling */
.custom-btn {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    transition: 0.3s;
}

.custom-btn {
    background: #ff9800; /* Orange button */
    color: white;
}

.custom-btn:hover {
    background: #e68900;
}
.btn-default {
        background: #ff9800; /* Orange button */
        color: white;
    }
      
        </style>  
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
            </head>
    <body>
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
        <div class="content">
    <div class="container">
        <div class="col-md-6 col-md-offset-3">
            <div class="form-container"> <!-- Added container for styling -->
                <form method="POST">
                    <div class="form-group">
                        <label>UserName:</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter your username" required>
                    </div>

                    <div class="form-group">
                        <label>Password:</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
                    </div>

                    <button type="submit" name="update" class="custom-btn">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>

        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>
<?php
if (isset($_POST["update"]))
{
$myusername=$_POST['name'];
$mypassword=$_POST['password'];

if($mypassword=='admin' && $myusername=='admin')
{
    echo "<script>
    alert('Login Successfull');
    window.location.href='adminPage.php';
    </script>";
}
else
{
    echo "<script>
    alert('Invalid credentials');
    window.location.href='login_form.php';
    </script>";
}
}
?>
