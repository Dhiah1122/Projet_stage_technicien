<html>
<head>
    <link rel="stylesheet" href="C:\wamp64\www\employee-project111\sweetalert-master\src\sweetalert.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
</html>

<?php
session_start();
if (isset($_SESSION['id'])) {
    $id        = $_SESSION['id'];
    $nom       = $_SESSION['nom'];
    $prenom    = $_SESSION['prenom'];
    $username  = $_SESSION['username'];
    $password  = $_SESSION['password'];
    $mariee    = $_SESSION['mariee'];
    $ne        = $_SESSION['ne'];
    $age       = $_SESSION['age'];
    $dd_login  = $_SESSION['dd_login'];
    $logged_in = $_SESSION['logged_in'];

    if(isset($_POST['add_emp'])) {
        require "./config.php"; // Database connection string
        $new_nom          = $_POST['nom'];
        $new_prenom       = $_POST['prenom'];
        $new_nom          = $_POST['nom'];
        $new_mat          = $_POST['username'];
        $new_pass         = $_POST['password'];
        $new_mariee       = $_POST['mariee'];
        $new_ne           = $_POST['ne'];
        $new_age          = $_POST['age'];
        $new_physique     = $_POST['physique'];
        $new_culture      = $_POST['culture'];
        $sql='SELECT id_employee FROM employee WHERE username = "'.$new_mat.'"';
//echo $sql;
$resultat = $link->query($sql);  
if (empty($_POST['password']) || $_POST['password'] != $_POST['re_password'])
{
    echo "<script type='text/javascript'>swal('Inscription échoué', 'Erreur dans le mot de passe!', 'error')</script>";
}


else
{
        $sql = "INSERT INTO `employee` (`id_employee`, `nom_employee`, `prenom_employee`, `username_employee`, `password_employee`, `mariee_employee`, `ne_employee`, `age_employee`, `physique_employee`, `culture_employee`) VALUES (NULL, '$new_nom', '$new_prenom', '$new_mat', '$new_pass', '$new_mariee', '$new_ne', '$new_age', '$new_physique', '$new_culture');";
        
        if (!mysqli_query($link,$sql)) {
            echo mysqli_error($link);
        } else {
            echo "<script type='text/javascript'>swal('Inscription réussie', 'Le cordonnée est bien enregistré!', 'success')</script>";
        }
    }}
    ?>
	<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="C:\Users\Dhia Ben Slimen\Desktop\stage\projet stir\styleemp.css">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700');
body
{
    margin: 0;
    padding: 0;
    font-family: 'Source Sans Pro', sans-serif;
    width: 100%;
    height: 100vh;
    background: linear-gradient(0deg,#6b3aff 50%, #fff 50%, #fff);
}
.wrapper
{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-40%,-40%);
    width: 800px;
    padding: 40px;
    box-sizing: border-box;
    background: #fff;
    box-shadow: 0 10px 30px rgba(0,0,0,.5);
}
.wrapper h2
{
    color: #666;
    margin: 0;
    text-align: center;
    font-size: 30px;
}
.input-field
{
    position: relative;
    width: 90%;
    margin-top: 38px;
}
.input-field input
{
    width: 100%;
    padding: 5px;
    box-sizing: border-box;
    background: transparent;
    border: none;
    outline: none;
    border-bottom: 2px solid #666;
    font-size: 16px;
    color: #666;
    font-weight: 700;
}
.input-field label
{
    position: absolute;
    top: 0;
    left: 0;
    padding: 5px 0;
    pointer-events: none;
    font-size: 16px;
    color: #666;
    font-weight: 700;
    transition: 0.5s;
}
.input-field input:valid + label,
.input-field input:focus + label
{
    top: -25px;
    font-size: 14px;
    padding: 2px 5px;
    background: #ff006a;
    color: #fff;
    border-radius: 4px;
}
ul
{
    position: absolute;
    left: 35%;
    top: 3%;
    transform: translate(-50%,-%50);
    margin: 0%;
    padding: 0%;
    display: flex;
}
ul li
        {
            list-style: none;
            letter-spacing: 3px;
            color: #484848;
            text-shadow: none;
            animation: animate 1s infinite linear
        }
        @keyframes animate
        {
            0%
            {
                color:#484848;
                text-shadow: none;
            }
            18%
            {
                color: #484848;
                text-shadow: none;
            }
                        0%
            {
                color:#484848;
                text-shadow: none;
            }
            20%
            {
                color: #fff900;
                text-shadow: 0 0 7px #fff900, 0 0 20px #fff6c0 ;
            }            
            30%
            {
                color:#484848;
                text-shadow: none;
            }
            35%
            {
                color: #fff900;
                text-shadow: 0 0 7px #fff900, 0 0 20px #fff6c0 ;
            }
           70%
            {
                color:#484848;
                text-shadow: none;
            }
            85%
            {
                color: #fff900;
                text-shadow: 0 0 7px #fff900, 0 0 20px #fff6c0 ;
            }
           90%
            {
                color:#484848;
                text-shadow: none;
            }
            100%
            {
                color:#484848;
                text-shadow: none;
            }
        }
ul li:nth-child(1)
        {
            animation-delay: .2s;
        }
ul li:nth-child(2)
        {
            animation-delay: .4s;
        }
ul li:nth-child(3)
        {
            animation-delay: .6s;
        }
ul li:nth-child(4)
        {
            animation-delay: .8s;
        }
ul li:nth-child(5)
        {
            animation-delay: 1.2s;
        }
ul li:nth-child(6)
        {
            animation-delay: 1.4s;
        }
ul li:nth-child(7)
        {
            animation-delay: 1.6s;
        }
ul li:nth-child(8)
        {
            animation-delay: 1.8s;
        }
ul li:nth-child(9)
        {
            animation-delay: 2s;
        }
ul li:nth-child(10)
        {
            animation-delay: 2.2s;
        }
ul li:nth-child(11)
        {
            animation-delay: 2.4s;
        }
.btn
{
       margin-top: 20px;
       background: #ff006a;
    color: #fff;
    padding: 15px 30px;
    border: none;
    outline: none;
    border-radius: 30px;
    font-weight: 700;
    font-size: 16px;
    transition: 0.5s;
    float: right;
}
.btn:hover
        {
            background: #6b3aff;
        }
</style>

  </head>
<center>
  


       
			<body>
        <div class="wrapper">
        <h2>
            <ul>
                <li>I</li>
                <li>N</li>
                <li>S</li>
                <li>C</li>
                <li>R</li>
                <li>I</li>
                <li>P</li>
                <li>T</li>
                <li>I</li>
                <li>O</li>
                <li>N</li>
            </ul>
        </h2>
                 <form action="add_employee.php" method="POST">
                    <div class="input-field">
                    
                         <input name="username" type="text"  title="Donner votre matricule s'il vous plait" required >
                          
                          <label>Matricule:</label>
                           
						</div>
                         <div class="input-field">
                        <input type="text" name="nom" title="Donner votre nom s'il vous plait" required>
                    <label>Nom</label>
                </div>
                       <div class="input-field">
                 <input type="txt" name="prenom"  title="Donner votre prenom s'il vous plait" required>
                    <label>Prénom</label>
                </div>
				
				
               
				
				
                        <div class="input-field" >
                            <label >Physique:</label>
                            
                                <select name="physique" >
									<option> </option>
                                    <option value="handball" >Handball</option>
                                    <option value="football">Football</option>
                                </select>
                            
                       </div>
                          <div class="input-field">
                            <td><label>Culture:</label></td>
                            <td>
                                <select name="culture">
                                    <option> </option>
									<option value="musique">Musique</option>
                                    <option value="lecture">Lecture</option>
                                </select>
                        </div>
                         <div class="input-field">
                            <label>Mariee:</label>
                            
                                <select name="mariee">
                                    <option value="1">Oui</option>
                                    <option value="0">Non</option>
                                </select>
                          </div>
						  
						  <div class="input-field">
                    
                         <input type="text" name="age"  title="Donner votre age" required >
                           <label>Age employee:</label>
                       </div>
                       <div class="input-field">
                           
                            <input type="text" name="ne" title="Donner Nombre enfants:" required/>
							 <label>Nombre enfants:</label>
                        </div>
                        <div class="input-field">
                            
                            <input type="password" name="password" title="Donner Nombre enfants:" required />
							<label>Mot de passe:</label>
                        </div>
                         <div class="input-field">
                            
                            <input type="password" name="re_password" title="Donner Nombre enfants:" required/>
							<label>Repéter mot de passe:</label>
                        </div>
                         
						 <input type="submit" name="add_emp" value="Save" class="btn">
						<a href="login.php"><input type="submit" name="add_emp" value="retour" class="btn"></a>
                           
                      
                    
                </form>
           
     </div>
</center>

<?php
} else {
    header('location: login.php');
}
