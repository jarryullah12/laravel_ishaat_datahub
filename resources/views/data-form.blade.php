 @if(Session::has('user'))
<!DOCTYPE html>
<html lang="ur" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Form - Ishaat DataHub</title>
    
    <!-- Bootstrap 4 RTL CSS -->
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.5.3/css/bootstrap.min.css">
    
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Jameel Noori Nastaleeq Font -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Nastaliq+Urdu:wght@400;700&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Noto Nastaliq Urdu', 'Jameel Noori Nastaleeq', serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            padding: 20px 0;
            direction: rtl;
        }
        
        .main-container {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin: 20px auto;
            max-width: 1200px;
        }
        
        .page-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            margin-bottom: 30px;
        }
        
        .page-title {
            font-size: 1.8rem;
            font-weight: bold;
            margin: 0;
        }
        
        .form-section {
            background: #f8f9fa;
            border-radius: 10px;
            padding: 25px;
            margin-bottom: 30px;
            border: 2px solid #e9ecef;
        }
        
        .form-section h4 {
            color: #495057;
            margin-bottom: 20px;
            font-weight: bold;
            border-bottom: 2px solid #667eea;
            padding-bottom: 10px;
        }
        
        .form-control {
            border: 2px solid #e9ecef;
            border-radius: 8px;
            padding: 12px;
            font-size: 1rem;
            transition: all 0.3s ease;
            text-align: right;
        }
        
        .form-control:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
        }
        
        .form-label {
            font-weight: bold;
            color: #495057;
            margin-bottom: 8px;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            border-radius: 8px;
            padding: 12px 30px;
            font-size: 1.1rem;
            font-weight: bold;
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }
        
        .btn-success {
            background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
            border: none;
            border-radius: 8px;
            padding: 8px 20px;
            font-weight: bold;
        }
        
        .btn-danger {
            background: linear-gradient(135deg, #dc3545 0%, #fd7e14 100%);
            border: none;
            border-radius: 8px;
            padding: 8px 20px;
            font-weight: bold;
        }
        
        .table-section {
            background: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .table {
            border: 2px solid #dee2e6;
        }
        
        .table th {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            font-weight: bold;
            text-align: center;
            vertical-align: middle;
            border: 1px solid #495057;
            padding: 15px 10px;
        }
        
        .table td {
            border: 1px solid #dee2e6;
            padding: 12px 10px;
            vertical-align: middle;
            text-align: center;
        }
        
        .table tbody tr:hover {
            background-color: #f8f9fa;
        }
        
        .action-buttons {
            display: flex;
            gap: 5px;
            justify-content: center;
        }
        
        .serial-number {
            width: 60px;
            font-weight: bold;
            background-color: #e9ecef;
        }
        
        .organization-name {
            min-width: 200px;
        }
        
        .date-column {
            width: 120px;
        }
        
        .remarks-column {
            min-width: 150px;
        }
        
        .actions-column {
            width: 120px;
        }
        
        @media (max-width: 768px) {
            .main-container {
                margin: 10px;
                padding: 15px;
            }
            
            .page-title {
                font-size: 1.5rem;
            }
            
            .table-responsive {
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="main-container">
            <!-- Page Header -->
            <div class="page-header">
                <h1 class="page-title">ادارے کی تفصیلات کا فارم - اشاعت ڈیٹا ہب</h1>
            </div>
            
            <!-- Data Entry Form -->
            <div class="form-section">
                <h4><i class="fas fa-edit ml-2"></i>نئی انٹری شامل کریں</h4>
                <form id="dataForm">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label">سیریل نمبر</label>
                                <input type="number" class="form-control" id="serialNumber" placeholder="نمبر درج کریں" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">ادارے کا نام</label>
                                <input type="text" class="form-control" id="organizationName" placeholder="ادارے کا نام درج کریں" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label">تاریخ</label>
                                <input type="date" class="form-control" id="entryDate" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">خاص تبصرے</label>
                                <textarea class="form-control" id="remarks" rows="3" placeholder="کوئی خاص تبصرے درج کریں"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-plus ml-2"></i>انٹری شامل کریں
                        </button>
                        <button type="reset" class="btn btn-secondary mr-3">
                            <i class="fas fa-refresh ml-2"></i>صاف کریں
                        </button>
                    </div>
                </form>
            </div>
            
            <!-- Data Table -->
            <div class="table-section">
                <h4 class="mb-4"><i class="fas fa-table ml-2"></i>اداروں کی فہرست</h4>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="serial-number">سیریل نمبر</th>
                                <th class="organization-name">ادارے کا نام</th>
                                <th class="date-column">تاریخ</th>
                                <th class="remarks-column">خاص تبصرے</th>
                                <th class="actions-column">عمل</th>
                            </tr>
                        </thead>
                        <tbody id="dataTableBody">
                            <!-- Sample Data -->
                            <tr>
                                <td class="font-weight-bold">1</td>
                                <td>اسلامی یونیورسٹی اسلام آباد</td>
                                <td>2024-01-15</td>
                                <td>تعلیمی ادارہ</td>
                                <td class="actions-column">
                                    <div class="action-buttons">
                                        <button class="btn btn-sm btn-success" onclick="editRow(this)">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="btn btn-sm btn-danger" onclick="deleteRow(this)">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">2</td>
                                <td>جامعہ کراچی</td>
                                <td>2024-01-20</td>
                                <td>پبلک یونیورسٹی</td>
                                <td class="actions-column">
                                    <div class="action-buttons">
                                        <button class="btn btn-sm btn-success" onclick="editRow(this)">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="btn btn-sm btn-danger" onclick="deleteRow(this)">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">3</td>
                                <td>لاہور کالج برائے خواتین یونیورسٹی</td>
                                <td>2024-02-10</td>
                                <td>خواتین تعلیمی ادارہ</td>
                                <td class="actions-column">
                                    <div class="action-buttons">
                                        <button class="btn btn-sm btn-success" onclick="editRow(this)">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="btn btn-sm btn-danger" onclick="deleteRow(this)">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <!-- Table Statistics -->
                <div class="row mt-4">
                    <div class="col-md-6">
                        <p class="text-muted">
                            <i class="fas fa-info-circle ml-2"></i>
                            کل اندراجات: <span id="totalEntries" class="font-weight-bold text-primary">3</span>
                        </p>
                    </div>
                    <div class="col-md-6 text-left">
                        <button class="btn btn-primary" onclick="exportData()">
                            <i class="fas fa-download ml-2"></i>ڈیٹا ایکسپورٹ کریں
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap 4 JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JavaScript -->
    <script>
        let entryCount = 3; // Starting count based on sample data
        
        // Form submission
        $('#dataForm').submit(function(e) {
            e.preventDefault();
            
            const serialNumber = $('#serialNumber').val();
            const organizationName = $('#organizationName').val();
            const entryDate = $('#entryDate').val();
            const remarks = $('#remarks').val();
            
            // Validate form
            if (!serialNumber || !organizationName || !entryDate) {
                alert('تمام ضروری خانے بھریں');
                return;
            }
            
            // Add new row
            const newRow = `
                <tr>
                    <td class="font-weight-bold">${serialNumber}</td>
                    <td>${organizationName}</td>
                    <td>${entryDate}</td>
                    <td>${remarks || '-'}</td>
                    <td class="actions-column">
                        <div class="action-buttons">
                            <button class="btn btn-sm btn-success" onclick="editRow(this)">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="btn btn-sm btn-danger" onclick="deleteRow(this)">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </td>
                </tr>
            `;
            
            $('#dataTableBody').append(newRow);
            entryCount++;
            updateTotalEntries();
            
            // Reset form
            this.reset();
            
            // Success message
            alert('نئی انٹری کامیابی سے شامل ہو گئی');
        });
        
        // Edit row function
        function editRow(button) {
            const row = $(button).closest('tr');
            const cells = row.find('td');
            
            const serialNumber = cells.eq(0).text();
            const organizationName = cells.eq(1).text();
            const entryDate = cells.eq(2).text();
            const remarks = cells.eq(3).text();
            
            // Fill form with existing data
            $('#serialNumber').val(serialNumber);
            $('#organizationName').val(organizationName);
            $('#entryDate').val(entryDate);
            $('#remarks').val(remarks === '-' ? '' : remarks);
            
            // Remove the row
            row.remove();
            entryCount--;
            updateTotalEntries();
            
            // Scroll to form
            $('html, body').animate({
                scrollTop: $('.form-section').offset().top
            }, 500);
        }
        
        // Delete row function
        function deleteRow(button) {
            if (confirm('کیا آپ یقینی طور پر اس انٹری کو ڈیلیٹ کرنا چاہتے ہیں؟')) {
                $(button).closest('tr').remove();
                entryCount--;
                updateTotalEntries();
                alert('انٹری کامیابی سے ڈیلیٹ ہو گئی');
            }
        }
        
        // Update total entries count
        function updateTotalEntries() {
            $('#totalEntries').text($('#dataTableBody tr').length);
        }
        
        // Export data function
        function exportData() {
            alert('ڈیٹا ایکسپورٹ کی سہولت جلد آئے گی');
        }
        
        // Set today's date as default
        $(document).ready(function() {
            const today = new Date().toISOString().split('T')[0];
            $('#entryDate').val(today);
        });
    </script>
</body>
</html>
 @else {{''}}
 @endif