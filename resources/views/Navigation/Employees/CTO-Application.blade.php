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
    background-color: white;
}

.form-control:focus {
    border-color: var(--primary-color);
    outline: none;
    box-shadow: 0 0 0 3px rgba(13, 77, 158, 0.1);
}

.readonly-field {
    background-color: #f8f9fa;
    border: 1px solid #ced4da;
    color: #495057;
    padding: 10px 15px;
    border-radius: 5px;
    font-weight: bold;
}

.signature-box {
    height: 100px;
    border: 1px solid #ddd;
    border-radius: 5px;
    margin-top: 10px;
    background-color: white;
    padding: 10px;
}

.signature-box.can-sign {
    cursor: pointer;
    border-style: dashed;
}

.signature-box.can-sign:hover {
    border-color: var(--primary-color);
    background-color: #f8f9fa;
}

.table-container {
    overflow-x: auto;
    margin-top: 20px;
}

.cto-table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

.cto-table th,
.cto-table td {
    border: 1px solid #dee2e6;
    padding: 12px;
    text-align: left;
}

.cto-table th {
    background-color: var(--primary-color);
    color: white;
    font-weight: 600;
}

.cto-table tr:nth-child(even) {
    background-color: #f8f9fa;
}

.cto-table input {
    width: 100%;
    border: 1px solid #dee2e6;
    background: white;
    padding: 8px;
    border-radius: 4px;
}

