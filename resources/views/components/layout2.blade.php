<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DILG ELMS - Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* CSS Variables */
        :root {
            --primary-color: #1a365d;
            --primary-dark: #0d2342;
            --secondary-color: #2d9cdb;
            --accent-color: #ff6b6b;
            --sidebar-width: 260px;
            --header-height: 70px;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            display: flex;
            min-height: 100vh;
            background-color: #f5f7fa;
            color: #333;
        }
        
        /* Sidebar Styles - Updated to match first template */
        .sidebar {
            width: var(--sidebar-width);
            background: linear-gradient(180deg, var(--primary-dark) 0%, var(--primary-color) 100%);
            color: white;
            position: fixed;
            height: 100vh;
            z-index: 100;
            box-shadow: 5px 0 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            overflow-y: auto;
        }
        
        .sidebar-header {
            padding: 25px 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .sidebar-logo {
            width: 50px;
            height: 50px;
            object-fit: contain;
        }
        
        .sidebar-title h3 {
            font-size: 1.2rem;
            margin-bottom: 3px;
        }
        
        .sidebar-title p {
            font-size: 0.85rem;
            opacity: 0.8;
        }
        
        .sidebar-nav {
            padding: 20px 0;
            list-style: none;
        }
        
        .nav-item {
            margin-bottom: 5px;
        }
        
        .nav-link {
            display: flex;
            align-items: center;
            padding: 15px 25px;
            color: rgba(255, 255, 255, 0.9);
            text-decoration: none;
            transition: all 0.3s;
            border-left: 4px solid transparent;
            cursor: pointer;
        }
        
        .nav-link:hover, .nav-link.active {
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
            border-left-color: var(--secondary-color);
        }
        
        .nav-icon {
            width: 25px;
            font-size: 1.2rem;
            margin-right: 15px;
            text-align: center;
        }
        
        .nav-text {
            font-weight: 500;
        }
        
        .sidebar-footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            padding: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            font-size: 0.9rem;
            opacity: 0.8;
        }
        
        /* Main Content Styles */
        .main-content {
            flex: 1;
            margin-left: var(--sidebar-width);
            transition: all 0.3s;
            min-height: 100vh;
        }
        
        main {
            padding: 30px;
        }
        
        /* Header Styles */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 30px;
            height: var(--header-height);
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            position: sticky;
            top: 0;
            z-index: 99;
        }
        
        .header-left h1 {
            font-size: 1.8rem;
            color: var(--primary-color);
        }
        
        .header-right {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        
        .user-profile {
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
        }
        
        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: var(--secondary-color);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
        }
        
        /* Content Area */
        .content {
            margin-top: 20px;
            padding: 25px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 3px 15px rgba(0, 0, 0, 0.05);
        }
        
        /* Responsive Design */
        @media (max-width: 992px) {
            .header {
                padding: 0 20px;
            }
            
            .content {
                padding: 20px;
            }
        }
        
        @media (max-width: 768px) {
            .sidebar {
                width: 70px;
                overflow: hidden;
            }
            
            .sidebar-header h3, .sidebar-title p, .nav-text, .sidebar-footer {
                display: none;
            }
            
            .sidebar-header {
                justify-content: center;
                padding: 20px 10px;
            }
            
            .nav-link {
                justify-content: center;
                padding: 15px;
            }
            
            .nav-icon {
                margin-right: 0;
                font-size: 1.5rem;
            }
            
            .main-content {
                margin-left: 70px;
            }
            
            .header-left h1 {
                font-size: 1.5rem;
            }
        }
        
        @media (max-width: 576px) {
            main {
                padding: 15px;
            }
            
            .header {
                padding: 0 15px;
            }
            
            .content {
                padding: 15px;
            }
            
            .header-left h1 {
                font-size: 1.3rem;
            }
            
            .user-info {
                display: none;
            }
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="sidebar-header">
            <img src="https://upload.wikimedia.org/wikipedia/commons/c/c9/Department_of_the_Interior_and_Local_Government_%28DILG%29_Seal_-_Logo.svg" alt="DILG Logo" class="sidebar-logo">
            <div class="sidebar-title">
                <h3>DILG ELMS</h3>
                <p>Employee Dashboard</p>
            </div>
        </div>
        
        <ul class="sidebar-nav">
            <li class="nav-item">
                <a class="nav-link active" id="overview-link" data-tab="overview">
                    <span class="nav-icon"><i class="fas fa-tachometer-alt"></i></span>
                    <span class="nav-text">Overview Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="leave-link" data-tab="leave-applications">
                    <span class="nav-icon"><i class="fas fa-clipboard-list"></i></span>
                    <span class="nav-text">Leave Applications</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="cto-link" data-tab="cto-applications">
                    <span class="nav-icon"><i class="fas fa-business-time"></i></span>
                    <span class="nav-text">CTO Applications</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="calendar-link" data-tab="calendar">
                    <span class="nav-icon"><i class="fas fa-calendar-alt"></i></span>
                    <span class="nav-text">Calendar</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="settings-link" data-tab="settings">
                    <span class="nav-icon"><i class="fas fa-cog"></i></span>
                    <span class="nav-text">Settings</span>
                </a>
            </li>
        </ul>
        
        <div class="sidebar-footer">
            <p>DILG Pangasinan ELMS v2.1</p>
        </div>
    </aside>

    <div class="main-content">
        <main>
            {{ $slot }}
        </main>
    </div>

    <script>
        // Tab switching functionality
        document.addEventListener('DOMContentLoaded', function() {
            const navLinks = document.querySelectorAll('.nav-link');
            
            navLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    // Remove active class from all links
                    navLinks.forEach(item => item.classList.remove('active'));
                    
                    // Add active class to clicked link
                    this.classList.add('active');
                    
                    // Get the tab to show
                    const tabId = this.getAttribute('data-tab');
                    
                    // Here you would typically load the content for the selected tab
                    console.log(`Switching to tab: ${tabId}`);
                    
                    // Update page title
                    const pageTitle = document.querySelector('.header-left h1');
                    const tabText = this.querySelector('.nav-text').textContent;
                    pageTitle.textContent = tabText;
                });
            });
            
            // Responsive sidebar toggle for mobile
            function handleResize() {
                const sidebar = document.querySelector('.sidebar');
                const mainContent = document.querySelector('.main-content');
                
                if (window.innerWidth <= 768) {
                    sidebar.classList.add('collapsed');
                } else {
                    sidebar.classList.remove('collapsed');
                }
            }
            
            // Initial check
            handleResize();
            
            // Listen for resize events
            window.addEventListener('resize', handleResize);
        });
    </script>
</body>
</html>