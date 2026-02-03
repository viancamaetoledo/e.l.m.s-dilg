<x-layout2>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #1a5276;
            --primary-dark: #00215E;
            --secondary-color: #FFC55A;
            --accent-color: #FC4100;
            --sidebar-width: 280px;
            --header-height: 70px;
            --light-bg: #f8f9fa;
            --border-color: #e0e0e0;
            --success-color: #28a745;
            --warning-color: #ffc107;
            --danger-color: #dc3545;
            --info-color: #17a2b8;
            --medium-gray: #E1E8F0;
            --dark-gray: #64748B;
            --text: #1E293B;
            --white: #FFFFFF;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', 'Segoe UI', system-ui, sans-serif;
        }
        
        body {
            background-color: var(--light-bg);
            color: var(--text);
            line-height: 1.6;
            min-height: 100vh;
        }
        
        .container {
            max-width: 1300px;
            margin: 0 auto;
        }
        
        /* Header Section */
        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid var(--border-color);
        }
        
        .header-content h1 {
            color: var(--primary-dark);
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 5px;
        }
        
        .header-content .subtitle {
            color: var(--dark-gray);
            font-size: 1rem;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .employee-badge {
            display: inline-flex;
            align-items: center;
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            color: white;
            padding: 6px 15px;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 500;
        }
        
        .employee-badge i {
            margin-right: 6px;
            font-size: 0.8rem;
        }
        
        /* Summary Cards */
        .summary-container {
            display: grid;
            grid-template-columns: 1fr;
            gap: 25px;
            margin-bottom: 30px;
        }
        
        @media (min-width: 992px) {
            .summary-container {
                grid-template-columns: 1fr 1fr;
            }
        }
        
        .summary-card {
            background-color: var(--white);
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(26, 82, 118, 0.06);
            overflow: hidden;
            border: 1px solid var(--border-color);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        
        .summary-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 18px rgba(26, 82, 118, 0.1);
        }
        
        /* Card Headers */
        .card-header {
            padding: 18px 25px;
            color: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: relative;
        }
        
        .card-header::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 4px;
        }
        
        .summary-header {
            background: linear-gradient(135deg, var(--primary-color), #1a3a6a);
        }
        
        .leave-header::after {
            background-color: var(--accent-color);
        }
        
        .cto-header {
            background: linear-gradient(135deg, var(--primary-dark), #0d1b3a);
        }
        
        .cto-header::after {
            background-color: var(--secondary-color);
        }
        
        .card-title {
            font-size: 1.3rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .card-title i {
            font-size: 1.2rem;
        }
        
        /* Balance Overview */
        .balance-overview {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid var(--light-bg);
        }
        
        .total-balance {
            text-align: center;
            flex: 1;
        }
        
        .balance-label {
            font-size: 0.85rem;
            color: var(--dark-gray);
            margin-bottom: 8px;
            font-weight: 500;
            letter-spacing: 0.3px;
        }
        
        .balance-value {
            font-size: 2.4rem;
            font-weight: 700;
            line-height: 1;
            margin-bottom: 5px;
        }
        
        .leave-balance {
            color: var(--primary-color);
        }
        
        .cto-balance {
            color: var(--primary-dark);
        }
        
        .balance-unit {
            font-size: 0.9rem;
            color: var(--dark-gray);
            font-weight: 500;
        }
        
        .used {
            color: var(--accent-color);
        }
        
        /* Table Styling */
        .table-container {
            overflow-x: auto;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.95rem;
        }
        
        thead {
            background-color: var(--light-bg);
        }
        
        th {
            text-align: left;
            padding: 14px 16px;
            color: var(--primary-dark);
            font-weight: 600;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border-bottom: 2px solid var(--border-color);
        }
        
        td {
            padding: 14px 16px;
            border-bottom: 1px solid var(--light-bg);
        }
        
        tbody tr {
            transition: background-color 0.15s ease;
        }
        
        tbody tr:hover {
            background-color: rgba(26, 82, 118, 0.03);
        }
        
        tbody tr:last-child td {
            border-bottom: none;
        }
        
        /* Leave Type Indicators */
        .leave-type {
            display: flex;
            align-items: center;
        }
        
        .type-indicator {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            margin-right: 12px;
            flex-shrink: 0;
        }
        
        .annual { background-color: var(--primary-color); }
        .sick { background-color: var(--accent-color); }
        .personal { background-color: #8B5CF6; }
        .maternity { background-color: var(--info-color); }
        .accrued { background-color: var(--primary-color); }
        .advanced { background-color: var(--accent-color); }
        .carried { background-color: var(--primary-dark); }
        
        .type-name {
            font-weight: 500;
        }
        
        /* Status Badges */
        .status-badge {
            display: inline-block;
            padding: 4px 10px;
            border-radius: 12px;
            font-size: 0.8rem;
            font-weight: 600;
            text-align: center;
            min-width: 70px;
        }
        
        .available {
            background-color: rgba(26, 82, 118, 0.08);
            color: var(--primary-color);
        }
        
        .used-badge {
            background-color: rgba(252, 65, 0, 0.08);
            color: var(--accent-color);
        }
        
        .remaining-badge {
            background-color: rgba(255, 197, 90, 0.15);
            color: #B56B00;
        }
        
        /* Footer Section */
        .card-footer {
            padding: 0 25px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.85rem;
        }
        
        .update-info {
            color: var(--dark-gray);
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .update-info i {
            color: var(--accent-color);
        }
        
        .action-buttons {
            display: flex;
            gap: 10px;
        }
        
        .btn {
            padding: 8px 16px;
            border-radius: 6px;
            font-size: 0.85rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.2s ease;
            border: none;
            display: flex;
            align-items: center;
            gap: 6px;
        }
        
        .btn-outline {
            background-color: transparent;
            border: 1px solid var(--border-color);
            color: var(--primary-color);
        }
        
        .btn-outline:hover {
            background-color: rgba(26, 82, 118, 0.05);
            border-color: var(--primary-color);
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            color: white;
        }
        
        .btn-primary:hover {
            background-color: var(--primary-dark);
        }
        
        .btn-accent {
            background-color: var(--accent-color);
            color: white;
        }
        
        .btn-accent:hover {
            background-color: #e03a00;
        }
        
        /* Global Footer */
        .page-footer {
            margin-top: 30px;
            padding: 20px;
            background-color: var(--white);
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(26, 82, 118, 0.06);
            border: 1px solid var(--border-color);
        }
        
        .footer-title {
            color: var(--primary-dark);
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .footer-title i {
            color: var(--accent-color);
        }
        
        .footer-content {
            font-size: 0.9rem;
            color: var(--dark-gray);
            line-height: 1.5;
        }
        
        .highlight {
            color: var(--accent-color);
            font-weight: 600;
        }
        
        .highlight-yellow {
            color: var(--secondary-color);
            background-color: rgba(255, 197, 90, 0.1);
            padding: 2px 6px;
            border-radius: 4px;
            font-weight: 600;
        }
        
        /* Stats Bar */
        .stats-bar {
            display: flex;
            justify-content: space-between;
            background: linear-gradient(135deg, var(--primary-dark), var(--primary-color));
            color: white;
            border-radius: 10px;
            padding: 15px 25px;
            margin-bottom: 25px;
        }
        
        .stat-item {
            text-align: center;
        }
        
        .stat-value {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 5px;
        }
        
        .stat-label {
            font-size: 0.85rem;
            opacity: 0.9;
        }
        
        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .page-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }
            
            .balance-value {
                font-size: 2rem;
            }
            
            th, td {
                padding: 12px 10px;
            }
            
            .card-footer {
                flex-direction: column;
                gap: 15px;
                align-items: flex-start;
            }
            
            .action-buttons {
                width: 100%;
                justify-content: space-between;
            }
            
            .btn {
                flex: 1;
                justify-content: center;
            }
            
            .stats-bar {
                flex-direction: column;
                gap: 15px;
            }
        }
        
        @media (max-width: 576px) {
            .balance-overview {
                flex-direction: column;
                gap: 20px;
            }
            
            .balance-value {
                font-size: 1.8rem;
            }
        }
    </style>
<body>
    <div class="container">
        <header class="page-header">
            <div class="header-content">
                <h1>Employee Leave & CTO Balance</h1>
                <div class="subtitle">
                    <span>As of December 2023</span>
                    <span class="employee-badge">
                        <i class="fas fa-user"></i>
                        John Doe | ID: EMP-2023-0456
                    </span>
                </div>
            </div>
            <div class="update-info">
                <i class="fas fa-sync-alt"></i>
                Data refreshed today at 10:30 AM
            </div>
        </header>
        
        <div class="summary-container">
            <!-- Leave Balance Summary -->
            <div class="summary-card">
                <div class="card-header summary-header">
                    <h2 class="card-title">
                        <i class="fas fa-calendar-alt"></i>
                        Leave Balance Summary
                    </h2>
                    <div class="card-icon">
                        <i class="fas fa-chart-pie"></i>
                    </div>
                </div>
                
                <div class="card-content">
                    <div class="balance-overview">
                        <div class="total-balance">
                            <div class="balance-label">Total Available</div>
                            <div class="balance-value leave-balance">18.5</div>
                            <div class="balance-unit">Days</div>
                        </div>
                        <div class="total-balance">
                            <div class="balance-label">Used This Year</div>
                            <div class="balance-value used">7.5</div>
                            <div class="balance-unit">Days</div>
                        </div>
                    </div>
                    
                    <div class="table-container">
                        <table>
                            <thead>
                                <tr>
                                    <th>Type</th>
                                    <th>Total</th>
                                    <th>Used</th>
                                    <th>Remaining</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="leave-type">
                                            <span class="type-indicator annual"></span>
                                            <span class="type-name">Annual Leave</span>
                                        </div>
                                    </td>
                                    <td>15.0</td>
                                    <td>
                                        <span class="status-badge used-badge">5.5</span>
                                    </td>
                                    <td>
                                        <span class="status-badge available">9.5</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="leave-type">
                                            <span class="type-indicator sick"></span>
                                            <span class="type-name">Sick Leave</span>
                                        </div>
                                    </td>
                                    <td>10.0</td>
                                    <td>
                                        <span class="status-badge used-badge">2.0</span>
                                    </td>
                                    <td>
                                        <span class="status-badge available">8.0</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="leave-type">
                                            <span class="type-indicator personal"></span>
                                            <span class="type-name">Personal Leave</span>
                                        </div>
                                    </td>
                                    <td>5.0</td>
                                    <td>
                                        <span class="status-badge used-badge">0.0</span>
                                    </td>
                                    <td>
                                        <span class="status-badge available">5.0</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="leave-type">
                                            <span class="type-indicator maternity"></span>
                                            <span class="type-name">Maternity Leave</span>
                                        </div>
                                    </td>
                                    <td>90.0</td>
                                    <td>
                                        <span class="status-badge used-badge">0.0</span>
                                    </td>
                                    <td>
                                        <span class="status-badge available">90.0</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="card-footer">
                        <div class="update-info">
                            <i class="far fa-clock"></i>
                            Last updated: Dec 15, 2023
                        </div>
                        <div class="action-buttons">
                            <button class="btn btn-outline">
                                <i class="fas fa-history"></i>
                                View History
                            </button>
                            <button class="btn btn-primary">
                                <i class="fas fa-plus"></i>
                                Request Leave
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- CTO Balance Summary -->
            <div class="summary-card">
                <div class="card-header summary-header">
                    <h2 class="card-title">
                        <i class="fas fa-clock"></i>
                        CTO Balance Summary
                    </h2>
                    <div class="card-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                </div>
                
                <div class="card-content">
                    <div class="balance-overview">
                        <div class="total-balance">
                            <div class="balance-label">Total Available</div>
                            <div class="balance-value cto-balance">42.5</div>
                            <div class="balance-unit">Hours</div>
                        </div>
                        <div class="total-balance">
                            <div class="balance-label">Used This Year</div>
                            <div class="balance-value used">15.0</div>
                            <div class="balance-unit">Hours</div>
                        </div>
                    </div>
                    
                    <div class="table-container">
                        <table>
                            <thead>
                                <tr>
                                    <th>Type</th>
                                    <th>Total</th>
                                    <th>Used</th>
                                    <th>Remaining</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="leave-type">
                                            <span class="type-indicator accrued"></span>
                                            <span class="type-name">Accrued CTO</span>
                                        </div>
                                    </td>
                                    <td>60.0</td>
                                    <td>
                                        <span class="status-badge used-badge">12.5</span>
                                    </td>
                                    <td>
                                        <span class="status-badge available">47.5</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="leave-type">
                                            <span class="type-indicator advanced"></span>
                                            <span class="type-name">Advanced CTO</span>
                                        </div>
                                    </td>
                                    <td>20.0</td>
                                    <td>
                                        <span class="status-badge used-badge">2.5</span>
                                    </td>
                                    <td>
                                        <span class="status-badge available">17.5</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="leave-type">
                                            <span class="type-indicator carried"></span>
                                            <span class="type-name">Carried Over</span>
                                        </div>
                                    </td>
                                    <td>15.0</td>
                                    <td>
                                        <span class="status-badge used-badge">0.0</span>
                                    </td>
                                    <td>
                                        <span class="status-badge available">15.0</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="card-footer">
                        <div class="update-info">
                            <i class="far fa-clock"></i>
                            Last updated: Dec 15, 2023
                        </div>
                        <div class="action-buttons">
                            <button class="btn btn-outline">
                                <i class="fas fa-download"></i>
                                Export Data
                            </button>
                            <button class="btn btn-accent">
                                <i class="fas fa-exchange-alt"></i>
                                Convert CTO
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <footer class="page-footer">
            <div class="footer-title">
                <i class="fas fa-info-circle"></i>
                Important Information
            </div>
            <div class="footer-content">
                <p>
                    <span class="highlight">CTO (Compensatory Time Off)</span> is calculated in hours (1 day = 8 hours). 
                    Leave balances are pro-rated based on your hire date and company policy. 
                    All balances are subject to approval and policy guidelines. 
                    <span class="highlight">Annual leave expires on December 31</span> each year unless carried over as per policy.
                </p>
                <p style="margin-top: 10px;">
                    <span class="highlight-yellow">Important:</span> CTO must be used within 6 months of accrual. 
                    For questions or discrepancies, contact HR at 
                    <span class="highlight">hr-support@company.com</span> or ext. 4455.
                </p>
            </div>
        </footer>
    </div>
</body>
</x-layout2>