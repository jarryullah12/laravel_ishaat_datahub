<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Ishaat DataHub</title>
    <!-- Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Jameel Noori Nastaleeq Font -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Nastaliq+Urdu:wght@400;700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/signup-style.css">
    <style>
        .urdu-text {
            font-family: 'Noto Nastaliq Urdu', 'Jameel Noori Nastaleeq', serif;
            font-size: 1.2em;
        }
        .urdu-heading {
            font-family: 'Noto Nastaliq Urdu', 'Jameel Noori Nastaleeq', serif;
            font-size: 1.8em;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row no-gutters">
            <!-- Left side - Image/Branding -->
            <div class="col-md-6 d-none d-md-block bg-image">
                <div class="signup-overlay">
                    <div class="text-center text-white p-5">
                        <h2 class="display-4 font-weight-bold urdu-heading">وکالت اشاعت</h2>
                    </div>
                </div>
            </div>
            
            <!-- Right side - Sign Up Form -->
            <div class="col-md-6">
                <div class="signup-form-container">
                    <div class="signup-form">
                        <div class="text-center mb-4">
                            <i class="fas fa-user-plus fa-3x text-primary mb-3"></i>
                            <h2 class="font-weight-bold urdu-heading">اکاؤنٹ بنائیں</h2>
                        </div>

                        <form id="signupForm" novalidate>
                            <!-- Full Name Field -->
                            <div class="form-group">
                                <label for="fullName" class="urdu-text">مکمل نام</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="fullName" name="fullName" placeholder="اپنا مکمل نام درج کریں" required>
                                    <div class="invalid-feedback">
                                        براہ کرم اپنا مکمل نام درج کریں۔
                                    </div>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="form-group">
                                <label for="email" class="urdu-text">ای میل ایڈریس</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    </div>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="ای میل ایڈریس درج کریں" required>
                                    <div class="invalid-feedback">
                                        براہ کرم صحیح ای میل ایڈریس درج کریں۔
                                    </div>
                                </div>
                            </div>

                            <!-- Password -->
                            <div class="form-group">
                                <label for="password" class="urdu-text">پاس ورڈ</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                    </div>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="پاس ورڈ بنائیں" required minlength="8">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </div>
                                    <div class="invalid-feedback">
                                        پاس ورڈ کم از کم 8 حروف کا ہونا ضروری ہے۔
                                    </div>
                                </div>
                                <small class="form-text text-muted">
                                    پاس ورڈ کم از کم 8 حروف کا ہونا چاہیے جس میں نمبر اور حروف شامل ہوں۔
                                </small>
                            </div>

                            <!-- Confirm Password -->
                            <div class="form-group">
                                <label for="confirmPassword" class="urdu-text">پاس ورڈ کی تصدیق</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                    </div>
                                    <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="پاس ورڈ کی تصدیق کریں" required>
                                    <div class="invalid-feedback">
                                        پاس ورڈ میں مطابقت نہیں ہے۔
                                    </div>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary btn-block btn-lg mb-3">
                                <i class="fas fa-user-plus mr-2"></i><span class="urdu-text">اکاؤنٹ بنائیں</span>
                            </button>

                            <!-- Sign In Link -->
                            <div class="text-center">
                                <p class="text-muted urdu-text">پہلے سے اکاؤنٹ موجود ہے؟ <a href="signin.html" class="text-primary font-weight-bold">سائن ان کریں</a></p>
                            </div>
                        </form>
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 4 JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Custom JS -->
    <script src="js/signup-script.js"></script>
    
    <!-- Add redirect functionality -->
    <script>
        $(document).ready(function() {
            // Override form submission to add redirect
            $('#signupForm').on('submit', function(e) {
                e.preventDefault();
                
                // Get form data
                const fullName = $('#fullName').val().trim();
                const email = $('#email').val().trim();
                const password = $('#password').val();
                const confirmPassword = $('#confirmPassword').val();
                
                // Basic validation
                let isValid = true;
                
                // Full name validation
                if (!fullName) {
                    $('#fullName').addClass('is-invalid');
                    isValid = false;
                } else {
                    $('#fullName').removeClass('is-invalid');
                }
                
                // Email validation
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!email || !emailRegex.test(email)) {
                    $('#email').addClass('is-invalid');
                    isValid = false;
                } else {
                    $('#email').removeClass('is-invalid');
                }
                
                // Password validation
                if (!password || password.length < 8) {
                    $('#password').addClass('is-invalid');
                    isValid = false;
                } else {
                    $('#password').removeClass('is-invalid');
                }
                
                // Confirm password validation
                if (password !== confirmPassword) {
                    $('#confirmPassword').addClass('is-invalid');
                    isValid = false;
                } else {
                    $('#confirmPassword').removeClass('is-invalid');
                }
                
                if (isValid) {
                    // Show success message
                    alert('اکاؤنٹ کامیابی سے بن گیا! سائن ان صفحے پر بھیجا جا رہا ہے...');
                    
                    // Redirect to signin page after a short delay
                    setTimeout(function() {
                        window.location.href = 'signin.html';
                    }, 1000);
                }
            });
        });
    </script>
</body>
</html>
