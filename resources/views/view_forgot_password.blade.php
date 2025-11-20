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

        .welcome-icon {
            text-align: center;
            margin-bottom: 20px;
        }

        .welcome-icon svg {
            width: 80px;
            height: 80px;
            fill: #667eea;
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

        .form-group input {
            width: 100%;
            padding: 14px 18px;
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            font-size: 18px;
            font-family: 'Jameel Noori Nastaleeq', 'Noto Nastaliq Urdu', serif;
            transition: all 0.3s ease;
            background: white;
        }

        .form-group input:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }

        .form-group input::placeholder {
            font-family: 'Jameel Noori Nastaleeq', 'Noto Nastaliq Urdu', serif;
            color: #999;
        }

        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
            flex-wrap: wrap;
            gap: 10px;
        }

        .remember-me {
            display: flex;
            align-items: center;
        }

        .remember-me input[type="checkbox"] {
            width: 20px;
            height: 20px;
            margin-left: 8px;
            cursor: pointer;
        }

        .remember-me label {
            font-size: 16px;
            color: #555;
            cursor: pointer;
        }

        .forgot-password {
            font-size: 16px;
        }

        .forgot-password a {
            color: #667eea;
            text-decoration: none;
            font-weight: 600;
        }

        .forgot-password a:hover {
            text-decoration: underline;
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

        .divider {
            text-align: center;
            margin: 30px 0;
            position: relative;
        }

        .divider::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            width: 100%;
            height: 1px;
            background: #e0e0e0;
        }

        .divider span {
            background: rgba(255, 255, 255, 0.95);
            padding: 0 15px;
            position: relative;
            color: #999;
            font-size: 16px;
        }

        .social-login {
            display: flex;
            gap: 15px;
            margin-bottom: 25px;
        }

        .social-btn {
            flex: 1;
            padding: 12px;
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            background: white;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            font-size: 16px;
            font-family: 'Jameel Noori Nastaleeq', 'Noto Nastaliq Urdu', serif;
        }

        .social-btn:hover {
            border-color: #667eea;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .social-btn svg {
            width: 24px;
            height: 24px;
        }

        .signup-link {
            text-align: center;
            margin-top: 20px;
            font-size: 18px;
            color: #666;
        }

        .signup-link a {
            color: #667eea;
            text-decoration: none;
            font-weight: bold;
        }

        .signup-link a:hover {
            text-decoration: underline;
        }
        .text-danger{
            color: red;
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

            .form-group input {
                font-size: 16px;
                padding: 12px 16px;
            }

            .social-login {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <div class="container">


        <div class="form-header">
            <h1>وکالت اشاعت</h1>
        </div>

<form id="signinForm" action="{{ route('search') }}" method="GET">
                @csrf

            <div class="form-group">
                <label for="email">ای میل   </label>
                <input type="text" id="email" name="email" placeholder="example@email.com" required>
            </div>

            <button type="submit" class="submit-btn">پاسورڈ معلوم کریں</button>
      
                
     <div class="signup-link">
                <a href="signin">واپس جائیں</a>
            </div>
          

       
        </form>
       
 @if(isset($view_forgots) && count($view_forgots) > 0)

    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>آپ کا پاسورڈ</th>
        </tr>
        </thead>

        <tbody>
        @foreach($view_forgots as $view_forgot)
            <tr>
                <td>{{ $view_forgot->password }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    @elseif(isset($view_forgots) && count($view_forgots) == 0)
    <h4 class="text-center">اپنا ریکارڈ درج کریں۔</h4>

    @else

    @endif
       
    </div>
            </div>


 


    
    <!-- <script>
        document.getElementById('signinForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            
            if (!email || !password) {
                alert('برائے مہربانی تمام خانے پُر کریں۔');
                return;
            }
            
            // Login logic here
            alert('لاگ ان کامیاب! خوش آمدید واپس!');
            
            // You can add AJAX call here to submit login data
        });

        function googleLogin() {
            alert('گوگل کے ذریعے لاگ ان کی سہولت جلد دستیاب ہوگی');
            // Add Google OAuth logic here
        }

        function facebookLogin() {
            alert('فیس بک کے ذریعے لاگ ان کی سہولت جلد دستیاب ہوگی');
            // Add Facebook OAuth logic here
        }
    </script> -->
</body>
</html>