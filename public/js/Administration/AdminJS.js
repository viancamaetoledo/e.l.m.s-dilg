// Dashboard JavaScript
document.addEventListener('DOMContentLoaded', function() {
    // Initialize all components
    initTabNavigation();
    initSubTabs();
    initFilters();
    initCalendar();
    loadDashboardData();
    loadEmployeeData();
    loadLeaveApplications();
    loadCTOApplications();
});

// Tab Navigation
function initTabNavigation() {
    const tabBtns = document.querySelectorAll('.tab-btn');
    const tabContents = document.querySelectorAll('.tab-content');
    
    tabBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const tabId = btn.getAttribute('data-tab');
            
            // Update active tab button
            tabBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            
            // Show active tab content
            tabContents.forEach(content => {
                content.classList.remove('active');
                if (content.id === tabId) {
                    content.classList.add('active');
                    
                    // Initialize calendar when calendar tab is opened
                    if (tabId === 'calendar') {
                        initCalendar();
                    }
                }
            });
        });
    });
}

// Sub Tab Navigation
function initSubTabs() {
    // Employee sub tabs
    const employeeSubBtns = document.querySelectorAll('.sub-tab-btn');
    const employeeSubContents = document.querySelectorAll('.sub-tab-content');
    
    employeeSubBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const subtabId = btn.getAttribute('data-subtab');
            
            employeeSubBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            
            employeeSubContents.forEach(content => {
                content.classList.remove('active');
                if (content.id === subtabId) {
                    content.classList.add('active');
                }
            });
        });
    });
    
    // Leave application sub tabs
    const appSubBtns = document.querySelectorAll('.app-tab-btn');
    
    appSubBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const status = btn.getAttribute('data-status');
            
            appSubBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            
            filterLeaveApplications(status);
        });
    });
}

// Initialize Filters
function initFilters() {
    // Time filter for dashboard
    const timeFilter = document.getElementById('timeFilter');
    const customDate = document.getElementById('customDate');
    
    if (timeFilter) {
        timeFilter.addEventListener('change', function() {
            if (this.value === 'custom') {
                customDate.style.display = 'block';
            } else {
                customDate.style.display = 'none';
                updateDashboardStats(this.value);
            }
        });
    }
    
    if (customDate) {
        customDate.addEventListener('change', function() {
            updateDashboardStats('custom', this.value);
        });
    }
    
    // Employee search
    const employeeSearch = document.getElementById('employeeSearch');
    if (employeeSearch) {
        employeeSearch.addEventListener('input', debounce(filterEmployees, 300));
    }
    
    // Department filter
    const departmentFilter = document.getElementById('departmentFilter');
    if (departmentFilter) {
        departmentFilter.addEventListener('change', filterEmployees);
    }
    
    // Leave application filters
    const leaveTypeFilter = document.getElementById('leaveTypeFilter');
    if (leaveTypeFilter) {
        leaveTypeFilter.addEventListener('change', () => filterLeaveApplications());
    }
    
    const leaveDateFilter = document.getElementById('leaveDateFilter');
    if (leaveDateFilter) {
        leaveDateFilter.addEventListener('change', () => filterLeaveApplications());
    }
    
    // CTO filters
    const ctoStatusFilter = document.getElementById('ctoStatusFilter');
    if (ctoStatusFilter) {
        ctoStatusFilter.addEventListener('change', filterCTOApplications);
    }
    
    const ctoMonthFilter = document.getElementById('ctoMonthFilter');
    if (ctoMonthFilter) {
        ctoMonthFilter.addEventListener('change', filterCTOApplications);
    }
}

