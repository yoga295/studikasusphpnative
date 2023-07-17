<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #0E2954;
        }
    </style>
</head>

<body>
    <div class="card justify-content-center align-items-center h-70 bg-color: aqua" style="width: 45rem; ">
        <div class="card-body ">
        <h3>Create Account</h3>
            <form action="koneksi.php" method="POST">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="email" class="form-control mb-3" name="username" placeholder="Username">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control mb-3" name="password" placeholder="Password">
                </div>
                <div class="form-group mt-3">
                    <input type="submit" name="simpan" value="Simpan" class="form-control btn btn-primary">
                </div>
            </div>
        </form>
    </div>
</body>

</html>