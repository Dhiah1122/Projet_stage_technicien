<html>
<head>
<style>
body
    {
        height: 100vh;
        margin: 0;
        background: #c61951;
        font-family: montserrat;
        color: #f8f8aa;
        
    }
#bg
    {
        clip-path: circle(80% at 21% 3%);
        background: #f0f0f0;
        height: 100%;
        width: 100%;
        position: absolute;
        z-index: -1;
    }
.page-container
    {
        height: 100vh;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
    }
.login-container
    {
        height: 80%;
        width: 50%;
        box-shadow: 0 0 70px #050505;
    }
.login-header
    {
        width: 100%;
        background: #c61951;
        display: block;
        padding-top: 12px;
    }
.login-txt
    {
        font-size: 33pt;
        background: #1b083d;
        padding: 12px;
        margin-left: -37px;
        width: 70%;
        text-align: center;
        -webkit-clip-path: polygon(0 0,100% 0, 80% 100%,0% 100%);
        clip-path: polygon(0% 0%,100% 0%, 80% 100%,0% 100%);
    }
.darkside
    {
       width: 37px;
        height: 37;
        background: #0e041f;
        margin-left: -37px;
        -webkit-clip-path: polygon(100% 0%,0% 0%,100% 100%);
        clip-path: polygon(100% 0, 0 0, 100% 100%);
    }
.login-body
    {
        padding: 15%;
        display: flex;
        flex-direction: column;
    }
.login-body>input
    {
        margin: 10px;
    }
input[type="number"],input[type="password"]
    {
        padding: 9px;
        background: transparent;
        border: 1px solid #1b083d;
        font-family: inherit;
        border-radius: 4px;
    }
input[type="number"]:focus,input[type="password"]:focus
    {
        outline: #673ab7;
        box-shadow: 1px 0 2px #c61951;
    }
input[type="submit"]
    {
        background: #1b083d;
        color: #e2e2e2;
        border: none;
        border-radius: 4px;
        font-size: 12pt;
        padding: 12px;
        cursor: pointer;
        box-shadow: 1px 2px 5px #1b1b1b;
    }
.forg-pwd
    {
        color: #1b083d;
        align-self: center;
        font-size: 9pt;
        padding: 11px;
        cursor: pointer;
    }
</style>
</head>
<body>
<div id="bg">
</div>
<div class="page-container">
    <div class="login-container">
    <div class="login-header">
    <div class="login-txt">
        Connexion  
        </div>
        <div class="darkside">
        </div>
        </div>
        
         <form action="login.php" method="POST">

		 
		 <div class="login-body">
<input type="password" name="username" placeholder="Matricule">
<input type="password" name="password" placeholder="Mot de Passe">
    <a class="forg-pwd">mot de passe oublié ?</a>
   <input type="submit" name="login" value="Connexion">
</div>
		 
		 
        
    </form>

    </div></div>
</body>
</html>



<?php
if(isset($_POST['mpo'])) {
    if(isset($_POST['username'])) {
        //echo $_POST['username'];
        header('Location: forgot_password.php?mat='.$_POST['username']);
    }
} elseif(isset($_POST['login'])) {

    if(isset($_POST['username']) && isset($_POST['password'])) {
        if (!empty($_POST['username']) && !empty($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];



            require "./config.php"; // Database connection string
            $sql = "SELECT * FROM employee WHERE username_employee = '$username' and password_employee = '$password'";

            $result = mysqli_query($link,$sql);
            $count = mysqli_num_rows($result);
            if ($count == 1) {
                $row_user = mysqli_fetch_row($result);

                // open session
                session_start();
                $_SESSION['id']        = $row_user[0];
                $_SESSION['nom']       = $row_user[1];
                $_SESSION['prenom']    = $row_user[2];
                $_SESSION['username']  = $row_user[3];
                $_SESSION['password']  = $row_user[4];
                $_SESSION['mariee']    = $row_user[5];
                $_SESSION['ne']        = $row_user[6];
                $_SESSION['age']       = $row_user[7];
                $_SESSION['dd_login']  = time();
                $_SESSION['logged_in'] = true;


                header('location: admin.php');
            } else {
                echo 'Invalid authentication!!';
            }
            mysqli_close($link);

        } else {
            echo 'username and password are empty!!';
        }

    }

} else { ?>







<?php } ?>
