<?php
include_once 'classes/db1.php';

// Refined SQL to join tables and group results by event_id
$result = mysqli_query($conn, 
    "SELECT e.event_id, e.event_title, e.event_price, e.participents, 
            st.st_name AS student_coordinator, s.name AS staff_coordinator, 
            ef.Date, ef.time, ef.location 
     FROM events e
     JOIN event_info ef ON e.event_id = ef.event_id
     JOIN staff_coordinator s ON e.event_id = s.event_id
     JOIN student_coordinator st ON e.event_id = st.event_id
     GROUP BY e.event_id"
);
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Details | CEMS</title>
    <!-- Embedding the CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
          
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #00004d;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .table-hover tbody tr:hover {
            background-color: #f4f4f4;
        }

        .table th, .table td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ddd;
        }

        .table th {
            background-color: #00004d;
            color: #ffffff;
            font-weight: bold;
        }

        .btn-default {
            display: inline-block;
            text-decoration: none;
            color: #fff;
            background-color: #00004d;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .btn-default:hover {
            background-color: #3333cc;
        }

        .delete {
            color: #fff;
            background-color: #ff0000;
            padding: 5px 10px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
        }

        .delete:hover {
            background-color: #cc0000;
        }

        footer {
            margin-top: 20px;
            text-align: center;
            color: #ffffff;
            background-color: #00004d;
            padding: 10px;
            border-top: 3px solid #3333cc;
        }
    </style>
</head>
<body>
    <?php include 'utils/adminHeader.php'; ?>
    <div class="container">
        <h1>Event Details</h1>
        <?php if (mysqli_num_rows($result) > 0) { ?>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Event Name</th>
                        <th>No. of Participants</th>
                        <th>Price</th>
                        <th>Student Co-ordinator</th>
                        <th>Staff Co-ordinator</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Location</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_array($result)) {
                        echo '<tr>';
                            echo '<td>' . $row['event_title'] . '</td>';
                            echo '<td>' . $row['participents'] . '</td>';
                            echo '<td>' . $row['event_price'] . '</td>';
                            echo '<td>' . $row['student_coordinator'] . '</td>';
                            echo '<td>' . $row['staff_coordinator'] . '</td>';
                            echo '<td>' . $row['Date'] . '</td>';
                            echo '<td>' . $row['time'] . '</td>';
                            echo '<td>' . $row['location'] . '</td>';
                            echo '<td><a class="delete" href="deleteEvent.php?id=' . $row['event_id'] . '">Delete</a></td>';
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>
        <?php } ?>
        <a class="btn-default" href="createEventForm.php">Create Event</a><!-- Button for creating a new event -->
    </div>
    <?php require 'utils/footer.php'; ?>
</body>
</html>