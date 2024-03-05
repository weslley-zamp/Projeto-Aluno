<?php
session_start();

require_once 'C:/xampp/htdocs/Projeto Aluno/src/controllers/RegisterStudent.php';

$registerStudent = new RegisterStudent();
$registerStudent->authenticate($_POST['registration'], $_POST['password']);
?>