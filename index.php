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

        <form action="" class="inputs" id="signupform">
            <input type="text" class="input" id="fullname" placeholder="FullName">
            <input type="text" class="input" id="email" placeholder="Email">
            <input type="text" class="input" id="password" placeholder="Password">
            <input type="text" class="input" id="confirmPassword" placeholder="ConfirmPassword">
            <button>Submit</button>
        </form>
    </div>
    <div id="message"></div>

    <!-- connect js -->
    <script src="validation.js"></script>
</body>
</html>