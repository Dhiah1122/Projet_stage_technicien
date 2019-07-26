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


    if (isset($_GET['id'])) {
        $id_emp = $_GET['id'];
        require "./config.php"; // Database connection string
        $sql = "SELECT * FROM employee WHERE `id_employee` = '$id_emp'";
        $result = mysqli_query($link,$sql);
        $row = mysqli_fetch_row($result);

        ?>

        <div id="edit-employee-form">
            <form action="edit_employee.php" method="POST">

                <table>
                    <tbody>
                    <tr>
                        <td><label>Matricule:</label></td>
                        <td><input type="text" name="username" value="<?php echo $row[3];?>"/></td>
                    </tr>
                    <tr>
                        <td><label>Nom employee:</label></td>
                        <td><input type="text" name="nom" value="<?php echo $row[1];?>"/></td>
                    </tr>
                    <tr>
                        <td><label>Prenom employee:</label></td>
                        <td><input type="text" name="prenom" value="<?php echo $row[2];?>"/></td>
                    </tr>
                    <tr>
                        <td><label>Physique:</label></td>
                        <td>
                            <select name="physique">
                                <option value="handball"  selected="<?php $selected = ""; if($row[8] == 'handball') {$selected = "selected"; echo $selected;}?>">Handball</option>
                                <option value="football" selected="<?php $selected = ""; if($row[8] == 'football') {$selected = "selected"; echo $selected;}?>">Football</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label>Culture:</label></td>
                        <td>
                            <select name="culture">
                                <option value="musique" <?php if($row[9] == 'musique') {echo 'selected';}?>>Musique</option>
                                <option value="lecture" <?php $selected = ""; if($row[9] == 'lecture') {$selected = "selected"; echo $selected;}?>>Lecture</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label>Mariee:</label></td>
                        <td>
                            <select name="mariee">
                                <option value="1">Oui</option>
                                <option value="0">Non</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label>Age employee:</label></td>
                        <td><input type="text" name="age" value="<?php echo $row[7];?>"/></td>
                    </tr>
                    <tr>
                        <td><label>Nombre enfants:</label></td>
                        <td><input type="text" name="ne" value="<?php echo $row[6];?>"/></td>
                    </tr>
                    <tr>
                        <td><label>Mot de passe:</label></td>
                        <td><input type="password" name="password"/></td>
                    </tr>
                    <tr>
                        <td><label>Repeat mot de passe:</label></td>
                        <td><input type="password" name="re_password"/></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="edit_emp" value="Edit"></td>
                    </tr>
                    </tbody>
                </table>
            </form>
        </div>


    <?php
    }

    if (isset($_POST['edit_emp'])) {
        echo 'employee edited!';
    }
}
