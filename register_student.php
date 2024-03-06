<?php
session_start();

require_once 'C:\xampp\htdocs\Projeto-Aluno\src\controllers\RegisterStudent.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $controller = new RegisterStudent();

    $name = $_POST['name'];
    $registration = $_POST['registration'];
    $course = $_POST['course'];
    $password = $_POST['password'];

    try {
        $result = $controller->addStudent($registration, $course, $name, $password);
        if ($result === true) {
            header('Location: register.php');
            exit;
        } else {
            echo "Erro ao cadastrar o estudante: " . $result->getMessage();
        }
    } catch (Exception $e) {
        echo "Erro ao cadastrar o estudante: " . $e->getMessage();
    }
}
?>