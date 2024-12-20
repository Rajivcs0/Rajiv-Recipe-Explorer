<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Sign Up</title> 
    <link rel="stylesheet" href="styles.css"> 
    <link rel="icon" type="image/x-icon" href="burger.jpg"> 
</head> 
<body> 
    <div class="cursors"></div>
    <div class="container"> 
        <div class="login-box"> 
            <h1 class="title" style="color: #dd7515"> 
                <span class="logo">🍔</span><br> 
                Food Recipe 
            </h1> 
            <h2 class="subtitle" style="color: #dd7515">Sign up</h2>
            <form id="signupForm" action="connection.php" method="post"> 
                <label for="EMAIL_ID">Email</label> 
                <input type="email" id="EMAIL_ID" placeholder="example@mail.com" name="EMAIL_ID" required><br> 

                <label for="PASSWORD">Password</label> 
                <input type="password" id="PASSWORD" placeholder="password" name="PASSWORD" required><br> 

                <label for="CONFIRMPASSWORD">Confirm Password</label> 
                <input type="password" id="CONFIRMPASSWORD" placeholder="Re-enter your Password" name="CONFIRMPASSWORD" required><br> 

                <button type="button" id="signupBtn" class="animated-btn">Sign Up</button> 
            </form>

            <p>Already have an account? <a href="Sign In Page.html" id="signinLink">Sign In</a></p>
        </div>
    </div>

    <script>
        document.getElementById('signupBtn').addEventListener('click', function() {
            var email = document.getElementById('EMAIL_ID').value;
            var password = document.getElementById('PASSWORD').value;
            var confirmPassword = document.getElementById('CONFIRMPASSWORD').value;

          
            if (password !== confirmPassword) {
                alert("Passwords do not match.");
                return; 
            }
            document.getElementById('signupForm').submit();
        });
    </script>
</body> 
</html>