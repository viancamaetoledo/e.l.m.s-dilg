<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DILG Pangasinan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            overflow: hidden;
        }
        
        /* Background Container */
        #backgroundContainer {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }
        
        /* Navigation Bar */
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 20px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 1000;
            background: rgba(255, 255, 255, 0.95);
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
        }
        
        .logo-area {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .logo-icon {
            font-size: 2.2rem;
            color: #1a5276;
        }
        
        .logo-text h1 {
            font-size: 1.5rem;
            margin-bottom: 2px;
            color: #1a5276;
        }
        
        .logo-text .subtitle {
            font-size: 0.8rem;
            opacity: 0.8;
            color: #555;
        }
        
        .login-btn {
            background: #1a5276;
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 30px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 10px;
            box-shadow: 0 4px 15px rgba(26, 82, 118, 0.3);
        }
        
        .login-btn:hover {
            background: #154360;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(26, 82, 118, 0.4);
        }
        
        /* Login Form Container */
        .login-container {
            position: fixed;
            top: 0;
            right: -100%;
            width: 100%;
            height: 100%;
            display: flex;
            z-index: 2000;
            transition: all 0.8s cubic-bezier(0.68, -0.55, 0.27, 1.55);
            overflow: hidden;
        }
        
        .login-container.active {
            right: 0;
        }
        
        .login-background {
            flex: 1;
            background-size: cover;
            background-position: center;
            position: relative;
        }
        
        .login-background::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(26, 82, 118, 0.9), rgba(21, 67, 96, 0.95));
        }
        
        .login-form-section {
            flex: 1;
            background: white;
            padding: 60px 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            box-shadow: -5px 0 30px rgba(0, 0, 0, 0.1);
        }
        
        .login-header {
            text-align: center;
            margin-bottom: 40px;
            width: 100%;
            max-width: 400px;
        }
        
        .login-header h2 {
            font-size: 2.5rem;
            color: #1a5276;
            margin-bottom: 10px;
        }
        
        .login-header p {
            color: #666;
            font-size: 1rem;
        }
        
        .login-form {
            width: 100%;
            max-width: 400px;
        }
        
        .form-group {
            margin-bottom: 25px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #444;
            font-size: 0.9rem;
        }
        
        .form-control {
            width: 100%;
            padding: 15px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.3s;
        }
        
        .form-control:focus {
            border-color: #1a5276;
            outline: none;
            box-shadow: 0 0 0 3px rgba(26, 82, 118, 0.2);
        }
        
        .password-container {
            position: relative;
        }
        
        .toggle-password {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: #666;
            cursor: pointer;
        }
        
        .remember-forgot {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
            font-size: 0.9rem;
        }
        
        .remember-me {
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .forgot-password {
            color: #1a5276;
            text-decoration: none;
            font-weight: 500;
        }
        
        .forgot-password:hover {
            text-decoration: underline;
        }
        
        .submit-btn {
            width: 100%;
            background: #1a5276;
            color: white;
            border: none;
            padding: 16px;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            margin-bottom: 20px;
        }
        
        .submit-btn:hover {
            background: #154360;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(26, 82, 118, 0.3);
        }
        
        .back-to-home {
            background: none;
            border: none;
            color: #1a5276;
            font-size: 1rem;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 10px;
            margin-top: 20px;
            padding: 10px;
            border-radius: 6px;
            transition: all 0.3s;
        }
        
        .back-to-home:hover {
            background: #f0f7ff;
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .navbar {
                padding: 15px 20px;
            }
            
            .logo-text h1 {
                font-size: 1.3rem;
            }
            
            .login-container {
                flex-direction: column;
            }
            
            .login-background {
                height: 30%;
            }
            
            .login-form-section {
                height: 70%;
                padding: 40px 20px;
            }
            
            .login-header h2 {
                font-size: 2rem;
            }
        }
    </style>
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
</body>
</html>