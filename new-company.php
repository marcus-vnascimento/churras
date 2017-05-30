<?php
/* New company process, checks if name and cnpj exists */

require 'db.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if ($_POST['name_company'] == '' || $_POST['cnpj'] == '' || $_POST['name_company'] == NULL || $_POST['cnpj'] == NULL ) {
        $_SESSION["message"] = 'Todos os campos são obrigatorios!';
    } else {
        $name_company = $mysqli->escape_string($_POST['name_company']);
        $cnpj = $mysqli->escape_string($_POST['cnpj']);

        $result = $mysqli->query("SELECT name_company FROM company WHERE name_company='$name_company'") or die($mysqli->error);

        if ( $result->num_rows > 0) {
            $_SESSION["message"] = 'Essa empresa já está cadastrada!';
            header("location: company.php");
        } else {
            // name_company doesn't already exist in a database, proceed...
            $sql = "INSERT INTO company (name_company, cnpj) " . "VALUES ('$name_company','$cnpj')";
        }
            // Add user to the database
        if ($mysqli->query($sql) === true){
            $_SESSION["message"] = 'Cadastro concluído!';
            header("location: company.php");
        } else {
            $_SESSION["message"] = 'A empresa não pode ser adicionada!';
            header("location: company.php");
        }
        $mysqli->close();
    }
}
?>