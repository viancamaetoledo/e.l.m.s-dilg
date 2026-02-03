<x-layout>
<link rel="stylesheet" href="/css/Administration/Employee.css">
<style>
    /* Enhanced Employee Styles - Simplified for tabs */
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

    /* Tab Navigation */
    .tab-nav {
        background: white;
        border-radius: 15px;
        padding: 0;
        margin-bottom: 30px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.08);
        overflow: hidden;
    }

    .tab-list {
        display: flex;
        margin: 0;
        padding: 0;
        list-style: none;
        border-bottom: 2px solid #f1f3f4;
    }

    .tab-item {
        flex: 1;
        text-align: center;
    }

    .tab-link {
        display: block;
        padding: 20px 30px;
        color: #6c757d;
        text-decoration: none;
        font-weight: 600;
        font-size: 1rem;
        border-bottom: 3px solid transparent;
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .tab-link:hover {
        color: #0d4d9e;
        background-color: #f8f9fa;
    }

    .tab-link.active {
        color: #0d4d9e;
        border-bottom: 3px solid #0d4d9e;
        background-color: #f8f9fa;
    }

    .tab-content {
        display: none;
        animation: fadeIn 0.3s ease;
    }

    .tab-content.active {
        display: block;
    }

    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    /* Table Container - Common for both tabs */
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
        width: 100%;
        border-collapse: collapse;
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
        text-align: left;
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

    /* Leave Credits Display - For Credits Tab */
    .leave-credits-display {
        display: flex;
        align-items: center;
        gap: 20px;
    }

    .credit-type {
        min-width: 120px;
        font-weight: 600;
        color: #2c3e50;
        font-size: 0.9rem;
    }

    .credit-details {
        display: flex;
        align-items: center;
        gap: 15px;
        flex: 1;
    }

    .credit-badge {
        padding: 8px 16px;
        border-radius: 20px;
        font-size: 0.85rem;
        font-weight: 600;
        min-width: 70px;
        text-align: center;
        border: 2px solid transparent;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    .credit-badge-available {
        background: linear-gradient(135deg, #d4edda, #c3e6cb);
        color: #155724;
        border-color: #c3e6cb;
    }

    .progress-wrapper {
        flex: 1;
        min-width: 120px;
    }

    .progress-container {
        height: 10px;
        background: #e9ecef;
        border-radius: 6px;
        overflow: hidden;
        margin-bottom: 5px;
    }

    .progress-bar {
        height: 100%;
        border-radius: 6px;
        transition: width 0.5s ease;
    }

    .progress-bar-available { background: linear-gradient(90deg, #2ecc71, #27ae60); }

    .progress-text {
        display: flex;
        justify-content: space-between;
        font-size: 0.8rem;
        color: #6c757d;
    }

    /* Action Buttons */
    .action-buttons {
        display: flex;
        gap: 8px;
        justify-content: flex-start;
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
        font-size: 0.9rem;
        cursor: pointer;
        background: white;
    }

    .btn-action:hover {
        transform: translateY(-2px) scale(1.05);
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

    /* Pagination - Fixed Styles */
    .pagination-container {
        padding: 20px 25px;
        border-top: 2px solid #f1f3f4;
        background: #f8f9fa;
        border-radius: 0 0 15px 15px;
    }

    .pagination {
        display: flex;
        padding-left: 0;
        list-style: none;
        margin: 0;
        justify-content: flex-end;
    }

    .page-item {
        margin: 0 3px;
    }

    .page-item .page-link {
        position: relative;
        display: block;
        color: #495057;
        text-decoration: none;
        background-color: white;
        border: 2px solid #dee2e6;
        border-radius: 10px;
        padding: 8px 16px;
        font-weight: 500;
        transition: all 0.3s;
        min-width: 42px;
        text-align: center;
    }

    .page-item .page-link:hover {
        background: #0d4d9e;
        border-color: #0d4d9e;
        color: white;
        text-decoration: none;
    }

    .page-item.active .page-link {
        background: linear-gradient(135deg, #0d4d9e, #1a6fd8);
        border-color: #0d4d9e;
        color: white;
        box-shadow: 0 2px 8px rgba(13, 77, 158, 0.3);
    }

    .page-item.disabled .page-link {
        color: #6c757d;
        background-color: #f8f9fa;
        border-color: #dee2e6;
        cursor: not-allowed;
        opacity: 0.6;
    }

    /* Responsive Design */
    @media (max-width: 1200px) {
        .employee-container {
            padding: 20px;
        }
        
        .page-header {
            padding: 20px;
        }
    }

    @media (max-width: 992px) {
        .leave-credits-display {
            flex-direction: column;
            align-items: flex-start;
            gap: 10px;
        }
        
        .credit-details {
            flex-direction: column;
            width: 100%;
            gap: 10px;
        }
        
        .progress-wrapper {
            width: 100%;
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
        
        .tab-list {
            flex-direction: column;
        }
        
        .tab-link {
            padding: 15px 20px;
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
        
        .action-buttons {
            justify-content: center;
        }
        
        .pagination {
            justify-content: center;
            flex-wrap: wrap;
        }
    }

    @media (max-width: 480px) {
        .page-header h1 {
            font-size: 1.5rem;
        }
        
        .table-title {
            font-size: 1.1rem;
        }
        
        .credit-type {
            min-width: 100px;
            font-size: 0.85rem;
        }
        
        .pagination .page-link {
            padding: 6px 12px;
            min-width: 36px;
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
            <p>Manage employee information and leave credits</p>
        </div>
        <button class="btn btn-add-employee" data-bs-toggle="modal" data-bs-target="#addEmployeeModal">
            <i class="fas fa-user-plus"></i>Add New Employee
        </button>
    </div>

    <!-- Tab Navigation -->
    <div class="tab-nav">
        <ul class="tab-list">
            <li class="tab-item">
                <a class="tab-link active" data-tab="info-tab">
                    <i class="fas fa-user-tie me-2"></i>Employee Information
                </a>
            </li>
            <li class="tab-item">
                <a class="tab-link" data-tab="credits-tab">
                    <i class="fas fa-calendar-alt me-2"></i>Employee Credits
                </a>
            </li>
        </ul>
    </div>

    <!-- Employee Information Tab -->
    <div id="info-tab" class="tab-content active">
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
                            <th>Hire Date</th>
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
                            <td>2020-03-15</td>
                            <td>
                                <div class="action-buttons">
                                    <button class="btn-action btn-view view-employee-btn" 
                                            data-employee-id="1"
                                            title="View Details">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn-action btn-edit edit-employee-btn"
                                            data-employee-id="1"
                                            title="Edit">
                                        <i class="fas fa-edit"></i>
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
                            <td>2019-07-22</td>
                            <td>
                                <div class="action-buttons">
                                    <button class="btn-action btn-view view-employee-btn" 
                                            data-employee-id="2"
                                            title="View Details">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn-action btn-edit edit-employee-btn"
                                            data-employee-id="2"
                                            title="Edit">
                                        <i class="fas fa-edit"></i>
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
                            <td>2021-01-10</td>
                            <td>
                                <div class="action-buttons">
                                    <button class="btn-action btn-view view-employee-btn" 
                                            data-employee-id="3"
                                            title="View Details">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn-action btn-edit edit-employee-btn"
                                            data-employee-id="3"
                                            title="Edit">
                                        <i class="fas fa-edit"></i>
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
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <!-- Employee Credits Tab -->
    <div id="credits-tab" class="tab-content">
        <div class="table-container">
            <div class="table-header">
                <h3 class="table-title">
                    <i class="fas fa-calendar-check"></i>Leave Credits Management
                </h3>
                <div class="table-controls">
                    <div class="search-wrapper">
                        <i class="fas fa-search"></i>
                        <input type="text" class="search-input" placeholder="Search employees..." id="searchCredits">
                    </div>
                    <button class="btn-control" id="refreshBtn">
                        <i class="fas fa-sync-alt"></i> Refresh
                    </button>
                    <button class="btn-control" id="bulkAdjustBtn">
                        <i class="fas fa-sliders-h"></i> Bulk Adjust
                    </button>
                </div>
            </div>
            
            <div class="table-responsive">
                <table class="table employee-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Employee</th>
                            <th>VL Credits</th>
                            <th>SL Credits</th>
                            <th>Last Updated</th>
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
                                        <div class="employee-email">HR Department</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="leave-credits-display">
                                    <div class="credit-type">Available:</div>
                                    <div class="credit-details">
                                        <span class="credit-badge credit-badge-available">15 days</span>
                                        <div class="progress-wrapper">
                                            <div class="progress-container">
                                                <div class="progress-bar progress-bar-available" style="width: 75%"></div>
                                            </div>
                                            <div class="progress-text">
                                                <span>Used: 5/20</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="leave-credits-display">
                                    <div class="credit-type">Available:</div>
                                    <div class="credit-details">
                                        <span class="credit-badge credit-badge-available">10 days</span>
                                        <div class="progress-wrapper">
                                            <div class="progress-container">
                                                <div class="progress-bar progress-bar-available" style="width: 50%"></div>
                                            </div>
                                            <div class="progress-text">
                                                <span>Used: 10/20</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>2024-01-15</td>
                            <td>
                                <div class="action-buttons">
                                    <button class="btn-action btn-view view-credits-btn" 
                                            data-employee-id="1"
                                            title="View Credits">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn-action btn-edit edit-credits-btn"
                                            data-employee-id="1"
                                            title="Edit Credits">
                                        <i class="fas fa-edit"></i>
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
                                        <div class="employee-email">Finance Department</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="leave-credits-display">
                                    <div class="credit-type">Available:</div>
                                    <div class="credit-details">
                                        <span class="credit-badge credit-badge-available">8 days</span>
                                        <div class="progress-wrapper">
                                            <div class="progress-container">
                                                <div class="progress-bar progress-bar-available" style="width: 40%"></div>
                                            </div>
                                            <div class="progress-text">
                                                <span>Used: 12/20</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="leave-credits-display">
                                    <div class="credit-type">Available:</div>
                                    <div class="credit-details">
                                        <span class="credit-badge credit-badge-available">5 days</span>
                                        <div class="progress-wrapper">
                                            <div class="progress-container">
                                                <div class="progress-bar progress-bar-available" style="width: 25%"></div>
                                            </div>
                                            <div class="progress-text">
                                                <span>Used: 5/20</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>2024-01-10</td>
                            <td>
                                <div class="action-buttons">
                                    <button class="btn-action btn-view view-credits-btn" 
                                            data-employee-id="2"
                                            title="View Credits">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn-action btn-edit edit-credits-btn"
                                            data-employee-id="2"
                                            title="Edit Credits">
                                        <i class="fas fa-edit"></i>
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
                                        <div class="employee-email">ICT Division</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="leave-credits-display">
                                    <div class="credit-type">Available:</div>
                                    <div class="credit-details">
                                        <span class="credit-badge credit-badge-available">3 days</span>
                                        <div class="progress-wrapper">
                                            <div class="progress-container">
                                                <div class="progress-bar progress-bar-available" style="width: 15%"></div>
                                            </div>
                                            <div class="progress-text">
                                                <span>Used: 17/20</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="leave-credits-display">
                                    <div class="credit-type">Available:</div>
                                    <div class="credit-details">
                                        <span class="credit-badge credit-badge-available">2 days</span>
                                        <div class="progress-wrapper">
                                            <div class="progress-container">
                                                <div class="progress-bar progress-bar-available" style="width: 10%"></div>
                                            </div>
                                            <div class="progress-text">
                                                <span>Used: 2/20</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>2024-01-05</td>
                            <td>
                                <div class="action-buttons">
                                    <a href="{{ route('admin.show-employee-leave-cards') }}" 
                                    class="btn-action btn-view" 
                                    title="View Credits">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <button class="btn-action btn-edit edit-credits-btn"
                                            data-employee-id="3"
                                            title="Edit Credits">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <!-- Pagination -->
            <div class="pagination-container">
                <nav aria-label="Credits navigation">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Tab switching functionality
        const tabLinks = document.querySelectorAll('.tab-link');
        const tabContents = document.querySelectorAll('.tab-content');
        
        tabLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const tabId = this.getAttribute('data-tab');
                
                // Remove active class from all tabs
                tabLinks.forEach(l => l.classList.remove('active'));
                tabContents.forEach(c => c.classList.remove('active'));
                
                // Add active class to clicked tab
                this.classList.add('active');
                document.getElementById(tabId).classList.add('active');
            });
        });
        
        // Search functionality for Employee Information tab
        const searchInput = document.getElementById('searchEmployee');
        if (searchInput) {
            searchInput.addEventListener('input', function(e) {
                const searchTerm = e.target.value.toLowerCase().trim();
                const rows = document.querySelectorAll('#info-tab .employee-table tbody tr');
                filterTable(rows, searchTerm, '#info-tab .employee-table tbody', 7);
            });
        }
        
        // Search functionality for Employee Credits tab
        const searchCreditsInput = document.getElementById('searchCredits');
        if (searchCreditsInput) {
            searchCreditsInput.addEventListener('input', function(e) {
                const searchTerm = e.target.value.toLowerCase().trim();
                const rows = document.querySelectorAll('#credits-tab .employee-table tbody tr');
                filterTable(rows, searchTerm, '#credits-tab .employee-table tbody', 6);
            });
        }
        
        function filterTable(rows, searchTerm, tableBodySelector, colSpan) {
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
            const tableBody = document.querySelector(tableBodySelector);
            let noResults = tableBody.querySelector('.no-results');
            
            if (visibleCount === 0 && searchTerm !== '') {
                if (!noResults) {
                    noResults = document.createElement('tr');
                    noResults.className = 'no-results text-center';
                    noResults.innerHTML = `
                        <td colspan="${colSpan}">
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
        }
        
        // Filter button functionality
        document.getElementById('filterBtn').addEventListener('click', function() {
            alert('Filter functionality would open here. This could include filters by department, status, etc.');
        });
        
        // Export button functionality
        document.getElementById('exportBtn').addEventListener('click', function() {
            alert('Export functionality would trigger here. Data could be exported as CSV or Excel.');
        });
        
        // Refresh button functionality for credits tab
        document.getElementById('refreshBtn').addEventListener('click', function() {
            alert('Credits data refreshed');
        });
        
        // Bulk adjust button functionality
        document.getElementById('bulkAdjustBtn').addEventListener('click', function() {
            alert('Bulk adjust functionality would open here. You could adjust credits for multiple employees at once.');
        });
        
        // View employee button functionality
        document.querySelectorAll('.view-employee-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const employeeId = this.getAttribute('data-employee-id');
                const row = this.closest('tr');
                const employeeName = row.querySelector('.employee-name').textContent;
                alert(`View employee details for ${employeeName} (ID: ${employeeId})`);
            });
        });
        
        // Edit employee button functionality
        document.querySelectorAll('.edit-employee-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const employeeId = this.getAttribute('data-employee-id');
                const row = this.closest('tr');
                const employeeName = row.querySelector('.employee-name').textContent;
                alert(`Edit employee details for ${employeeName} (ID: ${employeeId})`);
            });
        });
        
        
        // Edit credits button functionality
        document.querySelectorAll('.edit-credits-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const employeeId = this.getAttribute('data-employee-id');
                const row = this.closest('tr');
                const employeeName = row.querySelector('.employee-name').textContent;
                alert(`Edit credits for ${employeeName} (ID: ${employeeId})`);
            });
        });
        
        // Add CSS for animations
        const style = document.createElement('style');
        style.textContent = `
            .highlight-search {
                animation: highlight-fade 1s ease;
            }
            
            @keyframes highlight-fade {
                0% { background-color: rgba(255, 235, 59, 0.3); }
                100% { background-color: transparent; }
            }
        `;
        document.head.appendChild(style);
    });
</script>
</body>
</x-layout>