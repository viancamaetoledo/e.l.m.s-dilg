<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DILG ELMS - Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* CSS Variables */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        :root {
           --primary-color: #1a5276;
            --primary-dark: #00215E;
            --secondary-color: #FFC55A;
            --sidebar-width: 280px;
            --header-height: 70px;
            --light-bg: #f8f9fa;
            --border-color: #e0e0e0;
            --success-color: #28a745;
            --warning-color: #ffc107;
            --danger-color: #dc3545;
            --info-color: #17a2b8;
        }  
        
        
        body {
            display: flex;
            min-height: 100vh;
            background-color: #f5f7fa;
            color: #333;
        }
        
        /* Sidebar Styles */
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
        }
        
        .nav-item {
            display: flex;
            align-items: center;
            padding: 15px 25px;
            color: rgba(255, 255, 255, 0.9);
            text-decoration: none;
            transition: all 0.3s;
            border-left: 4px solid transparent;
        }
        
        .nav-item:hover, .nav-item.active {
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
            border-left-color: var(--secondary-color);
        }
        
        .nav-item i {
            width: 25px;
            font-size: 1.2rem;
            margin-right: 15px;
        }
        
        .nav-label {
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
            background-color: #f5f7fa;
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
        
        /* Main content area */
        main {
            padding: 30px;
            min-height: calc(100vh - var(--header-height));
            background-color: #f5f7fa;
        }
        
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
            
            main {
                padding: 20px;
            }
        }
        
        @media (max-width: 768px) {
            .sidebar {
                width: 70px;
                overflow: hidden;
            }
            
            .sidebar-header h3, .sidebar-title p, .nav-label, .sidebar-footer {
                display: none;
            }
            
            .sidebar-header {
                justify-content: center;
                padding: 20px 10px;
            }
            
            .nav-item {
                justify-content: center;
                padding: 15px;
            }
            
            .nav-item i {
                margin-right: 0;
                font-size: 1.5rem;
            }
            
            .main-content {
                margin-left: 70px;
            }
            
            .header-left h1 {
                font-size: 1.5rem;
            }
            
            main {
                padding: 15px;
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
        
        /* Active state management */
        .active {
            background-color: rgba(255, 255, 255, 0.1);
            border-left-color: var(--secondary-color);
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

        <nav class="sidebar-nav">
            <a href="{{ route('user.dashboard') }}" class="nav-item {{ Request::routeIs('user.dashboard') ? 'active' : '' }}" data-tab="overview">
                <i class="fas fa-tachometer-alt"></i>
                <span class="nav-label">Overview Dashboard</span>
            </a>
            <a href="#employees" class="nav-item" data-tab="employees">
                <i class="fas fa-users"></i>
                <span class="nav-label">Employees</span>
            </a>
            <a href="{{ route('user.leave-form') }}" class="nav-item {{ Request::routeIs('user.leave-form') ? 'active' : '' }}" data-tab="leave-applications">
                <i class="fas fa-clipboard-list"></i>
                <span class="nav-label">Leave Applications</span>
            </a>
            <a href="{{ route('user.cto-form') }}" class="nav-item {{ Request::routeIs('user.cto-form') ? 'active' : '' }}" data-tab="cto-applications">
                <i class="fas fa-business-time"></i>
                <span class="nav-label">CTO Applications</span>
            </a>
            <a href="#calendar" class="nav-item" data-tab="calendar">
                <i class="fas fa-calendar-alt"></i>
                <span class="nav-label">Calendar</span>
            </a>
        </nav>
        
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
        // Add active class to clicked nav items
        document.addEventListener('DOMContentLoaded', function() {
            const navItems = document.querySelectorAll('.nav-item');
            
            navItems.forEach(item => {
                item.addEventListener('click', function() {
                    // Remove active class from all items
                    navItems.forEach(nav => nav.classList.remove('active'));
                    
                    // Add active class to clicked item
                    this.classList.add('active');
                });
            });
            
            // Highlight current page based on URL
            const currentPath = window.location.pathname;
            navItems.forEach(item => {
                const href = item.getAttribute('href');
                if (href && currentPath.includes(href.replace(route('user.'), ''))) {
                    item.classList.add('active');
                }
            });
        });
    </script>
</body>
</html>