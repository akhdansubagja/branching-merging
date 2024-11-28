<?php
    if(isset( $_POST["email"] ) || isset($_POST["password"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];

        if($email == 'admin@min.com' && $password == 'atmin') {
            header('location: ./../dashboard.php');
        } else{
            echo'email atau password salah';
        }

    }

?>
