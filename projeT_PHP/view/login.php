<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $pagetitle; ?></title>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./assets/CSS/styleLogin.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>


<form action="index.php?controller=connexion&action=connect" method="POST">

    <div class="container hq-template">
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
        <div class="row">
            <div class="col-lg-6 col-md-6 pic-register-2">
                <img  src="./assets/images/sec3.svg">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 register-form">
                <h1>Welcome!</h1>
                <div class="form-group">
                    <input type="text" name="username" class="form-control register-input" placeholder="Your name">
                    <svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    </svg>
                </div>
                <div class="form-group">

                    <input type="password" name="password" class="form-control register-input pass" placeholder="Create password">
                    <svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-lock-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.5 9a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-7a2 2 0 0 1-2-2V9z"/>
                        <path fill-rule="evenodd" d="M4.5 4a3.5 3.5 0 1 1 7 0v3h-1V4a2.5 2.5 0 0 0-5 0v3h-1V4z"/>
                    </svg>
                </div>
                <label class="forgot-password"><a href="#">Forgot Password?<a></label>
                <div class="register-login-btn">

                    <input type="submit"  value="Sign in" class="btn btn-primary login-btn">
                </div>

            </div>
        </div>
    </div>
</form>


<script src="script.js"></script>

</body>
</html>
