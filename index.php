<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign-up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- sign up form  -->
    <div class="box">
        <h2>sign up</h2>

        <form action="signup.php" method="POST" onsubmit="function" class="inputs" id="signupform">
            <input type="text" class="input" id="fullname" placeholder="FullName" name="fullname">
            <input type="text" class="input" id="email" placeholder="Email" name="email">
            <input type="text" class="input" id="password" placeholder="Password" name="password">
            <input type="text" class="input" id="confirmPassword" placeholder="ConfirmPassword" name="confirmPassword">
            <button>Submit</button>
        </form>
    </div>
    <div id="message"></div>

    <!-- connect js -->
    <script src="validation.js"></script>
</body>
</html>