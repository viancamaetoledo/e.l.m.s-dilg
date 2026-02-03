<x-layout>
<!-- Settings Tab -->
                <div id="settings" class="tab-content">
                    <div class="dashboard-title">
                        <h2>System Settings</h2>
                    </div>
                    
                    <div class="dashboard-grid">
                        <div class="dashboard-card">
                            <div class="card-header">
                                <h3>Leave Policy Settings</h3>
                            </div>
                            <form id="settingsForm">
                                <div class="form-group">
                                    <label for="vlCredits">Vacation Leave Credits per Year</label>
                                    <input type="number" id="vlCredits" class="form-control" value="15" min="0" max="30">
                                </div>
                                
                                <div class="form-group">
                                    <label for="slCredits">Sick Leave Credits per Year</label>
                                    <input type="number" id="slCredits" class="form-control" value="15" min="0" max="30">
                                </div>
                                
                                <div class="form-group">
                                    <label for="approvalLevels">Approval Levels Required</label>
                                    <select id="approvalLevels" class="form-control">
                                        <option value="1">Immediate Supervisor Only</option>
                                        <option value="2" selected>Supervisor + Department Head</option>
                                        <option value="3">Supervisor + Dept Head + HR</option>
                                    </select>
                                </div>
                                
                                <button type="submit" class="btn-submit">Save Settings</button>
                            </form>
                        </div>
                        
                        <div class="dashboard-card">
                            <div class="card-header">
                                <h3>User Management</h3>
                            </div>
                            <p>User account management settings will appear here.</p>
                        </div>
                    </div>
                </div>
</x-layout>