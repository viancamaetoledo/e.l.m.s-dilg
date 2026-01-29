<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DILG ELMS - Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="/css/Administration/AdminDashboard.css">
</head>
<body>
   <!-- Sidebar Navigation -->
        <nav class="sidebar">
            <div class="sidebar-header">
                <img src= "">
                <div class="sidebar-title">
                    <h3>DILG ELMS</h3>
                    <p>Employee Dashboard</p>
                </div>
            </div>
            
            <ul class="nav-menu">
                <li><a href="{{ route('user.dashboard') }}"  class="nav-item" data-tab="overview">
                    <i class="fas fa-tachometer-alt"></i> <span>Overview Dashboard</span>
                </a></li>
                <li><a href="#" class="nav-item" data-tab="employees">
                    <i class="fas fa-users"></i> <span>Employees</span>
                </a></li>
                <li><a href="{{ route('user.leave-form') }}" class="nav-item" data-tab="leave-applications">
                    <i class="fas fa-clipboard-list"></i> <span>Leave Applications</span>
                    <span class="badge badge-nav">18</span>
                </a></li>
                <li><a href="{{ route('user.cto-form') }}"class="nav-item" data-tab="cto-applications">
                    <i class="fas fa-clock"></i> <span>CTO Applications</span>
                    <span class="badge badge-nav">9</span>
                </a></li>
                <li><a href="#" class="nav-item" data-tab="calendar">
                    <i class="fas fa-calendar-alt"></i> <span>Calendar</span>
                </a></li>
            </ul>

            <div class="user-profile">
                        <div class="user-avatar">AD</div>
                        <div class="user-info">
                            <h4>Admin User</h4>
                            <p>Administrator</p>
                        </div>
                    </div>
            
            <div class="sidebar-footer">
                <div class="logout-btn">
                    <i class="fas fa-sign-out-alt"></i> <span>Logout</span>
                </div>
                <p class="version">v2.1.4</p>
            </div>
        </nav>

    <div class="main-content">
        
        <main>
            {{ $slot }}
        </main>
    </div>

    
</body>
</html>