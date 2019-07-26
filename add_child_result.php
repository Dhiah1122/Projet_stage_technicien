<?php
session_start();
if (isset($_POST['add-childs'])) {
    require "./config.php"; // Database connection string

    if (isset($_SESSION['id'])) {
        $id = $_SESSION['id'];
        $post_keys = array();
        foreach($_POST as $k => $val) {
            $post_keys[$k ] = $val;
        }
        array_pop($post_keys);
        $valid = true;
        foreach($post_keys as $k => $v) {
            if($_POST[$k] == '') {
                $valid = false;
            }
        }
        if($valid == true) {
            if (isset($_SESSION['form_keys'])) {

                foreach($_SESSION['form_keys'] as $key => $child) {
                    if($_POST[$child['keys']['prenom']] && $_POST[$child['keys']['age']]) {
                        $prenom = $_POST[$child['keys']['prenom']];
                        $age    = $_POST[$child['keys']['age']];

                        $sql = "INSERT INTO `enfant` (`id_enfant`, `prenom_enfant`, `age_enfant`, `id_employee`) VALUES (NULL, '$prenom', '$age', '$id');";
                        if (!mysqli_query($link,$sql)) {
                            echo mysqli_error($link);
                        }

                    }
                }
            }
            echo 'insertion with success!';
                 $_SESSION['count']++ ; 
           
                 if($_SESSION['count']>=2) 
                        header('location: admin.php');
        } else {
            header('location: add_child.php');
        }


    } else {
        header('location: login.php');
    }

}

