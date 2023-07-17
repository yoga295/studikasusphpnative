<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        .gradient-form {
            background-color: #070A52;
        }

        .gradient-form .container {
            height: 100%;
        }

        @media (max-width: 767.98px) {
            .gradient-form .container {
                height: auto;
                padding-top: 2rem;
                padding-bottom: 2rem;
            }

            .gradient-form .row {
                flex-direction: column;
                align-items: center;
            }

            .gradient-form .col-lg-12 {
                margin-bottom: 2rem;
            }

            .gradient-form .col-lg-6:last-child {
                margin-bottom: 0;
            }
        }
    </style>
    <title>Login</title>
</head>

<body>
    <?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal") {
            echo "<script type='text/javascript'>alert('Login gagal, Username atau password salah');</script>";
        } else if ($_GET['pesan'] == "logout") {
            echo "<script type='text/javascript'>alert('Anda Telah Logout');</script>";
        }
    }
    ?>
    <section class="gradient-form">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card rounded-3 text-black">
                        <div class="card-body p-md-5 mx-md-4">
                            <div class="text-center">
                                <img src="img/6746675.jpg" style="width: 200px;" alt="logo">
                                <h4 class="mt-1 mb-5 pb-1">Selamat Datang</h4>
                            </div>
                            <form action="aksi_login.php" method="POST">
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form2Example11">Username</label>
                                    <input type="text" id="InputUsername" name="username" class="form-control" placeholder="Username" />
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form2Example22">Password</label>
                                    <input type="password" name="password" id="InputPassword" class="form-control" placeholder="Password" />
                                </div>
                                <div class="text-center pt-1 mb-5 pb-1">
                                    <a href="pesanan.php"></a><button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" name="submit" type="submit">Log in</button>
                                </div>
                                <div class="text-center pt-1 mb-5 pb-1">
                                    <p style="margin-right: 10px;">Don't have an account?</p>
                                    <a href="register.php" class="btn-register mb-4">Register</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="assets/js/bootstrap.js"></script>
</body>

</html>