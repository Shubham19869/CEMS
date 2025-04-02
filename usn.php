<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>cems</title>
        <title></title>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        
    </head>
    <body>
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
<style>
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
    min-height: 20vh; /* Reduced height */
    padding: 20px 0;
}

    /* Form box styling */
    .form-container {
        background: rgba(255, 255, 255, 0.1); /* Light transparent background */
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(255, 255, 255, 0.2);
        width: 400px;
        text-align: center;
    }

    /* Label styling */
    .form-group label {
        display: block;
        text-align: left;
        font-size: 16px;
        font-weight: bold;
        margin-bottom: 5px;
        color: white;
    }

    /* Input field styling */
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
    .btn {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
        transition: 0.3s;
    }

    .btn-default {
        background: #ff9800; /* Orange button */
        color: white;
    }

    .btn-default:hover {
        background: #e68900;
    }
</style>
<div class="content">
    <div class="form-container">
        <form action="RegisteredEvents.php" class="form-group" method="POST">
            <div class="form-group">
                <label for="usn"> Student USN: </label>
                <input type="text" id="usn" name="usn" class="form-control" placeholder="Enter USN">
            </div>
            <button type="submit" class="btn btn-default">Login</button>
        </form>
    </div>
</div>
    </body>
</html>
