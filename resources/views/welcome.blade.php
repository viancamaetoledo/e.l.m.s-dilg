<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DILG Pangasinan - Official Landing Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="/css/landingstyle.css">
</head>
<body>
    <!-- Background Container (Empty - to be filled programmatically) -->
    <div id="backgroundContainer"></div>
    
    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="logo-area">
            <i class="fas fa-landmark logo-icon"></i>
            <div class="logo-text">
                <h1>DILG Pangasinan</h1>
                <p class="subtitle">Department of the Interior and Local Government</p>
            </div>
        </div>
        <button class="login-btn" id="loginBtn">
            <i class="fas fa-sign-in-alt"></i>
             <a href="{{route('user.dashboard')}}" class="nav-link">Log in</a>
        </button>
    </nav>
    
    <!-- Login Form Container -->
    <div class="login-container" id="loginContainer">
        <div class="login-background" id="loginBackground"></div>
        <div class="login-form-section">
            <div class="login-header">
                <h2>Welcome Back</h2>
                <p>Enter your credentials to access the system</p>
            </div>
            
            <form class="login-form" id="loginForm">
                <div class="form-group">
                    <label for="username">Username / Employee ID</label>
                    <input type="text" id="username" class="form-control" placeholder="Enter your username or employee ID" required>
                </div>
                
                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="password-container">
                        <input type="password" id="password" class="form-control" placeholder="Enter your password" required>
                        <button type="button" class="toggle-password" id="togglePassword">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                </div>
                
                <div class="remember-forgot">
                    <label class="remember-me">
                        <input type="checkbox" id="rememberMe">
                        <span>Remember me</span>
                    </label>
                    <a href="#" class="forgot-password">Forgot Password?</a>
                </div>
                
                <button type="submit" class="submit-btn">
                    <i class="fas fa-sign-in-alt"></i>
                   <a href="{{route('user.dashboard')}}" class="nav-link">Log in</a>
                </button>
                
                <button type="button" class="back-to-home" id="backToHome">
                    <i class="fas fa-arrow-left"></i>
                    Back to Home
                </button>
            </form>
        </div>
    </div>

    <script>
        // DOM Elements
        const loginBtn = document.getElementById('loginBtn');
        const backToHomeBtn = document.getElementById('backToHome');
        const loginContainer = document.getElementById('loginContainer');
        const loginBackground = document.getElementById('loginBackground');
        const loginForm = document.getElementById('loginForm');
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');
        
        // Toggle password visibility
        togglePassword.addEventListener('click', function() {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            
            // Toggle eye icon
            if (type === 'password') {
                this.innerHTML = '<i class="fas fa-eye"></i>';
            } else {
                this.innerHTML = '<i class="fas fa-eye-slash"></i>';
            }
        });
        
        // Show login form
        loginBtn.addEventListener('click', function() {
            loginContainer.classList.add('active');
        });
        
        // Hide login form and return to home
        backToHomeBtn.addEventListener('click', function() {
            loginContainer.classList.remove('active');
        });
        
        // Handle form submission
        loginForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;
            
            // Simple validation
            if (!username || !password) {
                alert('Please enter both username and password.');
                return;
            }
            
            // Show loading state
            const submitBtn = this.querySelector('.submit-btn');
            const originalText = submitBtn.innerHTML;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Logging in...';
            submitBtn.disabled = true;
            
            // Simulate login process
            setTimeout(() => {
                // In a real application, this would be an API call
                // For demo purposes, we'll just show a success message
                alert('Login successful!');
                
                // Reset form
                loginForm.reset();
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
                
                // Close login form
                loginContainer.classList.remove('active');
                
                // In a real application, you would redirect to the main application page
                // window.location.href = 'main-application.html';
            }, 1500);
        });
        
        // Function to set background image programmatically
        function setBackgroundImage(imageUrl) {
            const backgroundContainer = document.getElementById('backgroundContainer');
            backgroundContainer.style.backgroundImage = `url('${imageUrl}')`;
            backgroundContainer.style.backgroundSize = 'cover';
            backgroundContainer.style.backgroundPosition = 'center';
            backgroundContainer.style.backgroundRepeat = 'no-repeat';
        }
        
        // Function to set login background image programmatically
        function setLoginBackgroundImage(imageUrl) {
            loginBackground.style.backgroundImage = `url('${imageUrl}')`;
        }
        
        // Example usage (you can call these functions from your program):
        setBackgroundImage('your-image-url-here');
        setLoginBackgroundImage('your-login-background-url-here');
    </script>
    
    <!-- Optional: Diagnostic script (you can remove this after testing) -->
    <script>
        window.onload = function() {
            // Check if CSS is loaded
            var links = document.getElementsByTagName('link');
            var cssLoaded = false;
            
            for(var i=0; i<links.length; i++) {
                if(links[i].href && links[i].href.indexOf('style.css') !== -1) {
                    cssLoaded = true;
                    console.log('CSS file found:', links[i].href);
                    
                    // Test if it's actually loaded
                    setTimeout(function() {
                        var bodyColor = window.getComputedStyle(document.body).backgroundColor;
                        console.log('Body background color:', bodyColor);
                    }, 100);
                }
            }
            
            if(!cssLoaded) {
                console.error('style.css NOT FOUND! Check file path.');
            }
        };
    </script>
</body>
</html>