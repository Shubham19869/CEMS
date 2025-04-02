<?php
require_once 'utils/header.php';
require_once 'utils/styles.php';

$usn = $_POST['usn'];

include_once 'classes/db1.php';

// Fetch registered events for the given USN from the registered table
$result = mysqli_query($conn, "
    SELECT e.event_title, st.st_name, s.name AS staff_name, ef.Date, ef.time, ef.location
    FROM registered r
    JOIN events e ON r.event_id = e.event_id
    JOIN event_info ef ON e.event_id = ef.event_id
    LEFT JOIN staff_coordinator s ON e.event_id = s.event_id
    LEFT JOIN student_coordinator st ON e.event_id = st.event_id
    WHERE r.usn = '$usn'
");

?>

<div class="content">
    <div class="container">
        <h1>Registered Events</h1>
        <?php
        if (mysqli_num_rows($result) > 0) {
        ?>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Event Name</th>
                        <th>Student Coordinator</th>
                        <th>Staff Coordinator</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Location</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_array($result)) {
                        echo '<tr>';
                        echo '<td>' . htmlspecialchars($row['event_title']) . '</td>';
                        echo '<td>' . (!empty($row['st_name']) ? htmlspecialchars($row['st_name']) : 'N/A') . '</td>';
                        echo '<td>' . (!empty($row['staff_name']) ? htmlspecialchars($row['staff_name']) : 'N/A') . '</td>';
                        echo '<td>' . htmlspecialchars($row['Date']) . '</td>';
                        echo '<td>' . htmlspecialchars($row['time']) . '</td>';
                        echo '<td>' . htmlspecialchars($row['location']) . '</td>';
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>
        <?php
        } else {
            echo '<p>No events registered yet.</p>';
        }
        ?>
    </div>
</div>

<?php include 'utils/footer.php'; ?>
