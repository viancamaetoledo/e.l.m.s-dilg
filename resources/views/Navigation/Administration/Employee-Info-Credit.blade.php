<x-layout>
<link rel="stylesheet" href="/css/Administration/Employee.css">
<style>
    /* Enhanced Employee Styles */
    .employee-container {
        padding: 25px;
        background: linear-gradient(135deg, #f5f7fa 0%, #e4e8f0 100%);
        min-height: 100vh;
    }

    /* Page Header */
    .page-header {
        background: white;
        border-radius: 15px;
        padding: 25px 30px;
        margin-bottom: 30px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.08);
        border-left: 5px solid #0d4d9e;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 20px;
    }

    .page-header h1 {
        color: #2c3e50;
        font-weight: 700;
        font-size: 1.8rem;
        margin: 0;
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .page-header h1 i {
        color: #0d4d9e;
        font-size: 1.6rem;
    }

    .page-header p {
        color: #6c757d;
        margin: 8px 0 0 0;
        font-size: 1rem;
    }

    .btn-add-employee {
        background: linear-gradient(135deg, #0d4d9e, #1a6fd8);
        border: none;
        border-radius: 10px;
        padding: 12px 25px;
        font-weight: 600;
        font-size: 1rem;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        gap: 8px;
        white-space: nowrap;
    }

    .btn-add-employee:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 15px rgba(13, 77, 158, 0.3);
        background: linear-gradient(135deg, #1a6fd8, #0d4d9e);
    }

    /* Statistics Cards */
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        margin-bottom: 30px;
    }

    .stats-card {
        background: white;
        border-radius: 15px;
        padding: 25px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.08);
        transition: all 0.3s ease;
        border: 1px solid transparent;
        position: relative;
        overflow: hidden;
    }

    .stats-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.12);
        border-color: #e9ecef;
    }

    .stats-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 5px;
        height: 100%;
    }

    .stats-card:nth-child(1)::before { background: #0d4d9e; }
    .stats-card:nth-child(2)::before { background: #28a745; }
    .stats-card:nth-child(3)::before { background: #ffc107; }
    .stats-card:nth-child(4)::before { background: #dc3545; }

    .stats-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .stats-numbers {
        flex: 1;
    }

    .stats-count {
        font-size: 2.2rem;
        font-weight: 700;
        line-height: 1;
        margin-bottom: 5px;
        color: #2c3e50;
    }

    .stats-label {
        color: #6c757d;
        font-size: 0.95rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-weight: 500;
    }

    .stats-icon {
        font-size: 2.5rem;
        opacity: 0.9;
        color: inherit;
    }

    .stats-card:nth-child(1) .stats-icon { color: #0d4d9e; }
    .stats-card:nth-child(2) .stats-icon { color: #28a745; }
    .stats-card:nth-child(3) .stats-icon { color: #ffc107; }
    .stats-card:nth-child(4) .stats-icon { color: #dc3545; }

    /* Table Container */
    .table-container {
        background: white;
        border-radius: 15px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.08);
        overflow: hidden;
        margin-bottom: 30px;
    }

    .table-header {
        background: linear-gradient(90deg, #f8f9fa, #e9ecef);
        padding: 20px 25px;
        border-bottom: 2px solid #dee2e6;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 15px;
    }

    .table-title {
        font-size: 1.2rem;
        font-weight: 600;
        color: #2c3e50;
        margin: 0;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .table-title i {
        color: #0d4d9e;
    }

    .table-controls {
        display: flex;
        gap: 12px;
        align-items: center;
        flex-wrap: wrap;
    }

    .search-wrapper {
        position: relative;
        min-width: 250px;
    }

    .search-wrapper i {
        position: absolute;
        left: 15px;
        top: 50%;
        transform: translateY(-50%);
        color: #6c757d;
        z-index: 1;
    }

    .search-input {
        padding-left: 45px;
        border-radius: 10px;
        border: 2px solid #e9ecef;
        height: 42px;
        transition: all 0.3s;
        width: 100%;
    }

    .search-input:focus {
        border-color: #0d4d9e;
        box-shadow: 0 0 0 3px rgba(13, 77, 158, 0.1);
        outline: none;
    }

    .btn-control {
        border: 2px solid #dee2e6;
        background: white;
        color: #495057;
        border-radius: 10px;
        padding: 8px 16px;
        font-weight: 500;
        transition: all 0.3s;
        height: 42px;
        display: inline-flex;
        align-items: center;
        gap: 6px;
    }

    .btn-control:hover {
        background: #f8f9fa;
        border-color: #0d4d9e;
        color: #0d4d9e;
    }

    /* Table Styling */
    .employee-table {
        margin: 0;
    }

    .employee-table thead th {
        background: #f8f9fa;
        color: #495057;
        font-weight: 600;
        font-size: 0.9rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        padding: 18px 20px;
        border-bottom: 2px solid #dee2e6;
        white-space: nowrap;
    }

    .employee-table tbody td {
        padding: 18px 20px;
        vertical-align: middle;
        border-bottom: 1px solid #e9ecef;
        font-size: 0.95rem;
    }

    .employee-table tbody tr {
        transition: all 0.2s;
    }

    .employee-table tbody tr:hover {
        background-color: #f8f9fa;
        transform: scale(1.001);
        box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    }

    /* Employee Info */
    .employee-info {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .avatar-circle {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        font-size: 1rem;
        color: white;
        flex-shrink: 0;
        box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    }

    .avatar-primary { background: linear-gradient(135deg, #0d4d9e, #3498db); }
    .avatar-danger { background: linear-gradient(135deg, #e74c3c, #ff6b6b); }
    .avatar-success { background: linear-gradient(135deg, #2ecc71, #27ae60); }

    .employee-details {
        min-width: 0;
    }

    .employee-name {
        font-weight: 600;
        color: #2c3e50;
        margin-bottom: 3px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .employee-email {
        color: #6c757d;
        font-size: 0.85rem;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    /* Status Badges */
    .badge-status {
        padding: 6px 14px;
        border-radius: 20px;
        font-size: 0.85rem;
        font-weight: 600;
        letter-spacing: 0.3px;
        border: 2px solid transparent;
    }

    .badge-active {
        background: linear-gradient(135deg, #d4edda, #c3e6cb);
        color: #155724;
        border-color: #c3e6cb;
    }

    .badge-onleave {
        background: linear-gradient(135deg, #fff3cd, #ffeaa7);
        color: #856404;
        border-color: #ffeaa7;
    }

    .badge-inactive {
        background: linear-gradient(135deg, #f8d7da, #f5c6cb);
        color: #721c24;
        border-color: #f5c6cb;
    }

    /* Leave Credits Display */
    .leave-display {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .leave-badge {
        padding: 6px 16px;
        border-radius: 20px;
        font-size: 0.9rem;
        font-weight: 600;
        min-width: 70px;
        text-align: center;
        border: 2px solid transparent;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    .leave-badge-high {
        background: linear-gradient(135deg, #d4edda, #c3e6cb);
        color: #155724;
        border-color: #c3e6cb;
    }

    .leave-badge-medium {
        background: linear-gradient(135deg, #fff3cd, #ffeaa7);
        color: #856404;
        border-color: #ffeaa7;
    }

    .leave-badge-low {
        background: linear-gradient(135deg, #f8d7da, #f5c6cb);
        color: #721c24;
        border-color: #f5c6cb;
    }

    .progress-wrapper {
        flex: 1;
        min-width: 100px;
    }

    .progress-container {
        height: 10px;
        background: #e9ecef;
        border-radius: 5px;
        overflow: hidden;
        margin-bottom: 5px;
    }

    .progress-bar {
        height: 100%;
        border-radius: 5px;
        transition: width 0.5s ease;
    }

    .progress-bar-high { background: linear-gradient(90deg, #2ecc71, #27ae60); }
    .progress-bar-medium { background: linear-gradient(90deg, #f39c12, #e67e22); }
    .progress-bar-low { background: linear-gradient(90deg, #e74c3c, #c0392b); }

    .progress-text {
        font-size: 0.85rem;
        color: #6c757d;
        text-align: right;
    }

    /* Action Buttons */
    .action-buttons {
        display: flex;
        gap: 8px;
        justify-content: center;
    }

    .btn-action {
        width: 36px;
        height: 36px;
        border-radius: 10px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border: 2px solid;
        transition: all 0.3s ease;
        font-size: 0.95rem;
    }

    .btn-action:hover {
        transform: translateY(-2px) scale(1.1);
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }

    .btn-view {
        color: #0d4d9e;
        border-color: rgba(13, 77, 158, 0.2);
        background: rgba(13, 77, 158, 0.08);
    }

    .btn-view:hover {
        background: rgba(13, 77, 158, 0.15);
        border-color: #0d4d9e;
    }

    .btn-edit {
        color: #ffc107;
        border-color: rgba(255, 193, 7, 0.2);
        background: rgba(255, 193, 7, 0.08);
    }

    .btn-edit:hover {
        background: rgba(255, 193, 7, 0.15);
        border-color: #ffc107;
    }

    .btn-delete {
        color: #dc3545;
        border-color: rgba(220, 53, 69, 0.2);
        background: rgba(220, 53, 69, 0.08);
    }

    .btn-delete:hover {
        background: rgba(220, 53, 69, 0.15);
        border-color: #dc3545;
    }

    /* Charts Section */
    .charts-grid {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 30px;
        margin-bottom: 30px;
    }

    @media (max-width: 992px) {
        .charts-grid {
            grid-template-columns: 1fr;
        }
    }

    /* Leave Chart */
    .chart-container {
        background: white;
        border-radius: 15px;
        padding: 25px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.08);
    }

    .chart-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 25px;
        padding-bottom: 15px;
        border-bottom: 2px solid #f1f3f4;
    }

    .chart-header h3 {
        font-size: 1.1rem;
        font-weight: 600;
        color: #2c3e50;
        margin: 0;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .chart-header h3 i {
        color: #0d4d9e;
    }

    .chart-select {
        width: 180px;
        border-radius: 10px;
        border: 2px solid #e9ecef;
        padding: 8px 15px;
        font-size: 0.9rem;
        transition: all 0.3s;
    }

    .chart-select:focus {
        border-color: #0d4d9e;
        outline: none;
        box-shadow: 0 0 0 3px rgba(13, 77, 158, 0.1);
    }

    .chart-wrapper {
        position: relative;
        height: 300px;
        width: 100%;
    }

    /* Low Credits Alert */
    .alert-container {
        background: white;
        border-radius: 15px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.08);
        padding: 25px;
    }

    .alert-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
        padding-bottom: 15px;
        border-bottom: 2px solid #f1f3f4;
    }

    .alert-header h3 {
        font-size: 1.1rem;
        font-weight: 600;
        color: #2c3e50;
        margin: 0;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .alert-header h3 i {
        color: #dc3545;
    }

    .badge-count {
        background: linear-gradient(135deg, #dc3545, #c0392b);
        color: white;
        padding: 6px 15px;
        border-radius: 20px;
        font-weight: 600;
        font-size: 0.9rem;
        box-shadow: 0 2px 10px rgba(220, 53, 69, 0.2);
    }

    .employee-list {
        max-height: 320px;
        overflow-y: auto;
        padding-right: 10px;
    }

    .employee-list::-webkit-scrollbar {
        width: 6px;
    }

    .employee-list::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 3px;
    }

    .employee-list::-webkit-scrollbar-thumb {
        background: #ccc;
        border-radius: 3px;
    }

    .employee-list::-webkit-scrollbar-thumb:hover {
        background: #999;
    }

    .employee-item {
        padding: 15px;
        border-bottom: 1px solid #f1f3f4;
        transition: all 0.2s;
        border-radius: 10px;
        margin-bottom: 8px;
    }

    .employee-item:hover {
        background: #f8f9fa;
        transform: translateX(5px);
    }

    .employee-item:last-child {
        border-bottom: none;
        margin-bottom: 0;
    }

    .employee-item-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .employee-item-info {
        flex: 1;
    }

    .employee-item-name {
        font-weight: 600;
        color: #2c3e50;
        margin-bottom: 3px;
    }

    .employee-item-details {
        color: #6c757d;
        font-size: 0.85rem;
    }

    .employee-item-badge {
        padding: 6px 16px;
        border-radius: 20px;
        font-weight: 600;
        font-size: 0.85rem;
        min-width: 60px;
        text-align: center;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    .badge-danger { 
        background: linear-gradient(135deg, #f8d7da, #f5c6cb);
        color: #721c24;
        border: 2px solid #f5c6cb;
    }

    .badge-warning { 
        background: linear-gradient(135deg, #fff3cd, #ffeaa7);
        color: #856404;
        border: 2px solid #ffeaa7;
    }

    .view-all-link {
        display: block;
        text-align: center;
        color: #0d4d9e;
        font-weight: 500;
        text-decoration: none;
        margin-top: 20px;
        padding-top: 15px;
        border-top: 1px solid #f1f3f4;
        transition: color 0.3s;
    }

    .view-all-link:hover {
        color: #1a6fd8;
        text-decoration: underline;
    }

    /* Pagination */
    .pagination-container {
        padding: 20px 25px;
        border-top: 2px solid #f1f3f4;
        background: #f8f9fa;
        border-radius: 0 0 15px 15px;
    }

    .pagination {
        margin: 0;
        justify-content: flex-end;
    }

    .page-item .page-link {
        border: 2px solid #dee2e6;
        color: #495057;
        padding: 8px 16px;
        margin: 0 3px;
        border-radius: 10px;
        font-weight: 500;
        transition: all 0.3s;
    }

    .page-item .page-link:hover {
        background: #0d4d9e;
        border-color: #0d4d9e;
        color: white;
    }

    .page-item.active .page-link {
        background: linear-gradient(135deg, #0d4d9e, #1a6fd8);
        border-color: #0d4d9e;
        color: white;
        box-shadow: 0 2px 8px rgba(13, 77, 158, 0.3);
    }

    /* Modal Enhancements */
    .modal-header {
        background: linear-gradient(90deg, #f8f9fa, #e9ecef);
        border-bottom: 2px solid #dee2e6;
        padding: 20px 25px;
    }

    .modal-title {
        color: #2c3e50;
        font-weight: 600;
    }

    .modal-body {
        padding: 25px;
    }

    .form-label {
        font-weight: 600;
        color: #495057;
        margin-bottom: 8px;
    }

    .form-control, .form-select {
        border: 2px solid #e9ecef;
        border-radius: 10px;
        padding: 10px 15px;
        transition: all 0.3s;
    }

    .form-control:focus, .form-select:focus {
        border-color: #0d4d9e;
        box-shadow: 0 0 0 3px rgba(13, 77, 158, 0.1);
        outline: none;
    }

    /* Responsive Design */
    @media (max-width: 1200px) {
        .employee-container {
            padding: 20px;
        }
        
        .page-header {
            padding: 20px;
        }
        
        .stats-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 768px) {
        .employee-container {
            padding: 15px;
        }
        
        .page-header {
            flex-direction: column;
            align-items: flex-start;
            padding: 20px;
        }
        
        .btn-add-employee {
            width: 100%;
            justify-content: center;
        }
        
        .stats-grid {
            grid-template-columns: 1fr;
        }
        
        .table-header {
            flex-direction: column;
            align-items: stretch;
            gap: 15px;
            padding: 20px;
        }
        
        .table-controls {
            width: 100%;
            flex-direction: column;
        }
        
        .search-wrapper {
            width: 100%;
            min-width: auto;
        }
        
        .employee-info {
            flex-direction: column;
            align-items: flex-start;
            gap: 10px;
        }
        
        .leave-display {
            flex-direction: column;
            align-items: flex-start;
            gap: 10px;
        }
        
        .progress-wrapper {
            width: 100%;
        }
        
        .action-buttons {
            justify-content: flex-start;
        }
        
        .charts-grid {
            gap: 20px;
        }
    }

    @media (max-width: 480px) {
        .page-header h1 {
            font-size: 1.5rem;
        }
        
        .stats-count {
            font-size: 1.8rem;
        }
        
        .table-title {
            font-size: 1.1rem;
        }
    }
</style>

<body>
<div class="container-fluid employee-container">
    <!-- Page Header -->
    <div class="page-header">
        <div>
            <h1>
                <i class="fas fa-users"></i>Employee Management
            </h1>
            <p>Manage employee information, leave credits, and employment records</p>
        </div>
        <button class="btn btn-add-employee" data-bs-toggle="modal" data-bs-target="#addEmployeeModal">
            <i class="fas fa-user-plus"></i>Add New Employee
        </button>
    </div>

    <!-- Statistics Cards -->
    <div class="stats-grid">
        <div class="stats-card">
            <div class="stats-content">
                <div class="stats-numbers">
                    <div class="stats-count">156</div>
                    <div class="stats-label">Total Employees</div>
                </div>
                <i class="fas fa-users stats-icon"></i>
            </div>
        </div>
        
        <div class="stats-card">
            <div class="stats-content">
                <div class="stats-numbers">
                    <div class="stats-count">142</div>
                    <div class="stats-label">Active Employees</div>
                </div>
                <i class="fas fa-user-check stats-icon"></i>
            </div>
        </div>
        
        <div class="stats-card">
            <div class="stats-content">
                <div class="stats-numbers">
                    <div class="stats-count">8</div>
                    <div class="stats-label">On Leave Today</div>
                </div>
                <i class="fas fa-umbrella-beach stats-icon"></i>
            </div>
        </div>
        
        <div class="stats-card">
            <div class="stats-content">
                <div class="stats-numbers">
                    <div class="stats-count">12</div>
                    <div class="stats-label">Low Leave Credits</div>
                </div>
                <i class="fas fa-exclamation-triangle stats-icon"></i>
            </div>
        </div>
    </div>

    <!-- Employee List Table -->
    <div class="table-container">
        <div class="table-header">
            <h3 class="table-title">
                <i class="fas fa-list"></i>Employee Directory
            </h3>
            <div class="table-controls">
                <div class="search-wrapper">
                    <i class="fas fa-search"></i>
                    <input type="text" class="search-input" placeholder="Search employees..." id="searchEmployee">
                </div>
                <button class="btn-control" id="filterBtn">
                    <i class="fas fa-filter"></i> Filter
                </button>
                <button class="btn-control" id="exportBtn">
                    <i class="fas fa-download"></i> Export
                </button>
            </div>
        </div>
        
        <div class="table-responsive">
            <table class="table employee-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Employee</th>
                        <th>Position</th>
                        <th>Department</th>
                        <th>Status</th>
                        <th>Leave Credits</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Sample Data - Row 1 -->
                    <tr>
                        <td>EMP-001</td>
                        <td>
                            <div class="employee-info">
                                <div class="avatar-circle avatar-primary">JD</div>
                                <div class="employee-details">
                                    <div class="employee-name">Juan Dela Cruz</div>
                                    <div class="employee-email">juandelacruz@dilg.gov.ph</div>
                                </div>
                            </div>
                        </td>
                        <td>Administrative Officer III</td>
                        <td>Human Resources</td>
                        <td>
                            <span class="badge-status badge-active">Active</span>
                        </td>
                        <td>
                            <div class="leave-display">
                                <span class="leave-badge leave-badge-high">15 days</span>
                                <div class="progress-wrapper">
                                    <div class="progress-container">
                                        <div class="progress-bar progress-bar-high" style="width: 75%"></div>
                                    </div>
                                    <div class="progress-text">75% remaining</div>
                                </div>
                                <button class="btn-action btn-edit manage-leave-btn" 
                                        data-bs-toggle="modal" 
                                        data-bs-target="#manageLeaveModal"
                                        data-employee-id="1"
                                        title="Manage Leave">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </div>
                        </td>
                        <td>
                            <div class="action-buttons">
                                <button class="btn-action btn-view view-employee-btn" 
                                        data-bs-toggle="modal" 
                                        data-bs-target="#viewEmployeeModal"
                                        data-employee-id="1"
                                        title="View Details">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="btn-action btn-edit edit-employee-btn"
                                        data-bs-toggle="modal"
                                        data-bs-target="#editEmployeeModal"
                                        data-employee-id="1"
                                        title="Edit">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="btn-action btn-delete delete-employee-btn" 
                                        title="Delete"
                                        data-employee-id="1">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    
                    <!-- Row 2 -->
                    <tr>
                        <td>EMP-002</td>
                        <td>
                            <div class="employee-info">
                                <div class="avatar-circle avatar-danger">MS</div>
                                <div class="employee-details">
                                    <div class="employee-name">Maria Santos</div>
                                    <div class="employee-email">mariasantos@dilg.gov.ph</div>
                                </div>
                            </div>
                        </td>
                        <td>Finance Officer II</td>
                        <td>Finance</td>
                        <td>
                            <span class="badge-status badge-active">Active</span>
                        </td>
                        <td>
                            <div class="leave-display">
                                <span class="leave-badge leave-badge-medium">8 days</span>
                                <div class="progress-wrapper">
                                    <div class="progress-container">
                                        <div class="progress-bar progress-bar-medium" style="width: 40%"></div>
                                    </div>
                                    <div class="progress-text">40% remaining</div>
                                </div>
                                <button class="btn-action btn-edit manage-leave-btn" 
                                        data-bs-toggle="modal" 
                                        data-bs-target="#manageLeaveModal"
                                        data-employee-id="2"
                                        title="Manage Leave">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </div>
                        </td>
                        <td>
                            <div class="action-buttons">
                                <button class="btn-action btn-view view-employee-btn" 
                                        data-bs-toggle="modal" 
                                        data-bs-target="#viewEmployeeModal"
                                        data-employee-id="2"
                                        title="View Details">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="btn-action btn-edit edit-employee-btn"
                                        data-bs-toggle="modal"
                                        data-bs-target="#editEmployeeModal"
                                        data-employee-id="2"
                                        title="Edit">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="btn-action btn-delete delete-employee-btn" 
                                        title="Delete"
                                        data-employee-id="2">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    
                    <!-- Row 3 -->
                    <tr>
                        <td>EMP-003</td>
                        <td>
                            <div class="employee-info">
                                <div class="avatar-circle avatar-success">AR</div>
                                <div class="employee-details">
                                    <div class="employee-name">Antonio Reyes</div>
                                    <div class="employee-email">antonioreyes@dilg.gov.ph</div>
                                </div>
                            </div>
                        </td>
                        <td>IT Specialist I</td>
                        <td>ICT Division</td>
                        <td>
                            <span class="badge-status badge-onleave">On Leave</span>
                        </td>
                        <td>
                            <div class="leave-display">
                                <span class="leave-badge leave-badge-low">3 days</span>
                                <div class="progress-wrapper">
                                    <div class="progress-container">
                                        <div class="progress-bar progress-bar-low" style="width: 15%"></div>
                                    </div>
                                    <div class="progress-text">15% remaining</div>
                                </div>
                                <button class="btn-action btn-edit manage-leave-btn" 
                                        data-bs-toggle="modal" 
                                        data-bs-target="#manageLeaveModal"
                                        data-employee-id="3"
                                        title="Manage Leave">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </div>
                        </td>
                        <td>
                            <div class="action-buttons">
                                <button class="btn-action btn-view view-employee-btn" 
                                        data-bs-toggle="modal" 
                                        data-bs-target="#viewEmployeeModal"
                                        data-employee-id="3"
                                        title="View Details">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="btn-action btn-edit edit-employee-btn"
                                        data-bs-toggle="modal"
                                        data-bs-target="#editEmployeeModal"
                                        data-employee-id="3"
                                        title="Edit">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="btn-action btn-delete delete-employee-btn" 
                                        title="Delete"
                                        data-employee-id="3">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    
                    <!-- Additional sample rows -->
                    <tr>
                        <td>EMP-004</td>
                        <td>
                            <div class="employee-info">
                                <div class="avatar-circle avatar-primary">CT</div>
                                <div class="employee-details">
                                    <div class="employee-name">Cynthia Tan</div>
                                    <div class="employee-email">cynthiatan@dilg.gov.ph</div>
                                </div>
                            </div>
                        </td>
                        <td>Legal Officer II</td>
                        <td>Legal Division</td>
                        <td>
                            <span class="badge-status badge-active">Active</span>
                        </td>
                        <td>
                            <div class="leave-display">
                                <span class="leave-badge leave-badge-high">18 days</span>
                                <div class="progress-wrapper">
                                    <div class="progress-container">
                                        <div class="progress-bar progress-bar-high" style="width: 90%"></div>
                                    </div>
                                    <div class="progress-text">90% remaining</div>
                                </div>
                                <button class="btn-action btn-edit manage-leave-btn" 
                                        data-bs-toggle="modal" 
                                        data-bs-target="#manageLeaveModal"
                                        data-employee-id="4"
                                        title="Manage Leave">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </div>
                        </td>
                        <td>
                            <div class="action-buttons">
                                <button class="btn-action btn-view view-employee-btn" 
                                        data-bs-toggle="modal" 
                                        data-bs-target="#viewEmployeeModal"
                                        data-employee-id="4"
                                        title="View Details">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="btn-action btn-edit edit-employee-btn"
                                        data-bs-toggle="modal"
                                        data-bs-target="#editEmployeeModal"
                                        data-employee-id="4"
                                        title="Edit">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="btn-action btn-delete delete-employee-btn" 
                                        title="Delete"
                                        data-employee-id="4">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>EMP-005</td>
                        <td>
                            <div class="employee-info">
                                <div class="avatar-circle avatar-success">RG</div>
                                <div class="employee-details">
                                    <div class="employee-name">Roberto Garcia</div>
                                    <div class="employee-email">robertogarcia@dilg.gov.ph</div>
                                </div>
                            </div>
                        </td>
                        <td>Engineer III</td>
                        <td>Operations</td>
                        <td>
                            <span class="badge-status badge-inactive">Inactive</span>
                        </td>
                        <td>
                            <div class="leave-display">
                                <span class="leave-badge leave-badge-low">2 days</span>
                                <div class="progress-wrapper">
                                    <div class="progress-container">
                                        <div class="progress-bar progress-bar-low" style="width: 10%"></div>
                                    </div>
                                    <div class="progress-text">10% remaining</div>
                                </div>
                                <button class="btn-action btn-edit manage-leave-btn" 
                                        data-bs-toggle="modal" 
                                        data-bs-target="#manageLeaveModal"
                                        data-employee-id="5"
                                        title="Manage Leave">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </div>
                        </td>
                        <td>
                            <div class="action-buttons">
                                <button class="btn-action btn-view view-employee-btn" 
                                        data-bs-toggle="modal" 
                                        data-bs-target="#viewEmployeeModal"
                                        data-employee-id="5"
                                        title="View Details">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="btn-action btn-edit edit-employee-btn"
                                        data-bs-toggle="modal"
                                        data-bs-target="#editEmployeeModal"
                                        data-employee-id="5"
                                        title="Edit">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="btn-action btn-delete delete-employee-btn" 
                                        title="Delete"
                                        data-employee-id="5">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <!-- Pagination -->
        <div class="pagination-container">
            <nav aria-label="Employee navigation">
                <ul class="pagination mb-0">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" aria-label="Previous">
                            <i class="fas fa-chevron-left"></i>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <!-- Charts and Additional Info -->
    <div class="charts-grid">
        <!-- Leave Credit Chart -->
        <div class="chart-container">
            <div class="chart-header">
                <h3>
                    <i class="fas fa-chart-bar"></i>Leave Credit Usage
                </h3>
                <select class="chart-select" id="chartPeriod">
                    <option>Last 12 Months</option>
                    <option>Last 6 Months</option>
                    <option>Current Year</option>
                    <option>Last Quarter</option>
                </select>
            </div>
            <div class="chart-wrapper">
                <canvas id="leaveCreditChart"></canvas>
            </div>
        </div>
        
        <!-- Low Credits Alert -->
        <div class="alert-container">
            <div class="alert-header">
                <h3>
                    <i class="fas fa-exclamation-triangle"></i>Low Leave Credits Alert
                </h3>
                <span class="badge-count">12 Employees</span>
            </div>
            
            <div class="employee-list">
                <div class="employee-item">
                    <div class="employee-item-content">
                        <div class="employee-item-info">
                            <div class="employee-item-name">Antonio Reyes</div>
                            <div class="employee-item-details">IT Specialist I • ICT Division</div>
                        </div>
                        <span class="employee-item-badge badge-danger">3 days</span>
                    </div>
                </div>
                
                <div class="employee-item">
                    <div class="employee-item-content">
                        <div class="employee-item-info">
                            <div class="employee-item-name">Cynthia Mendoza</div>
                            <div class="employee-item-details">Admin Assistant II • HR</div>
                        </div>
                        <span class="employee-item-badge badge-danger">4 days</span>
                    </div>
                </div>
                
                <div class="employee-item">
                    <div class="employee-item-content">
                        <div class="employee-item-info">
                            <div class="employee-item-name">Roberto Garcia</div>
                            <div class="employee-item-details">Engineer III • Operations</div>
                        </div>
                        <span class="employee-item-badge badge-danger">2 days</span>
                    </div>
                </div>
                
                <div class="employee-item">
                    <div class="employee-item-content">
                        <div class="employee-item-info">
                            <div class="employee-item-name">Elizabeth Tan</div>
                            <div class="employee-item-details">Legal Officer I • Legal</div>
                        </div>
                        <span class="employee-item-badge badge-warning">5 days</span>
                    </div>
                </div>
                
                <div class="employee-item">
                    <div class="employee-item-content">
                        <div class="employee-item-info">
                            <div class="employee-item-name">Michael Cruz</div>
                            <div class="employee-item-details">Finance Officer I • Finance</div>
                        </div>
                        <span class="employee-item-badge badge-warning">6 days</span>
                    </div>
                </div>
            </div>
            
            <a href="#" class="view-all-link">
                View All Employees with Low Credits <i class="fas fa-arrow-right ms-2"></i>
            </a>
        </div>
    </div>
</div>

<!-- Modals -->
<!-- View Employee Modal -->
<div class="modal fade" id="viewEmployeeModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Employee Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Content loaded via JavaScript -->
            </div>
        </div>
    </div>
</div>

<!-- Manage Leave Credits Modal -->
<div class="modal fade" id="manageLeaveModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Manage Leave Credits</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="manageLeaveForm">
                    <div class="mb-3">
                        <label class="form-label">Employee</label>
                        <input type="text" class="form-control" value="Juan Dela Cruz" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Current Leave Credits</label>
                        <div class="input-group">
                            <input type="text" class="form-control" value="15 days" readonly>
                            <span class="input-group-text">days</span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Action</label>
                        <select class="form-select" id="leaveAction" required>
                            <option value="">Select Action</option>
                            <option value="add">Add Leave Credits</option>
                            <option value="deduct">Deduct Leave Credits</option>
                            <option value="set">Set New Value</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Amount (in days)</label>
                        <div class="input-group">
                            <input type="number" class="form-control" id="leaveAmount" min="0.5" max="30" step="0.5" required>
                            <span class="input-group-text">days</span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Remarks</label>
                        <textarea class="form-control" rows="3" placeholder="Reason for adjustment..."></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" form="manageLeaveForm" class="btn btn-primary">Update Credits</button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize chart with better styling
        const ctx = document.getElementById('leaveCreditChart').getContext('2d');
        const leaveChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets: [{
                    label: 'Leave Credits Used',
                    data: [12, 19, 8, 15, 12, 17, 14, 16, 10, 13, 9, 11],
                    backgroundColor: 'rgba(52, 152, 219, 0.2)',
                    borderColor: 'rgba(52, 152, 219, 1)',
                    borderWidth: 2,
                    borderRadius: 5,
                    borderSkipped: false,
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { 
                        display: false 
                    },
                    tooltip: {
                        backgroundColor: 'rgba(0, 0, 0, 0.8)',
                        titleFont: { size: 14 },
                        bodyFont: { size: 13 },
                        padding: 12,
                        cornerRadius: 6
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: 'rgba(0, 0, 0, 0.05)'
                        },
                        ticks: {
                            font: { size: 12 }
                        },
                        title: {
                            display: true,
                            text: 'Days Used',
                            font: { size: 14, weight: 'bold' }
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        },
                        ticks: {
                            font: { size: 12 }
                        }
                    }
                }
            }
        });
        
        // Search functionality
        const searchInput = document.getElementById('searchEmployee');
        searchInput.addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase().trim();
            const rows = document.querySelectorAll('.employee-table tbody tr');
            let visibleCount = 0;
            
            rows.forEach(row => {
                const text = row.textContent.toLowerCase();
                if (text.includes(searchTerm)) {
                    row.style.display = '';
                    visibleCount++;
                    // Add highlight animation
                    row.classList.add('highlight-search');
                    setTimeout(() => {
                        row.classList.remove('highlight-search');
                    }, 1000);
                } else {
                    row.style.display = 'none';
                }
            });
            
            // Show message if no results
            const tableBody = document.querySelector('.employee-table tbody');
            let noResults = tableBody.querySelector('.no-results');
            
            if (visibleCount === 0 && searchTerm !== '') {
                if (!noResults) {
                    noResults = document.createElement('tr');
                    noResults.className = 'no-results text-center';
                    noResults.innerHTML = `
                        <td colspan="7">
                            <div class="py-5">
                                <i class="fas fa-search fa-2x text-muted mb-3"></i>
                                <h5 class="text-muted">No employees found</h5>
                                <p class="text-muted mb-0">Try different search terms</p>
                            </div>
                        </td>
                    `;
                    tableBody.appendChild(noResults);
                }
                noResults.style.display = '';
            } else if (noResults) {
                noResults.style.display = 'none';
            }
        });
        
        // Filter button functionality
        document.getElementById('filterBtn').addEventListener('click', function() {
            // In a real app, this would open a filter modal
            alert('Filter functionality would open here. This could include filters by department, status, etc.');
        });
        
        // Export button functionality
        document.getElementById('exportBtn').addEventListener('click', function() {
            // In a real app, this would trigger export
            alert('Export functionality would trigger here. Data could be exported as CSV or Excel.');
        });
        
        // Delete employee functionality
        document.querySelectorAll('.delete-employee-btn').forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                const employeeId = this.getAttribute('data-employee-id');
                const employeeName = this.closest('tr').querySelector('.employee-name').textContent;
                
                if (confirm(`Are you sure you want to delete employee "${employeeName}"? This action cannot be undone.`)) {
                    // In a real app, this would send a delete request to the server
                    this.closest('tr').style.opacity = '0.5';
                    setTimeout(() => {
                        this.closest('tr').remove();
                        showToast('Employee deleted successfully', 'success');
                        updateStats(); // Update stats after deletion
                    }, 500);
                }
            });
        });
        
        // Chart period change
        document.getElementById('chartPeriod').addEventListener('change', function() {
            // In a real app, this would fetch new chart data
            const period = this.value;
            showToast(`Chart updated to show: ${period}`, 'info');
        });
        
        // Manage leave modal - dynamic data loading
        document.querySelectorAll('.manage-leave-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const employeeId = this.getAttribute('data-employee-id');
                const row = this.closest('tr');
                const employeeName = row.querySelector('.employee-name').textContent;
                const leaveCredits = row.querySelector('.leave-badge').textContent;
                
                // Update modal with employee data
                const modal = document.querySelector('#manageLeaveModal');
                modal.querySelector('input[type="text"]').value = employeeName;
                modal.querySelector('input[readonly]').value = leaveCredits;
                
                // Reset form
                modal.querySelector('#leaveAction').value = '';
                modal.querySelector('#leaveAmount').value = '';
                modal.querySelector('textarea').value = '';
            });
        });
        
        // Helper functions
        function showToast(message, type = 'info') {
            // Create toast element
            const toast = document.createElement('div');
            toast.className = `toast-notification toast-${type}`;
            toast.innerHTML = `
                <div class="toast-content">
                    <i class="fas fa-${type === 'success' ? 'check-circle' : type === 'error' ? 'exclamation-circle' : 'info-circle'} me-2"></i>
                    ${message}
                </div>
            `;
            
            // Add to container
            const container = document.querySelector('.employee-container');
            container.appendChild(toast);
            
            // Remove after 3 seconds
            setTimeout(() => {
                toast.remove();
            }, 3000);
        }
        
        function updateStats() {
            // In a real app, this would update statistics
            const totalRows = document.querySelectorAll('.employee-table tbody tr:not(.no-results)').length;
            document.querySelector('.stats-count:first-child').textContent = totalRows;
        }
        
        // Add CSS for highlight animation
        const style = document.createElement('style');
        style.textContent = `
            .highlight-search {
                animation: highlight-fade 1s ease;
            }
            
            @keyframes highlight-fade {
                0% { background-color: rgba(255, 235, 59, 0.3); }
                100% { background-color: transparent; }
            }
            
            .toast-notification {
                position: fixed;
                bottom: 20px;
                right: 20px;
                background: white;
                padding: 15px 20px;
                border-radius: 10px;
                box-shadow: 0 5px 20px rgba(0,0,0,0.15);
                border-left: 4px solid;
                z-index: 9999;
                animation: slide-in 0.3s ease;
            }
            
            .toast-success {
                border-left-color: #28a745;
            }
            
            .toast-error {
                border-left-color: #dc3545;
            }
            
            .toast-info {
                border-left-color: #17a2b8;
            }
            
            .toast-content {
                display: flex;
                align-items: center;
                font-weight: 500;
            }
            
            @keyframes slide-in {
                from {
                    transform: translateX(100%);
                    opacity: 0;
                }
                to {
                    transform: translateX(0);
                    opacity: 1;
                }
            }
        `;
        document.head.appendChild(style);
    });
</script>
</body>
</x-layout>