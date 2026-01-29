<x-layout>
<link rel="stylesheet" href="/css/Administration/Employee.css">

<body>
<div class="container-fluid employee-container">
    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4 page-header">
        <div>
            <h1 class="h3 mb-0">
                <i class="fas fa-users text-primary me-2"></i>Employees Management
            </h1>
            <p class="text-muted mb-0">Manage employee information and leave credits</p>
        </div>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addEmployeeModal">
            <i class="fas fa-user-plus me-2"></i>Add New Employee
        </button>
    </div>

    <!-- Statistics Cards -->
    <div class="row mb-4">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card stats-card border-left-primary">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="stats-label mb-1">Total Employees</div>
                            <div class="stats-count">156</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users stats-icon text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card stats-card border-left-success">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="stats-label mb-1">Active Employees</div>
                            <div class="stats-count">142</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-check stats-icon text-success"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card stats-card border-left-warning">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="stats-label mb-1">On Leave Today</div>
                            <div class="stats-count">8</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-umbrella-beach stats-icon text-warning"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card stats-card border-left-danger">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="stats-label mb-1">Low Leave Credits</div>
                            <div class="stats-count">12</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-exclamation-triangle stats-icon text-danger"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Employee List Table -->
    <div class="card employee-table mb-4">
        <div class="table-header">
            <div class="d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold">
                    <i class="fas fa-list me-2"></i>Employee Directory
                </h6>
                <div class="d-flex gap-2">
                    <div class="input-group search-box">
                        <input type="text" class="form-control" placeholder="Search employees..." id="searchEmployee">
                        <button class="btn btn-outline-secondary" type="button">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                    <button class="btn btn-outline-secondary">
                        <i class="fas fa-filter"></i> Filter
                    </button>
                    <button class="btn btn-outline-secondary">
                        <i class="fas fa-download"></i> Export
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0" id="employeesTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Employee ID</th>
                            <th>Full Name</th>
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
                            <td>1</td>
                            <td>EMP-2023-001</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar-circle avatar-primary me-3">JD</div>
                                    <div>
                                        <div class="fw-bold">Juan Dela Cruz</div>
                                        <small class="text-muted">juandelacruz@dilg.gov.ph</small>
                                    </div>
                                </div>
                            </td>
                            <td>Administrative Officer III</td>
                            <td>Human Resources</td>
                            <td>
                                <span class="badge-status badge-active">Active</span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <span class="leave-badge leave-badge-high">15 days</span>
                                    <div class="grow">
                                        <div class="leave-progress">
                                            <div class="leave-progress-bar" style="width: 75%"></div>
                                        </div>
                                    </div>
                                    <button class="btn btn-link btn-action btn-action-sm text-primary" 
                                            data-bs-toggle="modal" 
                                            data-bs-target="#manageLeaveModal"
                                            data-employee-id="1"
                                            title="Manage Leave">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-action btn-outline-primary" 
                                            data-bs-toggle="modal" 
                                            data-bs-target="#viewEmployeeModal"
                                            data-employee-id="1"
                                            title="View">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn btn-action btn-outline-warning"
                                            data-bs-toggle="modal"
                                            data-bs-target="#editEmployeeModal"
                                            data-employee-id="1"
                                            title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="btn btn-action btn-outline-danger" title="Delete">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        
                        <!-- Row 2 -->
                        <tr>
                            <td>2</td>
                            <td>EMP-2023-002</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar-circle avatar-danger me-3">MS</div>
                                    <div>
                                        <div class="fw-bold">Maria Santos</div>
                                        <small class="text-muted">mariasantos@dilg.gov.ph</small>
                                    </div>
                                </div>
                            </td>
                            <td>Finance Officer II</td>
                            <td>Finance</td>
                            <td>
                                <span class="badge-status badge-active">Active</span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <span class="leave-badge leave-badge-medium">8 days</span>
                                    <div class="grow">
                                        <div class="leave-progress">
                                            <div class="leave-progress-bar" style="width: 40%"></div>
                                        </div>
                                    </div>
                                    <button class="btn btn-link btn-action btn-action-sm text-primary" 
                                            data-bs-toggle="modal" 
                                            data-bs-target="#manageLeaveModal"
                                            data-employee-id="2">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-action btn-outline-primary" 
                                            data-bs-toggle="modal" 
                                            data-bs-target="#viewEmployeeModal"
                                            data-employee-id="2">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn btn-action btn-outline-warning"
                                            data-bs-toggle="modal"
                                            data-bs-target="#editEmployeeModal"
                                            data-employee-id="2">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="btn btn-action btn-outline-danger">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        
                        <!-- Row 3 -->
                        <tr>
                            <td>3</td>
                            <td>EMP-2023-003</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar-circle avatar-success me-3">AR</div>
                                    <div>
                                        <div class="fw-bold">Antonio Reyes</div>
                                        <small class="text-muted">antonioreyes@dilg.gov.ph</small>
                                    </div>
                                </div>
                            </td>
                            <td>IT Specialist I</td>
                            <td>ICT Division</td>
                            <td>
                                <span class="badge-status badge-onleave">On Leave</span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <span class="leave-badge leave-badge-low">3 days</span>
                                    <div class="grow">
                                        <div class="leave-progress">
                                            <div class="leave-progress-bar" style="width: 15%"></div>
                                        </div>
                                    </div>
                                    <button class="btn btn-link btn-action btn-action-sm text-primary" 
                                            data-bs-toggle="modal" 
                                            data-bs-target="#manageLeaveModal"
                                            data-employee-id="3">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-action btn-outline-primary" 
                                            data-bs-toggle="modal" 
                                            data-bs-target="#viewEmployeeModal"
                                            data-employee-id="3">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn btn-action btn-outline-warning"
                                            data-bs-toggle="modal"
                                            data-bs-target="#editEmployeeModal"
                                            data-employee-id="3">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="btn btn-action btn-outline-danger">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <!-- Pagination -->
            <div class="p-3 border-top">
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-end mb-0">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <!-- Charts and Additional Info -->
    <div class="row">
        <!-- Leave Credit Chart -->
        <div class="col-lg-8 mb-4">
            <div class="leave-chart-container">
                <div class="d-flex justify-content-between align-items-center chart-header">
                    <h6 class="m-0 font-weight-bold">
                        <i class="fas fa-chart-bar me-2"></i>Leave Credit Usage
                    </h6>
                    <select class="form-select form-select-sm" style="width: 150px;">
                        <option>Last 12 Months</option>
                        <option>Last 6 Months</option>
                        <option>Current Year</option>
                    </select>
                </div>
                <div class="chart-bar">
                    <canvas id="leaveCreditChart"></canvas>
                </div>
            </div>
        </div>
        
        <!-- Low Credits Alert -->
        <div class="col-lg-4 mb-4">
            <div class="low-credits-alert">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center alert-header mb-3">
                        <h6 class="m-0 font-weight-bold">
                            <i class="fas fa-exclamation-triangle text-danger me-2"></i>Low Leave Credits
                        </h6>
                        <span class="badge bg-danger rounded-pill">12 Employees</span>
                    </div>
                    
                    <div class="employee-list">
                        <div class="employee-list-item">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <div class="fw-bold">Antonio Reyes</div>
                                    <small class="text-muted">IT Specialist I • ICT Division</small>
                                </div>
                                <span class="badge bg-danger rounded-pill px-3">3 days</span>
                            </div>
                        </div>
                        
                        <div class="employee-list-item">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <div class="fw-bold">Cynthia Mendoza</div>
                                    <small class="text-muted">Admin Assistant II • HR</small>
                                </div>
                                <span class="badge bg-danger rounded-pill px-3">4 days</span>
                            </div>
                        </div>
                        
                        <div class="employee-list-item">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <div class="fw-bold">Roberto Garcia</div>
                                    <small class="text-muted">Engineer III • Operations</small>
                                </div>
                                <span class="badge bg-danger rounded-pill px-3">2 days</span>
                            </div>
                        </div>
                        
                        <div class="employee-list-item">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <div class="fw-bold">Elizabeth Tan</div>
                                    <small class="text-muted">Legal Officer I • Legal</small>
                                </div>
                                <span class="badge bg-warning rounded-pill px-3">5 days</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="text-center mt-3">
                        <a href="#" class="text-primary text-decoration-none">
                            <small>View All <i class="fas fa-chevron-right"></i></small>
                        </a>
                    </div>
                </div>
            </div>
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
        // Initialize chart
        const ctx = document.getElementById('leaveCreditChart').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets: [{
                    label: 'Leave Credits Used',
                    data: [12, 19, 8, 15, 12, 17, 14, 16, 10, 13, 9, 11],
                    backgroundColor: 'rgba(52, 152, 219, 0.2)',
                    borderColor: 'rgba(52, 152, 219, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { display: false }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Days Used'
                        }
                    }
                }
            }
        });
        
        // Search functionality
        document.getElementById('searchEmployee').addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            const rows = document.querySelectorAll('#employeesTable tbody tr');
            
            rows.forEach(row => {
                const text = row.textContent.toLowerCase();
                row.style.display = text.includes(searchTerm) ? '' : 'none';
            });
        });
    });
</script>
</body>
</x-layout>


