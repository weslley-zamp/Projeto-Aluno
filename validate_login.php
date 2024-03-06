<?php
session_start();

try {
    if (isset($_POST['registration'], $_POST['password'])) {
        require_once 'C:/xampp/htdocs/Projeto Aluno/src/controllers/RegisterStudent.php';

        $registerStudent = new RegisterStudent();
        $registerStudent->authenticate($_POST['registration'], $_POST['password']);
    } else {
        throw new Exception("Parâmetros de registro e senha ausentes.");
    }
} catch (Exception $e) {
    $_SESSION['authentication'] = 'NO';
    header('Location: index.php?login=erro&message=' . urlencode($e->getMessage()));
    exit;
}
?>