.cto-table input:focus {
    outline: none;
    border-color: var(--primary-color);
    box-shadow: 0 0 0 2px rgba(13, 77, 158, 0.1);
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

.btn-secondary {
    background-color: #6c757d;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    font-size: 0.9rem;
    font-weight: 600;
    cursor: pointer;
    transition: background-color 0.3s;
    display: inline-block;
}

.btn-secondary:hover {
    background-color: #545b62;
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
    
    .cto-table {
        font-size: 0.85rem;
    }
    
    .cto-table th,
    .cto-table td {
        padding: 8px;
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
                        <input type="text" id="cto-name" class="form-control" value="ANGELICA ANN G. ESTIPONA">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="cto-position">Position</label>
                        <input type="text" id="cto-position" class="form-control" value="ADA IV / Chief, Personnel Section/Division">
                    </div>
                    <div class="form-group">
                        <label for="cto-office">Office</label>
                        <input type="text" id="cto-office" class="form-control" value="DILG PANGASINAN PO">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="cto-filing-date">Date of Filing</label>
                        <input type="date" id="cto-filing-date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="cto-hours-applied">No. of hours Applied for</label>
                        <input type="number" id="cto-hours-applied" class="form-control" min="1" max="24" step="0.5" placeholder="Enter hours" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="cto-carded-by">Carded by</label>
                        <input type="text" id="cto-carded-by" class="form-control" value="ROMIALYN V. FERNANDEZ">
                    </div>
                    <div class="form-group">
                        <label for="cto-carded-date">Date</label>
                        <input type="date" id="cto-carded-date" class="form-control" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="cto-inclusive-dates">Inclusive Date/s</label>
                        <input type="text" id="cto-inclusive-dates" class="form-control" placeholder="e.g., January 15-16, 2024" required>
                    </div>
                </div>
            </div>
            
            <!-- Computation of Compensatory Overtime Credits -->
            <div class="form-section">
                <div class="form-section-title">COMPUTATION OF COMPENSATORY OVERTIME CREDITS (COC)</div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="coc-hours-earned">Number of hours earned</label>
                        <div class="form-row" style="gap: 10px;">
                            <input type="number" id="coc-hours-earned" class="form-control" style="flex: 2;" placeholder="Hours" step="0.5">
                            <span style="align-self: center;">as of</span>
                            <input type="month" id="coc-as-of-date" class="form-control" style="flex: 1;">
                        </div>
                    </div>
                </div>
                
                <div class="table-container">
                    <table class="cto-table">
                        <thead>
                            <tr>
                                <th>Month/s</th>
                                <th>No. of Hours Earned<br><small>(Include monthly COC's earned within the current year)</small></th>
                                <th>Date/s of CTO</th>
                                <th>Date/s of CTO</th>
                                <th>Remarks</th>
                            </tr>
                            <tr>
                                <th></th>
                                <th></th>
                                <th>Used COC's</th>
                                <th>Remaining COC's</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody id="coc-table-body">
                            <tr>
                                <td><input type="text" placeholder="Month/Year (e.g., January 2024)"></td>
                                <td><input type="number" placeholder="Hours" step="0.5"></td>
                                <td><input type="text" placeholder="Date used (e.g., Jan 15)"></td>
                                <td><input type="text" placeholder="Date remaining (e.g., Jan 16)"></td>
                                <td><input type="text" placeholder="Remarks"></td>
                            </tr>
                        </tbody>
                    </table>
                    <button type="button" class="btn-submit" onclick="addCocRow()" style="margin-top: 10px; padding: 8px 20px;">Add Row</button>
                    <button type="button" class="btn-secondary" onclick="clearCocTable()" style="margin-top: 10px; padding: 8px 20px; margin-left: 10px;">Clear Table</button>
                </div>
                
                <div class="form-row" style="margin-top: 20px;">
                    <div class="form-group">
                        <label for="prepared-by">Prepared by:</label>
                        <input type="text" id="prepared-by" class="form-control" placeholder="Enter name of person who prepared">
                    </div>
                </div>
            </div>
            
            <div class="form-row" style="justify-content: center; gap: 20px;">
                <button type="submit" class="btn-submit">Submit CTO Application</button>
                <button type="button" class="btn-secondary" onclick="resetForm()">Reset Form</button>
            </div>
        </form>
    </div>

    <footer class="footer">
        <p>DILG Pangasinan Employee Dashboard &copy; 2026 | Department of the Interior and Local Government - Region I</p>
    </footer>

    <script>
    // Initialize form with current date
    document.addEventListener('DOMContentLoaded', function() {
        const today = new Date();
        document.getElementById('cto-filing-date').valueAsDate = today;
        document.getElementById('cto-carded-date').valueAsDate = today;
        
        // Set current month for COC
        const currentMonth = today.toISOString().slice(0, 7);
        document.getElementById('coc-as-of-date').value = currentMonth;
    });
    
    function addSignature() {
        const name = document.getElementById('cto-name').value || "Applicant";
        const signatureBox = document.getElementById('signature-box');
        signatureBox.innerHTML = `<strong>${name}</strong>`;
        signatureBox.style.fontStyle = 'normal';
        signatureBox.style.color = '#212529';
        signatureBox.classList.remove('can-sign');
    }
    
    function addPreparedSignature() {
        const preparedBy = document.getElementById('prepared-by').value || "Preparer";
        const signatureBox = document.getElementById('prepared-signature');
        signatureBox.innerHTML = `<strong>${preparedBy}</strong>`;
        signatureBox.style.fontStyle = 'normal';
        signatureBox.style.color = '#212529';
        signatureBox.classList.remove('can-sign');
    }
    
    function addCocRow() {
        const tableBody = document.getElementById('coc-table-body');
        const newRow = document.createElement('tr');
        newRow.innerHTML = `
            <td><input type="text" placeholder="Month/Year (e.g., January 2024)"></td>
            <td><input type="number" placeholder="Hours" step="0.5"></td>
            <td><input type="text" placeholder="Date used (e.g., Jan 15)"></td>
            <td><input type="text" placeholder="Date remaining (e.g., Jan 16)"></td>
            <td><input type="text" placeholder="Remarks"></td>
        `;
        tableBody.appendChild(newRow);
        
        // Focus on the first input of the new row
        newRow.querySelector('input').focus();
    }
    
    function clearCocTable() {
        if (confirm('Are you sure you want to clear the entire COC table?')) {
            const tableBody = document.getElementById('coc-table-body');
            tableBody.innerHTML = `
                <tr>
                    <td><input type="text" placeholder="Month/Year (e.g., January 2024)"></td>
                    <td><input type="number" placeholder="Hours" step="0.5"></td>
                    <td><input type="text" placeholder="Date used (e.g., Jan 15)"></td>
                    <td><input type="text" placeholder="Date remaining (e.g., Jan 16)"></td>
                    <td><input type="text" placeholder="Remarks"></td>
                </tr>
            `;
        }
    }
    
    function resetForm() {
        if (confirm('Are you sure you want to reset the entire form?')) {
            document.getElementById('cto-application-form').reset();
            
            // Reset signature boxes
            document.getElementById('signature-box').innerHTML = '<span style="color: #6c757d; font-style: italic;">Click to add signature</span>';
            document.getElementById('signature-box').classList.add('can-sign');
            document.getElementById('prepared-signature').innerHTML = '<span style="color: #6c757d; font-style: italic;">Click to add prepared by signature</span>';
            document.getElementById('prepared-signature').classList.add('can-sign');
            
            // Reset COC table
            clearCocTable();
            
            // Reset dates to today
            const today = new Date();
            document.getElementById('cto-filing-date').valueAsDate = today;
            document.getElementById('cto-carded-date').valueAsDate = today;
            
            // Set current month for COC
            const currentMonth = today.toISOString().slice(0, 7);
            document.getElementById('coc-as-of-date').value = currentMonth;
        }
    }
    
    function handleCtoSubmit(event) {
        event.preventDefault();
        
        // Get form values
        const formData = {
            name: document.getElementById('cto-name').value,
            position: document.getElementById('cto-position').value,
            office: document.getElementById('cto-office').value,
            filingDate: document.getElementById('cto-filing-date').value,
            hoursApplied: document.getElementById('cto-hours-applied').value,
            inclusiveDates: document.getElementById('cto-inclusive-dates').value,
            cardedBy: document.getElementById('cto-carded-by').value,
            cardedDate: document.getElementById('cto-carded-date').value,
            cocHoursEarned: document.getElementById('coc-hours-earned').value,
            cocAsOfDate: document.getElementById('coc-as-of-date').value,
            preparedBy: document.getElementById('prepared-by').value,
            cocEntries: []
        };
        
        // Collect table data
        const tableRows = document.querySelectorAll('#coc-table-body tr');
        tableRows.forEach(row => {
            const inputs = row.querySelectorAll('input');
            formData.cocEntries.push({
                month: inputs[0].value,
                hoursEarned: inputs[1].value,
                usedCocs: inputs[2].value,
                remainingCocs: inputs[3].value,
                remarks: inputs[4].value
            });
        });
        
        // Basic validation
        if (!formData.hoursApplied || formData.hoursApplied < 1 || formData.hoursApplied > 24) {
            alert('Please enter hours between 1 and 24');
            return;
        }
        
        // Check signature
        const signatureBox = document.getElementById('signature-box');
        if (signatureBox.classList.contains('can-sign')) {
            if (!confirm('No signature has been added. Continue without signature?')) {
                return;
            }
        }
        
        console.log('CTO Form Submitted:', formData);
        
        // Show success message
        alert('CTO Application submitted successfully!\n\nData has been saved and can be viewed in the console.');
        
        // Optionally reset form
        // resetForm();
    }
    </script>
</body>
</x-layout2>