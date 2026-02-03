<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DILG Pangasinan - Leave & CTO Management</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-blue: #003366;
            --secondary-blue: #0066cc;
            --accent-gold: #ffcc00;
            --light-gray: #f5f7fa;
            --dark-gray: #333333;
            --success-green: #28a745;
            --warning-orange: #ff9800;
            --danger-red: #dc3545;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f0f2f5;
            color: var(--dark-gray);
            min-height: 100vh;
            overflow-x: hidden;
        }
        
        /* Background Image */
        .background-image {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            opacity: 0.15;
            z-index: -1;
        }
        
        /* Main Content Styles */
        .main-content {
            padding: 20px;
            transition: all 0.3s ease;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: rgba(255, 255, 255, 0.95);
            padding: 20px 30px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            margin-bottom: 30px;
            backdrop-filter: blur(5px);
        }
        
        .header-title h1 {
            color: var(--primary-blue);
            font-size: 28px;
            margin-bottom: 5px;
        }
        
        .header-title p {
            color: #666;
            font-size: 15px;
        }
        
        .user-info {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .user-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--secondary-blue), var(--primary-blue));
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 20px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        
        /* Dashboard Selection Buttons */
        .dashboard-selection {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 40px;
            margin: 60px 0;
            flex-wrap: wrap;
        }
        
        .dashboard-btn {
            width: 320px;
            height: 380px;
            background-color: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            cursor: pointer;
            transition: all 0.4s ease;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            padding: 30px;
            position: relative;
            overflow: hidden;
            border: 3px solid transparent;
            text-decoration: none;
            color: inherit;
        }
        
        .dashboard-btn:hover {
            transform: translateY(-15px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
            border-color: var(--accent-gold);
        }
        
        .dashboard-btn.leave:hover {
            background-color: rgba(0, 102, 204, 0.05);
        }
        
        .dashboard-btn.cto:hover {
            background-color: rgba(40, 167, 69, 0.05);
        }
        
        .btn-icon {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 30px;
            font-size: 50px;
            color: white;
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
        }
        
        .leave .btn-icon {
            background: linear-gradient(135deg, var(--secondary-blue), #004080);
        }
        
        .cto .btn-icon {
            background: linear-gradient(135deg, var(--success-green), #1e7e34);
        }
        
        .dashboard-btn h2 {
            font-size: 32px;
            margin-bottom: 15px;
            color: var(--primary-blue);
        }
        
        .dashboard-btn p {
            color: #666;
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 25px;
        }
        
        .btn-indicator {
            position: absolute;
            top: 25px;
            right: 25px;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background-color: #ddd;
        }
        
        .btn-indicator.active {
            background-color: var(--success-green);
            box-shadow: 0 0 10px rgba(40, 167, 69, 0.7);
        }
        
        /* Logout Button */
        .logout-btn {
            padding: 10px 25px;
            background-color: var(--danger-red);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 3px 10px rgba(220, 53, 69, 0.2);
            display: flex;
            align-items: center;
            gap: 8px;
            margin-top: 10px;
        }
        
        .logout-btn:hover {
            background-color: #c82333;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(220, 53, 69, 0.3);
        }
        
        /* System Status */
        .system-status {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin: 40px 0;
            flex-wrap: wrap;
        }
        
        .status-card {
            background-color: rgba(255, 255, 255, 0.95);
            border-radius: 15px;
            padding: 25px;
            width: 250px;
            text-align: center;
            box-shadow: 0 8px 20px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
        }
        
        .status-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.12);
        }
        
        .status-card i {
            font-size: 40px;
            margin-bottom: 15px;
            color: var(--primary-blue);
        }
        
        .status-card h3 {
            font-size: 18px;
            color: var(--primary-blue);
            margin-bottom: 10px;
        }
        
        .status-card p {
            color: #666;
            font-size: 14px;
            line-height: 1.5;
        }
        
        /* Footer */
        .footer {
            text-align: center;
            padding: 25px;
            color: #666;
            font-size: 14px;
            margin-top: 40px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        
        /* Responsive Design */
        @media (max-width: 1100px) {
            .dashboard-selection {
                gap: 30px;
            }
            
            .dashboard-btn {
                width: 280px;
                height: 350px;
            }
            
            .system-status {
                gap: 20px;
            }
            
            .status-card {
                width: 220px;
            }
        }
        
        @media (max-width: 900px) {
            .dashboard-selection {
                flex-direction: column;
                align-items: center;
            }
            
            .dashboard-btn {
                width: 90%;
                max-width: 400px;
            }
            
            .system-status {
                flex-direction: column;
                align-items: center;
            }
            
            .status-card {
                width: 90%;
                max-width: 400px;
            }
        }
        
        @media (max-width: 600px) {
            .header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }
            
            .user-info {
                align-self: flex-end;
                width: 100%;
                justify-content: flex-end;
            }
            
            .dashboard-btn h2 {
                font-size: 26px;
            }
            
            .dashboard-btn {
                height: 320px;
                padding: 20px;
            }
            
            .btn-icon {
                width: 100px;
                height: 100px;
                font-size: 40px;
            }
            
            .header-title h1 {
                font-size: 24px;
            }
            
            .header-title p {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <!-- Background Image -->
    <div class="background-image"></div>
    
    <!-- Main Content -->
    <div class="main-content" id="mainContent">
        <!-- Header -->
        <div class="header">
            <div class="header-title">
                <h1 id="pageTitle">Leave & CTO Management System</h1>
                <p>Department of the Interior and Local Government - Pangasinan</p>
            </div>
            <div class="user-info">
                <div class="user-avatar">AD</div>
                <div class="user-details">
                    <h4>Admin User</h4>
                    <p>Super Administrator</p>
                    <button class="logout-btn" onclick="logout()">
                        <i class="fas fa-sign-out-alt"></i>
                        Logout
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Dashboard Selection (Home View) -->
        <div id="homeView" class="dashboard-content active">
            
            <div class="dashboard-selection">
                <a href="{{ route('admin.dashboard') }}" class="dashboard-btn leave" id="leaveDashboardBtn">
                    <div class="btn-icon">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <h2>Leave Management</h2>
                    <p>Manage employee leave applications, approvals, and tracking. View leave balances, process requests, and generate leave reports.</p>
                    <div class="btn-indicator active"></div>
                </a>
                
                <a href="{{ route('admin.dashboard') }}" class="dashboard-btn cto" id="ctoDashboardBtn">
                    <div class="btn-icon">
                        <i class="fas fa-business-time"></i>
                    </div>
                    <h2>CTO Management</h2>
                    <p>Handle Compensatory Time Off requests, approvals, and tracking. Monitor CTO balances and generate utilization reports.</p>
                    <div class="btn-indicator active"></div>
                </a>
            </div>
        </div>
        
        <!-- Footer -->
        <div class="footer">
            <p>DILG Pangasinan - Leave & CTO Management System</p>
            <p>Department of the Interior and Local Government • © 2023 All Rights Reserved</p>
            <p style="margin-top: 10px; font-size: 12px; color: #888;">Version 3.2.1 • Last updated: November 15, 2023</p>
        </div>
    </div>

    <script>
        // DOM Elements
        const pageTitle = document.getElementById('pageTitle');
        
        
        
        // Simulate dynamic data updates
        function updateSystemStatus() {
            // Update active users count randomly
            const activeUsersElements = document.querySelectorAll('.status-card:nth-child(2) p');
            if (activeUsersElements.length > 0) {
                const currentText = activeUsersElements[0].textContent;
                const currentUsers = parseInt(currentText.match(/\d+/)[0]);
                const newUsers = Math.max(20, Math.min(30, currentUsers + Math.floor(Math.random() * 3) - 1));
                activeUsersElements[0].textContent = `${newUsers} users currently online`;
            }
            
            // Update system time
            const now = new Date();
            const timeString = now.toLocaleTimeString('en-US', { 
                hour: '2-digit', 
                minute: '2-digit',
                hour12: true 
            });
            
            // Update page title with current time (optional)
            const originalTitle = 'Leave & CTO Management System';
            document.title = `${originalTitle} • ${timeString}`;
        }
        
        // Update data every 30 seconds
        setInterval(updateSystemStatus, 30000);
        
        // Initialize with current time
        updateSystemStatus();
        
        // Handle button clicks (for demo purposes since we're using anchor tags now)
        document.getElementById('leaveDashboardBtn').addEventListener('click', function(e) {
            // In a real application, this would navigate via the href
            // For demo, we'll show a message if href is not set
            if (this.getAttribute('href') === '#') {
                e.preventDefault();
                alert('Leave Management Dashboard would open here. In a real application, this would navigate to the leave management system.');
            }
        });
        
        document.getElementById('ctoDashboardBtn').addEventListener('click', function(e) {
            // In a real application, this would navigate via the href
            // For demo, we'll show a message if href is not set
            if (this.getAttribute('href') === '#') {
                e.preventDefault();
                alert('CTO Management Dashboard would open here. In a real application, this would navigate to the CTO management system.');
            }
        });
        
        // Add keyboard navigation support
        document.addEventListener('keydown', function(e) {
            // 1 for Leave Dashboard, 2 for CTO Dashboard, ESC for logout
            if (e.key === '1') {
                document.getElementById('leaveDashboardBtn').click();
            } else if (e.key === '2') {
                document.getElementById('ctoDashboardBtn').click();
            } else if (e.key === 'Escape') {
                logout();
            }
        });
        
        // Add click animation to dashboard buttons
        const dashboardButtons = document.querySelectorAll('.dashboard-btn');
        dashboardButtons.forEach(button => {
            button.addEventListener('click', function() {
                this.style.transform = 'scale(0.98)';
                setTimeout(() => {
                    this.style.transform = '';
                }, 150);
            });
        });
    </script>
</body>
</html>