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

/* CTO Form Specific Styles */
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

.form-section {
    margin-bottom: 30px;
    padding: 20px;
    border: 1px solid #dee2e6;
    border-radius: 5px;
}

.form-section-title {
    font-weight: bold;
    color: var(--primary-color);
    margin-bottom: 15px;
    padding-bottom: 10px;
    border-bottom: 1px solid #dee2e6;
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
}

.form-control:focus {
    border-color: var(--primary-color);
    outline: none;
    box-shadow: 0 0 0 3px rgba(13, 77, 158, 0.1);
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

/* Footer */
.footer {
    text-align: center;
    margin-top: 40px;
    padding-top: 20px;
    border-top: 1px solid #dee2e6;
    color: var(--gray-color);
    font-size: 0.9rem;
}

/* Added responsive design */
@media (max-width: 768px) {
    .form-container {
        padding: 20px;
    }
    
    .form-group {
        min-width: 100%;
    }
    
    .cto-form-header h2 {
        font-size: 1.5rem;
    }
}
</style>

<body>
    <!-- CTO Form Container -->
    <div class="form-container active" id="cto-form-container">
        <div class="cto-form-header">
            <h2>DEPARTMENT OF THE INTERIOR AND LOCAL GOVERNMENT</h2>
            <h3>Regional Office I</h3>
            <h2>COMPENSATORY TIME-OFF (CTO) APPLICATION FORM</h2>
        </div>
        
        <form id="cto-application-form" onsubmit="handleCtoSubmit(event)">
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
                        <input type="number" id="cto-hours-applied" class="form-control" min="1" max="24" step="0.5" required>
                    </div>
                    <div class="form-group">
                        <label for="cto-inclusive-dates">Inclusive Date/s</label>
                        <input type="text" id="cto-inclusive-dates" class="form-control" placeholder="e.g., January 15-16, 2024" required>
                    </div>
                </div>
            </div>
            
            <button type="submit" class="btn-submit">Submit CTO Application</button>
        </form>
    </div>

    <footer class="footer">
        <p>DILG Pangasinan Employee Dashboard &copy; 2026 | Department of the Interior and Local Government - Region I</p>
    </footer>

    <script>
    function handleCtoSubmit(event) {
        event.preventDefault();
        
        // Get form values
        const formData = {
            name: document.getElementById('cto-name').value,
            position: document.getElementById('cto-position').value,
            office: document.getElementById('cto-office').value,
            filingDate: document.getElementById('cto-filing-date').value,
            hoursApplied: document.getElementById('cto-hours-applied').value,
            inclusiveDates: document.getElementById('cto-inclusive-dates').value
        };
        
        // Basic validation
        if (formData.hoursApplied < 1 || formData.hoursApplied > 24) {
            alert('Please enter hours between 1 and 24');
            return;
        }
        
        // Here you would typically send data to server
        console.log('CTO Form Submitted:', formData);
        
        // Show success message (replace with actual submission logic)
        alert('CTO Application submitted successfully!');
        
        // Reset form (optional)
        // event.target.reset();
    }
    
    // Set default date to today
    document.getElementById('cto-filing-date').valueAsDate = new Date();
    </script>
</body>
</x-layout2>