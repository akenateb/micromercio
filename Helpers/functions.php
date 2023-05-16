<?php
session_start();
    if (isset($_POST['idlng'])){

        $_SESSION['lng']=$_POST['idlng'];

    }
?>