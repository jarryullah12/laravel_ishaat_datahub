<!DOCTYPE html>
<html lang="ur" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سیٹنگز - اشاعت ڈیٹا ہب</title>
    
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
<body>
    <!-- Navbar Container -->
    <div id="navbar-container"></div>

    <!-- Main Content -->
    <main class="main-content">
        <div class="container">
            <div class="content-container">
                <!-- Page Header -->
                <div class="page-header">
                    <h1 class="page-title">سیٹنگز</h1>
                </div>
                
                <!-- Personal Information Section -->
                <div class="settings-section">
                    <h4><i class="fas fa-user ml-2"></i>ذاتی معلومات</h4>
                    <form id="personalInfoForm" novalidate>
                        <!-- Full Name Field -->
                        <div class="form-group">
                            <label for="fullName" class="form-label">مکمل نام</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" class="form-control" id="fullName" name="fullName" placeholder="اپنا مکمل نام درج کریں" required>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="form-group">
                            <label for="email" class="form-label">ای میل پتہ</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                </div>
                                <input type="email" class="form-control" id="email" name="email" placeholder="اپنا ای میل پتہ درج کریں" required>
                            </div>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" class="form-control" id="newPassword" name="newPassword" placeholder="نیا پاس ورڈ درج کریں" minlength="8">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button" id="toggleNewPassword">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

             

                
                <div class="settings-section" style="text-align: center;">
                    <div class="row">
                            <button type="button" class="btn btn-primary btn-block" id="saveSettings" >
                                <i class="fas fa-save mr-2"></i> تبدیلیاں محفوظ کریں
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
                <p>&copy; 2025 وکالت اشاعت</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 4 JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JavaScript -->
    <script>
        $(document).ready(function() {
            // Toggle new password visibility
            $('#toggleNewPassword').click(function() {
                const passwordField = $('#newPassword');
                const eyeIcon = $(this).find('i');
                
                if (passwordField.attr('type') === 'password') {
                    passwordField.attr('type', 'text');
                    eyeIcon.removeClass('fa-eye').addClass('fa-eye-slash');
                } else {
                    passwordField.attr('type', 'password');
                    eyeIcon.removeClass('fa-eye-slash').addClass('fa-eye');
                }
            });
            
            // Load current settings (simulate loading from server)
            loadCurrentSettings();
            
            // Save settings
            $('#saveSettings').click(function() {
                saveAllSettings();
            });
            
            // Cancel settings
            $('#cancelSettings').click(function() {
                if (confirm('کیا آپ واقعی تبدیلیاں رد کرنا چاہتے ہیں؟')) {
                    loadCurrentSettings();
                    $('.form-control').removeClass('is-invalid is-valid');
                }
            });
            
            // Delete account
            $('#deleteAccount').click(function() {
                if (confirm('خبردار: یہ عمل واپس نہیں ہو سکتا۔ کیا آپ واقعی اپنا اکاؤنٹ ڈیلیٹ کرنا چاہتے ہیں؟')) {
                    // Here you would typically send delete request to server
                    alert('اکاؤنٹ ڈیلیٹ کرنے کی درخواست بھیج دی گئی ہے۔');
                }
            });
            
            // Remove validation classes on input
            $('.form-control').on('input', function() {
                $(this).removeClass('is-invalid is-valid');
            });
        });
        
        function loadCurrentSettings() {
            // Simulate loading current user settings
            // In a real application, this would be loaded from the server
            const currentSettings = {
                fullName: 'احمد علی',
                email: 'ahmad@example.com'
            };
            
            // Populate form fields
            $('#fullName').val(currentSettings.fullName);
            $('#email').val(currentSettings.email);
        }
        
        function saveAllSettings() {
            let isValid = true;
            
            // Validate Personal Information
            const fullName = $('#fullName').val();
            if (!fullName || fullName.trim().length < 2) {
                $('#fullName').addClass('is-invalid');
                isValid = false;
            } else {
                $('#fullName').removeClass('is-invalid').addClass('is-valid');
            }
            
            // Email validation
            const email = $('#email').val();
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            
            if (!email || !emailRegex.test(email)) {
                $('#email').addClass('is-invalid');
                isValid = false;
            } else {
                $('#email').removeClass('is-invalid').addClass('is-valid');
            }
            
            // Password validation
            const newPassword = $('#newPassword').val();
            const confirmNewPassword = $('#confirmNewPassword').val();
            
            if (newPassword) {
                // New password validation
                if (newPassword.length < 8) {
                    $('#newPassword').addClass('is-invalid');
                    isValid = false;
                } else {
                    $('#newPassword').removeClass('is-invalid').addClass('is-valid');
                }
                
                // Confirm password validation
                if (confirmNewPassword !== newPassword) {
                    $('#confirmNewPassword').addClass('is-invalid');
                    alert('نیا پاس ورڈ اور تصدیقی پاس ورڈ میں فرق ہے۔');
                    isValid = false;
                } else {
                    $('#confirmNewPassword').removeClass('is-invalid').addClass('is-valid');
                }
            }
            
            if (isValid) {
                // Gather all settings
                const settings = {
                    personalInfo: {
                        fullName: $('#fullName').val(),
                        email: $('#email').val()
                    }
                };
                
                // Add password change if needed
                if (newPassword) {
                    settings.passwordChange = {
                        newPassword: newPassword
                    };
                }
                
                // Here you would typically send the data to your server
                console.log('محفوظ ہونے والی سیٹنگز:', settings);
                
                // Show success message
                alert('سیٹنگز کامیابی سے محفوظ ہو گئیں!');
                
                // Clear password fields
                $('#newPassword, #confirmNewPassword').val('');
                $('.form-control').removeClass('is-valid is-invalid');
            }
        }
    </script>
    
    <!-- Common Navbar JS -->
    <script src="js/navbar.js"></script>
    <script>
        loadNavbar('settings');
    </script>
</body>
</html>
