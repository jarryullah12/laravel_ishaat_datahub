 @if(Session::has('user'))
<div style="padding: 10px 20px;">
            
            <div class="form-header">
            <h1>وکالت اشاعت</h1>
             <div  style="text-align:center;font-size: 20; ">
                <p>تحریک جدید انجمن احمدیہ ربوہ پاکستان</p>
            </div>
        </div>
        </div>
@extends('layout')

<!DOCTYPE html>
<html lang="ur" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>وکالت اشاعت </title>

    
    <!-- Bootstrap 4 RTL CSS -->
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.5.3/css/bootstrap.min.css">
    
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Jameel Noori Nastaleeq Font -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Nastaliq+Urdu:wght@400;700&display=swap" rel="stylesheet">
    <!-- Common Navbar CSS -->
    <link rel="stylesheet" type="text/css"
    href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    
    
    <style>
        body {
            font-family: 'Noto Nastaliq Urdu', 'Jameel Noori Nastaleeq', serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            direction: rtl;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        
        
        /* Main Content */
        .main-content {
            flex: 1;
            padding: 30px 0;
        }
        
        .content-container {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            padding: 40px;
            margin: 20px auto;
            max-width: 1400px;
        }
        
        .page-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 25px;
            border-radius: 10px;
            text-align: center;
            margin-bottom: 30px;
        }
        
        .page-title {
            font-size: 1.4rem;
            font-weight: bold;
            margin: 0;
        }
        
        .table-section {
            background: #f8f9fa;
            border-radius: 10px;
            padding: 30px;
            border: 2px solid #e9ecef;
        }
        
        .table-section h4 {
            color: #495057;
            margin-bottom: 25px;
            font-weight: bold;
            border-bottom: 2px solid #667eea;
            padding-bottom: 10px;
        }
        
        .table {
            border: 2px solid #dee2e6;
            margin-bottom: 0;
        }
        
        .table th {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            font-weight: bold;
            text-align: center;
            vertical-align: middle;
            border: 1px solid #495057;
            padding: 15px 10px;
            white-space: nowrap;
        }
        
        .table td {
            border: 1px solid #dee2e6;
            padding: 12px 10px;
            vertical-align: middle;
            text-align: center;
        }
        
        .table tbody tr:hover {
            background-color: #e3f2fd;
            transform: translateY(-1px);
            transition: all 0.3s ease;
        }
        
        .btn-success, .btn-danger {
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 0.8rem;
            margin: 0 2px;
            transition: all 0.3s ease;
        }
        
        .btn-success {
            background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
            border: none;
        }
        
        .btn-danger {
            background: linear-gradient(135deg, #dc3545 0%, #fd7e14 100%);
            border: none;
        }
        
        .btn-success:hover, .btn-danger:hover {
            transform: translateY(-2px);
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
        }
        
        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            border-radius: 8px;
            padding: 10px 25px;
            font-weight: bold;
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }
        
        .btn-info {
            background: linear-gradient(135deg, #17a2b8 0%, #138496 100%);
            border: none;
            border-radius: 8px;
            padding: 10px 25px;
            font-weight: bold;
            transition: all 0.3s ease;
        }
        
        .btn-info:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(23, 162, 184, 0.4);
        }
        
        .stats-cards {
            display: flex;
            gap: 20px;
            margin-bottom: 30px;
        }
        
        .stat-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            flex: 1;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .stat-card h3 {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 5px;
        }
        
        .stat-card p {
            margin: 0;
            opacity: 0.9;
        }
        
        .search-section {
            background: white;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        .search-input {
            border: 2px solid #e9ecef;
            border-radius: 8px;
            padding: 10px;
            font-size: 1rem;
            transition: all 0.3s ease;
            text-align: right;
        }
        
        .search-input:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
        }
        
        /* Footer Styles */
        .footer {
            background: linear-gradient(135deg, #495057 0%, #343a40 100%);
            color: white;
            padding: 40px 0 20px;
            margin-top: 50px;
        }
        
        .footer h5 {
            font-weight: bold;
            margin-bottom: 20px;
            color: #f8f9fa;
        }
        
        .footer p, .footer a {
            color: #ced4da;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .footer a:hover {
            color: white;
            text-decoration: none;
        }
        
        .footer-bottom {
            border-top: 1px solid #495057;
            padding-top: 20px;
            margin-top: 30px;
            text-align: center;
            color: #adb5bd;
        }
        
        .social-links a {
            display: inline-block;
            width: 40px;
            height: 40px;
            line-height: 40px;
            text-align: center;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            margin: 0 5px;
            transition: all 0.3s ease;
        }
        
        .social-links a:hover {
            background: #667eea;
            transform: translateY(-2px);
        }
            .form-header {
            text-align: center;
            margin-bottom: 35px;
        }

        .form-header h1 {
            font-size: 42px;
            color: #667eea;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .form-header p {
            font-size: 20px;
            color: #666;
        }
        @media (max-width: 768px) {
            .content-container {
                margin: 10px;
                padding: 20px;
            }
            
            .page-title {
                font-size: 1rem;
            }
            
            .site-title {
                font-size: 1.4rem;
            }
            
            .table-responsive {
                font-size: 0.9rem;
            }
            
            .stats-cards {
                flex-direction: column;
            }
        }
    </style>
</head>
@section('content')

<body>
    <!-- Navbar Container -->
    <div id="navbar-container"></div>


    <!-- Main Content -->
    <main class="main-content">
        <div class="container-fluid">
            <div class="content-container">
                <!-- Page Header -->
                <div class="page-header">
                    <h1 class="page-title">ڈاک روانگی فہرست</h1>
                </div>
             <!-- Data Table -->
                <div class="table-section">
                    
                    <p style="text-align: center; font-weight: bold;"> 
                        ٹوٹل انٹریز:
                        <span id="totalEntries"></span>
                    </p>

                    <div class="table-responsive">
                        <table class="table table-bordered table-hover" class="myTable" id="myTable" >
                            <thead>
                                <tr>
                                    <th>سیریل نمبر</th>
                                    <th>تاریخ</th>
                                     <th>روانگی نمبر</th>
                                    <th>بنام</th>
                                    <th>درخواست</th>
                                    <th>ایڈٹ</th>
                                </tr>
                            </thead>
                            <tbody id="dataTableBody">
                            @foreach($rawangis as $rawangi)
                    <tr>
                        <td></td>
                        <td>{{$rawangi['date']}}</td>
                        <td>{{$rawangi['rawangi_no']}}</td>
                        <td>{{$rawangi['name']}}</td>
                        <td><img class="popup-img"  src="{{ ('public/storage/'.$rawangi->file) }}"  alt="{{ $rawangi->file }}"  style="cursor:pointer; width:70px;"></td>

                        <td><a class="btn btn-sm btn-success" href={{"edit_rawangi/".$rawangi['id']}}><i class="fas fa-edit"></i></a>
                        <a class="btn btn-sm btn-danger" href={{"delete_rawangi/".$rawangi['id']}}><i class="fas fa-trash"></i></a></td>

                    </tr>
                    @endforeach
                                
                        </tbody>
                        </table>
                    </div>
                    <!-- Empty State -->
                    <div id="emptyState" class="text-center py-5" style="display: none;">
                        <i class="fas fa-database fa-3x text-muted mb-3"></i>
                        <h5 class="text-muted">کوئی ڈیٹا دستیاب نہیں</h5>
                        <p class="text-muted">نئی انٹری شامل کرنے کے لیے "نئی انٹری شامل کریں" پر کلک کریں</p>
                        <button class="btn btn-primary" onclick="window.location.href='add-data.html'">
                            <i class="fas fa-plus ml-2"></i>پہلی انٹری شامل کریں
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>

  <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-bottom">
                <footer>
                    © <span id="currentYear"></span>وکالت اشاعت
                </footer>
            </div>
        </div>
    </footer>
 <script>
const year = new Date().getFullYear();
        document.getElementById("currentYear").innerText = year;
       </script>

       <!-- popup -->
      <style>
/* Modal background */
.modal {
  display: none; /* hidden by default */
  position: fixed;
  z-index: 1000;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0,0,0,0.7);
}

