<x-layout2>
    <title>DILG ELMS - Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.11.3/main.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        :root {
            --primary-color: #0d4d9e;
            --secondary-color: #e63946;
            --accent-color: #2a9d8f;
            --light-color: #f8f9fa;
            --dark-color: #343a40;
            --gray-color: #6c757d;
            --sidebar-width: 250px;
        }
        
        body {
            display: flex;
            min-height: 100vh;
            background-color: #f5f7fa;
            color: var(--dark-color);
        }
        
        
        
        /* Main Content Styles */
        .main-content {
            flex: 1;
            margin-left: var(--sidebar-width);
            padding: 20px;
            width: calc(100% - var(--sidebar-width));
        }
        
        .header {
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
            color: var(--primary-color);
            font-size: 1.8rem;
        }
        
        .header-title p {
            color: var(--gray-color);
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
        }
        
        .card:hover {
            transform: translateY(-5px);
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
        
        .card-1 .card-icon { background-color: #2a9d8f; }
        .card-2 .card-icon { background-color: #e9c46a; }
        .card-3 .card-icon { background-color: #e76f51; }
        .card-4 .card-icon { background-color: #264653; }
        
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
        
        /* Form Container */
        .form-container {
            background-color: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
            display: none;
        }
        
        .form-container.active {
            display: block;
        }
        
        /* CTO Form Specific Styles */
        .cto-form-header {
            text-align: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 2px solid #dee2e6;
        }
        
        .cto-form-header h2 {
            color: var(--primary-color);
            font-size: 1.8rem;
            margin-bottom: 10px;
        }
        
        .cto-form-header h3 {
            color: var(--dark-color);
            font-size: 1.2rem;
            margin-bottom: 5px;
        }
        
        .form-section {
            margin-bottom: 30px;
            padding: 20px;
            border: 1px solid #dee2e6;
            border-radius: 5px;
        }
        
        .form-section-title {
            font-weight: bold;
            color: var(--primary-color);
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 1px solid #dee2e6;
        }
        
        .form-row {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-bottom: 15px;
        }
        
        .form-group {
            flex: 1;
            min-width: 200px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: var(--dark-color);
            font-size: 0.9rem;
        }
        
        .form-control {
            width: 100%;
            padding: 10px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            transition: border 0.3s;
        }
        
        .form-control:focus {
            border-color: var(--primary-color);
            outline: none;
            box-shadow: 0 0 0 3px rgba(13, 77, 158, 0.1);
        }
        
        .signature-line {
            border-top: 1px solid #333;
            width: 200px;
            margin-top: 5px;
            text-align: center;
            padding-top: 5px;
            font-size: 0.8rem;
            color: #666;
        }
        
        .table-form {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        
        .table-form th, .table-form td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }
        
        .table-form th {
            background-color: #f8f9fa;
            font-weight: 600;
        }
        
        .btn-submit {
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 5px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s;
            display: block;
            margin: 30px auto 0;
        }
        
        .btn-submit:hover {
            background-color: #0a3d7a;
        }
        
        .notes-box {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 5px;
            margin-top: 20px;
            font-size: 0.9rem;
            border-left: 4px solid var(--accent-color);
        }
        
        .notes-box h4 {
            color: var(--primary-color);
            margin-bottom: 10px;
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
        @media (max-width: 992px) {
            .sidebar {
                width: 70px;
                padding: 20px 0;
            }
            
            .logo-text, .logo-subtext, .nav-text, .leave-item a {
                display: none;
            }
            
            .logo-container {
                justify-content: center;
                padding: 0 0 20px;
            }
            
            .logo {
                margin-right: 0;
            }
            
            .nav-link {
                justify-content: center;
                padding: 15px 0;
            }
            
            .nav-icon {
                margin-right: 0;
                font-size: 1.2rem;
            }
            
            .main-content {
                margin-left: 70px;
                width: calc(100% - 70px);
            }
            
            .leave-item {
                padding: 12px 0;
                text-align: center;
            }
        }
        
        @media (max-width: 768px) {
            .dashboard-cards {
                grid-template-columns: 1fr;
            }
            
            .form-row {
                flex-direction: column;
                gap: 0;
            }
            
            .header {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .user-profile {
                margin-top: 15px;
            }
            
            .table-responsive {
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    
    <!-- Main Content -->
        <header class="header">
            <div class="header-title">
                <h1>Employee Dashboard</h1>
                <p>Department of the Interior and Local Government - Pangasinan</p>
            </div>
            <div class="user-profile">
                <div class="user-avatar">JD</div>
                <div class="user-info">
                    <h4>Juan Dela Cruz</h4>
                    <p>Administrative Officer III</p>
                </div>
            </div>
        </header>
        
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
                    <h2 class="section-title">Leave Credits Balance</h2>
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
                    <h2 class="section-title">Recent Activities</h2>
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
        
        <!-- Leave Form Container -->
        <div class="form-container" id="leave-form-container">
           <div class="cto-form-header">
                <h2>DEPARTMENT OF THE INTERIOR AND LOCAL GOVERNMENT</h2>
                <h3>Regional Office I</h3>
                <h2>APPLICATION FOR LEAVE</h2>
            </div>
            <form id="leave-application-form">
                <div class="form-row">
                    <div class="form-group">
                        <label for="leave-type">Type of Leave</label>
                        <select id="leave-type" class="form-control" required>
                            <option value="">Select Leave Type</option>
                            <option value="Vacation Leave">Vacation Leave</option>
                            <option value="Mandatory/Forced Leave">Mandatory/Forced Leave</option>
                            <option value="Sick Leave">Sick Leave</option>
                            <option value="Maternity Leave">Maternity Leave</option>
                            <option value="Paternity Leave">Paternity Leave</option>
                            <option value="Special Privilege Leave">Special Privilege Leave</option>
                            <option value="Solo Parent Leave">Solo Parent Leave</option>
                            <option value="Study Leave">Study Leave</option>
                            <option value="VAWC Leave">VAWC Leave</option>
                            <option value="Rehabilitation Leave">Rehabilitation Leave</option>
                            <option value="Special Leave Benefits for Women">Special Leave Benefits for Women</option>
                            <option value="Special Emergency (Calamity) Leave">Special Emergency (Calamity) Leave</option>
                            <option value="Monetization of Leave Credits">Monetization of Leave Credits</option>
                            <option value="Terminal Leave">Terminal Leave</option>
                            <option value="Adoption Leave">Adoption Leave</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="employee-name">Employee Name</label>
                        <input type="text" id="employee-name" class="form-control" value="Juan Dela Cruz" readonly>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="start-date">Start Date</label>
                        <input type="date" id="start-date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="end-date">End Date</label>
                        <input type="date" id="end-date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="number-of-days">Number of Days</label>
                        <input type="number" id="number-of-days" class="form-control" min="0.5" max="30" step="0.5" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="reason">Reason for Leave</label>
                    <textarea id="reason" class="form-control" rows="4" placeholder="Please provide a reason for your leave..." required></textarea>
                </div>
                
                <div class="form-group">
                    <label for="contact-during-leave">Contact During Leave</label>
                    <input type="text" id="contact-during-leave" class="form-control" placeholder="Mobile number or email address" required>
                </div>
                
                <button type="submit" class="btn-submit">Submit Leave Application</button>
            </form>
        </div>
        
        <!-- CTO Form Container -->
        <div class="form-container" id="cto-form-container">
            <div class="cto-form-header">
                <h2>DEPARTMENT OF THE INTERIOR AND LOCAL GOVERNMENT</h2>
                <h3>Regional Office I</h3>
                <h2>COMPENSATORY TIME-OFF (CTO) APPLICATION FORM</h2>
            </div>
            
            <form id="cto-application-form">
                <!-- For Personnel Section/Division Use Only -->
                <div class="form-section">
                    <div class="form-section-title">FOR PERSONNEL SECTION/DIVISION USE ONLY</div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="cto-name">Name</label>
                            <input type="text" id="cto-name" class="form-control"required>
                        </div>
                        <div class="form-group">
                            <label for="cto-position">Position</label>
                            <input type="text" id="cto-position" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="cto-office">Office</label>
                            <input type="text" id="cto-office" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="cto-filing-date">Date of Filing</label>
                            <input type="date" id="cto-filing-date" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="cto-hours-applied">No. of hours Applied for</label>
                            <input type="number" id="cto-hours-applied" class="form-control" min="1" max="24" required>
                        </div>
                        <div class="form-group">
                            <label for="cto-inclusive-dates">Inclusive Date/s</label>
                            <input type="text" id="cto-inclusive-dates" class="form-control" required>
                        </div>
                    </div>
                </div>

                
                <button type="submit" class="btn-submit">Submit CTO Application</button>
            </form>
        </div>
        
        <footer class="footer">
            <p>DILG Pangasinan Employee Dashboard &copy; 2026 | Department of the Interior and Local Government - Region I</p>
        </footer>

    <script>
        // Toggle leave dropdown
        document.getElementById('leave-link').addEventListener('click', function(e) {
            e.preventDefault();
            const dropdown = document.getElementById('leave-dropdown');
            dropdown.classList.toggle('show');
            
            // Toggle chevron icon
            const chevron = this.querySelector('.fa-chevron-down');
            if (chevron.classList.contains('fa-chevron-down')) {
                chevron.classList.remove('fa-chevron-down');
                chevron.classList.add('fa-chevron-up');
            } else {
                chevron.classList.remove('fa-chevron-up');
                chevron.classList.add('fa-chevron-down');
            }
        });
        
        // Navigation functionality
        const navLinks = document.querySelectorAll('.nav-link');
        const formContainers = document.querySelectorAll('.form-container');
        const dashboardOverview = document.getElementById('dashboard-overview');
        const twoColumnSection = document.querySelector('.two-column');
        
        function showSection(sectionId) {
            // Hide all form containers
            formContainers.forEach(container => {
                container.classList.remove('active');
            });
            
            // Show/hide dashboard sections
            if (sectionId === 'overview') {
                dashboardOverview.style.display = 'block';
                twoColumnSection.style.display = 'grid';
            } else {
                dashboardOverview.style.display = 'none';
                twoColumnSection.style.display = 'none';
            }
            
            // Update active nav link
            navLinks.forEach(link => {
                link.classList.remove('active');
            });
            
            // Show the selected form if applicable
            if (sectionId === 'leave') {
                document.getElementById('leave-form-container').classList.add('active');
                document.getElementById('leave-link').classList.add('active');
            } else if (sectionId === 'cto') {
                document.getElementById('cto-form-container').classList.add('active');
                document.getElementById('cto-link').classList.add('active');
            } else {
                document.getElementById('overview-link').classList.add('active');
            }
        }
        
        // Set up navigation event listeners
        document.getElementById('overview-link').addEventListener('click', function() {
            showSection('overview');
        });

        document.getElementById('leave-link').addEventListener('click', function() {
            showSection('leave');
        });
        
        document.getElementById('cto-link').addEventListener('click', function() {
            showSection('cto');
        });
        
        // Handle leave type selection from sidebar
        const leaveItems = document.querySelectorAll('.leave-item a');
        const leaveTypeSelect = document.getElementById('leave-type');
        
        leaveItems.forEach(item => {
            item.addEventListener('click', function(e) {
                e.preventDefault();
                const leaveType = this.getAttribute('data-leave');
                
                // Map short codes to full leave type names
                const leaveTypeMap = {
                    'vl': 'Vacation Leave',
                    'mfl': 'Mandatory/Forced Leave',
                    'sl': 'Sick Leave',
                    'ml': 'Maternity Leave',
                    'pl': 'Paternity Leave',
                    'spl': 'Special Privilege Leave',
                    'solo': 'Solo Parent Leave',
                    'study': 'Study Leave',
                    'vawc': 'VAWC Leave',
                    'rehab': 'Rehabilitation Leave',
                    'slbw': 'Special Leave Benefits for Women',
                    'calamity': 'Special Emergency (Calamity) Leave',
                    'monetization': 'Monetization of Leave Credits',
                    'terminal': 'Terminal Leave',
                    'adoption': 'Adoption Leave'
                };
                
                const fullLeaveType = leaveTypeMap[leaveType];
                leaveTypeSelect.value = fullLeaveType;
                
                // Show leave form
                showSection('leave');
                
                // Close dropdown on mobile
                if (window.innerWidth <= 992) {
                    document.getElementById('leave-dropdown').classList.remove('show');
                    const chevron = document.querySelector('#leave-link .fa-chevron-up');
                    if (chevron) {
                        chevron.classList.remove('fa-chevron-up');
                        chevron.classList.add('fa-chevron-down');
                    }
                }
            });
        });
        
        // Handle leave form submission
        document.getElementById('leave-application-form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const leaveType = document.getElementById('leave-type').value;
            const startDate = document.getElementById('start-date').value;
            const endDate = document.getElementById('end-date').value;
            const numberOfDays = document.getElementById('number-of-days').value;
            const reason = document.getElementById('reason').value;
            
            if (!leaveType || !startDate || !endDate || !numberOfDays || !reason) {
                alert('Please fill in all required fields.');
                return;
            }
            
            // In a real application, you would send this data to a server
            alert(`Leave application submitted successfully!\n\nLeave Type: ${leaveType}\nStart Date: ${startDate}\nEnd Date: ${endDate}\nNumber of Days: ${numberOfDays}\n\nYour application is now pending approval.`);
            
            // Reset form
            this.reset();
            document.getElementById('employee-name').value = 'Juan Dela Cruz';
            
            // Return to overview
            showSection('overview');
        });
        
        // Handle CTO form submission
        document.getElementById('cto-application-form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const hoursApplied = document.getElementById('cto-hours-applied').value;
            const inclusiveDates = document.getElementById('cto-inclusive-dates').value;
            const filingDate = document.getElementById('cto-filing-date').value;
            
            if (!hoursApplied || !inclusiveDates || !filingDate) {
                alert('Please fill in all required fields.');
                return;
            }
            
            const action = document.querySelector('input[name="action"]:checked').value;
            
            if (action === 'disapproved' && !document.getElementById('disapproval-reason').value) {
                alert('Please provide a reason for disapproval.');
                return;
            }
            
            // In a real application, you would send this data to a server
            alert(`CTO application submitted successfully!\n\nHours Applied: ${hoursApplied}\nInclusive Dates: ${inclusiveDates}\nFiling Date: ${filingDate}\n\nYour application has been submitted for processing.`);
            
            // Return to overview
            showSection('overview');
        });
        
        // Calculate number of days based on start and end dates for leave form
        const startDateInput = document.getElementById('start-date');
        const endDateInput = document.getElementById('end-date');
        const numberOfDaysInput = document.getElementById('number-of-days');
        
        function calculateDays() {
            if (startDateInput.value && endDateInput.value) {
                const start = new Date(startDateInput.value);
                const end = new Date(endDateInput.value);
                
                // Calculate difference in days
                const timeDiff = end.getTime() - start.getTime();
                const dayDiff = timeDiff / (1000 * 3600 * 24) + 1; // +1 to include both start and end days
                
                if (dayDiff > 0) {
                    numberOfDaysInput.value = dayDiff;
                } else {
                    numberOfDaysInput.value = '';
                }
            }
        }
        
        startDateInput.addEventListener('change', calculateDays);
        endDateInput.addEventListener('change', calculateDays);
        
        // Set minimum date to today for start date
        const today = new Date().toISOString().split('T')[0];
        startDateInput.min = today;
        
        // Update end date min when start date changes
        startDateInput.addEventListener('change', function() {
            endDateInput.min = this.value;
        });
        
        // Initialize CTO form with current date
        const currentDate = new Date();
        document.getElementById('cto-filing-date').value = currentDate.toISOString().split('T')[0];
        document.getElementById('carded-date').value = currentDate.toISOString().split('T')[0];
        document.getElementById('coc-as-of-date').value = currentDate.toISOString().split('T')[0];
        
        // Set CTO hours earned based on table data
        function calculateCTOHours() {
            const rows = document.querySelectorAll('.table-form tbody tr');
            let totalHours = 0;
            
            rows.forEach(row => {
                const hoursEarnedInput = row.querySelector('td:nth-child(2) input');
                if (hoursEarnedInput && hoursEarnedInput.value) {
                    totalHours += parseInt(hoursEarnedInput.value) || 0;
                }
            });
            
            document.getElementById('coc-hours-earned').value = totalHours;
        }
        
        // Calculate initial CTO hours
        calculateCTOHours();
        
        // Update CTO hours when table inputs change
        const tableInputs = document.querySelectorAll('.table-form input');
        tableInputs.forEach(input => {
            input.addEventListener('change', calculateCTOHours);
        });
        
        // Handle disapproval reason field enable/disable
        const actionRadios = document.querySelectorAll('input[name="action"]');
        const disapprovalReason = document.getElementById('disapproval-reason');
        
        actionRadios.forEach(radio => {
            radio.addEventListener('change', function() {
                if (this.value === 'disapproved') {
                    disapprovalReason.disabled = false;
                    document.getElementById('approved-hours').disabled = true;
                } else {
                    disapprovalReason.disabled = true;
                    document.getElementById('approved-hours').disabled = false;
                }
            });
        });
        
        // Initialize with overview section
        showSection('overview');
    </script>
</body>
</html>
</x-layout2>