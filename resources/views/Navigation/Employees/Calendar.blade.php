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
            padding: 20px;
            min-height: 100vh;
        }
        
        .container {
            max-width: 1400px;
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
        
        /* Calendar Controls */
        .calendar-controls {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
            flex-wrap: wrap;
            gap: 15px;
        }
        
        .month-nav {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .month-year {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--primary-dark);
            min-width: 200px;
            text-align: center;
        }
        
        .nav-btn {
            background-color: var(--white);
            border: 1px solid var(--border-color);
            color: var(--primary-color);
            width: 40px;
            height: 40px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.2s ease;
        }
        
        .nav-btn:hover {
            background-color: rgba(26, 82, 118, 0.05);
            border-color: var(--primary-color);
        }
        
        .today-btn {
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 8px;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.2s ease;
        }
        
        .today-btn:hover {
            background-color: var(--primary-dark);
        }
        
        /* Filter Controls */
        .filter-controls {
            display: flex;
            align-items: center;
            gap: 15px;
            flex-wrap: wrap;
        }
        
        .filter-btn {
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.2s ease;
            border: 1px solid var(--border-color);
            background-color: var(--white);
            color: var(--dark-gray);
        }
        
        .filter-btn.active {
            background-color: var(--primary-color);
            color: white;
            border-color: var(--primary-color);
        }
        
        .filter-btn:hover:not(.active) {
            background-color: rgba(26, 82, 118, 0.05);
            border-color: var(--primary-color);
        }
        
        /* Calendar Grid */
        .calendar-container {
            background-color: var(--white);
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(26, 82, 118, 0.06);
            overflow: hidden;
            border: 1px solid var(--border-color);
            margin-bottom: 30px;
        }
        
        .calendar-header {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            background-color: var(--primary-dark);
            color: white;
            text-align: center;
            font-weight: 600;
            padding: 15px 0;
        }
        
        .calendar-day-header {
            padding: 10px 5px;
            font-size: 0.9rem;
        }
        
        .calendar-grid {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            min-height: 500px;
        }
        
        .calendar-day {
            border-right: 1px solid var(--light-bg);
            border-bottom: 1px solid var(--light-bg);
            padding: 10px;
            min-height: 100px;
            position: relative;
            transition: background-color 0.2s ease;
        }
        
        .calendar-day:nth-child(7n) {
            border-right: none;
        }
        
        .calendar-day.other-month {
            background-color: #fafbfc;
            color: var(--dark-gray);
        }
        
        .calendar-day:hover {
            background-color: rgba(26, 82, 118, 0.02);
        }
        
        .day-number {
            font-weight: 600;
            font-size: 1.1rem;
            margin-bottom: 5px;
            color: var(--primary-dark);
        }
        
        .calendar-day.other-month .day-number {
            color: var(--dark-gray);
            opacity: 0.6;
        }
        
        .calendar-day.today .day-number {
            background-color: var(--accent-color);
            color: white;
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
        }
        
        /* Event Styles */
        .event-container {
            margin-top: 8px;
            max-height: 70px;
            overflow-y: auto;
            padding-right: 3px;
        }
        
        .event-container::-webkit-scrollbar {
            width: 4px;
        }
        
        .event-container::-webkit-scrollbar-thumb {
            background-color: rgba(26, 82, 118, 0.2);
            border-radius: 4px;
        }
        
        .event {
            font-size: 0.75rem;
            padding: 4px 6px;
            border-radius: 4px;
            margin-bottom: 4px;
            cursor: pointer;
            transition: transform 0.2s ease;
            display: flex;
            align-items: center;
            gap: 4px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        
        .event:hover {
            transform: translateX(3px);
        }
        
        .event-icon {
            font-size: 0.7rem;
        }
        
        /* Event Types */
        .event.annual-leave {
            background-color: rgba(26, 82, 118, 0.1);
            border-left: 3px solid var(--primary-color);
            color: var(--primary-dark);
        }
        
        .event.sick-leave {
            background-color: rgba(252, 65, 0, 0.1);
            border-left: 3px solid var(--accent-color);
            color: #b03a00;
        }
        
        .event.personal-leave {
            background-color: rgba(139, 92, 246, 0.1);
            border-left: 3px solid #8B5CF6;
            color: #6d28d9;
        }
        
        .event.cto {
            background-color: rgba(255, 197, 90, 0.15);
            border-left: 3px solid var(--secondary-color);
            color: #b56b00;
        }
        
        .event.half-day {
            background: repeating-linear-gradient(
                45deg,
                transparent,
                transparent 5px,
                rgba(255,255,255,0.5) 5px,
                rgba(255,255,255,0.5) 10px
            );
        }
        
        /* Event Details Panel */
        .event-details-panel {
            background-color: var(--white);
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(26, 82, 118, 0.06);
            border: 1px solid var(--border-color);
            padding: 25px;
            margin-top: 30px;
        }
        
        .panel-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid var(--border-color);
        }
        
        .panel-title {
            font-size: 1.3rem;
            font-weight: 600;
            color: var(--primary-dark);
        }
        
        .close-panel-btn {
            background: none;
            border: none;
            color: var(--dark-gray);
            font-size: 1.2rem;
            cursor: pointer;
            transition: color 0.2s ease;
        }
        
        .close-panel-btn:hover {
            color: var(--accent-color);
        }
        
        .event-detail {
            display: none;
        }
        
        .event-detail.active {
            display: block;
        }
        
        .event-info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 25px;
        }
        
        .info-item {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }
        
        .info-label {
            font-size: 0.85rem;
            color: var(--dark-gray);
            font-weight: 500;
        }
        
        .info-value {
            font-size: 1rem;
            color: var(--text);
            font-weight: 500;
        }
        
        .status-badge {
            display: inline-block;
            padding: 4px 10px;
            border-radius: 12px;
            font-size: 0.8rem;
            font-weight: 600;
            text-align: center;
            min-width: 70px;
        }
        
        .status-pending {
            background-color: rgba(255, 197, 90, 0.15);
            color: #b56b00;
        }
        
        .status-approved {
            background-color: rgba(26, 82, 118, 0.1);
            color: var(--primary-color);
        }
        
        .status-used {
            background-color: rgba(252, 65, 0, 0.1);
            color: var(--accent-color);
        }
        
        .status-upcoming {
            background-color: rgba(23, 162, 184, 0.1);
            color: var(--info-color);
        }
        
        .event-actions {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }
        
        .action-btn {
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
        
        .action-btn.edit {
            background-color: var(--primary-color);
            color: white;
        }
        
        .action-btn.edit:hover {
            background-color: var(--primary-dark);
        }
        
        .action-btn.cancel {
            background-color: rgba(220, 53, 69, 0.1);
            color: var(--danger-color);
            border: 1px solid rgba(220, 53, 69, 0.3);
        }
        
        .action-btn.cancel:hover {
            background-color: rgba(220, 53, 69, 0.2);
        }
        
        /* Legend */
        .legend {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
            flex-wrap: wrap;
        }
        
        .legend-item {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 0.85rem;
            color: var(--dark-gray);
        }
        
        .legend-color {
            width: 15px;
            height: 15px;
            border-radius: 3px;
        }
        
        .legend-annual {
            background-color: var(--primary-color);
        }
        
        .legend-sick {
            background-color: var(--accent-color);
        }
        
        .legend-personal {
            background-color: #8B5CF6;
        }
        
        .legend-cto {
            background-color: var(--secondary-color);
        }
        
        /* Responsive */
        @media (max-width: 992px) {
            .calendar-day {
                min-height: 90px;
                padding: 8px 5px;
            }
            
            .event {
                font-size: 0.7rem;
                padding: 3px 4px;
            }
            
            .event-info-grid {
                grid-template-columns: 1fr;
            }
        }
        
        @media (max-width: 768px) {
            .page-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }
            
            .calendar-controls {
                flex-direction: column;
                align-items: stretch;
            }
            
            .month-nav {
                justify-content: center;
            }
            
            .filter-controls {
                justify-content: center;
            }
            
            .calendar-header {
                font-size: 0.8rem;
            }
            
            .calendar-day {
                min-height: 80px;
            }
            
            .day-number {
                font-size: 0.9rem;
            }
        }
        
        @media (max-width: 576px) {
            .calendar-grid {
                min-height: 400px;
            }
            
            .calendar-day {
                min-height: 70px;
            }
            
            .event {
                font-size: 0.65rem;
                padding: 2px 3px;
            }
            
            .legend {
                gap: 10px;
            }
        }
    </style>
