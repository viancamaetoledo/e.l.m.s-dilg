<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DILG Pangasinan - Official Landing Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/landingstyle.css">
</head>
<body>
    <!-- Header & Navigation -->
    <header class="main-header">
        <div class="container nav-container">
            <div class="logo-section">
                <!-- DILG Logo -->
                <img src="https://upload.wikimedia.org/wikipedia/commons/c/c9/Department_of_the_Interior_and_Local_Government_%28DILG%29_Seal_-_Logo.svg" alt="DILG Logo" class="logo-image">
                <div class="logo-text">
                    <h1>DILG Pangasinan</h1>
                    <p>Department of the Interior and Local Government</p>
                 </div>
            </div>
            <nav class="main-nav">
                <ul>
                    <li><a id="loginNavBtn">Login</a></li>   
                </ul>
            </nav>
        </div>
    </header>

    <!-- ELMS Section -->
    <section id="elms" class="elms-section">
        <div class="container elms-content">
            <div class="elms-logo">E.L.M.S</div>
            <h3 class="elms-title">Employee Leave Management System</h3>
            <p>Streamlining employee leave management for efficient government service delivery.</p>
            <div style="margin-top: 40px;">
                <button id="loginPortalBtn" class="btn btn-primary">
                    <i class="fas fa-sign-in-alt"></i> Access ELMS Portal
                </button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="main-footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">
                <img src="https://upload.wikimedia.org/wikipedia/commons/c/c9/Department_of_the_Interior_and_Local_Government_%28DILG%29_Seal_-_Logo.svg" alt="DILG Logo" class="logo-image">
                    <h3>DILG Pangasinan</h3>
                    <p>Department of the Interior and Local Government</p>
                </div>
                
                <div class="footer-links">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="{{route('admin.dashboard')}}">Admin</a></li>
                        <li><a href="{{ route('user.dashboard') }}">Employee</a></li>
                    </ul>
                </div>
                
                <div class="footer-contact">
                    <h4>Contact Info</h4>
                    <p><i class="fas fa-map-marker-alt"></i> Capitol Complex, Lingayen, Pangasinan</p>
                    <p><i class="fas fa-phone"></i> (075) 123-4567</p>
                    <p><i class="fas fa-envelope"></i> info@dilgpangasinan.gov.ph</p>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2023 DILG Pangasinan. All rights reserved. | "Let's work together"</p>
                <p>Promoting peace and order, ensuring public safety, and strengthening local government capabilities.</p>
            </div>
        </div>
    </footer>

    <!-- Login Modal -->
    <div id="loginModal" class="modal-overlay">
        <div class="modal-content">
            <div class="modal-header">
                <h2>ELMS Login</h2>
                <p>Employee Leave Management System</p>
                <button class="close-modal">&times;</button>
            </div>
            
            <div class="modal-body">
                <form id="loginForm">
                    <div class="form-group">
                        <label for="username">Username / Employee ID</label>
                        <input type="text" id="username" class="form-control" placeholder="Enter your username" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" class="form-control" placeholder="Enter your password" required>
                    </div>
                    
                    <div class="form-group">
                        <div class="form-footer">
                            <a href="#" id="forgotPassword">Forgot Password?</a>
                        </div>
                    </div>
                </form>
            </div>
            
            <div class="modal-footer">
                <button id="submitLogin" class="btn-login">
                    <i class="fas fa-sign-in-alt"></i> Login to ELMS
                </button>
                <div class="form-footer" style="margin-top: 15px;">
                    <p>Need help? Contact <a href="mailto:support@dilgpangasinan.gov.ph">IT Support</a></p>
                </div>
            </div>
        </div>
    </div>

    <script src="/js/landingscript.js"></script>
</body>
</html>