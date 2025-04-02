<?php
require 'classes/db1.php';
$id=$_GET['id'];
$result = mysqli_query($conn,"SELECT * FROM events,event_info ef,student_coordinator s,staff_coordinator st WHERE type_id = $id and ef.event_id=events.event_id and s.event_id=events.event_id and st.event_id=events.event_id  ");
?>


<!DOCTYPE html>
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
        body{
    background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
    color: white;
    margin: 0;
    padding: 0;
}
.event-box {
    background-color: rgb(255, 255, 255); /* Light transparent background */
    border: 1px solid rgba(255, 255, 255, 0.3); /* Light border */
    padding: 20px;
    margin: 20px 0;
    border-radius: 8px;
    box-shadow: 0 0 10px rgb(255, 4, 4); /* Soft glowing effect */
    color: white;
}

/* Make sure text inside event-box is visible */
.event-box h2, .event-box p {
    color: white;
}

       </style>
        <div class = "content"><!--body content holder-->
            <div class = "container">
                <div class = "col-md-12"><!--body content title holder with 12 grid columns-->

            </div>
       
            <?php
if (mysqli_num_rows($result) > 0) {
    $i = 0;
    while ($row = mysqli_fetch_array($result)) {
?>
        <div class="event-box">
            <?php include 'events.php'; ?>
        </div>
<?php
        $i++;
    }
?>
    
<div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>
        <?php }?>
            <a class="btn btn-default" href="index.php"><span class="glyphicon glyphicon-circle-arrow-left"></span> Back</a>
            

        

        </div><!--body content div-->

     
        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
    
</html>
