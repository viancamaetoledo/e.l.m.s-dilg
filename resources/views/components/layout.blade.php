<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DILG ELMS - Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
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
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .users-controls {
                flex-direction: column;
                align-items: stretch;
            }
            
            .search-box {
                min-width: 100%;
            }
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 70px;
                overflow: hidden;
            }
            
            .sidebar-header h2, .sidebar-header p, .sidebar-menu span {
                display: none;
            }
            
            .sidebar-menu a {
                justify-content: center;
                padding: 15px;
            }
            
            .sidebar-menu i {
                margin-right: 0;
                font-size: 1.5rem;
            }
            
            .main-content {
                margin-left: 70px;
            }
            
            .users-table {
                min-width: 700px;
            }
        }

        @media (max-width: 576px) {
            .users-stats {
                grid-template-columns: 1fr;
            }
            
            .header {
                padding: 0 15px;
            }
            
            .content {
                padding: 15px;
            }
            
            .page-title {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }
            
            .page-actions {
                width: 100%;
            }
            
            .btn {
                flex: 1;
                justify-content: center;
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
                    <p>Admin Dashboard</p>
                </div>
            </div>
            
            <nav class="sidebar-nav">
                <a href="#overview" class="nav-item active" data-tab="overview">
                    <i class="fas fa-tachometer-alt"></i>
                    <span class="nav-label">Overview Dashboard</span>
                </a>
                <a href="#employees" class="nav-item" data-tab="employees">
                    <i class="fas fa-users"></i>
                    <span class="nav-label">Employees</span>
                </a>
                <a href="#leave-applications" class="nav-item" data-tab="leave-applications">
                    <i class="fas fa-clipboard-list"></i>
                    <span class="nav-label">Leave Applications</span>
                </a>
                <a href="#cto-applications" class="nav-item" data-tab="cto-applications">
                    <i class="fas fa-business-time"></i>
                    <span class="nav-label">CTO Applications</span>
                </a>
                <a href="#calendar" class="nav-item" data-tab="calendar">
                    <i class="fas fa-calendar-alt"></i>
                    <span class="nav-label">Calendar</span>
                </a>
                <a href="#reports" class="nav-item" data-tab="reports">
                    <i class="fas fa-chart-bar"></i>
                    <span class="nav-label">Reports</span>
                </a>
                <a href="#settings" class="nav-item" data-tab="settings">
                    <i class="fas fa-cog"></i>
                    <span class="nav-label">Settings</span>
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

</body>
</html>