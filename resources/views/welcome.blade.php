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
        
        /* Responsive Design */
        @media (max-width: 992px) {
            .hero-content h2 {
                font-size: 2.8rem;
            }
            
            .about-content {
                flex-direction: column;
            }
            
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
            .hero-content h2 {
                font-size: 2.3rem;
            }
            
            .hero-content p {
                font-size: 1.1rem;
            }
            
            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .btn {
                width: 100%;
                max-width: 300px;
                justify-content: center;
            }
            
            .section-title h2 {
                font-size: 2rem;
            }
        }
        
        @media (max-width: 480px) {
            .hero-content h2 {
                font-size: 2rem;
            }
            
            .section {
                padding: 60px 0;
            }
            
            .service-card {
                padding: 30px 20px;
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
                    <li><a href="#home">Login</a></li>   
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
                <a href="YOUR_ELMS_LOGIN_PAGE_URL_HERE" class="btn btn-primary">
                    <i class="fas fa-sign-in-alt"></i> Access ELMS Portal
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="main-footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">
                    <img src="YOUR_DILG_LOGO_IMAGE_URL_HERE" alt="DILG Logo">
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

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
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
        
        // Simple animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if(entry.isIntersecting) {
                    entry.target.classList.add('animate');
                }
            });
        }, observerOptions);
        
        // Observe elements to animate
        document.querySelectorAll('.service-card, .about-image, .contact-item').forEach(el => {
            observer.observe(el);
        });
    </script>
</body>
</html>