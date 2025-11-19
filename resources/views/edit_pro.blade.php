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
        
        .settings-section {
            background: #f8f9fa;
            border-radius: 10px;
            padding: 30px;
            border: 2px solid #e9ecef;
            margin-bottom: 20px;
        }
        
        .settings-section h4 {
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
        
        .btn-danger {
            background: linear-gradient(135deg, #dc3545 0%, #fd7e14 100%);
            border: none;
            border-radius: 8px;
            padding: 12px 30px;
            font-size: 1.1rem;
            font-weight: bold;
            transition: all 0.3s ease;
        }
        
        .btn-danger:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(220, 53, 69, 0.4);
        }
        
        .alert {
            border-radius: 8px;
            border: none;
        }
        
        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }
        
        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }
        
        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            transition: .4s;
            border-radius: 34px;
        }
        
        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            transition: .4s;
            border-radius: 50%;
        }
        
        input:checked + .slider {
            background-color: #667eea;
        }
        
        input:checked + .slider:before {
            transform: translateX(26px);
        }
        
        /* Footer Styles */
        .footer {
            background: linear-gradient(135deg, #495057 0%, #343a40 100%);
            color: white;
            padding: 40px 0 20px;
            margin-top: 50px;
        }
        
        .footer-bottom {
            border-top: 1px solid #495057;
            padding-top: 20px;
            margin-top: 30px;
            text-align: center;
            color: #adb5bd;
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
                    <h1 class="page-title">پروفائل سیٹنگ</h1>
                </div>
                
                <!-- Personal Information Section -->
                <div class="settings-section">
                    <h4><i class="fas fa-user ml-2"></i>ذاتی معلومات</h4>
                    <form id="personalInfoForm" method="POST" action="/ishaat-datahub/edit_pro" >
                        @csrf
                        <!-- Full Name Field -->
                        <div class="form-group">
                            <label for="fullName" class="form-label">مکمل نام</label>
                                  <input type="hidden" name="id" value="{{$data['id']}}">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" class="form-control" name="name" value="{{ $data['name'] }}"  required>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="form-group">
                            <label for="email" class="form-label">ای میل پتہ</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                </div>
                                <input type="email" class="form-control" name="email" value="{{ $data['email'] }}"  required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">پاس ورڈ</label>
                            <div class="input-group">   
                            <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" class="form-control"  name="password"   minlength="6">
                            <!-- <input type="password" class="form-control" name="password_confirmation" value="{{ $data->password_confirmation }}"  minlength="8">  -->
                            </div>
                        </div>
                         <div class="input-group-append">
                               <button type="submit" class="btn btn-primary btn-block" >
                                <i class="fas fa-save mr-2"></i> تبدیلیاں محفوظ کریں
                            </button>
                    </form>
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
    <!-- Bootstrap 4 JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JavaScript -->
      
    <!-- Common Navbar JS -->
    <script src="js/navbar.js"></script>
 
</body>
</html>
@endsection

 @else {{''}}
 @endif