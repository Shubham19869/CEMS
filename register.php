<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>cems</title>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
    </head>
    <body>
        <style>
body{
    background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
    color: white;
    margin: 0;
    padding: 0;
}
  .btn-default {
        background:linear-gradient(90deg, #ff6a00, #ee0979); 
        color: white;
    }

    .btn-default:hover {
        background: #e68900;
    }
            
/* Centering the Form */
.form-wrapper {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

/* Themed Form Container */
.form-container {
    background: rgba(20, 40, 60, 0.9);  /* ✅ Deep Blue-Grey for a clean, modern look */
    padding: 35px;
    border-radius: 12px;
    box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.5);
    width: 600px;  /* ✅ Increased width */
    max-width: 90%;
    text-align: center;
}

/* Form Title */
.form-container h2 {
    color: #f8f9fa;  /* ✅ Soft white */
    font-size: 28px;
    margin-bottom: 20px;
    font-weight: bold;
}

/* Themed Input Fields */
.input-field {
    width: 100%;
    padding: 14px;
    margin-bottom: 18px;
    border: 1px solid rgba(255, 255, 255, 0.3);
    border-radius: 8px;
    font-size: 16px;
    background: rgba(255, 255, 255, 0.1);  /* ✅ Slightly transparent */
    color: #ffffff;
}

/* Placeholder Styling */
select {
    background-color: #2c5364; /* Dark background to match the theme */
    color: white; /* White text for visibility */
    border: 1px solid #ffffff66; /* Light border for subtle contrast */
    padding: 8px;
    border-radius: 5px;
    width: 100%; /* Ensure full width */
}

select option {
    background-color: #1b2a36; /* Darker shade for dropdown options */
    color: white;
}

/* Submit Button */
.submit-btn {
    width: 100%;
    padding: 14px;
    background: linear-gradient(90deg, #ff6a00, #ee0979); /* ✅ Smooth Orange-Pink Gradient */
    color: white;
    border: none;
    border-radius: 8px;
    font-size: 18px;
    font-weight: bold;
    cursor: pointer;
    transition: all 0.3s;
}

.submit-btn:hover {
    background: linear-gradient(90deg, #ee0979, #ff6a00);
    transform: scale(1.05);
}

/* "Already Registered?" Link */
.already-registered {
    display: block;
    margin-top: 15px;
    font-size: 16px;
    color: #ff6a00;
    text-decoration: none;
    font-weight: bold;
}

.already-registered:hover {
    text-decoration: underline;
}



        </style>
        <?php require 'utils/header.php'; ?>
        <div class="content"><!--body content holder-->
        <div class="form-wrapper">
    <div class="form-container">
        <h2>Register for Your Favorite Event</h2>
        <form method="POST">
            <input type="text" name="usn" class="input-field" placeholder="Student USN" required>
            <input type="text" name="name" class="input-field" placeholder="Student Name" required>
            <input type="text" name="branch" class="input-field" placeholder="Branch" required>
            <input type="text" name="sem" class="input-field" placeholder="Semester" required>
            <input type="email" name="email" class="input-field" placeholder="Email" required>
            <input type="text" name="phone" class="input-field" placeholder="Phone" required>
            <input type="text" name="college" class="input-field" placeholder="College" required>
            
            <select name="event_id" class="input-field" required>
                <option value="">-- Select an Event --</option>
                <?php
                include 'classes/db1.php';
                $eventQuery = mysqli_query($conn, "SELECT event_id, event_title FROM events");
                while ($row = mysqli_fetch_assoc($eventQuery)) {
                    echo "<option value='" . $row['event_id'] . "'>" . $row['event_title'] . "</option>";
                }
                ?>
            </select>

            <button type="submit" name="update" class="submit-btn">Submit</button>
        </form>
        <a href="usn.php" class="already-registered"><u>Already registered?</u></a>
    </div>
</div>


        <?php require 'utils/footer.php'; ?>
    </body>
</html>

<?php
include_once 'classes/db1.php';

if (isset($_POST["update"])) {
    $usn = trim($_POST["usn"]);
    $name = trim($_POST["name"]);
    $branch = trim($_POST["branch"]);
    $sem = trim($_POST["sem"]);
    $email = trim($_POST["email"]);
    $phone = trim($_POST["phone"]);
    $college = trim($_POST["college"]);
    $event_id = trim($_POST["event_id"]);

    // Check if USN exists and matches the name
    $usnCheck = "SELECT name FROM participent WHERE usn = '$usn'";
    $usnResult = mysqli_query($conn, $usnCheck);
    if (mysqli_num_rows($usnResult) > 0) {
        $existingName = mysqli_fetch_assoc($usnResult)['name'];
        if ($existingName !== $name) {
            echo "<script>alert('USN does not match the name registered before!'); window.location.href='register.php';</script>";
            exit();
        }
    }

    // Check if student is already registered for the same event
    $checkDuplicate = "SELECT * FROM registered WHERE usn = '$usn' AND event_id = '$event_id'";
    $duplicateResult = mysqli_query($conn, $checkDuplicate);
    if (mysqli_num_rows($duplicateResult) > 0) {
        echo "<script>alert('You are already registered for this event!'); window.location.href='register.php';</script>";
        exit();
    }

    // Insert participant if not already in the participant table
    if (mysqli_num_rows($usnResult) == 0) {
        $INSERT_PARTICIPANT = "INSERT INTO participent (usn, name, branch, sem, email, phone, college) VALUES ('$usn', '$name', '$branch', '$sem', '$email', '$phone', '$college')";
        mysqli_query($conn, $INSERT_PARTICIPANT);
    }

    // Register student for the event
    $INSERT_REGISTERED = "INSERT INTO registered (usn, name, branch, sem, email, phone, college, event_id) VALUES ('$usn', '$name', '$branch', '$sem', '$email', '$phone', '$college', '$event_id')";
    mysqli_query($conn, $INSERT_REGISTERED);

    // Update participant count in event table
    $UPDATE_PARTICIPANT_COUNT = "UPDATE events SET participents = participents + 1 WHERE event_id = '$event_id'";
    mysqli_query($conn, $UPDATE_PARTICIPANT_COUNT);

    echo "<script>alert('Registered Successfully!'); window.location.href='usn.php';</script>";
}
$conn->close();
?>

