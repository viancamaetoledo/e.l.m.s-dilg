<x-layout>
    <style>
        body {
            font-family: 'Calibri', 'Arial', sans-serif;
            font-size: 11px;
            color: #000;
            background-color: #fff;
            line-height: 1.3;
        }
        
        .container {
            max-width: 210mm;
            margin: 0 auto;
            padding: 15px;
        }
        
        .header {
            text-align: center;
            margin-bottom: 20px;
            border-bottom: 2px solid #333;
            padding-bottom: 10px;
        }
        
        .department-name {
            font-size: 16px;
            font-weight: bold;
            color: #000;
            letter-spacing: 0.5px;
        }
        
        .document-title {
            font-size: 14px;
            font-weight: bold;
            margin-top: 5px;
        }
        
        .employee-info {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
            padding: 10px;
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 3px;
        }
        
        .employee-name, .leave-credits {
            font-weight: bold;
        }
        
        .leave-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 25px;
            table-layout: fixed;
        }
        
        .leave-table th {
            background-color: #e9ecef;
            border: 1px solid #333;
            padding: 6px 4px;
            font-weight: bold;
            text-align: center;
            vertical-align: middle;
            font-size: 10px;
            height: 40px;
        }
        
        .leave-table td {
            border: 1px solid #333;
            padding: 5px 3px;
            text-align: center;
            vertical-align: middle;
            height: 35px;
        }
        
        .leave-table .period-cell {
            font-weight: bold;
            background-color: #f8f9fa;
        }
        
        .leave-table .particulars-cell {
            text-align: left;
            padding-left: 8px;
        }
        
        .control-panel {
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 4px;
            padding: 20px;
            margin-top: 30px;
        }
        
        .control-panel h5 {
            color: #2c3e50;
            border-bottom: 1px solid #dee2e6;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        
        .btn-group {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 25px;
        }
        
        .btn {
            padding: 8px 16px;
            border: 1px solid #ddd;
            background-color: #fff;
            cursor: pointer;
            font-size: 12px;
            border-radius: 3px;
            transition: all 0.2s;
            min-width: 150px;
        }
        
        .btn:hover {
            background-color: #f0f0f0;
        }
        
        .btn-primary {
            background-color: #2c3e50;
            color: white;
            border-color: #2c3e50;
        }
        
        .btn-primary:hover {
            background-color: #1a252f;
        }
        
        .btn-danger {
            background-color: #c0392b;
            color: white;
            border-color: #c0392b;
        }
        
        .btn-danger:hover {
            background-color: #a93226;
        }
        
        .btn-success {
            background-color: #27ae60;
            color: white;
            border-color: #27ae60;
        }
        
        .btn-success:hover {
            background-color: #219653;
        }
        
        .btn-info {
            background-color: #2980b9;
            color: white;
            border-color: #2980b9;
        }
        
        .btn-info:hover {
            background-color: #21618c;
        }
        
        @media print {
            .control-panel {
                display: none !important;
            }
            
            body {
                padding: 0;
                margin: 0;
                font-size: 10px;
            }
            
            .container {
                padding: 10px;
                max-width: 100%;
            }
            
            .leave-table th,
            .leave-table td {
                padding: 4px 2px;
                font-size: 9px;
            }
        }
        
        @media (max-width: 768px) {
            .employee-info {
                flex-direction: column;
                gap: 10px;
            }
            
            .btn-group {
                flex-direction: column;
            }
            
            .btn {
                min-width: 100%;
            }
        }
    </style>

<body>
    <div class="container">
        <div class="header">
            <div class="department-name">Department of the Interior and Local Government</div>
            <div class="document-title">EMPLOYEE'S LEAVE CARD</div>
        </div>
        
        <div class="employee-info">
            <div class="employee-name"><strong>Name:</strong> OCUMEN, MA. ANGELICA P.</div>
        </div>
        
        <table class="leave-table">
            <thead>
                <tr>
                    <th rowspan="2" style="width: 8%">PERIOD</th>
                    <th rowspan="2" style="width: 18%">PARTICULARS</th>
                    <th rowspan="2" style="width: 8%">EARNED</th>
                    <th colspan="3" style="width: 24%">VACATION LEAVE</th>
                    <th rowspan="2" style="width: 8%">EARNED</th>
                    <th colspan="3" style="width: 24%">SICK LEAVE</th>
                    <th rowspan="2" style="width: 10%">REMARKS</th>
                </tr>
                <tr>
                    <th style="width: 8%">Absence Undertime w/Pay</th>
                    <th style="width: 8%">Balance</th>
                    <th style="width: 8%">Absence Undertime w/Pay</th>
                    <th style="width: 8%">Absent Undertime w/Pay</th>
                    <th style="width: 8%">Balance</th>
                    <th style="width: 8%">Absent Undertime W/O Pay</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="period-cell">Jan<br>March</td>
                    <td class="particulars-cell">SL-31</td>
                    <td>1.2</td>
                    <td>1.2</td>
                    <td>7.476</td>
                    <td>1.2</td>
                    <td>1</td>
                    <td>6.478</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="period-cell">April</td>
                    <td class="particulars-cell">none</td>
                    <td>1.2</td>
                    <td>1.2</td>
                    <td>8.700</td>
                    <td></td>
                    <td></td>
                    <td>7.702</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="period-cell">May</td>
                    <td class="particulars-cell"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="period-cell">June</td>
                    <td class="particulars-cell">FL-26</td>
                    <td>1.25</td>
                    <td>1.25</td>
                    <td>9.958</td>
                    <td></td>
                    <td></td>
                    <td>7.952</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="period-cell">July</td>
                    <td class="particulars-cell">CC-30<br>PL-16</td>
                    <td>1.25</td>
                    <td>1.25</td>
                    <td>10.189</td>
                    <td></td>
                    <td></td>
                    <td>9.486</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="period-cell">August</td>
                    <td class="particulars-cell">FL-12</td>
                    <td>1.25</td>
                    <td>1.25</td>
                    <td>11.439</td>
                    <td></td>
                    <td></td>
                    <td>10.458</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="period-cell">September</td>
                    <td class="particulars-cell">FL-23</td>
                    <td>1.25</td>
                    <td>1.25</td>
                    <td>12.047</td>
                    <td></td>
                    <td></td>
                    <td>12.048</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="period-cell">October</td>
                    <td class="particulars-cell">FL-14</td>
                    <td>1.25</td>
                    <td>1.25</td>
                    <td>12.497</td>
                    <td></td>
                    <td></td>
                    <td>14.486</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="period-cell">November</td>
                    <td class="particulars-cell">FL-14</td>
                    <td>1.25</td>
                    <td>1.25</td>
                    <td>12.397</td>
                    <td></td>
                    <td></td>
                    <td>15.486</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        
        <div class="control-panel no-print">
            <h5>Document Controls</h5>
            
            <div class="btn-group">
                <button id="printBtn" class="btn btn-primary">Print Leave Card</button>
                <button id="exportPdfBtn" class="btn btn-danger">Export as PDF</button>
                <button id="exportWordBtn" class="btn btn-success">Export as Word</button>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('printBtn').addEventListener('click', function() {
            window.print();
        });
        
        document.getElementById('exportPdfBtn').addEventListener('click', function() {
            const element = document.querySelector('.container');
            const opt = {
                margin:       0.5,
                filename:     'DILG_Leave_Card_OCUMEN_MA_ANGELICA_P.pdf',
                image:        { type: 'jpeg', quality: 0.98 },
                html2canvas:  { 
                    scale: 2,
                    useCORS: true,
                    logging: false
                },
                jsPDF:        { 
                    unit: 'mm', 
                    format: 'a4', 
                    orientation: 'portrait' 
                }
            };
            
            html2pdf().set(opt).from(element).save();
        });
        
    </script>
</body>
</x-layout>