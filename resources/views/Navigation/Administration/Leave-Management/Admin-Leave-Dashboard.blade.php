<x-layout>
    <title>DILG ELMS - Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --primary-color: #1a5276;
            --primary-dark: #00215E;
            --secondary-color: #FFC55A;
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
        
        /* Content Area */
        .content-wrapper {
            padding: 2rem;
        }
        
        /* Dashboard Overview */
        .dashboard-overview {
            margin-bottom: 2rem;
        }
        
        .dashboard-title {
            margin-bottom: 1.5rem;
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
            gap: 0.75rem;
        }
        
        .date-filter select,
        .date-filter input {
            padding: 0.75rem 1rem;
            border: 1px solid var(--border-color);
            border-radius: 0.375rem;
            font-size: 0.95rem;
            min-width: 150px;
        }
        
        /* Stats Cards */
        .stats-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }
        
        .stat-card {
            background: white;
            border-radius: 0.75rem;
            padding: 1.5rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            display: flex;
            align-items: center;
            gap: 1.25rem;
            transition: transform 0.3s;
        }
        
        .stat-card:hover {
            transform: translateY(-3px);
        }
        
        .stat-icon {
            width: 60px;
            height: 60px;
            border-radius: 0.75rem;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            color: white;
        }
        
        .stat-info h3 {
            font-size: 2.2rem;
            margin-bottom: 0.25rem;
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
        
        /* Dashboard Grid */
        .dashboard-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }
        
        .dashboard-card {
            background: white;
            border-radius: 0.75rem;
            padding: 1.5rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.25rem;
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
            padding: 1rem;
            background-color: #f5f7fa;
            color: var(--primary-color);
            font-weight: 600;
            border-bottom: 1px solid var(--border-color);
        }
        
        .data-table td {
            padding: 1rem;
            border-bottom: 1px solid var(--border-color);
        }
        
        .data-table tr:hover {
            background-color: #f9f9f9;
        }
        
        .status-badge {
            padding: 0.375rem 0.75rem;
            border-radius: 1rem;
            font-size: 0.85rem;
            font-weight: 500;
            display: inline-block;
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
        
        /* Responsive */
        @media (max-width: 1200px) {
            .dashboard-grid {
                grid-template-columns: 1fr;
            }
        }
        
        @media (max-width: 768px) {
            .content-wrapper {
                padding: 1rem;
            }
            
            .stats-cards {
                grid-template-columns: 1fr;
            }
            
            .dashboard-title {
                flex-direction: column;
                align-items: flex-start;
                gap: 1rem;
            }
            
            .date-filter {
                width: 100%;
                flex-direction: column;
            }
            
            .date-filter select,
            .date-filter input {
                width: 100%;
            }
            
            .dashboard-grid {
                grid-template-columns: 1fr;
            }
            
            .data-table {
                display: block;
                overflow-x: auto;
            }
        }
        
        @media (max-width: 480px) {
            .stat-card {
                flex-direction: column;
                text-align: center;
                padding: 1.25rem;
            }
            
            .stat-icon {
                width: 50px;
                height: 50px;
                font-size: 1.5rem;
            }
            
            .stat-info h3 {
                font-size: 1.8rem;
            }
        }
    </style>
</head>
<body>
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
            </div>
        </div>
    </div>
    
    
</body>
</x-layout>