<body>
    <div class="container">
        <header class="page-header">
            <div class="header-content">
                <h1>Leave & CTO Calendar</h1>
                <div class="subtitle">
                    <span>Visualize your past, current, and future leaves</span>
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
        
        <!-- Calendar Controls -->
        <div class="calendar-controls">
            <div class="month-nav">
                <button class="nav-btn" id="prev-month">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <div class="month-year" id="current-month">December 2023</div>
                <button class="nav-btn" id="next-month">
                    <i class="fas fa-chevron-right"></i>
                </button>
                <button class="today-btn" id="today-btn">
                    <i class="fas fa-calendar-day"></i> Today
                </button>
            </div>
            
            <div class="filter-controls">
                <button class="filter-btn active" data-filter="all">All Leaves</button>
                <button class="filter-btn" data-filter="annual">Annual Leave</button>
                <button class="filter-btn" data-filter="sick">Sick Leave</button>
                <button class="filter-btn" data-filter="personal">Personal Leave</button>
                <button class="filter-btn" data-filter="cto">CTO</button>
            </div>
        </div>
        
        <!-- Calendar -->
        <div class="calendar-container">
            <div class="calendar-header">
                <div class="calendar-day-header">Sun</div>
                <div class="calendar-day-header">Mon</div>
                <div class="calendar-day-header">Tue</div>
                <div class="calendar-day-header">Wed</div>
                <div class="calendar-day-header">Thu</div>
                <div class="calendar-day-header">Fri</div>
                <div class="calendar-day-header">Sat</div>
            </div>
            <div class="calendar-grid" id="calendar-grid">
                <!-- Calendar days will be generated by JavaScript -->
            </div>
        </div>
        
        <!-- Legend -->
        <div class="legend">
            <div class="legend-item">
                <div class="legend-color legend-annual"></div>
                <span>Annual Leave</span>
            </div>
            <div class="legend-item">
                <div class="legend-color legend-sick"></div>
                <span>Sick Leave</span>
            </div>
            <div class="legend-item">
                <div class="legend-color legend-personal"></div>
                <span>Personal Leave</span>
            </div>
            <div class="legend-item">
                <div class="legend-color legend-cto"></div>
                <span>CTO (Compensatory Time Off)</span>
            </div>
            <div class="legend-item">
                <div class="legend-color" style="background-color: var(--accent-color);"></div>
                <span>Today</span>
            </div>
        </div>
        
        <!-- Event Details Panel -->
        <div class="event-details-panel" id="event-details-panel" style="display: none;">
            <div class="panel-header">
                <h3 class="panel-title">Leave Details</h3>
                <button class="close-panel-btn" id="close-panel-btn">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            
            <div class="event-detail" id="event-detail-content">
                <!-- Event details will be populated by JavaScript -->
            </div>
        </div>
    </div>

    <script>
        // Calendar data
        const currentDate = new Date();
        let currentMonth = currentDate.getMonth();
        let currentYear = currentDate.getFullYear();
        
        // Sample leave and CTO data
        const leaveData = [
            {
                id: 1,
                title: "Annual Leave",
                type: "annual-leave",
                startDate: "2023-11-20",
                endDate: "2023-11-22",
                days: 3,
                status: "used",
                description: "Thanksgiving vacation with family",
                approvedBy: "Jane Smith",
                approvedDate: "2023-11-15"
            },
            {
                id: 2,
                title: "Sick Leave",
                type: "sick-leave",
                startDate: "2023-12-05",
                endDate: "2023-12-05",
                days: 1,
                status: "used",
                description: "Doctor appointment for annual checkup",
                approvedBy: "Jane Smith",
                approvedDate: "2023-12-01"
            },
            {
                id: 3,
                title: "CTO",
                type: "cto",
                startDate: "2023-12-12",
                endDate: "2023-12-12",
                days: 0.5,
                hours: 4,
                status: "used",
                description: "Comp time for overtime worked last week",
                approvedBy: "Jane Smith",
                approvedDate: "2023-12-10"
            },
            {
                id: 4,
                title: "Annual Leave",
                type: "annual-leave",
                startDate: "2023-12-18",
                endDate: "2023-12-22",
                days: 5,
                status: "approved",
                description: "Christmas holiday vacation",
                approvedBy: "Jane Smith",
                approvedDate: "2023-12-01"
            },
            {
                id: 5,
                title: "Personal Leave",
                type: "personal-leave",
                startDate: "2023-12-27",
                endDate: "2023-12-27",
                days: 1,
                status: "pending",
                description: "Moving to new apartment",
                approvedBy: "",
                approvedDate: ""
            },
            {
                id: 6,
                title: "Annual Leave",
                type: "annual-leave",
                startDate: "2024-01-08",
                endDate: "2024-01-12",
                days: 5,
                status: "approved",
                description: "New Year vacation extension",
                approvedBy: "Jane Smith",
                approvedDate: "2023-12-15"
            },
            {
                id: 7,
                title: "CTO",
                type: "cto",
                startDate: "2024-01-15",
                endDate: "2024-01-15",
                days: 0.5,
                hours: 4,
                status: "pending",
                description: "Comp time for weekend work",
                approvedBy: "",
                approvedDate: ""
            },
            {
                id: 8,
                title: "Sick Leave",
                type: "sick-leave",
                startDate: "2023-10-10",
                endDate: "2023-10-11",
                days: 2,
                status: "used",
                description: "Flu recovery",
                approvedBy: "Jane Smith",
                approvedDate: "2023-10-09"
            }
        ];
        
        // Initialize calendar
        document.addEventListener('DOMContentLoaded', function() {
            renderCalendar(currentMonth, currentYear);
            setupEventListeners();
        });
        
        // Render calendar for specific month/year
        function renderCalendar(month, year) {
            const calendarGrid = document.getElementById('calendar-grid');
            calendarGrid.innerHTML = '';
            
            // Update month/year display
            const monthNames = ["January", "February", "March", "April", "May", "June",
                "July", "August", "September", "October", "November", "December"];
            document.getElementById('current-month').textContent = `${monthNames[month]} ${year}`;
            
            // Get first day of month and total days
            const firstDay = new Date(year, month, 1);
            const lastDay = new Date(year, month + 1, 0);
            const daysInMonth = lastDay.getDate();
            const startingDay = firstDay.getDay(); // 0 = Sunday
            
            // Get previous month's days to fill the grid
            const prevMonthLastDay = new Date(year, month, 0).getDate();
            
            // Create days from previous month
            for (let i = 0; i < startingDay; i++) {
                const day = document.createElement('div');
                day.className = 'calendar-day other-month';
                const dayNumber = prevMonthLastDay - startingDay + i + 1;
                day.innerHTML = `<div class="day-number">${dayNumber}</div>`;
                calendarGrid.appendChild(day);
            }
            
            // Create days for current month
            const today = new Date();
            const isCurrentMonth = today.getMonth() === month && today.getFullYear() === year;
            
            for (let i = 1; i <= daysInMonth; i++) {
                const day = document.createElement('div');
                const dateStr = `${year}-${String(month + 1).padStart(2, '0')}-${String(i).padStart(2, '0')}`;
                
                // Check if this is today
                if (isCurrentMonth && i === today.getDate()) {
                    day.className = 'calendar-day today';
                } else {
                    day.className = 'calendar-day';
                }
                
                day.dataset.date = dateStr;
                day.innerHTML = `<div class="day-number">${i}</div><div class="event-container" id="events-${dateStr}"></div>`;
                
                // Add events for this day
                addEventsToDay(dateStr, day);
                
                calendarGrid.appendChild(day);
            }
            
            // Fill remaining cells with next month's days
            const totalCells = 42; // 6 weeks * 7 days
            const daysSoFar = startingDay + daysInMonth;
            const remainingCells = totalCells - daysSoFar;
            
            for (let i = 1; i <= remainingCells; i++) {
                const day = document.createElement('div');
                day.className = 'calendar-day other-month';
                day.innerHTML = `<div class="day-number">${i}</div>`;
                calendarGrid.appendChild(day);
            }
        }
        
        // Add events to a specific day
        function addEventsToDay(dateStr, dayElement) {
            const eventContainer = dayElement.querySelector('.event-container');
            const events = leaveData.filter(event => {
                const start = new Date(event.startDate);
                const end = new Date(event.endDate);
                const current = new Date(dateStr);
                
                // Check if current date is between start and end (inclusive)
                return current >= start && current <= end;
            });
            
            // Get active filter
            const activeFilter = document.querySelector('.filter-btn.active').dataset.filter;
            
            events.forEach(event => {
                // Apply filter
                if (activeFilter !== 'all') {
                    if (activeFilter === 'annual' && event.type !== 'annual-leave') return;
                    if (activeFilter === 'sick' && event.type !== 'sick-leave') return;
                    if (activeFilter === 'personal' && event.type !== 'personal-leave') return;
                    if (activeFilter === 'cto' && event.type !== 'cto') return;
                }
                
                const eventElement = document.createElement('div');
                eventElement.className = `event ${event.type}`;
                if (event.days < 1) eventElement.classList.add('half-day');
                
                // Set icon based on type
                let icon = 'fas fa-calendar';
                if (event.type === 'sick-leave') icon = 'fas fa-stethoscope';
                if (event.type === 'cto') icon = 'fas fa-clock';
                if (event.type === 'personal-leave') icon = 'fas fa-user';
                
                eventElement.innerHTML = `
                    <i class="${icon} event-icon"></i>
                    ${event.title}${event.days < 1 ? ' (Half)' : ''}
                `;
                
                eventElement.dataset.eventId = event.id;
                eventElement.addEventListener('click', () => showEventDetails(event.id));
                
                eventContainer.appendChild(eventElement);
            });
        }
        
        // Show event details
        function showEventDetails(eventId) {
            const event = leaveData.find(e => e.id === eventId);
            if (!event) return;
            
            const panel = document.getElementById('event-details-panel');
            const content = document.getElementById('event-detail-content');
            
            // Determine status text and class
            let statusText, statusClass;
            switch(event.status) {
                case 'pending':
                    statusText = 'Pending Approval';
                    statusClass = 'status-pending';
                    break;
                case 'approved':
                    statusText = 'Approved';
                    statusClass = 'status-approved';
                    break;
                case 'used':
                    statusText = 'Used/Completed';
                    statusClass = 'status-used';
                    break;
                default:
                    statusText = 'Upcoming';
                    statusClass = 'status-upcoming';
            }
            
            // Determine if it's past, current, or future
            const today = new Date();
            const startDate = new Date(event.startDate);
            const endDate = new Date(event.endDate);
            let timeStatus = 'future';
            
            if (endDate < today) {
                timeStatus = 'past';
            } else if (startDate <= today && endDate >= today) {
                timeStatus = 'current';
            }
            
            content.innerHTML = `
                <div class="event-info-grid">
                    <div class="info-item">
                        <div class="info-label">Leave Type</div>
                        <div class="info-value">${event.title}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Duration</div>
                        <div class="info-value">${event.startDate} to ${event.endDate} (${event.days} day${event.days !== 1 ? 's' : ''}${event.hours ? `, ${event.hours} hours` : ''})</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Status</div>
                        <div class="info-value"><span class="status-badge ${statusClass}">${statusText}</span></div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Time Period</div>
                        <div class="info-value">${timeStatus === 'past' ? 'Past Leave' : timeStatus === 'current' ? 'Current Leave' : 'Future Leave'}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Approved By</div>
                        <div class="info-value">${event.approvedBy || 'Pending approval'}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Approval Date</div>
                        <div class="info-value">${event.approvedDate || 'Not yet approved'}</div>
                    </div>
                </div>
                
                <div class="info-item">
                    <div class="info-label">Description</div>
                    <div class="info-value">${event.description}</div>
                </div>
                
                <div class="event-actions">
                    <button class="action-btn edit" onclick="editEvent(${eventId})">
                        <i class="fas fa-edit"></i> Edit Request
                    </button>
                    ${event.status === 'pending' ? `
                    <button class="action-btn cancel" onclick="cancelEvent(${eventId})">
                        <i class="fas fa-times"></i> Cancel Request
                    </button>
                    ` : ''}
                </div>
            `;
            
            panel.style.display = 'block';
            setTimeout(() => {
                panel.scrollIntoView({ behavior: 'smooth' });
            }, 100);
        }
        
        // Setup event listeners
        function setupEventListeners() {
            // Month navigation
            document.getElementById('prev-month').addEventListener('click', () => {
                currentMonth--;
                if (currentMonth < 0) {
                    currentMonth = 11;
                    currentYear--;
                }
                renderCalendar(currentMonth, currentYear);
            });
            
            document.getElementById('next-month').addEventListener('click', () => {
                currentMonth++;
                if (currentMonth > 11) {
                    currentMonth = 0;
                    currentYear++;
                }
                renderCalendar(currentMonth, currentYear);
            });
            
            document.getElementById('today-btn').addEventListener('click', () => {
                currentMonth = currentDate.getMonth();
                currentYear = currentDate.getFullYear();
                renderCalendar(currentMonth, currentYear);
            });
            
            // Filter buttons
            document.querySelectorAll('.filter-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
                    this.classList.add('active');
                    renderCalendar(currentMonth, currentYear);
                });
            });
            
            // Close panel button
            document.getElementById('close-panel-btn').addEventListener('click', () => {
                document.getElementById('event-details-panel').style.display = 'none';
            });
        }
        
        // Demo functions (would be connected to backend in real application)
        function editEvent(eventId) {
            alert(`Editing event ${eventId} - This would open an edit form in a real application.`);
        }
        
        function cancelEvent(eventId) {
            if (confirm('Are you sure you want to cancel this leave request?')) {
                alert(`Cancelling event ${eventId} - This would send a cancellation request in a real application.`);
            }
        }
    </script>
</body>
</x-layout2>