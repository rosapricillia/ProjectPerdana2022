<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>PT. TOR GANDA</title>
        <link rel="icon" type="image/x-icon" href="assets/img/logotorganda.png" />
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <div class="container">
          <h1>Login Admin</h1>
            <form method="POST">

                <!-- tipe hidden tidak akan tampil pada website --> 
                <input name="tujuan" type="hidden" value="LOGIN" >

                <label>Username</label>
                <br>
                <input name="username" type="text" required>
                <br>
                <label>Password</label>
                <br>
                <input name="password" type="password" required>
                <br>

                <button class="btn btn-primary" name="login">Log In</button>
            </form>
            <?php 
            if(isset($_POST["login"])){

                $tujuan = $_POST["tujuan"];
                
                if($tujuan == "LOGIN"){
                    $username = $_POST["username"];
                    $password = $_POST["password"]; 

                    if($username == "rosapricillia" && $password == "rosa123"){
                        echo "<meta meta http-equiv='refresh' content='1 url=index.php'>";
                    }else{
                        echo "<h4>Username atau Password Salah!</h4>";
                    }    
                }
            }

            ?>
        </div>
    </body>
</html>
