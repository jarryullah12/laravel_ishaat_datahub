<!DOCTYPE html>
<html lang="ur" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>وکالت اشاعت </title>
    <style>
        @font-face {
            font-family: 'Jameel Noori Nastaleeq';
            src: url('https://cdn.jsdelivr.net/gh/khaledhosny/ibus-shahin@master/Jameel%20Noori%20Nastaleeq.ttf') format('truetype');
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Jameel Noori Nastaleeq', 'Noto Nastaliq Urdu', serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .container {
            background: rgba(255, 255, 255, 0.95);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 450px;
            backdrop-filter: blur(10px);
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

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-size: 20px;
            font-weight: 600;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 14px 18px;
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            font-size: 18px;
            font-family: 'Jameel Noori Nastaleeq', 'Noto Nastaliq Urdu', serif;
            transition: all 0.3s ease;
            background: white;
        }

        .form-group input:focus,
        .form-group select:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }

        .form-group input::placeholder {
            font-family: 'Jameel Noori Nastaleeq', 'Noto Nastaliq Urdu', serif;
            color: #999;
        }

        .checkbox-group {
            display: flex;
            align-items: center;
            margin-bottom: 25px;
        }

        .checkbox-group input[type="checkbox"] {
            width: 20px;
            height: 20px;
            margin-left: 10px;
            cursor: pointer;
        }

        .checkbox-group label {
            font-size: 18px;
            color: #555;
            cursor: pointer;
        }

        .submit-btn {
            width: 100%;
            padding: 16px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 22px;
            font-family: 'Jameel Noori Nastaleeq', 'Noto Nastaliq Urdu', serif;
            font-weight: bold;
            cursor: pointer;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.4);
        }

        .submit-btn:active {
            transform: translateY(0);
        }

        .login-link {
            text-align: center;
            margin-top: 20px;
            font-size: 18px;
            color: #666;
        }

        .login-link a {
            color: #667eea;
            text-decoration: none;
            font-weight: bold;
        }

        .login-link a:hover {
            text-decoration: underline;
        }
        .text-danger{
                color:red;
            }
        /* Responsive Design */
        @media (max-width: 480px) {
            .container {
                padding: 30px 20px;
            }

            .form-header h1 {
                font-size: 36px;
            }

            .form-group label {
                font-size: 18px;
            }

            .form-group input,
            .form-group select {
                font-size: 16px;
                padding: 12px 16px;
            }
           
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-header">
            <h1>وکالت اشاعت</h1>
        </div>

        <form id="signupForm" action="register" method="POST">
            @csrf
            <div class="form-group">
                <label for="fullname">پورا نام</label>
                <input type="text" id="fullname" name="name" placeholder="اپنا نام درج کریں" required>
                @error('name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">ای میل</label>
                <input type="email" id="email" name="email" placeholder="example@email.com" required>
                @error('email')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">پاس ورڈ</label>
                <input type="password" id="password" name="password" placeholder="پاس ورڈ درج کریں" required>
                @error('password')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
             <div class="form-group">
                <label for="password">پاس ورڈ کنفرمیشن</label>
                <input type="password" id="password" name="password_confirmation" placeholder="پاس ورڈ درج کنفرم کریں" required>
                @error('password_confirmation')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <button type="submit" class="submit-btn">اکاؤنٹ بنائیں</button>

            <div class="login-link">
                پہلے سے اکاؤنٹ موجود ہے؟ <a href="signin">لاگ ان کریں</a>
            </div>
        </form>
    </div>

    <!-- <script>
        document.getElementById('signupForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirm-password').value;
            
            if (password !== confirmPassword) {
                alert('پاس ورڈ مماثل نہیں ہیں۔ برائے مہربانی دوبارہ کوشش کریں۔');
                return;
            }
            
            // Form submission logic here
            alert('رجسٹریشن کامیاب! خوش آمدید!');
            
            // You can add AJAX call here to submit form data
        });
    </script> -->
</body>
</html>
