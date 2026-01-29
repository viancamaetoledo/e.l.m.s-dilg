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
document.getElementById('cto-name').value = 'Juan Dela Cruz';
document.getElementById('cto-position').value = 'Administrative Officer III';
document.getElementById('cto-office').value = 'DILG Regional Office I';

// Initialize with overview section
showSection('overview');

// Mobile menu toggle for sidebar
const menuToggle = document.createElement('button');
menuToggle.className = 'menu-toggle';
menuToggle.innerHTML = '<i class="fas fa-bars"></i>';
document.querySelector('.header .header-title')?.prepend(menuToggle);

menuToggle.addEventListener('click', function() {
    document.querySelector('.sidebar').classList.toggle('mobile-show');
});

// Close sidebar when clicking outside on mobile
document.addEventListener('click', function(event) {
    const sidebar = document.querySelector('.sidebar');
    const menuToggleBtn = document.querySelector('.menu-toggle');
    
    if (window.innerWidth <= 992 && 
        !sidebar.contains(event.target) && 
        !menuToggleBtn.contains(event.target) &&
        sidebar.classList.contains('mobile-show')) {
        sidebar.classList.remove('mobile-show');
    }
});

// Add mobile show class for responsive sidebar
const style = document.createElement('style');
style.textContent = `
    @media (max-width: 992px) {
        .sidebar.mobile-show {
            transform: translateX(0);
            box-shadow: 2px 0 15px rgba(0,0,0,0.2);
        }
        
        .sidebar:not(.mobile-show) {
            transform: translateX(-100%);
        }
        
        .menu-toggle {
            display: block;
            background: none;
            border: none;
            font-size: 1.5rem;
            color: var(--primary-color);
            cursor: pointer;
            margin-right: 15px;
        }
    }
`;
document.head.appendChild(style);