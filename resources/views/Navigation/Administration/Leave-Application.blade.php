<x-layout>
<!-- Leave Applications Tab -->
                <div id="leave-applications" class="tab-content">
                    <div class="dashboard-title">
                        <h2>Leave Applications</h2>
                        <button class="btn-submit" id="filterLeavesBtn">
                            <i class="fas fa-filter"></i> Filter
                        </button>
                    </div>
                    
                    <!-- Tabs for Leave Applications -->
                    <div class="tab-navigation">
                        <button class="tab-btn active" data-leave-tab="pending">Pending (18)</button>
                        <button class="tab-btn" data-leave-tab="approved">Approved (42)</button>
                        <button class="tab-btn" data-leave-tab="cancelled">Cancelled (7)</button>
                        <button class="tab-btn" data-leave-tab="all">All Applications</button>
                    </div>
                    
                    <!-- Pending Applications -->
                    <div id="pending-leaves" class="leave-tab active">
                        <div class="dashboard-card">
                            <table class="data-table">
                                <thead>
                                    <tr>
                                        <th>Application ID</th>
                                        <th>Employee</th>
                                        <th>Leave Type</th>
                                        <th>Date Filed</th>
                                        <th>Leave Dates</th>
                                        <th>Days</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>LV-2025-0032</td>
                                        <td>Juan Dela Cruz</td>
                                        <td>Vacation Leave</td>
                                        <td>Mar 10, 2025</td>
                                        <td>Mar 15-18, 2025</td>
                                        <td>4</td>
                                        <td>
                                            <div class="action-buttons">
                                                <button class="btn-action btn-view" title="View">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                                <button class="btn-submit" style="padding: 5px 10px; font-size: 0.85rem;">Approve</button>
                                                <button class="btn-action btn-delete" title="Reject">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>LV-2025-0033</td>
                                        <td>Carlos Garcia</td>
                                        <td>Sick Leave</td>
                                        <td>Mar 11, 2025</td>
                                        <td>Mar 12, 2025</td>
                                        <td>1</td>
                                        <td>
                                            <div class="action-buttons">
                                                <button class="btn-action btn-view" title="View">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                                <button class="btn-submit" style="padding: 5px 10px; font-size: 0.85rem;">Approve</button>
                                                <button class="btn-action btn-delete" title="Reject">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <!-- Approved Applications -->
                    <div id="approved-leaves" class="leave-tab">
                        <div class="dashboard-card">
                            <p>Approved leave applications will appear here.</p>
                        </div>
                    </div>
                    
                    <!-- Cancelled Applications -->
                    <div id="cancelled-leaves" class="leave-tab">
                        <div class="dashboard-card">
                            <p>Cancelled leave applications will appear here.</p>
                        </div>
                    </div>
                    
                    <!-- All Applications -->
                    <div id="all-leaves" class="leave-tab">
                        <div class="dashboard-card">
                            <p>All leave applications will appear here.</p>
                        </div>
                    </div>
                </div>
                
                <!-- CTO Applications Tab -->
                <div id="cto-applications" class="tab-content">
                    <div class="dashboard-title">
                        <h2>CTO (Compensatory Time Off) Applications</h2>
                        <button class="btn-submit" id="addCtoBtn">
                            <i class="fas fa-plus"></i> New CTO
                        </button>
                    </div>
                    
                    <div class="dashboard-card">
                        <div class="card-header">
                            <h3>CTO Applications</h3>
                            <div>
                                <select class="form-control" style="width: 200px;">
                                    <option>All Status</option>
                                    <option>Pending</option>
                                    <option>Approved</option>
                                    <option>Denied</option>
                                </select>
                            </div>
                        </div>
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th>CTO ID</th>
                                    <th>Employee</th>
                                    <th>Overtime Date</th>
                                    <th>CTO Date</th>
                                    <th>Hours</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>CTO-2025-0012</td>
                                    <td>Maria Santos</td>
                                    <td>Mar 5, 2025</td>
                                    <td>Mar 20, 2025</td>
                                    <td>8</td>
                                    <td><span class="status-badge status-pending">Pending</span></td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn-action btn-view" title="View">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="btn-submit" style="padding: 5px 10px; font-size: 0.85rem;">Approve</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>CTO-2025-0011</td>
                                    <td>Robert Lim</td>
                                    <td>Mar 3, 2025</td>
                                    <td>Mar 25, 2025</td>
                                    <td>4</td>
                                    <td><span class="status-badge status-approved">Approved</span></td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn-action btn-view" title="View">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
</x-layout>