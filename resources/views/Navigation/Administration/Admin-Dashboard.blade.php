<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DILG ELMS - Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.11.3/main.min.css">
    <style>
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
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f5f7fa;
            color: #333;
            overflow-x: hidden;
        }
        
        /* Dashboard Layout */
        .dashboard-container {
            display: flex;
            min-height: 100vh;
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
        
        /* Main Content */
        .main-content {
            flex: 1;
            margin-left: var(--sidebar-width);
            width: calc(100% - var(--sidebar-width));
        }
        
        /* Header */
        .main-header {
            height: var(--header-height);
            background: white;
            padding: 0 30px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
            position: sticky;
            top: 0;
            z-index: 99;
        }
        
        .header-title h1 {
            font-size: 1.6rem;
            color: var(--primary-color);
        }
        
        .header-actions {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        
        .user-profile {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .user-avatar {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background-color: var(--primary-color);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            font-size: 1.2rem;
        }
        
        .notification-badge {
            position: relative;
        }
        
        .notification-badge i {
            font-size: 1.5rem;
            color: #666;
        }
        
        .badge {
            position: absolute;
            top: -5px;
            right: -5px;
            background-color: var(--danger-color);
            color: white;
            font-size: 0.7rem;
            width: 18px;
            height: 18px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        /* Content Area */
        .content-wrapper {
            padding: 30px;
        }
        
        /* Dashboard Overview */
        .dashboard-overview {
            margin-bottom: 30px;
        }
        
        .dashboard-title {
            margin-bottom: 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .dashboard-title h2 {
            color: var(--primary-color);
            font-size: 1.8rem;
        }
        
        .date-filter {
            display: flex;
            gap: 10px;
        }
        
        .date-filter select, .date-filter input {
            padding: 8px 15px;
            border: 1px solid var(--border-color);
            border-radius: 5px;
            font-size: 0.95rem;
        }
        
        .stats-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }
        
        .stat-card {
            background: white;
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            display: flex;
            align-items: center;
            gap: 20px;
            transition: transform 0.3s;
        }
        
        .stat-card:hover {
            transform: translateY(-5px);
        }
        
        .stat-icon {
            width: 60px;
            height: 60px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            color: white;
        }
        
        .stat-info h3 {
            font-size: 2.2rem;
            margin-bottom: 5px;
            color: var(--primary-color);
        }
        
        .stat-info p {
            color: #666;
            font-size: 0.95rem;
        }
        
        .icon-1 { background-color: var(--primary-color); }
        .icon-2 { background-color: var(--success-color); }
        .icon-3 { background-color: var(--warning-color); }
        .icon-4 { background-color: var(--info-color); }
        
        .dashboard-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 25px;
            margin-bottom: 30px;
        }
        
        .dashboard-card {
            background: white;
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .card-header h3 {
            color: var(--primary-color);
            font-size: 1.3rem;
        }
        
        .card-header a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
            font-size: 0.95rem;
        }
        
        /* Tables */
        .data-table {
            width: 100%;
            border-collapse: collapse;
        }
        
        .data-table th {
            text-align: left;
            padding: 15px;
            background-color: #f5f7fa;
            color: var(--primary-color);
            font-weight: 600;
            border-bottom: 1px solid var(--border-color);
        }
        
        .data-table td {
            padding: 15px;
            border-bottom: 1px solid var(--border-color);
        }
        
        .data-table tr:hover {
            background-color: #f9f9f9;
        }
        
        .status-badge {
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 500;
        }
        
        .status-approved {
            background-color: rgba(40, 167, 69, 0.1);
            color: var(--success-color);
        }
        
        .status-pending {
            background-color: rgba(255, 193, 7, 0.1);
            color: var(--warning-color);
        }
        
        .status-cancelled {
            background-color: rgba(220, 53, 69, 0.1);
            color: var(--danger-color);
        }
        
        /* Calendar */
        #calendar {
            margin-top: 20px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .fc .fc-toolbar-title {
            color: var(--primary-color);
        }
        
        .fc .fc-button-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }
        
        /* Action Buttons */
        .action-buttons {
            display: flex;
            gap: 8px;
        }
        
        .btn-action {
            width: 35px;
            height: 35px;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: none;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .btn-view {
            background-color: rgba(26, 82, 118, 0.1);
            color: var(--primary-color);
        }
        
        .btn-edit {
            background-color: rgba(255, 193, 7, 0.1);
            color: var(--warning-color);
        }
        
        .btn-delete {
            background-color: rgba(220, 53, 69, 0.1);
            color: var(--danger-color);
        }
        
        .btn-action:hover {
            opacity: 0.8;
        }
        
        /* Forms */
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #555;
        }
        
        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid var(--border-color);
            border-radius: 5px;
            font-size: 1rem;
            transition: border 0.3s;
        }
        
        .form-control:focus {
            border-color: var(--primary-color);
            outline: none;
            box-shadow: 0 0 0 3px rgba(26, 82, 118, 0.1);
        }
        
        .btn-submit {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 5px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(26, 82, 118, 0.2);
        }
        
        /* Tab Navigation */
        .tab-navigation {
            display: flex;
            border-bottom: 1px solid var(--border-color);
            margin-bottom: 25px;
        }
        
        .tab-btn {
            padding: 12px 25px;
            background: none;
            border: none;
            font-size: 1rem;
            color: #666;
            cursor: pointer;
            position: relative;
        }
        
        .tab-btn.active {
            color: var(--primary-color);
            font-weight: 600;
        }
        
        .tab-btn.active::after {
            content: '';
            position: absolute;
            bottom: -1px;
            left: 0;
            width: 100%;
            height: 3px;
            background-color: var(--primary-color);
        }
        
        .tab-content {
            display: none;
        }
        
        .tab-content.active {
            display: block;
        }
        
        /* Responsive */
        @media (max-width: 1200px) {
            .dashboard-grid {
                grid-template-columns: 1fr;
            }
        }
        
        @media (max-width: 992px) {
            .sidebar {
                width: 70px;
                overflow: hidden;
            }
            
            .sidebar:hover {
                width: var(--sidebar-width);
            }
            
            .sidebar-title, .nav-label, .sidebar-footer {
                opacity: 0;
            }
            
            .sidebar:hover .sidebar-title,
            .sidebar:hover .nav-label,
            .sidebar:hover .sidebar-footer {
                opacity: 1;
                transition: opacity 0.3s 0.2s;
            }
            
            .main-content {
                margin-left: 70px;
                width: calc(100% - 70px);
            }
            
            .sidebar:hover ~ .main-content {
                margin-left: var(--sidebar-width);
                width: calc(100% - var(--sidebar-width));
            }
        }
        
        @media (max-width: 768px) {
            .main-header {
                padding: 0 15px;
            }
            
            .content-wrapper {
                padding: 20px 15px;
            }
            
            .stats-cards {
                grid-template-columns: 1fr;
            }
            
            .date-filter {
                flex-direction: column;
            }
        }
        
        /* Loading Animation */
        .loading {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 3px solid rgba(26, 82, 118, 0.2);
            border-radius: 50%;
            border-top-color: var(--primary-color);
            animation: spin 1s ease-in-out infinite;
        }
        
        @keyframes spin {
            to { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
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
        
        <!-- Main Content -->
        <main class="main-content">
            <!-- Header -->
            <header class="main-header">
                <div class="header-title">
                    <h1 id="pageTitle">Overview Dashboard</h1>
                </div>
                
                <div class="header-actions">
                    <div class="notification-badge">
                        <i class="fas fa-bell"></i>
                        <span class="badge">3</span>
                    </div>
                    
                    <div class="user-profile">
                        <div class="user-avatar">AD</div>
                        <div class="user-info">
                            <h4>Admin User</h4>
                            <p>Administrator</p>
                        </div>
                    </div>
                </div>
            </header>
            
            <!-- Content Area -->
            <div class="content-wrapper">
                
                <!-- Overview Dashboard Tab -->
                <div id="overview" class="tab-content active">
                    <div class="dashboard-overview">
                        <div class="dashboard-title">
                            <h2>Dashboard Overview</h2>
                            <div class="date-filter">
                                <select id="timeFilter">
                                    <option value="today">Today</option>
                                    <option value="week" selected>This Week</option>
                                    <option value="month">This Month</option>
                                    <option value="quarter">This Quarter</option>
                                    <option value="year">This Year</option>
                                </select>
                                <input type="date" id="customDate" class="form-control">
                            </div>
                        </div>
                        
                        <!-- Stats Cards -->
                        <div class="stats-cards">
                            <div class="stat-card">
                                <div class="stat-icon icon-1">
                                    <i class="fas fa-users"></i>
                                </div>
                                <div class="stat-info">
                                    <h3 id="totalEmployees">127</h3>
                                    <p>Total Employees</p>
                                </div>
                            </div>
                            
                            <div class="stat-card">
                                <div class="stat-icon icon-2">
                                    <i class="fas fa-clipboard-check"></i>
                                </div>
                                <div class="stat-info">
                                    <h3 id="pendingLeaves">18</h3>
                                    <p>Pending Leaves</p>
                                </div>
                            </div>
                            
                            <div class="stat-card">
                                <div class="stat-icon icon-3">
                                    <i class="fas fa-calendar-check"></i>
                                </div>
                                <div class="stat-info">
                                    <h3 id="approvedLeaves">42</h3>
                                    <p>Approved Leaves (Month)</p>
                                </div>
                            </div>
                            
                            <div class="stat-card">
                                <div class="stat-icon icon-4">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="stat-info">
                                    <h3 id="ctoApplications">9</h3>
                                    <p>CTO Applications</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Charts and Tables -->
                        <div class="dashboard-grid">
                            <!-- Recent Leave Applications -->
                            <div class="dashboard-card">
                                <div class="card-header">
                                    <h3>Recent Leave Applications</h3>
                                    <a href="#leave-applications">View All</a>
                                </div>
                                <table class="data-table">
                                    <thead>
                                        <tr>
                                            <th>Employee</th>
                                            <th>Type</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Juan Dela Cruz</td>
                                            <td>Vacation Leave</td>
                                            <td>Mar 15-18, 2025</td>
                                            <td><span class="status-badge status-pending">Pending</span></td>
                                        </tr>
                                        <tr>
                                            <td>Maria Santos</td>
                                            <td>Sick Leave</td>
                                            <td>Mar 12, 2025</td>
                                            <td><span class="status-badge status-approved">Approved</span></td>
                                        </tr>
                                        <tr>
                                            <td>Robert Lim</td>
                                            <td>Emergency Leave</td>
                                            <td>Mar 10-11, 2025</td>
                                            <td><span class="status-badge status-cancelled">Cancelled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Ana Reyes</td>
                                            <td>Maternity Leave</td>
                                            <td>Mar 1-30, 2025</td>
                                            <td><span class="status-badge status-approved">Approved</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                            <!-- Upcoming Leaves -->
                            <div class="dashboard-card">
                                <div class="card-header">
                                    <h3>Upcoming Leaves</h3>
                                    <a href="#calendar">View Calendar</a>
                                </div>
                                <table class="data-table">
                                    <thead>
                                        <tr>
                                            <th>Employee</th>
                                            <th>Leave Type</th>
                                            <th>Start Date</th>
                                            <th>Days</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Carlos Garcia</td>
                                            <td>Vacation Leave</td>
                                            <td>Mar 20, 2025</td>
                                            <td>5</td>
                                        </tr>
                                        <tr>
                                            <td>Lorna Tan</td>
                                            <td>Sick Leave</td>
                                            <td>Mar 22, 2025</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>Michael Ong</td>
                                            <td>Study Leave</td>
                                            <td>Mar 25, 2025</td>
                                            <td>10</td>
                                        </tr>
                                        <tr>
                                            <td>Sofia Lopez</td>
                                            <td>Vacation Leave</td>
                                            <td>Apr 1, 2025</td>
                                            <td>7</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                        <!-- Quick Stats -->
                        <div class="dashboard-grid">
                            <div class="dashboard-card">
                                <div class="card-header">
                                    <h3>Leave Balance Summary</h3>
                                </div>
                                <table class="data-table">
                                    <thead>
                                        <tr>
                                            <th>Leave Type</th>
                                            <th>Total Credits</th>
                                            <th>Used</th>
                                            <th>Available</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Vacation Leave</td>
                                            <td>15</td>
                                            <td>7.5</td>
                                            <td>7.5</td>
                                        </tr>
                                        <tr>
                                            <td>Sick Leave</td>
                                            <td>15</td>
                                            <td>3.0</td>
                                            <td>12.0</td>
                                        </tr>
                                        <tr>
                                            <td>Emergency Leave</td>
                                            <td>5</td>
                                            <td>2.0</td>
                                            <td>3.0</td>
                                        </tr>
                                        <tr>
                                            <td>Maternity Leave</td>
                                            <td>105</td>
                                            <td>0</td>
                                            <td>105</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Employees Tab -->
                <div id="employees" class="tab-content">
                    <div class="dashboard-title">
                        <h2>Employee Management</h2>
                        <button class="btn-submit" id="addEmployeeBtn">
                            <i class="fas fa-plus"></i> Add Employee
                        </button>
                    </div>
                    
                    <div class="dashboard-card">
                        <div class="card-header">
                            <h3>Employee List</h3>
                            <div>
                                <input type="text" class="form-control" placeholder="Search employees..." style="width: 250px;">
                            </div>
                        </div>
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th>Employee ID</th>
                                    <th>Full Name</th>
                                    <th>Department</th>
                                    <th>Position</th>
                                    <th>Leave Credits</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>DILG-2023-001</td>
                                    <td>Juan Dela Cruz</td>
                                    <td>Finance</td>
                                    <td>Accountant II</td>
                                    <td>VL: 7.5 / SL: 12.0</td>
                                    <td><span class="status-badge status-approved">Active</span></td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn-action btn-view" title="View">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="btn-action btn-edit" title="Edit">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>DILG-2023-002</td>
                                    <td>Maria Santos</td>
                                    <td>Human Resources</td>
                                    <td>HR Officer III</td>
                                    <td>VL: 10.0 / SL: 8.5</td>
                                    <td><span class="status-badge status-approved">Active</span></td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn-action btn-view" title="View">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="btn-action btn-edit" title="Edit">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>DILG-2023-003</td>
                                    <td>Robert Lim</td>
                                    <td>Operations</td>
                                    <td>Field Officer II</td>
                                    <td>VL: 5.0 / SL: 14.0</td>
                                    <td><span class="status-badge status-pending">On Leave</span></td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn-action btn-view" title="View">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="btn-action btn-edit" title="Edit">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>DILG-2023-004</td>
                                    <td>Ana Reyes</td>
                                    <td>Legal</td>
                                    <td>Legal Officer I</td>
                                    <td>VL: 15.0 / SL: 15.0</td>
                                    <td><span class="status-badge status-approved">Active</span></td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn-action btn-view" title="View">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="btn-action btn-edit" title="Edit">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <!-- Leave Applications Tab -->
                <div id="leave-applications" class="tab-content">
                    <div class="dashboard-title">
                        <h2>Leave Applications</h2>
                        <button class="btn-submit" id="filterLeavesBtn">
                            <i class="fas fa-filter"></i> Filter
                        </button>
                    </div>
                    
                    <!-- Tabs for Leave Applications -->
                    <div class="tab-navigation">
                        <button class="tab-btn active" data-leave-tab="pending">Pending (18)</button>
                        <button class="tab-btn" data-leave-tab="approved">Approved (42)</button>
                        <button class="tab-btn" data-leave-tab="cancelled">Cancelled (7)</button>
                        <button class="tab-btn" data-leave-tab="all">All Applications</button>
                    </div>
                    
                    <!-- Pending Applications -->
                    <div id="pending-leaves" class="leave-tab active">
                        <div class="dashboard-card">
                            <table class="data-table">
                                <thead>
                                    <tr>
                                        <th>Application ID</th>
                                        <th>Employee</th>
                                        <th>Leave Type</th>
                                        <th>Date Filed</th>
                                        <th>Leave Dates</th>
                                        <th>Days</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>LV-2025-0032</td>
                                        <td>Juan Dela Cruz</td>
                                        <td>Vacation Leave</td>
                                        <td>Mar 10, 2025</td>
                                        <td>Mar 15-18, 2025</td>
                                        <td>4</td>
                                        <td>
                                            <div class="action-buttons">
                                                <button class="btn-action btn-view" title="View">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                                <button class="btn-submit" style="padding: 5px 10px; font-size: 0.85rem;">Approve</button>
                                                <button class="btn-action btn-delete" title="Reject">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>LV-2025-0033</td>
                                        <td>Carlos Garcia</td>
                                        <td>Sick Leave</td>
                                        <td>Mar 11, 2025</td>
                                        <td>Mar 12, 2025</td>
                                        <td>1</td>
                                        <td>
                                            <div class="action-buttons">
                                                <button class="btn-action btn-view" title="View">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                                <button class="btn-submit" style="padding: 5px 10px; font-size: 0.85rem;">Approve</button>
                                                <button class="btn-action btn-delete" title="Reject">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <!-- Approved Applications -->
                    <div id="approved-leaves" class="leave-tab">
                        <div class="dashboard-card">
                            <p>Approved leave applications will appear here.</p>
                        </div>
                    </div>
                    
                    <!-- Cancelled Applications -->
                    <div id="cancelled-leaves" class="leave-tab">
                        <div class="dashboard-card">
                            <p>Cancelled leave applications will appear here.</p>
                        </div>
                    </div>
                    
                    <!-- All Applications -->
                    <div id="all-leaves" class="leave-tab">
                        <div class="dashboard-card">
                            <p>All leave applications will appear here.</p>
                        </div>
                    </div>
                </div>
                
                <!-- CTO Applications Tab -->
                <div id="cto-applications" class="tab-content">
                    <div class="dashboard-title">
                        <h2>CTO (Compensatory Time Off) Applications</h2>
                        <button class="btn-submit" id="addCtoBtn">
                            <i class="fas fa-plus"></i> New CTO
                        </button>
                    </div>
                    
                    <div class="dashboard-card">
                        <div class="card-header">
                            <h3>CTO Applications</h3>
                            <div>
                                <select class="form-control" style="width: 200px;">
                                    <option>All Status</option>
                                    <option>Pending</option>
                                    <option>Approved</option>
                                    <option>Denied</option>
                                </select>
                            </div>
                        </div>
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th>CTO ID</th>
                                    <th>Employee</th>
                                    <th>Overtime Date</th>
                                    <th>CTO Date</th>
                                    <th>Hours</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>CTO-2025-0012</td>
                                    <td>Maria Santos</td>
                                    <td>Mar 5, 2025</td>
                                    <td>Mar 20, 2025</td>
                                    <td>8</td>
                                    <td><span class="status-badge status-pending">Pending</span></td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn-action btn-view" title="View">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="btn-submit" style="padding: 5px 10px; font-size: 0.85rem;">Approve</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>CTO-2025-0011</td>
                                    <td>Robert Lim</td>
                                    <td>Mar 3, 2025</td>
                                    <td>Mar 25, 2025</td>
                                    <td>4</td>
                                    <td><span class="status-badge status-approved">Approved</span></td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn-action btn-view" title="View">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <!-- Calendar Tab -->
                <div id="calendar" class="tab-content">
                    <div class="dashboard-title">
                        <h2>Leave Calendar</h2>
                        <div class="date-filter">
                            <button class="btn-submit" id="addEventBtn">
                                <i class="fas fa-plus"></i> Add Event
                            </button>
                        </div>
                    </div>
                    
                    <div id="calendar-container"></div>
                </div>
                
                <!-- Reports Tab -->
                <div id="reports" class="tab-content">
                    <div class="dashboard-title">
                        <h2>Reports & Analytics</h2>
                        <button class="btn-submit" id="generateReportBtn">
                            <i class="fas fa-download"></i> Generate Report
                        </button>
                    </div>
                    
                    <div class="dashboard-grid">
                        <div class="dashboard-card">
                            <div class="card-header">
                                <h3>Monthly Leave Summary</h3>
                            </div>
                            <p>Leave reports and analytics will appear here.</p>
                        </div>
                        
                        <div class="dashboard-card">
                            <div class="card-header">
                                <h3>Department-wise Analysis</h3>
                            </div>
                            <p>Department-wise leave analysis will appear here.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Settings Tab -->
                <div id="settings" class="tab-content">
                    <div class="dashboard-title">
                        <h2>System Settings</h2>
                    </div>
                    
                    <div class="dashboard-grid">
                        <div class="dashboard-card">
                            <div class="card-header">
                                <h3>Leave Policy Settings</h3>
                            </div>
                            <form id="settingsForm">
                                <div class="form-group">
                                    <label for="vlCredits">Vacation Leave Credits per Year</label>
                                    <input type="number" id="vlCredits" class="form-control" value="15" min="0" max="30">
                                </div>
                                
                                <div class="form-group">
                                    <label for="slCredits">Sick Leave Credits per Year</label>
                                    <input type="number" id="slCredits" class="form-control" value="15" min="0" max="30">
                                </div>
                                
                                <div class="form-group">
                                    <label for="approvalLevels">Approval Levels Required</label>
                                    <select id="approvalLevels" class="form-control">
                                        <option value="1">Immediate Supervisor Only</option>
                                        <option value="2" selected>Supervisor + Department Head</option>
                                        <option value="3">Supervisor + Dept Head + HR</option>
                                    </select>
                                </div>
                                
                                <button type="submit" class="btn-submit">Save Settings</button>
                            </form>
                        </div>
                        
                        <div class="dashboard-card">
                            <div class="card-header">
                                <h3>User Management</h3>
                            </div>
                            <p>User account management settings will appear here.</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </main>
    </div>
    
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.11.3/main.min.js"></script>
    <script>
        // DOM Elements
        const navItems = document.querySelectorAll('.nav-item');
        const tabContents = document.querySelectorAll('.tab-content');
        const pageTitle = document.getElementById('pageTitle');
        const leaveTabBtns = document.querySelectorAll('[data-leave-tab]');
        const leaveTabs = document.querySelectorAll('.leave-tab');
        
        // Tab Navigation
        navItems.forEach(item => {
            item.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Remove active class from all nav items and tabs
                navItems.forEach(nav => nav.classList.remove('active'));
                tabContents.forEach(tab => tab.classList.remove('active'));
                
                // Add active class to clicked nav item
                this.classList.add('active');
                
                // Show corresponding tab content
                const tabId = this.getAttribute('data-tab');
                document.getElementById(tabId).classList.add('active');
                
                // Update page title
                updatePageTitle(tabId);
            });
        });
        
        // Leave Application Tabs
        leaveTabBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                // Remove active class from all leave tab buttons and tabs
                leaveTabBtns.forEach(b => b.classList.remove('active'));
                leaveTabs.forEach(tab => tab.classList.remove('active'));
                
                // Add active class to clicked button
                this.classList.add('active');
                
                // Show corresponding tab
                const tabId = this.getAttribute('data-leave-tab');
                document.getElementById(`${tabId}-leaves`).classList.add('active');
            });
        });
        
        // Update page title based on active tab
        function updatePageTitle(tabId) {
            const titles = {
                'overview': 'Overview Dashboard',
                'employees': 'Employee Management',
                'leave-applications': 'Leave Applications',
                'cto-applications': 'CTO Applications',
                'calendar': 'Leave Calendar',
                'reports': 'Reports & Analytics',
                'settings': 'System Settings'
            };
            
            pageTitle.textContent = titles[tabId] || 'Dashboard';
        }
        
        // Initialize FullCalendar
        document.addEventListener('DOMContentLoaded', function() {
            const calendarEl = document.getElementById('calendar-container');
            
            // Check if calendar element exists (on calendar tab)
            if (calendarEl) {
                const calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'dayGridMonth',
                    headerToolbar: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'dayGridMonth,timeGridWeek,timeGridDay'
                    },
                    events: [
                        {
                            title: 'Juan Dela Cruz - VL',
                            start: '2025-03-15',
                            end: '2025-03-19',
                            color: '#1a5276'
                        },
                        {
                            title: 'Maria Santos - SL',
                            start: '2025-03-12',
                            color: '#28a745'
                        },
                        {
                            title: 'Robert Lim - EL',
                            start: '2025-03-10',
                            end: '2025-03-12',
                            color: '#ffc107'
                        },
                        {
                            title: 'Ana Reyes - ML',
                            start: '2025-03-01',
                            end: '2025-03-31',
                            color: '#17a2b8'
                        },
                        {
                            title: 'Department Meeting',
                            start: '2025-03-20',
                            color: '#6c757d'
                        }
                    ],
                    eventClick: function(info) {
                        alert('Event: ' + info.event.title + '\n' +
                              'Start: ' + info.event.start.toLocaleDateString() + 
                              (info.event.end ? '\nEnd: ' + info.event.end.toLocaleDateString() : ''));
                    }
                });
                
                calendar.render();
                
                // Store calendar instance for later use
                window.calendarInstance = calendar;
            }
        });
        
        // Add Employee Button
        document.getElementById('addEmployeeBtn')?.addEventListener('click', function() {
            alert('Add Employee form would open here.\n\nThis would include:\n- Personal Information\n- Employment Details\n- Initial Leave Credits\n- Account Setup');
        });
        
        // Add CTO Button
        document.getElementById('addCtoBtn')?.addEventListener('click', function() {
            alert('New CTO Application form would open here.');
        });
        
        // Add Event Button (Calendar)
        document.getElementById('addEventBtn')?.addEventListener('click', function() {
            alert('Add Event form would open here.\n\nYou can add:\n- Leave Events\n- Holidays\n- Meetings\n- Training Sessions');
        });
        
        // Generate Report Button
        document.getElementById('generateReportBtn')?.addEventListener('click', function() {
            const timeFilter = document.getElementById('timeFilter')?.value || 'month';
            alert(`Generating report for: ${timeFilter}\n\nReport would include:\n- Leave Summary\n- Employee Attendance\n- Department Analysis\n- CTO Utilization`);
        });
        
        // Settings Form Submission
        document.getElementById('settingsForm')?.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Show loading
            const submitBtn = this.querySelector('.btn-submit');
            const originalText = submitBtn.textContent;
            submitBtn.innerHTML = '<span class="loading"></span> Saving...';
            submitBtn.disabled = true;
            
            // Simulate API call
            setTimeout(() => {
                alert('Settings saved successfully!');
                submitBtn.textContent = originalText;
                submitBtn.disabled = false;
            }, 1000);
        });
        
        // Time Filter Change
        document.getElementById('timeFilter')?.addEventListener('change', function() {
            const filterValue = this.value;
            
            // Update stats based on filter (simulated)
            const stats = {
                today: { employees: 127, pending: 3, approved: 2, cto: 1 },
                week: { employees: 127, pending: 18, approved: 42, cto: 9 },
                month: { employees: 127, pending: 24, approved: 65, cto: 12 },
                quarter: { employees: 129, pending: 32, approved: 210, cto: 45 },
                year: { employees: 135, pending: 15, approved: 580, cto: 120 }
            };
            
            const selectedStats = stats[filterValue] || stats.week;
            
            document.getElementById('totalEmployees').textContent = selectedStats.employees;
            document.getElementById('pendingLeaves').textContent = selectedStats.pending;
            document.getElementById('approvedLeaves').textContent = selectedStats.approved;
            document.getElementById('ctoApplications').textContent = selectedStats.cto;
        });
        
        // Notification Bell Click
        document.querySelector('.notification-badge')?.addEventListener('click', function() {
            alert('You have 3 notifications:\n\n1. New leave application from Juan Dela Cruz\n2. CTO application pending approval\n3. System maintenance scheduled for Sunday');
        });
        
        // Action button handlers
        document.querySelectorAll('.btn-view').forEach(btn => {
            btn.addEventListener('click', function() {
                const row = this.closest('tr');
                const employeeName = row.cells[1].textContent;
                alert(`Viewing details for: ${employeeName}`);
            });
        });
        
        document.querySelectorAll('.btn-edit').forEach(btn => {
            btn.addEventListener('click', function() {
                const row = this.closest('tr');
                const employeeName = row.cells[1].textContent;
                alert(`Edit form for: ${employeeName}`);
            });
        });
        
        // Responsive sidebar for mobile
        window.addEventListener('resize', function() {
            if (window.innerWidth <= 992) {
                document.querySelector('.sidebar').classList.add('collapsed');
            }
        });
        
        // Initialize on page load
        window.addEventListener('load', function() {
            // Update date filter to show today's date
            const today = new Date().toISOString().split('T')[0];
            document.getElementById('customDate').value = today;
            
            // Trigger time filter change to update stats
            document.getElementById('timeFilter')?.dispatchEvent(new Event('change'));
        });
    </script>
</body>
</html>