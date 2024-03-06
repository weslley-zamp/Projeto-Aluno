<?php
session_start();

if (isset($_POST['registration'], $_POST['password'])) {
    require_once 'C:/xampp/htdocs/Projeto Aluno/src/controllers/RegisterStudent.php';

    $registerStudent = new RegisterStudent();
    $registerStudent->authenticate($_POST['registration'], $_POST['password']);
} else {
    $_SESSION['authentication'] = 'NO';
    header('Location: index.php?login=erro');
    exit;
}
?>
