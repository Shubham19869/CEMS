<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>cems</title>
<?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
</head>
<style>

/* Large rounded green border */
hr.blueline {
  border: 10px solid #00004d;
  border-radius: 5px;
}

#bj
{
  font-size: 22px;
}
</style>



  <?php require 'utils/header.php'; ?>
  <hr class="blueline">
  <div class="col-md-12">
<style>
        /* General Styles */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }

        /* Navbar */
        .navbar {
          
            padding: 15px;
        }

        .navbar-brand {
            color: white !important;
            font-size: 24px;
            font-weight: bold;
        }

        .nav-link {
            color: white !important;
            font-size: 18px;
            transition: 0.3s;
        }

        .nav-link:hover, .nav-link.active {
            color: #ffcc00 !important;
        }

        /* Hero Section */
        .hero {
            background: url('images/college-event.jpg') no-repeat center center/cover;
            height: px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
            position: relative;
        }

        .hero h1 {
            font-size: 48px;
            font-weight: bold;
            background: rgba(0, 0, 0, 0.6);
            padding: 15px 30px;
            border-radius: 10px;
        }

        /* Sections */
        .section {
            padding: 60px 20px;
            text-align: center;
        }

        .section h2 {
            color: #00004d;
            font-weight: bold;
            margin-bottom: 20px;
            position: relative;
        }

        .section h2::after {
            content: "";
            width: 80px;
            height: 4px;
            background: #ffcc00;
            display: block;
            margin: 10px auto;
            border-radius: 2px;
        }

        /* Cards */
        .card {
            border: none;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        /* List */
        .list-group-item {
            font-size: 18px;
            border: none;
            padding: 15px;
            background: #f8f9fa;
            transition: 0.3s;
        }

        .list-group-item:hover {
            background: #ffcc00;
            color: #000;
        }

        /* Footer */
        footer {
            margin-top: 20px;
            text-align: center;
            background-color: #00004d;
            color: white;
            padding: 15px;
            font-size: 16px;
        }
    </style>
</head>
<body>
  



    <!-- Hero Section -->
    <div class="hero">
        <h1>About Us</h1>
    </div>

    <!-- Welcome Section -->
    <div class="container section">
        <h2>Welcome to College Event Management System</h2>
        <p>
            Our platform simplifies event organization, bringing students and faculty together to create memorable experiences. 
            Whether it's a technical fest, cultural event, or seminar, CEMS streamlines the process effortlessly.
        </p>
    </div>

    <!-- Mission & Vision -->
    <div class="container section">
        <h2>Our Mission & Vision</h2>
        <p>
            Our mission is to provide a seamless and engaging event management experience, fostering collaboration, creativity, 
            and leadership among students. Our vision is to make event planning efficient and enjoyable for everyone involved.
        </p>
    </div>

    <!-- Achievements -->
    <div class="container section">
        <h2>Our Achievements</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card p-4">
                    <h3>500+ Events Organized</h3>
                    <p>Successfully hosted college fests, tech summits, and cultural nights.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4">
                    <h3>10,000+ Participants</h3>
                    <p>Students from different colleges actively participate in our events.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4">
                    <h3>Award-Winning Platform</h3>
                    <p>Recognized as the best event management system for colleges.</p>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <footer>
        &copy; 2025 College Event Management System | All Rights Reserved.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
