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

    require "./config.php"; // Database connection string
    $sql = "SELECT * FROM employee";

    $result = mysqli_query($link,$sql);
    ?>
    <table border="2">
        <tbody>
        <tr>
            <td><label>Id</label></td>
            <td><label>Nom</label></td>
            <td><label>Prenom</label></td>
            <td><label>Matricule</label></td>
            <td><label>Mariee</label></td>
            <td><label>NE</label></td>
            <td><label>Age</label></td>
            <td><label>Physique</label></td>
            <td><label>Culture</label></td>
            <td><label>Edit</label></td>
            <td><label>Supprimer</label></td>
        </tr>
    <?php
    while($row = mysqli_fetch_array($result)) { ?>
        <tr>
            <td><label><?php print $row['id_employee']; ?></label></td>
            <td><label><?php print $row['nom_employee']; ?></label></td>
            <td><label><?php print $row['prenom_employee']; ?></label></td>
            <td><label><?php print $row['username_employee']; ?></label></td>
            <td><label><?php print $row['mariee_employee']; ?></label></td>
            <td><label><?php print $row['ne_employee']; ?></label></td>
            <td><label><?php print $row['age_employee']; ?></label></td>
            <td><label><?php print $row['physique_employee']; ?></label></td>
            <td><label><?php print $row['culture_employee']; ?></label></td>
            <td><label><a href="./edit_employee.php?id=<?php echo $row['id_employee']; ?>">Editer</a></label></td>
            <td><label><a href="./remove_employee.php?id=<?php echo $row['id_employee']; ?>">Supprimer</a></label></td>
        </tr>
    <?php
    }
    ?>
        </tbody>
    </table>


<?php } else {
    header('location: login.php');
}