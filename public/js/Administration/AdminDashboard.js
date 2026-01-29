// DOM Elements
const navItems = document.querySelectorAll('.nav-item');
const tabContents = document.querySelectorAll('.tab-content');
const pageTitle = document.getElementById('pageTitle');
const leaveTabBtns = document.querySelectorAll('[data-leave-tab]');
const leaveTabs = document.querySelectorAll('.leave-tab');

// Tab Navigation
navItems.forEach(item => {
    item.addEventListener('click', function(e) {
        e.preventDefault();
        
        // Remove active class from all nav items and tabs
        navItems.forEach(nav => nav.classList.remove('active'));
        tabContents.forEach(tab => tab.classList.remove('active'));
        
        // Add active class to clicked nav item
        this.classList.add('active');
        
        // Show corresponding tab content
        const tabId = this.getAttribute('data-tab');
        document.getElementById(tabId).classList.add('active');
        
        // Update page title
        updatePageTitle(tabId);
    });
});

// Leave Application Tabs
leaveTabBtns.forEach(btn => {
    btn.addEventListener('click', function() {
        // Remove active class from all leave tab buttons and tabs
        leaveTabBtns.forEach(b => b.classList.remove('active'));
        leaveTabs.forEach(tab => tab.classList.remove('active'));
        
        // Add active class to clicked button
        this.classList.add('active');
        
        // Show corresponding tab
        const tabId = this.getAttribute('data-leave-tab');
        document.getElementById(`${tabId}-leaves`).classList.add('active');
    });
});

// Update page title based on active tab
function updatePageTitle(tabId) {
    const titles = {
        'overview': 'Overview Dashboard',
        'employees': 'Employee Management',
        'leave-applications': 'Leave Applications',
        'cto-applications': 'CTO Applications',
        'calendar': 'Leave Calendar',
        'reports': 'Reports & Analytics',
        'settings': 'System Settings'
    };
    
    pageTitle.textContent = titles[tabId] || 'Dashboard';
}

// Initialize FullCalendar
document.addEventListener('DOMContentLoaded', function() {
    const calendarEl = document.getElementById('calendar-container');
    
    // Check if calendar element exists (on calendar tab)
    if (calendarEl) {
        const calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay'
            },
            events: [
                {
                    title: 'Juan Dela Cruz - VL',
                    start: '2025-03-15',
                    end: '2025-03-19',
                    color: '#1a5276'
                },
                {
                    title: 'Maria Santos - SL',
                    start: '2025-03-12',
                    color: '#28a745'
                },
                {
                    title: 'Robert Lim - EL',
                    start: '2025-03-10',
                    end: '2025-03-12',
                    color: '#ffc107'
                },
                {
                    title: 'Ana Reyes - ML',
                    start: '2025-03-01',
                    end: '2025-03-31',
                    color: '#17a2b8'
                },
                {
                    title: 'Department Meeting',
                    start: '2025-03-20',
                    color: '#6c757d'
                }
            ],
            eventClick: function(info) {
                alert('Event: ' + info.event.title + '\n' +
                      'Start: ' + info.event.start.toLocaleDateString() + 
                      (info.event.end ? '\nEnd: ' + info.event.end.toLocaleDateString() : ''));
            }
        });
        
        calendar.render();
        
        // Store calendar instance for later use
        window.calendarInstance = calendar;
    }
});

// Add Employee Button
document.getElementById('addEmployeeBtn')?.addEventListener('click', function() {
    alert('Add Employee form would open here.\n\nThis would include:\n- Personal Information\n- Employment Details\n- Initial Leave Credits\n- Account Setup');
});

// Add CTO Button
document.getElementById('addCtoBtn')?.addEventListener('click', function() {
    alert('New CTO Application form would open here.');
});

// Add Event Button (Calendar)
document.getElementById('addEventBtn')?.addEventListener('click', function() {
    alert('Add Event form would open here.\n\nYou can add:\n- Leave Events\n- Holidays\n- Meetings\n- Training Sessions');
});

// Generate Report Button
document.getElementById('generateReportBtn')?.addEventListener('click', function() {
    const timeFilter = document.getElementById('timeFilter')?.value || 'month';
    alert(`Generating report for: ${timeFilter}\n\nReport would include:\n- Leave Summary\n- Employee Attendance\n- Department Analysis\n- CTO Utilization`);
});

// Settings Form Submission
document.getElementById('settingsForm')?.addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Show loading
    const submitBtn = this.querySelector('.btn-submit');
    const originalText = submitBtn.textContent;
    submitBtn.innerHTML = '<span class="loading"></span> Saving...';
    submitBtn.disabled = true;
    
    // Simulate API call
    setTimeout(() => {
        alert('Settings saved successfully!');
        submitBtn.textContent = originalText;
        submitBtn.disabled = false;
    }, 1000);
});

// Time Filter Change
document.getElementById('timeFilter')?.addEventListener('change', function() {
    const filterValue = this.value;
    
    // Update stats based on filter (simulated)
    const stats = {
        today: { employees: 127, pending: 3, approved: 2, cto: 1 },
        week: { employees: 127, pending: 18, approved: 42, cto: 9 },
        month: { employees: 127, pending: 24, approved: 65, cto: 12 },
        quarter: { employees: 129, pending: 32, approved: 210, cto: 45 },
        year: { employees: 135, pending: 15, approved: 580, cto: 120 }
    };
    
    const selectedStats = stats[filterValue] || stats.week;
    
    document.getElementById('totalEmployees').textContent = selectedStats.employees;
    document.getElementById('pendingLeaves').textContent = selectedStats.pending;
    document.getElementById('approvedLeaves').textContent = selectedStats.approved;
    document.getElementById('ctoApplications').textContent = selectedStats.cto;
});

// Notification Bell Click
document.querySelector('.notification-badge')?.addEventListener('click', function() {
    alert('You have 3 notifications:\n\n1. New leave application from Juan Dela Cruz\n2. CTO application pending approval\n3. System maintenance scheduled for Sunday');
});

// Action button handlers
document.querySelectorAll('.btn-view').forEach(btn => {
    btn.addEventListener('click', function() {
        const row = this.closest('tr');
        const employeeName = row.cells[1].textContent;
        alert(`Viewing details for: ${employeeName}`);
    });
});

document.querySelectorAll('.btn-edit').forEach(btn => {
    btn.addEventListener('click', function() {
        const row = this.closest('tr');
        const employeeName = row.cells[1].textContent;
        alert(`Edit form for: ${employeeName}`);
    });
});

// Mobile menu toggle
const menuToggle = document.createElement('button');
menuToggle.className = 'menu-toggle';
menuToggle.innerHTML = '<i class="fas fa-bars"></i>';
document.querySelector('.main-header .header-title')?.prepend(menuToggle);

menuToggle.addEventListener('click', function() {
    document.querySelector('.sidebar').classList.toggle('active');
});

// Initialize on page load
window.addEventListener('load', function() {
    // Update date filter to show today's date
    const today = new Date().toISOString().split('T')[0];
    document.getElementById('customDate').value = today;
    
    // Trigger time filter change to update stats
    document.getElementById('timeFilter')?.dispatchEvent(new Event('change'));
    
    // Close sidebar on mobile by default
    if (window.innerWidth <= 1200) {
        document.querySelector('.sidebar').classList.remove('active');
    }
});