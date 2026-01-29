<x-layout2>
<style>
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

/* Leave Form Specific Styles */
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
    box-sizing: border-box;
}

.form-control:focus {
    border-color: var(--primary-color);
    outline: none;
    box-shadow: 0 0 0 3px rgba(13, 77, 158, 0.1);
}

select.form-control {
    appearance: none;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%23333' viewBox='0 0 16 16'%3E%3Cpath d='M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 15px center;
    background-size: 12px;
    padding-right: 40px;
}

textarea.form-control {
    resize: vertical;
    min-height: 100px;
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

.btn-submit:disabled {
    background-color: #ccc;
    cursor: not-allowed;
}

/* Form validation styles */
.form-control:invalid {
    border-color: #dc3545;
}

.form-control:valid {
    border-color: #28a745;
}

/* Date range validation warning */
.date-warning {
    color: #dc3545;
    font-size: 0.85rem;
    margin-top: 5px;
    display: none;
}

/* Readonly field styling */
.form-control[readonly] {
    background-color: #f8f9fa;
    cursor: not-allowed;
    border-color: #dee2e6;
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

/* Responsive design */
@media (max-width: 768px) {
    .form-container {
        padding: 20px;
        margin: 10px;
    }
    
    .form-group {
        min-width: 100%;
    }
    
    .cto-form-header h2 {
        font-size: 1.5rem;
    }
    
    .cto-form-header h3 {
        font-size: 1.1rem;
    }
}
</style>

<body>
    <!-- Leave Form Container -->
    <div class="form-container active" id="leave-form-container">
        <div class="cto-form-header">
            <h2>DEPARTMENT OF THE INTERIOR AND LOCAL GOVERNMENT</h2>
            <h3>Regional Office I</h3>
            <h2>APPLICATION FOR LEAVE</h2>
        </div>
        
        <form id="leave-application-form" onsubmit="handleLeaveSubmit(event)">
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
                    <div class="date-warning" id="start-date-warning">Start date cannot be in the past</div>
                </div>
                <div class="form-group">
                    <label for="end-date">End Date</label>
                    <input type="date" id="end-date" class="form-control" required>
                    <div class="date-warning" id="end-date-warning">End date must be after start date</div>
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

    <footer class="footer">
        <p>DILG Pangasinan Employee Dashboard &copy; 2026 | Department of the Interior and Local Government - Region I</p>
    </footer>

    <script>
    function handleLeaveSubmit(event) {
        event.preventDefault();
        
        // Get form values
        const formData = {
            leaveType: document.getElementById('leave-type').value,
            employeeName: document.getElementById('employee-name').value,
            startDate: document.getElementById('start-date').value,
            endDate: document.getElementById('end-date').value,
            numberOfDays: document.getElementById('number-of-days').value,
            reason: document.getElementById('reason').value,
            contactInfo: document.getElementById('contact-during-leave').value
        };
        
        // Validate dates
        const startDate = new Date(formData.startDate);
        const endDate = new Date(formData.endDate);
        const today = new Date();
        today.setHours(0, 0, 0, 0);
        
        if (startDate < today) {
            alert('Start date cannot be in the past.');
            return;
        }
        
        if (endDate < startDate) {
            alert('End date must be after start date.');
            return;
        }
        
        // Validate number of days
        const daysDiff = Math.ceil((endDate - startDate) / (1000 * 60 * 60 * 24)) + 1;
        if (formData.numberOfDays > daysDiff) {
            if (!confirm(`Number of days (${formData.numberOfDays}) exceeds selected date range (${daysDiff} days). Do you want to continue?`)) {
                return;
            }
        }
        
        // Here you would typically send data to server
        console.log('Leave Application Submitted:', formData);
        
        // Show success message
        alert('Leave application submitted successfully!');
        
        // Reset form (optional)
        // event.target.reset();
    }
    
    // Set default dates
    document.addEventListener('DOMContentLoaded', function() {
        const today = new Date();
        const tomorrow = new Date(today);
        tomorrow.setDate(tomorrow.getDate() + 1);
        
        // Format dates for input type="date"
        const formatDate = (date) => {
            return date.toISOString().split('T')[0];
        };
        
        document.getElementById('start-date').value = formatDate(today);
        document.getElementById('end-date').value = formatDate(tomorrow);
        document.getElementById('number-of-days').value = 1;
        
        // Auto-calculate days when dates change
        const startDateInput = document.getElementById('start-date');
        const endDateInput = document.getElementById('end-date');
        const daysInput = document.getElementById('number-of-days');
        
        function calculateDays() {
            if (startDateInput.value && endDateInput.value) {
                const start = new Date(startDateInput.value);
                const end = new Date(endDateInput.value);
                
                if (end >= start) {
                    const days = Math.ceil((end - start) / (1000 * 60 * 60 * 24)) + 1;
                    daysInput.value = days;
                }
            }
        }
        
        startDateInput.addEventListener('change', calculateDays);
        endDateInput.addEventListener('change', calculateDays);
        
        // Date validation
        startDateInput.addEventListener('change', function() {
            const warning = document.getElementById('start-date-warning');
            const selectedDate = new Date(this.value);
            
            if (selectedDate < today) {
                warning.style.display = 'block';
            } else {
                warning.style.display = 'none';
            }
        });
        
        endDateInput.addEventListener('change', function() {
            const warning = document.getElementById('end-date-warning');
            const startDate = new Date(startDateInput.value);
            const endDate = new Date(this.value);
            
            if (endDate < startDate) {
                warning.style.display = 'block';
            } else {
                warning.style.display = 'none';
            }
        });
    });
    </script>
</body>
</x-layout2>