// Initialize Calendar
function initCalendar() {
    const calendarEl = document.getElementById('calendar');
    if (!calendarEl) return;
    
    const calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        events: getCalendarEvents(),
        eventClick: function(info) {
            showEventDetails(info.event);
        },
        eventColor: function(info) {
            return getEventColor(info.event.extendedProps.type);
        }
    });
    
    calendar.render();
    
    // Calendar navigation buttons
    const prevBtn = document.getElementById('prevMonth');
    const nextBtn = document.getElementById('nextMonth');
    const todayBtn = document.getElementById('todayBtn');
    const calendarView = document.getElementById('calendarView');
    
    if (prevBtn) {
        prevBtn.addEventListener('click', () => {
            calendar.prev();
        });
    }
    
    if (nextBtn) {
        nextBtn.addEventListener('click', () => {
            calendar.next();
        });
    }
    
    if (todayBtn) {
        todayBtn.addEventListener('click', () => {
            calendar.today();
        });
    }
    
    if (calendarView) {
        calendarView.addEventListener('change', function() {
            calendar.changeView(this.value);
        });
    }
}

// Load Dashboard Data
function loadDashboardData() {
    // Simulate API call
    setTimeout(() => {
        // Recent leaves
        const recentLeaves = [
            { employee: 'Juan Dela Cruz', type: 'Vacation Leave', date: 'Mar 15-18, 2025', status: 'pending' },
            { employee: 'Maria Santos', type: 'Sick Leave', date: 'Mar 12, 2025', status: 'approved' },
            { employee: 'Robert Lim', type: 'Emergency Leave', date: 'Mar 10-11, 2025', status: 'cancelled' },
            { employee: 'Ana Reyes', type: 'Maternity Leave', date: 'Mar 1-30, 2025', status: 'approved' }
        ];
        
        populateRecentLeaves(recentLeaves);
        
        // Upcoming leaves
        const upcomingLeaves = [
            { employee: 'Carlos Garcia', type: 'Vacation Leave', startDate: 'Mar 20, 2025', days: 5 },
            { employee: 'Lorna Tan', type: 'Sick Leave', startDate: 'Mar 22, 2025', days: 3 },
            { employee: 'Michael Ong', type: 'Study Leave', startDate: 'Mar 25, 2025', days: 10 },
            { employee: 'Sofia Lopez', type: 'Vacation Leave', startDate: 'Apr 1, 2025', days: 7 }
        ];
        
        populateUpcomingLeaves(upcomingLeaves);
        
        // Leave balance
        const leaveBalance = [
            { type: 'Vacation Leave', total: 15, used: 7.5, available: 7.5 },
            { type: 'Sick Leave', total: 15, used: 3.0, available: 12.0 },
            { type: 'Emergency Leave', total: 5, used: 2.0, available: 3.0 },
            { type: 'Maternity Leave', total: 105, used: 0, available: 105 }
        ];
        
        populateLeaveBalance(leaveBalance);
    }, 500);
}

// Load Employee Data
function loadEmployeeData() {
    // Simulate API call
    setTimeout(() => {
        const employees = [
            { id: 'EMP001', name: 'Juan Dela Cruz', position: 'Senior Manager', department: 'HR', email: 'juan.dc@dilg.gov.ph', contact: '0917-123-4567' },
            { id: 'EMP002', name: 'Maria Santos', position: 'IT Specialist', department: 'IT', email: 'maria.s@dilg.gov.ph', contact: '0922-987-6543' },
            { id: 'EMP003', name: 'Robert Lim', position: 'Finance Officer', department: 'Finance', email: 'robert.l@dilg.gov.ph', contact: '0933-456-7890' },
            { id: 'EMP004', name: 'Ana Reyes', position: 'Operations Head', department: 'Operations', email: 'ana.r@dilg.gov.ph', contact: '0945-111-2233' }
        ];
        
        populateEmployeeTable(employees);
        
        // Leave credits
        const leaveCredits = [
            { employee: 'Juan Dela Cruz', vl: 7.5, sl: 12.0, emergency: 3.0, cto: 8.5, lastUpdated: 'Mar 10, 2025' },
            { employee: 'Maria Santos', vl: 10.0, sl: 15.0, emergency: 5.0, cto: 12.0, lastUpdated: 'Mar 11, 2025' },
            { employee: 'Robert Lim', vl: 5.0, sl: 10.5, emergency: 2.0, cto: 6.0, lastUpdated: 'Mar 12, 2025' },
            { employee: 'Ana Reyes', vl: 12.0, sl: 14.0, emergency: 4.5, cto: 10.0, lastUpdated: 'Mar 13, 2025' }
        ];
        
        populateLeaveCreditsTable(leaveCredits);
    }, 500);
}

