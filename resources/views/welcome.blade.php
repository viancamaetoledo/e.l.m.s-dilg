<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DILG Pangasinan - Official Landing Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            color: #333;
            line-height: 1.6;
            background-color: #f8f9fa;
        }
        
        /* Header & Navigation */
        .main-header {
            background: linear-gradient(135deg, #1a5276 0%, #00215E 100%);
            color: white;
            padding: 15px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo-section {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .logo-image {
            width: 60px;
            height: 60px;
            object-fit: contain;
        }
        
        .logo-text h1 {
            font-size: 1.8rem;
            margin-bottom: 5px;
        }
        
        .logo-text p {
            font-size: 0.9rem;
            opacity: 0.9;
        }
        
        .main-nav ul {
            display: flex;
            list-style: none;
            gap: 30px;
        }
        
        .main-nav a {
            color: white;
            text-decoration: none;
            font-weight: 600;
            font-size: 1rem;
            transition: color 0.3s;
            padding: 5px 0;
            position: relative;
            cursor: pointer;
        }
        
        .main-nav a:hover {
            color: #4dabf7;
        }
        
        .main-nav a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background: #4dabf7;
            left: 0;
            bottom: -5px;
            transition: width 0.3s;
        }
        
        .main-nav a:hover::after {
            width: 100%;
        }
        
        .cta-buttons {
            display: flex;
            gap: 20px;
            justify-content: center;
            margin-top: 40px;
        }
        
        .btn {
            padding: 15px 30px;
            border-radius: 30px;
            font-weight: 600;
            font-size: 1.1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            border: none;
            outline: none;
        }
        
        .btn-primary {
            background: white;
            color: #1a5276;
            border: 2px solid white;
        }
        
        .btn-primary:hover {
            background: transparent;
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        
        .btn-secondary {
            background: transparent;
            color: white;
            border: 2px solid white;
        }
        
        .btn-secondary:hover {
            background: white;
            color: #FFC55A;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        
        /* ELMS Section */
        .elms-section {
            text-align: center;
            background: linear-gradient(135deg, #1a5276 0%, #154360 100%);
            color: white;
            padding: 80px 0;
        }
        
        .elms-content {
            max-width: 800px;
            margin: 0 auto;
        }
        
        .elms-logo {
            font-size: 4rem;
            font-weight: 800;
            letter-spacing: 5px;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }
        
        .elms-title {
            font-size: 2rem;
            margin-bottom: 30px;
            font-weight: 300;
        }
        
        /* Footer */
        .main-footer {
            background: #0d2c3e;
            color: white;
            padding: 60px 0 30px;
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }
        
        .footer-logo img {
            width: 80px;
            margin-bottom: 20px;
        }
        
        .footer-links h4, .footer-contact h4 {
            margin-bottom: 20px;
            font-size: 1.2rem;
            color: #4dabf7;
        }
        
        .footer-links ul {
            list-style: none;
        }
        
        .footer-links li {
            margin-bottom: 10px;
        }
        
        .footer-links a {
            color: #ddd;
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .footer-links a:hover {
            color: #4dabf7;
        }
        
        .footer-bottom {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: #aaa;
            font-size: 0.9rem;
        }
        
        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }
        
        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            color: white;
            text-decoration: none;
            transition: all 0.3s;
        }
        
        .social-links a:hover {
            background: #1a5276;
            transform: translateY(-3px);
        }
        
        /* Login Modal Styles */
        .modal-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 2000;
            justify-content: center;
            align-items: center;
            animation: fadeIn 0.3s ease;
        }
        
        .modal-content {
            background: white;
            width: 90%;
            max-width: 450px;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
            animation: slideIn 0.4s ease;
        }
        
        .modal-header {
            background: linear-gradient(135deg, #1a5276 0%, #00215E 100%);
            color: white;
            padding: 25px 30px;
            text-align: center;
        }
        
        .modal-header h2 {
            font-size: 1.8rem;
            margin-bottom: 5px;
        }
        
        .modal-header p {
            opacity: 0.9;
            font-size: 0.95rem;
        }
        
        .modal-body {
            padding: 30px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #333;
        }
        
        .form-control {
            width: 100%;
            padding: 14px 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
            transition: border 0.3s;
        }
        
        .form-control:focus {
            border-color: #1a5276;
            outline: none;
            box-shadow: 0 0 0 3px rgba(26, 82, 118, 0.1);
        }
        
        .modal-footer {
            padding: 20px 30px 30px;
            text-align: center;
            border-top: 1px solid #eee;
        }
        
        .btn-login {
            width: 100%;
            padding: 15px;
            background: linear-gradient(135deg, #1a5276 0%, #00215E 100%);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
        }
        
        .btn-login:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(26, 82, 118, 0.2);
        }
        
        .close-modal {
            position: absolute;
            top: 15px;
            right: 20px;
            background: transparent;
            border: none;
            color: white;
            font-size: 1.8rem;
            cursor: pointer;
            transition: color 0.3s;
        }
        
        .close-modal:hover {
            color: #4dabf7;
        }
        
        .form-footer {
            margin-top: 20px;
            font-size: 0.9rem;
            color: #666;
        }
        
        .form-footer a {
            color: #1a5276;
            font-weight: 600;
            text-decoration: none;
        }
        
        .form-footer a:hover {
            text-decoration: underline;
        }
        
        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        @keyframes slideIn {
            from { 
                opacity: 0;
                transform: translateY(-50px);
            }
            to { 
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Responsive Design */
        @media (max-width: 992px) {
            .nav-container {
                flex-direction: column;
                gap: 20px;
            }
            
            .main-nav ul {
                flex-wrap: wrap;
                justify-content: center;
            }
        }
        
        @media (max-width: 768px) {
            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .btn {
                width: 100%;
                max-width: 300px;
                justify-content: center;
            }
            
            .modal-content {
                width: 95%;
            }
        }
        
        @media (max-width: 480px) {
            .elms-logo {
                font-size: 3rem;
            }
            
            .elms-title {
                font-size: 1.6rem;
            }
            
            .modal-body {
                padding: 20px;
            }
        }
    </style>
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
                        <li><a href="#home">Home</a></li>
                        <li><a href="#elms">ELMS</a></li>
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

    <script>
        // DOM Elements
        const loginModal = document.getElementById('loginModal');
        const loginNavBtn = document.getElementById('loginNavBtn');
        const loginPortalBtn = document.getElementById('loginPortalBtn');
        const closeModalBtn = document.querySelector('.close-modal');
        const submitLoginBtn = document.getElementById('submitLogin');
        const loginForm = document.getElementById('loginForm');
        const forgotPasswordLink = document.getElementById('forgotPassword');
        
        // Show modal when clicking login buttons
        function showLoginModal() {
            loginModal.style.display = 'flex';
            document.body.style.overflow = 'hidden'; // Prevent scrolling
        }
        
        // Hide modal
        function hideLoginModal() {
            loginModal.style.display = 'none';
            document.body.style.overflow = 'auto'; // Re-enable scrolling
        }
        
        // Event Listeners for showing modal
        loginNavBtn.addEventListener('click', showLoginModal);
        loginPortalBtn.addEventListener('click', showLoginModal);
        
        // Event Listeners for hiding modal
        closeModalBtn.addEventListener('click', hideLoginModal);
        
        // Close modal when clicking outside of modal content
        loginModal.addEventListener('click', function(e) {
            if (e.target === loginModal) {
                hideLoginModal();
            }
        });
        
        // Close modal with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && loginModal.style.display === 'flex') {
                hideLoginModal();
            }
        });
        
        // Handle form submission
        submitLoginBtn.addEventListener('click', function() {
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;
            
            // Basic validation
            if (!username || !password) {
                alert('Please enter both username and password');
                return;
            }
            
            // Show loading state
            const originalText = submitLoginBtn.innerHTML;
            submitLoginBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Logging in...';
            submitLoginBtn.disabled = true;
            
            // Simulate login process
            setTimeout(function() {
                // In a real application, this would be an AJAX request to the server
                // For demo purposes, we'll just show a success message
                alert(`Login attempt for user: ${username}\n\nIn a real application, this would authenticate with the ELMS server.`);
                
                // Reset button
                submitLoginBtn.innerHTML = originalText;
                submitLoginBtn.disabled = false;
                
                // Close modal after "successful" login
                hideLoginModal();
                
                // In a real implementation, you would redirect to the ELMS dashboard
                // window.location.href = 'YOUR_ELMS_DASHBOARD_URL';
            }, 1500);
        });
        
        // Forgot password handler
        forgotPasswordLink.addEventListener('click', function(e) {
            e.preventDefault();
            hideLoginModal();
            
            // In a real application, this would open a password recovery form
            alert('Password recovery link has been sent to your registered email.\n\n(Simulation: In a real application, this would trigger password reset)');
        });
        
        // Allow form submission with Enter key
        loginForm.addEventListener('submit', function(e) {
            e.preventDefault();
            submitLoginBtn.click();
        });
        
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                // Don't prevent default for modal triggers
                if (this.id === 'loginNavBtn') return;
                
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if(targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if(targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });
        
        // Add active class to current navigation item
        window.addEventListener('scroll', function() {
            const sections = document.querySelectorAll('section');
            const navLinks = document.querySelectorAll('.main-nav a');
            
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if(scrollY >= (sectionTop - 100)) {
                    current = section.getAttribute('id');
                }
            });
            
            navLinks.forEach(link => {
                link.classList.remove('active');
                if(link.getAttribute('href') === `#${current}`) {
                    link.classList.add('active');
                }
            });
        });
    </script>
</body>
</html>