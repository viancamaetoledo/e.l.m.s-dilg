<x-layout>
    <style>
        :root {
            --primary-color: #2563eb;
            --secondary-color: #3b82f6;
            --accent-color: #60a5fa;
            --light-bg: #f8fafc;
            --border-color: #e2e8f0;
            --text-dark: #1e293b;
            --text-light: #64748b;
            --success-color: #10b981;
            --warning-color: #f59e0b;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
            min-height: 100vh;
            padding: 2rem;
            color: var(--text-dark);
        }

        .cdo-container {
            max-width: 1200px;
            margin: 0 auto;
            background: white;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            border: 1px solid var(--border-color);
        }

        .cdo-header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 2rem;
            text-align: center;
        }

        .cdo-header h1 {
            font-size: 1.8rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            letter-spacing: 0.5px;
        }

        .employee-info {
            background: var(--light-bg);
            padding: 1.5rem 2rem;
            border-bottom: 1px solid var(--border-color);
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1rem;
        }

        .info-item {
            display: flex;
            flex-direction: column;
            gap: 0.25rem;
        }

        .info-label {
            font-size: 0.875rem;
            color: var(--text-light);
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .info-value {
            font-size: 1.125rem;
            font-weight: 600;
            color: var(--text-dark);
        }

        .summary-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
            padding: 2rem;
            background: var(--light-bg);
        }

        .summary-card {
            background: white;
            padding: 1.5rem;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            border: 1px solid var(--border-color);
            transition: transform 0.2s ease;
        }

        .summary-card:hover {
            transform: translateY(-4px);
        }

        .summary-card h3 {
            font-size: 1rem;
            color: var(--text-light);
            margin-bottom: 1rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .balance-display {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary-color);
            margin: 0.5rem 0;
        }

        .balance-subtext {
            font-size: 0.875rem;
            color: var(--text-light);
        }

        .balance-positive {
            color: var(--success-color);
        }

        .transactions-section {
            padding: 2rem;
        }

        .section-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 1.5rem;
            padding-bottom: 0.75rem;
            border-bottom: 2px solid var(--border-color);
        }

        .transactions-table {
            width: 100%;
            border-collapse: collapse;
        }

        .transactions-table th {
            background: var(--light-bg);
            padding: 1rem;
            text-align: left;
            font-weight: 600;
            color: var(--text-dark);
            border-bottom: 2px solid var(--border-color);
            text-transform: uppercase;
            font-size: 0.875rem;
            letter-spacing: 0.5px;
        }

        .transactions-table td {
            padding: 1rem;
            border-bottom: 1px solid var(--border-color);
            color: var(--text-dark);
        }

        .transactions-table tr:hover {
            background: var(--light-bg);
        }

        .badge {
            display: inline-block;
            padding: 0.25rem 0.75rem;
            border-radius: 999px;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .badge-earned {
            background: #dcfce7;
            color: #166534;
        }

        .badge-availed {
            background: #fef3c7;
            color: #92400e;
        }

        .year-group {
            margin-bottom: 2rem;
        }

        .year-header {
            font-size: 1.125rem;
            font-weight: 600;
            color: var(--primary-color);
            margin-bottom: 1rem;
            padding: 0.5rem;
            background: var(--light-bg);
            border-radius: 8px;
        }

        .cdo-footer {
            background: var(--light-bg);
            padding: 1.5rem 2rem;
            border-top: 1px solid var(--border-color);
            text-align: center;
            color: var(--text-light);
            font-size: 0.875rem;
        }

        @media (max-width: 768px) {
            body {
                padding: 1rem;
            }
            
            .cdo-header {
                padding: 1.5rem;
            }
            
            .transactions-table {
                display: block;
                overflow-x: auto;
            }
            
            .summary-cards {
                grid-template-columns: 1fr;
                padding: 1rem;
            }
        }

        .period-highlight {
            background: linear-gradient(90deg, rgba(37, 99, 235, 0.1), transparent);
            border-left: 4px solid var(--primary-color);
        }
    </style>

<body>
    <div class="cdo-container">
        <div class="cdo-header">
            <h1>EMPLOYEE COMPENSATORY DAY-OFF SUMMARY</h1>
            <p>Comprehensive CDO Tracking & Management</p>
        </div>

        <div class="employee-info">
            <div class="info-grid">
                <div class="info-item">
                    <span class="info-label">Employee Name</span>
                    <span class="info-value">ABRAZALOO, CAROLYN O.</span>
                </div>
                <div class="info-item">
                    <span class="info-label">Current Balance</span>
                    <span class="info-value balance-positive">80 hours</span>
                </div>
                <div class="info-item">
                    <span class="info-label">Last Updated</span>
                    <span class="info-value">September 2025</span>
                </div>
            </div>
        </div>

        <div class="summary-cards">
            <div class="summary-card">
                <h3>Total Hours Earned</h3>
                <div class="balance-display">92 hrs</div>
                <p class="balance-subtext">Accumulated from all periods</p>
            </div>
            
            <div class="summary-card">
                <h3>Total Hours Availed</h3>
                <div class="balance-display">12 hrs</div>
                <p class="balance-subtext">Utilized CDO hours</p>
            </div>
            
            <div class="summary-card">
                <h3>Available Balance</h3>
                <div class="balance-display balance-positive">80 hrs</div>
                <p class="balance-subtext">Remaining CDO hours</p>
            </div>
        </div>

        <div class="transactions-section">
            <h2 class="section-title">CDO Transactions History</h2>
            
            <div class="year-group">
                <div class="year-header">2024</div>
                <table class="transactions-table">
                    <thead>
                        <tr>
                            <th>Period</th>
                            <th>Particulars</th>
                            <th>Hours</th>
                            <th>Type</th>
                            <th>Date</th>
                            <th>Balance</th>
                            <th>Remarks</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="period-highlight">
                            <td>July</td>
                            <td>B101E Full Run</td>
                            <td><span class="badge badge-earned">+46 hrs</span></td>
                            <td>Earned</td>
                            <td>May 2024</td>
                            <td>46 hrs</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>-</td>
                            <td>Additional Hours</td>
                            <td><span class="badge badge-earned">+6 hrs</span></td>
                            <td>Earned</td>
                            <td>May 2024</td>
                            <td>52 hrs</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>-</td>
                            <td>Availment</td>
                            <td><span class="badge badge-availed">-16 hrs</span></td>
                            <td>Availed</td>
                            <td>Feb 4-5, 2024</td>
                            <td>36 hrs</td>
                            <td>PO #2024-26</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="year-group">
                <div class="year-header">2025</div>
                <table class="transactions-table">
                    <thead>
                        <tr>
                            <th>Period</th>
                            <th>Particulars</th>
                            <th>Hours</th>
                            <th>Type</th>
                            <th>Date</th>
                            <th>Balance</th>
                            <th>Remarks</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="period-highlight">
                            <td>March</td>
                            <td>Re-opening & General</td>
                            <td><span class="badge badge-earned">+40 hrs</span></td>
                            <td>Earned</td>
                            <td>March 2025</td>
                            <td>64 hrs</td>
                            <td>PO #2025-047</td>
                        </tr>
                        <tr>
                            <td>-</td>
                            <td>Availment</td>
                            <td><span class="badge badge-availed">-16 hrs</span></td>
                            <td>Availed</td>
                            <td>June 18, 2025</td>
                            <td>48 hrs</td>
                            <td>PO #2025-047</td>
                        </tr>
                        <tr>
                            <td>September</td>
                            <td>Duty Open & General</td>
                            <td><span class="badge badge-earned">+36 hrs</span></td>
                            <td>Earned</td>
                            <td>Sept 21, 2025</td>
                            <td>84 hrs</td>
                            <td>PO #2025-171</td>
                        </tr>
                        <tr>
                            <td>-</td>
                            <td>TC Hando Availment</td>
                            <td><span class="badge badge-availed">-4 hrs</span></td>
                            <td>Availed</td>
                            <td>Sept 20, 2025</td>
                            <td>80 hrs</td>
                            <td>-</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="cdo-footer">
            <p>Generated on {{ date('F d, Y') }} • This is a system-generated summary of CDO transactions</p>
        </div>
    </div>
</body>
</x-layout>