// Load Leave Applications
function loadLeaveApplications() {
    // Simulate API call
    setTimeout(() => {
        const applications = [
            { id: 'LA-2025-001', employee: 'Juan Dela Cruz', type: 'VL', dateFiled: 'Mar 10, 2025', period: 'Mar 15-18, 2025', duration: 4, status: 'pending' },
            { id: 'LA-2025-002', employee: 'Maria Santos', type: 'SL', dateFiled: 'Mar 9, 2025', period: 'Mar 12, 2025', duration: 1, status: 'approved' },
            { id: 'LA-2025-003', employee: 'Robert Lim', type: 'EL', dateFiled: 'Mar 8, 2025', period: 'Mar 10-11, 2025', duration: 2, status: 'cancelled' },
            { id: 'LA-2025-004', employee: 'Ana Reyes', type: 'ML', dateFiled: 'Mar 1, 2025', period: 'Mar 1-30, 2025', duration: 30, status: 'approved' },
            { id: 'LA-2025-005', employee: 'Carlos Garcia', type: 'VL', dateFiled: 'Mar 14, 2025', period: 'Mar 20-24, 2025', duration: 5, status: 'pending' }
        ];
        
        populateLeaveApplicationsTable(applications);
    }, 500);
}

// Load CTO Applications
function loadCTOApplications() {
    // Simulate API call
    setTimeout(() => {
        const ctoApplications = [
            { id: 'CTO-2025-001', employee: 'Juan Dela Cruz', dateFiled: 'Mar 10, 2025', hours: 8, purpose: 'Personal matters', status: 'approved', approvedBy: 'Admin' },
            { id: 'CTO-2025-002', employee: 'Maria Santos', dateFiled: 'Mar 11, 2025', hours: 4, purpose: 'Medical appointment', status: 'pending', approvedBy: '-' },
            { id: 'CTO-2025-003', employee: 'Robert Lim', dateFiled: 'Mar 12, 2025', hours: 8, purpose: 'Family event', status: 'rejected', approvedBy: 'Admin' },
            { id: 'CTO-2025-004', employee: 'Ana Reyes', dateFiled: 'Mar 13, 2025', hours: 6, purpose: 'Government transaction', status: 'approved', approvedBy: 'Admin' }
        ];
        
        populateCTOApplicationsTable(ctoApplications);
    }, 500);
}

// Helper Functions
function populateRecentLeaves(data) {
    const tableBody = document.getElementById('recentLeavesTable');
    if (!tableBody) return;
    
    tableBody.innerHTML = data.map(item => `
        <tr>
            <td>${item.employee}</td>
            <td>${item.type}</td>
            <td>${item.date}</td>
            <td><span class="status-badge status-${item.status}">${item.status.charAt(0).toUpperCase() + item.status.slice(1)}</span></td>
        </tr>
    `).join('');
}

function populateUpcomingLeaves(data) {
    const tableBody = document.getElementById('upcomingLeavesTable');
    if (!tableBody) return;
    
    tableBody.innerHTML = data.map(item => `
        <tr>
            <td>${item.employee}</td>
            <td>${item.type}</td>
            <td>${item.startDate}</td>
            <td>${item.days}</td>
        </tr>
    `).join('');
}

function populateLeaveBalance(data) {
    const tableBody = document.getElementById('leaveBalanceTable');
    if (!tableBody) return;
    
    tableBody.innerHTML = data.map(item => `
        <tr>
            <td>${item.type}</td>
            <td>${item.total}</td>
            <td>${item.used}</td>
            <td><strong>${item.available}</strong></td>
        </tr>
    `).join('');
}

