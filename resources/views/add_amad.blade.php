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
    <link rel="stylesheet" href="css/navbar.css">
    
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
            max-width: 1000px;
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
        
        .form-section {
            background: #f8f9fa;
            border-radius: 10px;
            padding: 30px;
            border: 2px solid #e9ecef;
        }
        
        .form-section h4 {
            color: #495057;
            margin-bottom: 25px;
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
        
        .btn-secondary {
            background: linear-gradient(135deg, #6c757d 0%, #495057 100%);
            border: none;
            border-radius: 8px;
            padding: 12px 30px;
            font-size: 1.1rem;
            font-weight: bold;
            transition: all 0.3s ease;
        }
        
        .btn-secondary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(108, 117, 125, 0.4);
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
        }
    </style>
</head>
@section('content')

<body>
    <!-- Navbar Container -->
    <div id="navbar-container"></div>

    <!-- Main Content -->
    <main class="main-content">
        <div class="container">
            <div class="content-container">
                <!-- Page Header -->
                <div class="page-header">
                    <h1 class="page-title">ڈاک آمد اندراج </h1>
                </div>
                
                <!-- Data Entry Form -->
                <div class="form-section">
                    <h4><i class="fas fa-edit ml-2"></i>معلومات</h4>
                    <form id="dataForm" action="add_amad" method="POST" enctype="multipart/form-data" >
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">تاریخ</label>
                                    <input type="date" name="date" class="form-control" id="date" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">مقام</label>
                                    <input type="text" name="maqam" class="form-control" id="location" placeholder="مقام درج کریں" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">نام و پتہ مکتوب الیہ</label>
                                    <textarea class="form-control" name="name" id="addressee" rows="4" placeholder="مکتوب الیہ کا نام اور مکمل پتہ درج کریں" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">خلاصہ مضمون</label>
                                    <textarea class="form-control" name="detail" id="contentSummary" rows="6" placeholder="مکتوب کے مضمون کا خلاصہ درج کریں" required></textarea>
                                </div>
                            </div>
                        </div>
                         <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">درخواست</label>
                                    <input style="padding:40px 10px;" type="file" name="file" class="form-control" id="location"  rows="6" required>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary btn-lg">
                                <i class="fas fa-save ml-2"></i> ڈیٹا محفوظ کریں  
                            </button>
                            <button type="reset" class="btn btn-secondary btn-lg mr-3">
                                <i class="fas fa-refresh ml-2"></i> صاف کریں    
                            </button>
                        </div>
                    </form>
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

    <!-- Bootstrap 4 JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    
   
</body>
</html>
@endsection
@else {{''}}
 @endif