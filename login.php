<?php
/* User login process, checks if user exists and password is correct */

require 'db.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $mysqli->escape_string($_POST['email']);
    $password = $mysqli->real_escape_string($_POST['pwd']);

    $result = $mysqli->query("SELECT * FROM accounts WHERE email='$email'");
    
if ( $result->num_rows == 0 ){
    // User doesn't exist
    $_SESSION['message'] = "E-mail não cadastrado";
    header("location: index.php");
}
else { // email exists
    $user = $result->fetch_assoc();

    if ( password_verify($_POST['pwd'], $user['password']) ) {

        $_SESSION['email'] = $user['email'];
         // This is how we'll know the user is logged in
        $_SESSION['logged_in'] = true;
        header("location: dashboard.php");
    }
    else {
        $_SESSION['message'] = "Senha incorreta, tente novamente!";
        header("location: index.php");
    }
}
}

?>