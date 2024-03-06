<?php
session_start();

if (isset($_POST['email'], $_POST['password'])) {
    require_once './src/controllers/RegisterStudent.php';

    $registerStudent = new RegisterStudent();
    $loginController->authenticate($_POST['registration'], $_POST['password']);
} else {
    $_SESSION['authentication'] = 'NO';
    header('Location: index.php?login=erro');
    exit;
}
?>
