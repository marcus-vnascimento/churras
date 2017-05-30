<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //two passwords are equal to each other
  if ($_POST['password'] == $_POST['password2']) {

    //define other variables with submitted values from $_POST
    $email = $mysqli->real_escape_string($_POST['email']);

    //md5 hash password for security
    $password = md5($_POST['password']);
    //insert user data into database
    $sql = 
    "INSERT INTO users (email, password) "
    . "VALUES ('$email', '$password')";

                //check if mysql query is successful
    if ($mysqli->query($sql) === true){
      $_SESSION['message'] = "Registration successful!"
      . "Added $email to the database!";
                    //redirect the user to welcome.php
      header("location: dashboard.html");
    }
    else {
      $_SESSION['message'] = 'User could not be added to the database!';
    }
    $mysqli->close();          
  }
  else {
    $_SESSION['message'] = 'Two passwords do not match!';
  }
}