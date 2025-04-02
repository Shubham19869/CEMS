<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>cems</title>
        <?php require 'utils/styles.php';?>
     </head>
    <body>
        <?php require 'utils/header.php'; ?>
        <style>
            /* General Styling */
/* General Styling */
body {
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
    color: white;
    margin: 0;
    padding: 0;
}
.btn-default {
        background: #ff9800; /* Orange button */
        color: white;
    }

    .btn-default:hover {
        background: #e68900;
    }

/* Main Container */
.container {
    max-width: 1200px;
    margin: auto;
    padding: 20px;
}

/* Two Events Per Row */
.event-row {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin-bottom: 30px;
}

/* Event Card */
.event-card {
    width: 48%;
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
}

/* Hover Effect */
.event-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 15px rgba(255, 255, 255, 0.3);
}

/* Event Image */
.event-card img {
    width: 100%;
    height: 250px;
    object-fit: cover;
    border-radius: 12px 12px 0 0;
}

/* Event Content */
.event-content {
    padding: 20px;
    text-align: center;
}

/* Event Title */
.event-content h1 {
    font-size: 26px;
    font-weight: bold;
    text-transform: uppercase;
    margin-bottom: 10px;
    color: #ffcc00;
    text-decoration: underline;
}

/* Event Description */
.event-content p {
    font-size: 16px;
    line-height: 1.5;
    color: #ddd;
}

/* Button */
.btn {
    display: inline-block;
    margin-top: 15px;
    padding: 12px 20px;
    font-size: 16px;
    font-weight: bold;
    text-decoration: none;
    border-radius: 8px;
    background:linear-gradient(90deg, #ff6a00, #ee0979);
    color: black;
    transition: background 0.3s ease-in-out, transform 0.2s ease-in-out;
}

.btn:hover {
    background: #ff9900;
    transform: scale(1.05);
}

/* Responsive Design */
@media screen and (max-width: 768px) {
    .event-row {
        flex-direction: column;
        align-items: center;
    }

    .event-card {
        width: 100%;
        margin-bottom: 20px;
    }
}

        </style><!--header content. file found in utils folder-->
        <div class = "content"><!--body content holder-->
            <div class = "container">
                <div class = "col-md-12"><!--body content title holder with 12 grid columns-->
                <h1 style="color: #00bcd4; font-size: 42px; font-weight: bold; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);">
                <strong>  Register your Favourite events:</strong>
                    </h1><!--body content title-->
            </div>
            
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>
            
            <div class="container">
    <!-- Row 1: Technical & Gaming Events -->
    <div class="event-row">
        <div class="event-card">
            <img src="images/technical.jpg" alt="Technical Events">
            <div class="event-content">
                <h1>Technical Events</h1>
                <p>Embrace your technical skills by participating in our different technical events!</p>
                <a class="btn" href="viewEvent.php?id=1">View Technical Events</a>
            </div>
        </div>
        
        <div class="event-card">
            <img src="images/gaming.jpg" alt="Gaming Events">
            <div class="event-content">
                <h1>Gaming Events</h1>
                <p>Embrace your gaming skills by participating in our different gaming events!</p>
                <a class="btn" href="viewEvent.php?id=2">View Gaming Events</a>
            </div>
        </div>
    </div>

    <!-- Row 2: On-Stage & Off-Stage Events -->
    <div class="event-row">
        <div class="event-card">
            <img src="images/onstage.jpg" alt="On-Stage Events">
            <div class="event-content">
                <h1>On-Stage Events</h1>
                <p>Embrace your confidence by participating in our different on-stage events!</p>
                <a class="btn" href="viewEvent.php?id=3">View On-Stage Events</a>
            </div>
        </div>

        <div class="event-card">
            <img src="images/offstage.jpg" alt="Off-Stage Events">
            <div class="event-content">
                <h1>Off-Stage Events</h1>
                <p>Embrace your talent by participating in our different off-stage events!</p>
                <a class="btn" href="viewEvent.php?id=4">View Off-Stage Events</a>
            </div>
        </div>
    </div>
</div>

  
        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>