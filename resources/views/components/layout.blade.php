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
        <!-- Sidebar -->
         <nav class="sidebar">
            <div class="sidebar-header">
                <img src="/image/DILG-logo.png" alt="DILG Logo" class="brand-logo">
                <div class="sidebar-title">
                    <h3>DILG ELMS</h3>
                    <p>Admin Dashboard</p>
                </div>
            </div>
            
            <ul class="sidebar-nav">
                <li><a href="{{ route('admin.dashboard') }}"  class="nav-item" data-tab="overview">
                    <i class="fas fa-tachometer-alt"></i> <span>Overview Dashboard</span>
                </a></li>
                <li><a href="{{ route('admin.employee-info-credit') }}" class="nav-item" data-tab="employees">
                    <i class="fas fa-users"></i> <span>Employees</span>
                </a></li>
                <li><a href="{{ route('admin.leave-record') }}" class="nav-item" data-tab="leave-applications">
                    <i class="fas fa-clipboard-list"></i> <span>Leave Applications</span>
                    <span class="badge badge-nav">18</span>
                </a></li>
                <li><a href="{{ route('admin.cto-record') }}"class="nav-item" data-tab="cto-applications">
                    <i class="fas fa-clock"></i> <span>CTO Applications</span>
                    <span class="badge badge-nav">9</span>
                </a></li>
                <li><a href="#" class="nav-item" data-tab="calendar">
                    <i class="fas fa-calendar-alt"></i> <span>Calendar</span>
                </a></li>
                <li><a href="{{ route('admin.reports') }}"  class="nav-item" data-tab="reports">
                    <i class="fas fa-chart-bar"></i> <span>Reports</span>
                </a></li>
                <li><a href="{{ route('admin.settings') }}"  class="nav-item" data-tab="settings">
                    <i class="fas fa-cog"></i> <span>Settings</span>
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
                    <a href="{{ route('welcome.landing') }}">
                    <i class="fas fa-sign-out-alt"></i> <span>Logout</span>
                    </a>
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