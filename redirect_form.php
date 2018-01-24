<?php 

if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $psw = $_POST["psw"];
    if ($psw != '' && $email != '')
        header("Location: home.html");
    else
        echo "Please fill all fields!";
}

?>