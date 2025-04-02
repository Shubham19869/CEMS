<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f4;
        }
        .modal-dialog {
            max-width: 750px; 
        }
        .modal-content {
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
        }
        .modal-header, .modal-footer {
            border: none;
        }
        .submit-btn {
            background: linear-gradient(to right, #ff416c, #ff4b2b);
            color: white;
            padding: 10px 25px;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            transition: 0.3s;
        }
        .submit-btn:hover {
            opacity: 0.8;
        }
        .form-control {
            border: none;
            border-bottom: 2px solid #ccc;
            border-radius: 0;
            padding: 10px;
            font-size: 16px;
        }
        .form-control:focus {
            border-bottom: 2px solid #ff416c;
            outline: none;
            box-shadow: none;
        }
        .contact-container {
            display: flex;
        }
        .contact-form {
            width: 50%;
            padding-right: 20px;
        }
        .contact-info {
            width: 50%;
            padding-left: 20px;
            border-left: 2px solid #f4f4f4;
        }
        .social-links a {
            text-decoration: none;
            color: #ff416c;
            margin-right: 10px;
            font-size: 22px;
            transition: 0.3s;
        }
        .social-links a:hover {
            color: #ff4b2b;
        }
    </style>
</head>
<body>
    <div class="modal show d-block" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title fw-bold">Contact Us</h4>
                </div>
                <div class="modal-body">
                    <div class="contact-container">
                        <div class="contact-form">
                            <form>
                                <div class="mb-3">
                                    <label class="form-label">Your Name</label>
                                    <input type="text" class="form-control" placeholder="Enter your name">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" placeholder="Enter your email address">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Message</label>
                                    <textarea class="form-control" rows="3" placeholder="Your message here..."></textarea>
                                </div>
                                <button type="submit" class="submit-btn w-100">Submit →</button>
                            </form>
                        </div>
                        <div class="contact-info">
                            <h5 class="fw-bold">Our Contact Details</h5>
                            <p><i class="fas fa-map-marker-alt"></i> 123 Street Name, City, Country</p>
                            <p><i class="fas fa-envelope"></i> support@example.com</p>
                            <p><i class="fas fa-phone"></i> +123 456 7890</p>
                            <div class="social-links">
                                <a href="https://www.instagram.com/college_username" target="_blank"><i class="fab fa-instagram"></i></a>
                                <a href="https://www.facebook.com/college_username" target="_blank"><i class="fab fa-facebook"></i></a>
                                <a href="https://twitter.com/college_username" target="_blank"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.linkedin.com/in/college_username" target="_blank"><i class="fab fa-linkedin"></i></a>
                                <a href="https://wa.me/+1234567890" target="_blank"><i class="fab fa-whatsapp"></i></a>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
