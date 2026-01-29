<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DILG Pangasinan | Official Portal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            /* Professional Base */
            --navy-deep: #020617;
            --navy-rich: #172554;
            --blue-vibrant: #2563eb;
            
            /* BLOOM COLORS */
            --bloom-gold: #fbbf24;      
            --bloom-red: #ef4444;       
            
            /* GLOW VARIABLES */
            --glow-gold: rgba(251, 191, 36, 0.6);
            --glow-red: rgba(239, 68, 68, 0.6);
            --glow-blue: rgba(37, 99, 235, 0.4);
            --glow-white: rgba(255, 255, 255, 0.5);
            
            --bg-surface: #ffffff;
            --bg-soft: #f8fafc;
            
            --text-main: #1e293b;       
            --text-muted: #64748b;
            
            --shadow-card: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }
        
        body {
            color: var(--text-main);
            background-color: var(--bg-soft);
            line-height: 1.6;
        }

        /* Utility */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 24px;
        }

        /* Top Bar */
        .top-bar {
            background: linear-gradient(90deg, var(--navy-deep) 0%, #0f172a 100%);
            color: rgba(255,255,255,0.9);
            font-size: 0.85rem;
            padding: 10px 0;
            position: relative;
            z-index: 1001;
        }

        .top-bar .container {
            display: flex;
            justify-content: flex-end;
            gap: 24px;
        }

        .top-bar i {
            color: var(--bloom-gold);
            filter: drop-shadow(0 0 5px var(--glow-gold));
            margin-right: 8px;
        }

        /* Main Header */
        .main-header {
            background: var(--bg-surface);
            box-shadow: 0 4px 20px -5px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
            border-top: 4px solid;
            border-image: linear-gradient(90deg, var(--bloom-red), var(--bloom-gold), var(--blue-vibrant)) 1;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 18px 0;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 16px;
            text-decoration: none;
            color: inherit;
        }

        .brand-logo {
            width: 58px;
            height: 58px;
            object-fit: contain;
            filter: drop-shadow(0 2px 4px rgba(0,0,0,0.1));
        }

        .brand-text h1 {
            font-size: 1.35rem;
            font-weight: 800;
            color: var(--navy-deep);
            line-height: 1.2;
        }

        .brand-text span {
            font-size: 0.85rem;
            color: var(--text-muted);
            font-weight: 500;
        }

        .btn-header {
            background-color: white;
            color: var(--blue-vibrant);
            font-weight: 600;
            padding: 10px 24px;
            border: 2px solid #eff6ff;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 0.95rem;
        }

        .btn-header:hover {
            border-color: var(--blue-vibrant);
            box-shadow: 0 0 15px var(--glow-blue);
            transform: translateY(-1px);
        }

        /* Hero Section */
        .hero {
            position: relative;
            background: linear-gradient(135deg, rgba(2, 6, 23, 0.95) 0%, rgba(30, 58, 138, 0.9) 70%), url('/image/dilg_bldg.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 160px 0 200px; /* Adjusted padding to accommodate logos */
            text-align: center;
            overflow: hidden;
        }

        .hero::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background: linear-gradient(90deg, var(--bloom-red), var(--bloom-gold), var(--blue-vibrant));
            box-shadow: 0 -2px 20px rgba(251, 191, 36, 0.4), 0 -4px 10px rgba(239, 68, 68, 0.3);
            z-index: 3;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
            margin: 0 auto;
        }

        .hero-logos {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 90px;
            margin-bottom: 30px;;
            animation: fadeIn 1s ease-out;
        }

        .hero-logo-img {
            width: 500px;
            height: 400px;
            object-fit: contain;
        }


        .hero h2 {
            font-size: 4rem;
            font-weight: 800;
            letter-spacing: -0.03em;
            margin-bottom: 16px;
            line-height: 1.1;
            text-shadow: 0 10px 30px rgba(0,0,0,0.5);
            background: linear-gradient(to bottom, #ffffff, #e2e8f0);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero p {
            font-size: 1.25rem;
            color: #cbd5e1;
            margin-bottom: 100px;
            font-weight: 500;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        .btn-hero {
            background: var(--glow-red);
            color: white;
            padding: 18px 45px;
            border-radius: 12px;
            font-weight: 700;
            font-size: 1.1rem;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            box-shadow: 0 0 20px var(--glow-blue);
            display: inline-flex;
            align-items: center;
            gap: 12px;
        }

        .btn-hero:hover {
            background: #f94545;
            transform: translateY(-3px);
            box-shadow: 0 0 30px var(--glow-blue), 0 0 10px rgba(255,255,255,0.4);
        }

        /* Services Grid */
        .services {
            padding: 90px 0;
            background: white;
        }

        .section-header {
            text-align: center;
            margin-bottom: 70px;
        }

        .section-header h3 {
            font-size: 2.25rem;
            color: var(--navy-deep);
            margin-bottom: 16px;
            font-weight: 800;
            letter-spacing: -0.02em;
        }

        .section-header p {
            color: var(--text-muted);
            max-width: 600px;
            margin: 0 auto;
            font-size: 1.1rem;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 40px;
        }

        .service-card {
            background: white;
            border: 1px solid #f1f5f9;
            border-radius: 20px;
            padding: 40px;
            transition: all 0.4s ease;
            position: relative;
            box-shadow: var(--shadow-card);
            z-index: 1;
        }

        .service-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px -10px rgba(0,0,0,0.1);
            border-color: #e2e8f0;
        }

        /* Gradient Borders on Hover */
        .service-card::before {
            content: "";
            position: absolute;
            inset: -1px;
            border-radius: 20px;
            padding: 2px;
            background: linear-gradient(135deg, var(--bloom-red), var(--bloom-gold), var(--blue-vibrant));
            -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
            opacity: 0;
            transition: opacity 0.4s ease;
            pointer-events: none;
        }

        .service-card:hover::before {
            opacity: 1;
        }

        .icon-box {
            width: 60px;
            height: 60px;
            background: #f8fafc;
            color: var(--blue-vibrant);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.75rem;
            margin-bottom: 24px;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }

        .service-card:hover .icon-box {
            background: var(--navy-deep);
            color: var(--bloom-gold);
            box-shadow: 0 0 20px var(--glow-gold);
            transform: rotate(-5deg);
        }

        .service-card h4 {
            font-size: 1.35rem;
            margin-bottom: 12px;
            color: var(--navy-deep);
            font-weight: 700;
        }

        .service-card p {
            color: var(--text-muted);
            font-size: 1rem;
            line-height: 1.7;
        }

        /* Footer */
        .main-footer {
            background-color: var(--navy-deep);
            color: white;
            padding: 80px 0 40px;
            position: relative;
        }
        
        .main-footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, var(--blue-vibrant), var(--bloom-gold), var(--bloom-red));
            box-shadow: 0 2px 15px rgba(251, 191, 36, 0.3);
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
            gap: 60px;
            margin-bottom: 60px;
        }

        .footer-info h5 {
            color: white;
            font-size: 1.25rem;
            margin-bottom: 24px;
            font-weight: 800;
            letter-spacing: -0.01em;
        }

        .footer-info p {
            color: #94a3b8;
            margin-bottom: 16px;
            font-size: 1rem;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .footer-info i {
            color: var(--bloom-gold);
            width: 24px;
            font-size: 1.1rem;
            filter: drop-shadow(0 0 3px var(--glow-gold));
        }

        .footer-links ul { list-style: none; }
        .footer-links li { margin-bottom: 14px; }

        .footer-links a {
            color: #94a3b8;
            text-decoration: none;
            transition: all 0.2s;
            font-size: 1rem;
            display: inline-block;
        }

        .footer-links a:hover {
            color: var(--bloom-gold);
            text-shadow: 0 0 8px var(--glow-gold);
            transform: translateX(4px);
        }

        .copyright {
            text-align: center;
            padding-top: 40px;
            border-top: 1px solid rgba(255,255,255,0.05);
            color: #64748b;
            font-size: 0.9rem;
        }

        /* Modern Modal */
        .modal-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(2, 6, 23, 0.85);
            backdrop-filter: blur(8px);
            z-index: 2000;
            justify-content: center;
            align-items: center;
            animation: fadeIn 0.3s ease;
        }

        .modal-content {
            background: white;
            width: 100%;
            max-width: 420px;
            border-radius: 24px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
            overflow: hidden;
            animation: slideUp 0.4s cubic-bezier(0.16, 1, 0.3, 1);
            position: relative;
        }
        
        .modal-content::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 6px;
            background: linear-gradient(90deg, var(--bloom-red), var(--bloom-gold));
            box-shadow: 0 2px 15px rgba(239, 68, 68, 0.4);
        }

        .modal-header {
            padding: 40px 32px 10px;
            text-align: center;
        }

        .modal-logo {
            width: 70px;
            margin-bottom: 20px;
            filter: drop-shadow(0 4px 6px rgba(0,0,0,0.1));
        }

        .modal-header h2 {
            font-size: 1.75rem;
            color: var(--navy-deep);
            margin-bottom: 8px;
            font-weight: 800;
        }

        .modal-header p {
            color: var(--text-muted);
            font-size: 0.95rem;
        }

        .modal-body {
            padding: 24px 32px 40px;
        }

        .form-label {
            display: block;
            font-size: 0.9rem;
            font-weight: 600;
            color: var(--navy-deep);
            margin-bottom: 8px;
        }

        .input-group {
            position: relative;
            margin-bottom: 20px;
        }

        .input-group i {
            position: absolute;
            left: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: #94a3b8;
            transition: color 0.3s;
        }

        .form-control {
            width: 100%;
            padding: 14px 16px 14px 44px;
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            font-size: 1rem;
            transition: all 0.3s;
            outline: none;
            background: #f8fafc;
        }

        .form-control:focus {
            border-color: var(--blue-vibrant);
            background: white;
            box-shadow: 0 0 0 4px var(--glow-blue);
        }
        
        .form-control:focus + i {
            color: var(--blue-vibrant);
            filter: drop-shadow(0 0 2px var(--glow-blue));
        }

        .btn-login {
            width: 100%;
            padding: 16px;
            background: linear-gradient(135deg, var(--blue-vibrant), var(--navy-rich));
            color: white;
            border: none;
            border-radius: 12px;
            font-weight: 700;
            font-size: 1.05rem;
            cursor: pointer;
            transition: all 0.3s;
            margin-top: 15px;
            position: relative;
            overflow: hidden;
        }

        .btn-login:hover {
            box-shadow: 0 0 20px var(--glow-blue);
            transform: translateY(-2px);
        }

        .close-modal {
            position: absolute;
            top: 20px;
            right: 20px;
            background: #f1f5f9;
            border: none;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            font-size: 1.2rem;
            color: #64748b;
            cursor: pointer;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .close-modal:hover {
            background: #fef2f2;
            color: var(--bloom-red);
            box-shadow: 0 0 10px var(--glow-red);
            transform: rotate(90deg);
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @media (max-width: 768px) {
            .hero h2 { font-size: 3rem; }
            .hero { padding: 100px 0; }
            .footer-grid { grid-template-columns: 1fr; gap: 40px; }
            .top-bar { display: none; }
        }
    </style>
</head>
<body>

    <div class="top-bar">
        <div class="container">
            <span><i class="fas fa-phone-alt"></i> (075) 542-6834</span>
            <span><i class="fas fa-envelope"></i> region1@dilg.gov.ph</span>
        </div>
    </div>

    <header class="main-header">
        <div class="container header-content">
            <a href="#" class="brand">
                <img src="/image/dilg-logo.png" alt="DILG Logo" class="brand-logo">
                <div class="brand-text">
                    <h1>DILG Pangasinan</h1>
                    <span>Department of the Interior and Local Government</span>
                </div>
            </a>
            <button id="loginNavBtn" class="btn-header">
                <i class="fas fa-user-circle" style="margin-right: 8px;"></i> Login
            </button>
        </div>
    </header>

    <section class="hero">
         <h2>E.L.M.S. Portal</h2>
            <p>Employee Leave Management System</p>

        <div class="container hero-content">
            <div class="hero-logos">
                <img src="/image/dilg-logo.png" alt="DILG Logo" class="hero-logo-img">
                <img src="/image/DILG_Pangasinan.png" alt="Provincial Seal" class="hero-logo-img">
            </div>
        </div>
    </section>

    <section class="services">
        <div class="container">
            <div class="section-header">
                <h3>System Features</h3>
                <p>Designed to enhance efficiency and transparency within the department.</p>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="icon-box"><i class="fas fa-calendar-check"></i></div>
                    <h4>Leave Application</h4>
                    <p>File and track leave requests seamlessly with real-time status updates and digital approvals.</p>
                </div>
                <div class="service-card">
                    <div class="icon-box"><i class="fas fa-chart-pie"></i></div>
                    <h4>Credits Monitoring</h4>
                    <p>Automated calculation of leave credits, helping employees manage their benefits effectively.</p>
                </div>
                <div class="service-card">
                    <div class="icon-box"><i class="fas fa-file-contract"></i></div>
                    <h4>Digital Records</h4>
                    <p>Secure cloud-based storage for all personnel records, ensuring data integrity and easy retrieval.</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="main-footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-info">
                    <div style="margin-top: 24px;">
                        <img src="/image/dilg-logo.png" style="height: 48px; opacity: 0.9;" alt="Logo">
                    </div>
                    <h5>DILG Pangasinan</h5>
                    <p>Promoting peace and order, ensuring public safety, and strengthening local government capabilities towards active citizen participation.</p>
                </div>
                <div class="footer-links">
                    <h5>Quick Links</h5>
                    <ul>
                        <li><a href="#">Official Website</a></li>
                    </ul>
                </div>
                <div class="footer-info">
                    <h5>Contact Us</h5>
                    <p><i class="fas fa-map-marker-alt"></i> DILG Pangasinan Alvear St., Poblacion, Lingayen, Pangasinan</p>
                    <p><i class="fas fa-phone"></i> (075) 542-6834</p>
                    <p><i class="fas fa-clock"></i> Mon - Fri: 8:00 AM - 5:00 PM</p>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2026 DILG Pangasinan. All rights reserved. | Government Website Standard</p>
            </div>
        </div>
    </footer>

    <div id="loginModal" class="modal-overlay">
        <div class="modal-content">
            <button class="close-modal">&times;</button>
            <div class="modal-header">
                <img src="/image/dilg-logo.png" alt="Logo" class="modal-logo">
                <h2>Welcome Back</h2>
                <p>Please enter your credentials to access ELMS</p>
            </div>
            <div class="modal-body">
                <form id="loginForm">
                    <label class="form-label" for="username">Username / ID</label>
                    <div class="input-group">
                        <i class="fas fa-user"></i>
                        <input type="text" id="username" class="form-control" placeholder="Enter your ID number" required>
                    </div>

                    <label class="form-label" for="password">Password</label>
                    <div class="input-group">
                        <i class="fas fa-lock"></i>
                        <input type="password" id="password" class="form-control" placeholder="Enter your password" required>
                    </div>

                    <div style="text-align: right; margin-bottom: 24px;">
                        <a href="#" style="color: var(--blue-vibrant); font-size: 0.9rem; font-weight: 500; text-decoration: none;">Forgot Password?</a>
                    </div>

                    <button type="submit" id="submitLogin" class="btn-login">Sign In to ELMS</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        const loginModal = document.getElementById('loginModal');
        const loginNavBtn = document.getElementById('loginNavBtn');
        const loginPortalBtn = document.getElementById('loginPortalBtn');
        const closeModalBtn = document.querySelector('.close-modal');
        const submitLoginBtn = document.getElementById('submitLogin');
        const loginForm = document.getElementById('loginForm');

        function toggleModal(show) {
            loginModal.style.display = show ? 'flex' : 'none';
            document.body.style.overflow = show ? 'hidden' : 'auto';
        }

        loginNavBtn.addEventListener('click', () => toggleModal(true));
        loginPortalBtn.addEventListener('click', () => toggleModal(true));
        closeModalBtn.addEventListener('click', () => toggleModal(false));

        loginModal.addEventListener('click', (e) => {
            if (e.target === loginModal) toggleModal(false);
        });

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') toggleModal(false);
        });

        loginForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const originalText = submitLoginBtn.innerHTML;
            submitLoginBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Authenticating...';
            submitLoginBtn.disabled = true;
            submitLoginBtn.style.opacity = '0.8';

            setTimeout(() => {
                alert('Login Successful (Simulation)');
                submitLoginBtn.innerHTML = originalText;
                submitLoginBtn.disabled = false;
                submitLoginBtn.style.opacity = '1';
                toggleModal(false);
            }, 1500);
        });
    </script>
</body>
</html>