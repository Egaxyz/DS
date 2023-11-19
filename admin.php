<?php
require "conn.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/bootstrap.min.css">
    <style>
    .main {
        height: 100vh;
    }

    .login-box {
        width: 500px;
        height: 300px;
        box-sizing: border-box;
        border-radius: 10px;
    }
    </style>
</head>

<body>
    <div class="main d-flex flex-column justify-content-center align-items-center">
        <div class="login-box p-5 shadow">
            <form action="" method="post">
                <div>
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control" id="username">
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password">
                </div>
                <div>
                    <button type="submit" class="btn btn-success form-control mt-3" name="loginbtn">Login</button>
                </div>
            </form>
        </div>

        <div class="mt-3" style="width:500px; text-align:center;">
            <?php
        if (isset($_POST["loginbtn"])) {
            $username = htmlspecialchars_decode($_POST["username"]);
            $password = htmlspecialchars_decode($_POST["password"]);

            $query = mysqli_query($koneksi, "SELECT*FROM adm WHERE username = '$username'",);
            $countdata= mysqli_num_rows($query);
            $data = mysqli_fetch_array($query);
                if ($countdata > 0) {
                    if(isset($password, $data['password'])) {
                        header('location: index.php');
                        exit();
                    }
                    else{
                                            ?>
            <div class="alert alert-warning" role="alert">
                Password Salah
            </div>
            <?php
                    }
                }
                else{
                    ?>
            <div class="alert alert-warning" role="alert">
                Akun tidak tersedia
            </div>
            <?php
                }
        }
        ?>
        </div>
    </div>
</body>

</html>