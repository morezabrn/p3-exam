<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <?PHP
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];

        $errors = [];  

        // بررسی فیلدها  
        if (empty($fullname) || empty($email) || empty($password) || empty($confirmPassword)) {  
            $errors[] = "لطفاً همه فیلدها را پر کنید";  
        }  
    
        // بررسی ایمیل  
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
            $errors[] = "ایمیل معتبر نیست";  
        }  
    
        // بررسی رمز عبور  
        if ($password !== $confirmPassword) {  
            $errors[] = "رمز عبور و تکرار رمز عبور باید یکسان باشند";  
        }  
    
        // ارسال پیام  
        if (empty($errors)) {  
            echo "ثبت‌نام با موفقیت انجام شد";  
        } else {  
            foreach ($errors as $error) {  
                echo $error . "<br>";  
            }  
        }  
    ?>
</body>
</html>