function populateEmployeeTable(data) {
    const tableBody = document.getElementById('employeeTable');
    if (!tableBody) return;
    
    tableBody.innerHTML = data.map(item => `
        <tr>
            <td>${item.id}</td>
            <td><strong>${item.name}</strong></td>
            <td>${item.position}</td>
            <td><span class="dept-badge">${item.department}</span></td>
            <td>${item.email}</td>
            <td>${item.contact}</td>
            <td>
                <div class="action-buttons">
                    <button class="btn-action btn-view" title="View" onclick="viewEmployee('${item.id}')">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="btn-action btn-edit" title="Edit" onclick="editEmployee('${item.id}')">
                        <i class="fas fa-edit"></i>
                    </button>
                    <button class="btn-action btn-delete" title="Delete" onclick="deleteEmployee('${item.id}')">
                        <i class="fas fa-trash"></i>
                    </button>
                </div>
            </td>
        </tr>
    `).join('');
}

function populateLeaveCreditsTable(data) {
    const tableBody = document.getElementById('leaveCreditsTable');
    if (!tableBody) return;
    
    tableBody.innerHTML = data.map(item => `
        <tr>
            <td><strong>${item.employee}</strong></td>
            <td>${item.vl}</td>
            <td>${item.sl}</td>
            <td>${item.emergency}</td>
            <td>${item.cto}</td>
            <td>${item.lastUpdated}</td>
            <td>
                <button class="btn-action btn-edit" title="Adjust Credits" onclick="adjustCredits('${item.employee}')">
                    <i class="fas fa-edit"></i>
                </button>
            </td>
        </tr>
    `).join('');
}

function populateLeaveApplicationsTable(data) {
    const tableBody = document.getElementById('leaveApplicationsTable');
    if (!tableBody) return;
    
    tableBody.innerHTML = data.map(item => `
        <tr>
            <td>${item.id}</td>
            <td><strong>${item.employee}</strong></td>
            <td>${getLeaveTypeFull(item.type)}</td>
            <td>${item.dateFiled}</td>
            <td>${item.period}</td>
            <td>${item.duration} day(s)</td>
            <td><span class="status-badge status-${item.status}">${item.status.charAt(0).toUpperCase() + item.status.slice(1)}</span></td>
            <td>
                <div class="action-buttons">
                    <button class="btn-action btn-view" title="View Details" onclick="viewLeaveApplication('${item.id}')">
                        <i class="fas fa-eye"></i>
                    </button>
                    ${item.status === 'pending' ? `
                    <button class="btn-action btn-approve" title="Approve" onclick="approveLeave('${item.id}')">
                        <i class="fas fa-check"></i>
                    </button>
                    <button class="btn-action btn-reject" title="Reject" onclick="rejectLeave('${item.id}')">
                        <i class="fas fa-times"></i>
                    </button>
                    ` : ''}
                </div>
            </td>
        </tr>
    `).join('');
}

function populateCTOApplicationsTable(data) {
    const tableBody = document.getElementById('ctoApplicationsTable');
    if (!tableBody) return;
    
    tableBody.innerHTML = data.map(item => `
        <tr>
            <td>${item.id}</td>
            <td><strong>${item.employee}</strong></td>
            <td>${item.dateFiled}</td>
            <td>${item.hours} hours</td>
            <td>${item.purpose}</td>
            <td><span class="status-badge status-${item.status}">${item.status.charAt(0).toUpperCase() + item.status.slice(1)}</span></td>
            <td>${item.approvedBy}</td>
            <td>
                <div class="action-buttons">
                    <button class="btn-action btn-view" title="View Details" onclick="viewCTOApplication('${item.id}')">
                        <i class="fas fa-eye"></i>
                    </button>
                    ${item.status === 'pending' ? `
                    <button class="btn-action btn-approve" title="Approve" onclick="approveCTO('${item.id}')">
                        <i class="fas fa-check"></i>
                    </button>
                    <button class="btn-action btn-reject" title="Reject" onclick="rejectCTO('${item.id}')">
                        <i class="fas fa-times"></i>
                    </button>
                    ` : ''}
                </div>
            </td>
        </tr>
    `).join('');
}

