<x-layout>
<!-- Leave Form Container -->
        <div class="form-container" id="leave-form-container">
           <div class="cto-form-header">
                <h2>DEPARTMENT OF THE INTERIOR AND LOCAL GOVERNMENT</h2>
                <h3>Regional Office I</h3>
                <h2>APPLICATION FOR LEAVE</h2>
            </div>
            <form id="leave-application-form">
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
                    </div>
                    <div class="form-group">
                        <label for="end-date">End Date</label>
                        <input type="date" id="end-date" class="form-control" required>
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
</x-layout>