/* Modal content (image) */
.modal-content {
  margin: 10% auto;
  display: block;
  max-width: 80%;
  border-radius: 10px;
}

/* Close button */
.close {
  position: absolute;
  top: 20px;
  right: 40px;
  color: white;
  font-size: 35px;
  font-weight: bold;
  cursor: pointer;
}
</style>
<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="imgPopup">
</div>
<script>
// Modal elements
var modal = document.getElementById("myModal");
var modalImg = document.getElementById("imgPopup");
var closeBtn = document.getElementsByClassName("close")[0];

// Select all images with class 'popup-img'
var images = document.querySelectorAll(".popup-img");

// Add click event to each image
images.forEach(function(img){
    img.addEventListener("click", function(){
        modal.style.display = "block";
        modalImg.src = this.src;
    });
});

// Close modal on X click
closeBtn.onclick = function() {
  modal.style.display = "none";
}

// Close modal when clicking outside image
modal.onclick = function(e) {
  if(e.target == modal) {
    modal.style.display = "none";
  }
}
</script>

@endsection
   
   <!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<!-- DataTable JS -->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

 <script>
      $(document).ready(function() {
    var t = $('#myTable').DataTable();

    // Update serial numbers automatically
    t.on('order.dt search.dt', function () {
        let i = 1;
        t.cells(null, 0, { search: 'applied', order: 'applied' })
            .every(function () {
                this.data(i++);
            });
    }).draw();

    // Update total entries
    function updateTotalEntries() {
        var info = t.page.info();
        $('#totalEntries').text(info.recordsDisplay); // number of filtered rows
    }

    updateTotalEntries(); // initial count
    t.on('search.dt', updateTotalEntries); // update on search/filter
    t.on('draw.dt', updateTotalEntries);   // update on page change
});

</script>

     
</body>
</html>
@else {{''}}
 @endif