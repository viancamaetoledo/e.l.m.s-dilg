<x-layout2>
    <title>DILG ELMS - Employee Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
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
        
        /* Main Content Styles */
        .main-content {
            flex: 1;
            padding: 20px;
            background-color: #f5f7fa;
            min-height: 100vh;
        }
        
        .header {
            background: white;
            padding: 20px 30px;
            margin-bottom: 30px;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        
        .header-title h1 {
            color: var(--primary-color);
            font-size: 1.8rem;
            margin-bottom: 5px;
        }
        
        .header-title p {
            color: var(--gray-color);
            font-size: 0.95rem;
        }
        
        .user-profile {
            display: flex;
            align-items: center;
            background-color: white;
            padding: 10px 15px;
            border-radius: 50px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.08);
        }
        
        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: var(--accent-color);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            margin-right: 10px;
        }
        
        .user-info h4 {
            font-size: 0.9rem;
        }
        
        .user-info p {
            font-size: 0.8rem;
            color: var(--gray-color);
        }
        
        /* Dashboard Cards */
        .dashboard-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }
        
        .card {
            background-color: white;
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s;
            border-top: 4px solid transparent;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        .card-icon {
            width: 60px;
            height: 60px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            margin-bottom: 20px;
            color: white;
        }
        
        .card-1 .card-icon { 
            background-color: #2a9d8f; 
            border-top-color: #2a9d8f;
        }
        .card-2 .card-icon { 
            background-color: #e9c46a; 
            border-top-color: #e9c46a;
        }
        .card-3 .card-icon { 
            background-color: #e76f51; 
            border-top-color: #e76f51;
        }
        .card-4 .card-icon { 
            background-color: #264653; 
            border-top-color: #264653;
        }
        
        .card h3 {
            font-size: 2rem;
            margin-bottom: 5px;
            color: var(--dark-color);
        }
        
        .card p {
            color: var(--gray-color);
            font-size: 0.9rem;
        }
        
        /* Two Column Layout */
        .two-column {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin-bottom: 30px;
        }
        
        @media (max-width: 992px) {
            .two-column {
                grid-template-columns: 1fr;
            }
        }
        
        /* Leave Balance Table */
        .leave-balance-container, .recent-activities-container {
            background-color: white;
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            height: 100%;
        }
        
        .section-title {
            color: var(--primary-color);
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #f0f0f0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .section-title h2 {
            font-size: 1.5rem;
        }
        
        .btn-view-all {
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 5px;
            font-size: 0.9rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        
        .btn-view-all:hover {
            background-color: #0a3d7a;
        }
        
        .table-responsive {
            overflow-x: auto;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
        }
        
        thead {
            background-color: #f8f9fa;
        }
        
        th {
            padding: 15px;
            text-align: left;
            font-weight: 600;
            color: var(--dark-color);
            border-bottom: 2px solid #dee2e6;
        }
        
        td {
            padding: 15px;
            border-bottom: 1px solid #dee2e6;
        }
        
        tr:hover {
            background-color: #f8f9fa;
        }
        
        .leave-badge {
            display: inline-block;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
        }
        
        .available {
            background-color: #d4edda;
            color: #155724;
        }
        
        .low {
            background-color: #fff3cd;
            color: #856404;
        }
        
        .used {
            background-color: #f8d7da;
            color: #721c24;
        }
        
        /* Recent Activities */
        .activity-list {
            list-style: none;
        }
        
        .activity-item {
            display: flex;
            padding: 15px 0;
            border-bottom: 1px solid #f0f0f0;
        }
        
        .activity-item:last-child {
            border-bottom: none;
        }
        
        .activity-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #e9f7fe;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            color: var(--primary-color);
            flex-shrink: 0;
        }
        
        .activity-content h4 {
            font-size: 1rem;
            margin-bottom: 5px;
        }
        
        .activity-content p {
            font-size: 0.9rem;
            color: var(--gray-color);
            margin-bottom: 5px;
        }
        
        .activity-time {
            font-size: 0.8rem;
            color: var(--gray-color);
        }
        
        /* Footer */
        .footer {
            text-align: center;
            margin-top: 40px;
            padding-top: 20px;
            border-top: 1px solid #dee2e6;
            color: var(--gray-color);
            font-size: 0.9rem;
        }
        
        /* Responsive Styles */
        @media (max-width: 768px) {
            .dashboard-cards {
                grid-template-columns: 1fr;
            }
            
            .header {
                flex-direction: column;
                align-items: flex-start;
                padding: 15px;
            }
            
            .user-profile {
                margin-top: 15px;
                align-self: stretch;
            }
            
            .main-content {
                padding: 15px;
            }
            
            .table-responsive {
                font-size: 0.9rem;
            }
            
            th, td {
                padding: 10px;
            }
        }
    </style>
</head>
<body>
      <!-- Dashboard Overview -->
        <section id="dashboard-overview">
            <h2 class="section-title">Overview</h2>
            <div class="dashboard-cards">
                <div class="card card-1">
                    <div class="card-icon">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <h3>87</h3>
                    <p>Total Leave Credits Available</p>
                </div>
                <div class="card card-2">
                    <div class="card-icon">
                        <i class="fas fa-calendar-times"></i>
                    </div>
                    <h3>12</h3>
                    <p>Leave Credits Used This Year</p>
                </div>
                <div class="card card-3">
                    <div class="card-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>5</h3>
                    <p>Pending Leave Requests</p>
                </div>
                <div class="card card-4">
                    <div class="card-icon">
                        <i class="fas fa-calendar-day"></i>
                    </div>
                    <h3>24</h3>
                    <p>CTO Credits Available</p>
                </div>
            </div>
        </section>
        
        <!-- Two Column Layout -->
        <div class="two-column">
            <!-- Leave Balance Table -->
            <section id="leave-balance-section">
                <div class="leave-balance-container">
                    <div class="section-title">
                        <h2>Leave Credits Balance</h2>
                        <button class="btn-view-all">View Details</button>
                    </div>
                    <div class="table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th>Leave Type</th>
                                    <th>Total Credits</th>
                                    <th>Used</th>
                                    <th>Available</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Vacation Leave</td>
                                    <td>15</td>
                                    <td>5</td>
                                    <td>10</td>
                                    <td><span class="leave-badge available">Available</span></td>
                                </tr>
                                <tr>
                                    <td>Sick Leave</td>
                                    <td>15</td>
                                    <td>3</td>
                                    <td>12</td>
                                    <td><span class="leave-badge available">Available</span></td>
                                </tr>
                                <tr>
                                    <td>Mandatory/Forced Leave</td>
                                    <td>5</td>
                                    <td>0</td>
                                    <td>5</td>
                                    <td><span class="leave-badge available">Available</span></td>
                                </tr>
                                <tr>
                                    <td>Special Privilege Leave</td>
                                    <td>3</td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td><span class="leave-badge low">Low</span></td>
                                </tr>
                                <tr>
                                    <td>CTO</td>
                                    <td>30</td>
                                    <td>6</td>
                                    <td>24</td>
                                    <td><span class="leave-badge available">Available</span></td>
                                </tr>
                                <tr>
                                    <td>Maternity Leave</td>
                                    <td>105</td>
                                    <td>0</td>
                                    <td>105</td>
                                    <td><span class="leave-badge available">Available</span></td>
                                </tr>
                                <tr>
                                    <td>Paternity Leave</td>
                                    <td>7</td>
                                    <td>0</td>
                                    <td>7</td>
                                    <td><span class="leave-badge available">Available</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            
            <!-- Recent Activities -->
            <section id="recent-activities-section">
                <div class="recent-activities-container">
                    <div class="section-title">
                        <h2>Recent Activities</h2>
                        <button class="btn-view-all">View All</button>
                    </div>
                    <ul class="activity-list">
                        <li class="activity-item">
                            <div class="activity-icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="activity-content">
                                <h4>CTO Application Approved</h4>
                                <p>8 hours CTO for October 15, 2024</p>
                                <div class="activity-time">October 10, 2024 | 10:30 AM</div>
                            </div>
                        </li>
                        <li class="activity-item">
                            <div class="activity-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="activity-content">
                                <h4>Sick Leave Application Pending</h4>
                                <p>3 days sick leave from October 18-20, 2024</p>
                                <div class="activity-time">October 8, 2024 | 2:15 PM</div>
                            </div>
                        </li>
                        <li class="activity-item">
                            <div class="activity-icon">
                                <i class="fas fa-calendar-check"></i>
                            </div>
                            <div class="activity-content">
                                <h4>Vacation Leave Approved</h4>
                                <p>5 days vacation leave from November 5-9, 2024</p>
                                <div class="activity-time">October 5, 2024 | 9:00 AM</div>
                            </div>
                        </li>
                        <li class="activity-item">
                            <div class="activity-icon">
                                <i class="fas fa-exclamation-circle"></i>
                            </div>
                            <div class="activity-content">
                                <h4>Mandatory Leave Notification</h4>
                                <p>Reminder to use 5 days mandatory leave before year-end</p>
                                <div class="activity-time">October 1, 2024 | 11:45 AM</div>
                            </div>
                        </li>
                        <li class="activity-item">
                            <div class="activity-icon">
                                <i class="fas fa-file-upload"></i>
                            </div>
                            <div class="activity-content">
                                <h4>CTO Credits Updated</h4>
                                <p>Added 8 hours CTO credits for September overtime</p>
                                <div class="activity-time">September 28, 2024 | 4:20 PM</div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        </div>  
        
        <footer class="footer">
            <p>DILG Pangasinan Employee Dashboard &copy; 2026 | Department of the Interior and Local Government - Region I</p>
        </footer>

    <script>
        // Simple JavaScript for interactive elements
        document.addEventListener('DOMContentLoaded', function() {
            // Add click handlers for view all buttons
            const viewAllButtons = document.querySelectorAll('.btn-view-all');
            
            viewAllButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const section = this.closest('section');
                    const title = section.querySelector('h2').textContent;
                    alert(`Viewing all ${title}. This would navigate to a detailed page in a full implementation.`);
                });
            });
            
            // Animate card numbers on load
            const cardNumbers = document.querySelectorAll('.card h3');
            cardNumbers.forEach(number => {
                const targetValue = parseInt(number.textContent);
                let currentValue = 0;
                const increment = targetValue / 20;
                const timer = setInterval(() => {
                    currentValue += increment;
                    if (currentValue >= targetValue) {
                        currentValue = targetValue;
                        clearInterval(timer);
                    }
                    number.textContent = Math.floor(currentValue);
                }, 50);
            });
        });
    </script>
</body>
</x-layout2>