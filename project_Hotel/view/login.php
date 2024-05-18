<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="assets/CSS/style.css">
    <title>Modern Login Page | AsmrProg</title>
</head>

<body>

<div class="container" id="container">
    <div class="form-container sign-up">
        <form id="registrationForm" method="POST" action="index.php?controller=clients&action=created">
            <h1>Create Account</h1>
            <div class="social-icons">
                <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
            <span>or use your email for registration</span>
            <input type="text" placeholder="First Name" name="first_name" required>
            <input type="text" placeholder="Last Name" name="last_name" required>
            <input type="date" class="form-control" id="birth_date" name="birth_date" required placeholder="BirthDate">
            <input type="email" placeholder="Email" name="email" id="email" required>
            <input type="tel" placeholder="Phone" name="phone" id="phone" required>
            <select class="custom-select" id="country" name="country" required>
                <option selected disabled value="">Country</option>
                <option value="Afghanistan">Afghanistan</option>
                <option value="Åland Islands">Åland Islands</option>
            </select>
            <input type="text" class="form-control" id="zip_code" name="zip_code" placeholder="Zip Code" required>
            <input type="text" class="form-control" id="city" name="city" required placeholder="City">
            <input type="password" placeholder="new Password" name="new_password" id="new_password" required>
            <input type="password" placeholder="Confirm your Password" name="confirm_password" id="confirm_password" required>
            <button type="submit" id="submitBtn">Sign Up</button>
        </form>

    </div>
    <div class="form-container sign-in">
        <form method="POST" action="index.php?controller=connexion&action=connect">
            <h1>Sign In</h1>
            <div class="social-icons">
                <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
            <span>or use your email password</span>
            <?php
            if(isset($_SESSION['test'])){?>
                <script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: ' <?php echo "  ".$_SESSION['test']; ?>',
                        footer: '<a href="">Veuillez revérifier le mot de passe ou login !!</a>'
                    })
                </script>
                <?php
                unset($_SESSION['test']);
            }?>
            <input type="email" placeholder="Email" id="username" name="username">
            <input type="password" id="password" name="password" placeholder="Password">
            <a href="#">Forget Your Password?</a>
            <button type="submit">Sign In</button>
        </form>
    </div>
    <div class="toggle-container">
        <div class="toggle">
            <div class="toggle-panel toggle-left">
                <h1>Welcome Back!</h1>
                <p>Enter your personal details to use all of site features</p>
                <button class="hidden" id="login">Sign In</button>
            </div>
            <div class="toggle-panel toggle-right">
                <h1>Hello, Friend!</h1>
                <p>Register with your personal details to use all of site features</p>
                <button class="hidden" id="register">Sign Up</button>
            </div>
        </div>
    </div>
</div>

<script src="assets/JS/script.js"></script>
<script src="assets/JS/RegisterFormValidation.js"></script>
</body>

</html>