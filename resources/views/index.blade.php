
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
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .welcome-container {
            text-align: center;
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            padding: 60px 40px;
            width: 100%;
            margin: 20px 0;
        }
        
        .main-title {
            font-size: 3.5rem;
            font-weight: bold;
            color: #667eea;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        .subtitle {
            font-size: 1.3rem;
            color: #6c757d;
            margin-bottom: 40px;
            line-height: 1.6;
        }
        
        .action-buttons {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
        }
        
        .btn-main {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            border-radius: 15px;
            padding: 15px 30px;
            font-size: 1.2rem;
            font-weight: bold;
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }
        
        .btn-main:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(102, 126, 234, 0.4);
            color: white;
            text-decoration: none;
        }
        
        .btn-secondary {
            background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
            border: none;
            border-radius: 15px;
            padding: 15px 30px;
            font-size: 1.2rem;
            font-weight: bold;
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }
        
        .btn-secondary:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(40, 167, 69, 0.4);
            color: white;
            text-decoration: none;
        }
        
        .navigation-tabs {
            margin-top: 50px;
        }
        
        .nav-tab-card {
            background: white;
            border-radius: 15px;
            padding: 30px 20px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            cursor: pointer;
            margin-bottom: 20px;
            border: 2px solid transparent;
        }
        
        .nav-tab-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.2);
            border-color: #667eea;
        }
        
        .nav-tab-icon {
            font-size: 3rem;
            color: #667eea;
            margin-bottom: 15px;
        }
        
        .nav-tab-title {
            font-size: 1.3rem;
            font-weight: bold;
            color: #495057;
            margin-bottom: 10px;
        }
        
        .nav-tab-desc {
            color: #6c757d;
            line-height: 1.5;
            margin: 0;
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
            .main-title {
                font-size: 2.5rem;
            }
            
            .welcome-container {
                padding: 40px 20px;
                margin: 10px;
            }
            
            .action-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .navigation-tabs .row {
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
            <div class="welcome-container">
           
                <!-- Navigation Tabs -->
                <div class="row">
                        <div class="col-md-6">
                            <div class="nav-tab-card" onclick="window.location.href='add_amad'">
                                <div class="nav-tab-icon">
                                    <i class="fas fa-book"></i>
                                </div>
                                <h5 class="nav-tab-title">ڈاک ڈاک اندراج</h5>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="nav-tab-card" onclick="window.location.href='view_amad'">
                                <div class="nav-tab-icon">
                                    <i class="fas fa-list"></i>
                                </div>
                                <h5 class="nav-tab-title">ڈاک ڈاک فہرست</h5>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Second Row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="nav-tab-card" onclick="window.location.href='add_rawangi'">
                                <div class="nav-tab-icon">
                                    <i class="fas fa-book"></i>
                                </div>
                                <h5 class="nav-tab-title">روانگی ڈاک اندراج</h5>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="nav-tab-card" onclick="window.location.href='view_rawangi'">
                                <div class="nav-tab-icon">
                                    <i class="fas fa-list"></i>
                                </div>
                                <h5 class="nav-tab-title">روانگی ڈاک فہرست</h5>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="nav-tab-card" onclick="window.location.href='add_file'">
                                <div class="nav-tab-icon">
                                    <i class="fas fa-book"></i>
                                </div>
                                <h5 class="nav-tab-title">دفتر فائل اندراج</h5>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="nav-tab-card" onclick="window.location.href='view_file'">
                                <div class="nav-tab-icon">
                                    <i class="fas fa-list"></i>
                                </div>
                                <h5 class="nav-tab-title">دفترفائل فہرست</h5>
                            </div>
                        </div>
                    </div>
                    <!-- Third Row -->
                    <div class="row">
                        <div class="col-md-6 mx-auto">
                            <div class="nav-tab-card" onclick="window.location.href='view_settings'">
                                <div class="nav-tab-icon">
                                    <i class="fas fa-cog"></i>
                                </div>
                                <h5 class="nav-tab-title">پروفائل سیٹنگ</h5>
                            </div>
                        </div>
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
    
    <!-- Common Navbar JS -->
    <script src="js/navbar.js"></script>
  
</body>
</html>
@endsection

 @else {{''}}
 @endif