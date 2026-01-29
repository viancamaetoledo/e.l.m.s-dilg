<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DILG ELMS - Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.11.3/main.min.css">
    <link rel="stylesheet" href="/css/Administration/AdminDashboard.css">
</head>
<body>
    <div class="dashboard-container">
        <!-- Sidebar Navigation -->
        <nav class="sidebar">
            <div class="logo-section">
                <div class="logo">
                    <i class="fas fa-building"></i>
                    <h2>DILG ELMS</h2>
                </div>
                <p class="system-name">Employee Leave Management System</p>
            </div>
            
            <ul class="nav-menu">
                <li><a href="#" class="nav-item active" data-tab="overview">
                    <i class="fas fa-tachometer-alt"></i> <span>Overview Dashboard</span>
                </a></li>
                <li><a href="#" class="nav-item" data-tab="employees">
                    <i class="fas fa-users"></i> <span>Employees</span>
                </a></li>
                <li><a href="#" class="nav-item" data-tab="leave-applications">
                    <i class="fas fa-clipboard-list"></i> <span>Leave Applications</span>
                    <span class="badge badge-nav">18</span>
                </a></li>
                <li><a href="#" class="nav-item" data-tab="cto-applications">
                    <i class="fas fa-clock"></i> <span>CTO Applications</span>
                    <span class="badge badge-nav">9</span>
                </a></li>
                <li><a href="#" class="nav-item" data-tab="calendar">
                    <i class="fas fa-calendar-alt"></i> <span>Calendar</span>
                </a></li>
                <li><a href="#" class="nav-item" data-tab="reports">
                    <i class="fas fa-chart-bar"></i> <span>Reports</span>
                </a></li>
                <li><a href="#" class="nav-item" data-tab="settings">
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
                <div class="logout-btn">
                    <i class="fas fa-sign-out-alt"></i> <span>Logout</span>
                </div>
                <p class="version">v2.1.4</p>
            </div>
        </nav>
        
        <!-- Main Content -->
        <div class="main-content">
            <!-- Header -->

            
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
        </div>
    </div>
    
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.11.3/main.min.js"></script>
    <script src="/js/Administration/AdminDashboard.js"></script>
</body>
</html>