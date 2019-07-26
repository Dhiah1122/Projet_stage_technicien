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
    $form_keys = array();

    //$count =0;
    //if($_POST['ajouter']) 
    //$count++ ;
    if ($ne == 0) {
        echo $nom.'  '.$prenom.'  have not childs!!';
    } else {?>
        <form action="add_child_result.php" method="post">
        <?php for ($i = 1; $i <= $ne; $i++) {    $form_keys[$i] = array('keys' => array('prenom' => 'prenom-child-'.$i, 'age' => 'age-child-'.$i));?>
          <div id="child-<?php echo $i;?>">
              <h2>child num <?php echo $i;?></h2>
              <label>Prenom: </label><input type="text" name="prenom-child-<?php echo $i;?>"/>
              <label>Age: </label><input type="text" name="age-child-<?php echo $i;?>"/>
          </div>
        <?php } $_SESSION['form_keys'] = $form_keys; ?>
         <div class="actions">
             <input type="submit" name="add-childs" value="Save">
         </div>
        </form>
    <?php }}