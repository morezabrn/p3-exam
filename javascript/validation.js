document.getElementById('signupform').onsubmit = function(event) {  
    event.preventDefault(); // جلوگیری از ارسال فرم به طور پیش‌فرض 

    const fullname = document.getElementById('fullname').value;  
    const email = document.getElementById('email').value;  
    const password = document.getElementById('password').value;  
    const confirmPassword = document.getElementById('confirmPassword').value;  
    const messageDiv = document.getElementById('message');  

    let message = '';

    // اعتبار سنجی  
    if (!fullname || !email || !password || !confirmPassword) {  
        message = 'لطفاً همه فیلدها را پر کنید';  
    } else if (!validateEmail(email)) {  
        message = 'ایمیل معتبر نیست';  
    } else if (password !== confirmPassword) {  
        message = 'رمز عبور و تکرار رمز عبور باید یکسان باشند';  
    } else if (password.length < 8) {  
        message = 'رمز عبور باید حداقل ۸ کاراکتر داشته باشد';  
    } else {  
        messageDiv.innerHTML = "فرم با موفقیت ارسال می‌شود";  
        document.getElementById('signupform').submit(); // ارسال فرم  
        return;  
    }  

    messageDiv.innerHTML = message;  
};  

// تابع اعتبارسنجی ایمیل  
function validateEmail(email) {  
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;  
    return re.test(email);  
}  