<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DILG ELMS - Employee Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.11.3/main.min.css">
    <link rel="stylesheet" href="/css/Employees/EmployeeDashboard.css">
</head>
<body>
    <!-- Sidebar Navigation -->
    <nav class="sidebar">
        <div class="logo-container">
            <div class="logo">
                <i class="fas fa-building"></i>
            </div>
            <div class="logo-text">
                <h2>DILG ELMS</h2>
                <p class="logo-subtext">Employee Portal</p>
            </div>
        </div>
        
        <ul class="nav-menu">
            <li>
                <a href="#" class="nav-link active" id="overview-link">
                    <i class="fas fa-tachometer-alt nav-icon"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            
            <li class="nav-dropdown">
                <a href="#" class="nav-link" id="leave-link">
                    <i class="fas fa-calendar-plus nav-icon"></i>
                    <span class="nav-text">Apply Leave</span>
                    <i class="fas fa-chevron-down"></i>
                </a>
                <ul class="dropdown-menu" id="leave-dropdown">
                    <li class="leave-item">
                        <a href="#" data-leave="vl">Vacation Leave (VL)</a>
                    </li>
                    <li class="leave-item">
                        <a href="#" data-leave="mfl">Mandatory/Forced Leave (MFL)</a>
                    </li>
                    <li class="leave-item">
                        <a href="#" data-leave="sl">Sick Leave (SL)</a>
                    </li>
                    <li class="leave-item">
                        <a href="#" data-leave="ml">Maternity Leave (ML)</a>
                    </li>
                    <li class="leave-item">
                        <a href="#" data-leave="pl">Paternity Leave (PL)</a>
                    </li>
                    <li class="leave-item">
                        <a href="#" data-leave="spl">Special Privilege Leave (SPL)</a>
                    </li>
                    <li class="leave-item">
                        <a href="#" data-leave="solo">Solo Parent Leave</a>
                    </li>
                    <li class="leave-item">
                        <a href="#" data-leave="study">Study Leave</a>
                    </li>
                    <li class="leave-item">
                        <a href="#" data-leave="vawc">VAWC Leave</a>
                    </li>
                    <li class="leave-item">
                        <a href="#" data-leave="rehab">Rehabilitation Leave</a>
                    </li>
                    <li class="leave-item">
                        <a href="#" data-leave="slbw">Special Leave Benefits for Women</a>
                    </li>
                    <li class="leave-item">
                        <a href="#" data-leave="calamity">Special Emergency (Calamity) Leave</a>
                    </li>
                    <li class="leave-item">
                        <a href="#" data-leave="monetization">Monetization of Leave Credits</a>
                    </li>
                    <li class="leave-item">
                        <a href="#" data-leave="terminal">Terminal Leave</a>
                    </li>
                    <li class="leave-item">
                        <a href="#" data-leave="adoption">Adoption Leave</a>
                    </li>
                </ul>
            </li>
            
            <li>
                <a href="#" class="nav-link" id="cto-link">
                    <i class="fas fa-clock nav-icon"></i>
                    <span class="nav-text">Apply CTO</span>
                </a>
            </li>
            
            <li>
                <a href="#" class="nav-link">
                    <i class="fas fa-history nav-icon"></i>
                    <span class="nav-text">Leave History</span>
                </a>
            </li>
            
            <li>
                <a href="#" class="nav-link">
                    <i class="fas fa-calendar-alt nav-icon"></i>
                    <span class="nav-text">Calendar</span>
                </a>
            </li>
            
            <li>
                <a href="#" class="nav-link">
                    <i class="fas fa-user nav-icon"></i>
                    <span class="nav-text">Profile</span>
                </a>
            </li>
            
            <li>
                <a href="#" class="nav-link">
                    <i class="fas fa-cog nav-icon"></i>
                    <span class="nav-text">Settings</span>
                </a>
            </li>
            
            <li>
                <a href="#" class="nav-link logout-link">
                    <i class="fas fa-sign-out-alt nav-icon"></i>
                    <span class="nav-text">Logout</span>
                </a>
            </li>
        </ul>
    </nav>
    
    <!-- Main Content -->
    <main class="main-content">
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
                            <input type="text" id="cto-name" class="form-control" required>
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
    </main>

    <script src="/js/Employees/EmployeeDashboard.js"></script>
</body>
</html>