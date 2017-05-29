<?php 

/* Registration process, inserts user info into the database 
   and sends account confirmation email message
 */
require 'db.php';

   if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Set session variables to be used on new-account.php page

    if ($_POST['pwd'] == $_POST['pwd2']) {

// Escape all $_POST variables to protect against SQL injections
        $email = $mysqli->escape_string($_POST['email']);
        $password = $mysqli->escape_string( password_hash($_POST['pwd'], PASSWORD_BCRYPT) );

// Check if user with that email already exists
        $result = $mysqli->query("SELECT * FROM accounts WHERE email='$email'") or die($mysqli->error);

// We know user email exists if the rows returned are more than 0
        if ( $result == $email) {
            $_SESSION['message'] = 'Um usuário com esse e-mail já existe!';
        } else {
         // Email doesn't already exist in a database, proceed...
        // active is 0 by DEFAULT (no need to include it here)
            $sql = "INSERT INTO accounts (email, password) " . "VALUES ('$email','$password')";
        }
    // Add user to the database
        if ($mysqli->query($sql) === true){
            $_SESSION['message'] = "Cadastro concluído!";
            header("location: dashboard.php");
        } else {
            $_SESSION['message'] = 'O email não pode ser adicionado!';
        }
    $mysqli->close();          
    } else {
        $_SESSION['message'] = 'As duas senhas não conferem!';
    }
}

?>