// Filter Functions
function filterEmployees() {
    const searchTerm = document.getElementById('employeeSearch')?.value.toLowerCase() || '';
    const department = document.getElementById('departmentFilter')?.value || '';
    
    // In a real application, this would be an API call
    console.log('Filtering employees:', { searchTerm, department });
}

function filterLeaveApplications(status = 'all') {
    const typeFilter = document.getElementById('leaveTypeFilter')?.value || '';
    const dateFilter = document.getElementById('leaveDateFilter')?.value || '';
    
    // In a real application, this would be an API call
    console.log('Filtering leave applications:', { status, typeFilter, dateFilter });
}

function filterCTOApplications() {
    const status = document.getElementById('ctoStatusFilter')?.value || '';
    const month = document.getElementById('ctoMonthFilter')?.value || '';
    
    // In a real application, this would be an API call
    console.log('Filtering CTO applications:', { status, month });
}

// Calendar Functions
function getCalendarEvents() {
    return [
        {
            title: 'Juan Dela Cruz - VL',
            start: '2025-03-15',
            end: '2025-03-19',
            type: 'VL',
            description: 'Vacation Leave'
        },
        {
            title: 'Maria Santos - SL',
            start: '2025-03-12',
            type: 'SL',
            description: 'Sick Leave'
        },
        {
            title: 'Robert Lim - CTO',
            start: '2025-03-20',
            type: 'CTO',
            description: 'Compensatory Time Off'
        },
        {
            title: 'Ana Reyes - ML',
            start: '2025-03-01',
            end: '2025-03-31',
            type: 'ML',
            description: 'Maternity Leave'
        }
    ];
}

function getEventColor(type) {
    const colors = {
        'VL': 'var(--vl-color)',
        'SL': 'var(--sl-color)',
        'EL': 'var(--el-color)',
        'CTO': 'var(--cto-color)',
        'ML': '#FFC55A'
    };
    return colors[type] || 'var(--primary-color)';
}

function showEventDetails(event) {
    alert(`Event: ${event.title}\nType: ${event.extendedProps.description}\nDate: ${event.start.toLocaleDateString()}`);
}

// Utility Functions
function getLeaveTypeFull(abbr) {
    const types = {
        'VL': 'Vacation Leave',
        'SL': 'Sick Leave',
        'EL': 'Emergency Leave',
        'ML': 'Maternity Leave'
    };
    return types[abbr] || abbr;
}

function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

function updateDashboardStats(period, customDate = null) {
    console.log('Updating dashboard stats for:', period, customDate);
    // In a real application, this would fetch new data from API
}

// Action Functions (to be implemented)
function viewEmployee(id) {
    alert(`View employee: ${id}`);
    // Implement view employee modal
}

function editEmployee(id) {
    alert(`Edit employee: ${id}`);
    // Implement edit employee modal
}

function deleteEmployee(id) {
    if (confirm(`Are you sure you want to delete employee ${id}?`)) {
        alert(`Deleted employee: ${id}`);
        // Implement delete API call
    }
}

function adjustCredits(employee) {
    alert(`Adjust credits for: ${employee}`);
    // Implement adjust credits modal
}

function viewLeaveApplication(id) {
    alert(`View leave application: ${id}`);
    // Implement view leave application modal
}

function approveLeave(id) {
    if (confirm(`Approve leave application ${id}?`)) {
        alert(`Approved leave: ${id}`);
        // Implement approve API call
    }
}

function rejectLeave(id) {
    if (confirm(`Reject leave application ${id}?`)) {
        alert(`Rejected leave: ${id}`);
        // Implement reject API call
    }
}

function viewCTOApplication(id) {
    alert(`View CTO application: ${id}`);
    // Implement view CTO application modal
}

function approveCTO(id) {
    if (confirm(`Approve CTO application ${id}?`)) {
        alert(`Approved CTO: ${id}`);
        // Implement approve API call
    }
}

function rejectCTO(id) {
    if (confirm(`Reject CTO application ${id}?`)) {
        alert(`Rejected CTO: ${id}`);
        // Implement reject API call
    }
}