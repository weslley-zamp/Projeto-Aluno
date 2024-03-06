<?php
require_once 'C:\xampp\htdocs\Projeto Aluno\src\models\student.php';

class RegisterStudent extends Student
{
    private $students = [];

    public function __construct()
    {
        $this->students[] = new Student(1, 'Braio', '2024031', 'Moda', '1234', 1);
        $this->students[] = new Student(2, 'Zampier', '2024032', 'Engenheiro', '1234', 2);
    }

    public function authenticate($registration, $password)
    {
        if (isset($_SESSION['authenticate']) && $_SESSION['authenticate'] == 'YES') {
            header('Location: src\view\home.php');
            exit;
        }

        foreach ($this->students as $user) {
            if ($user->registration === $registration && $user->verifyPassword($password)) {
                $_SESSION['authenticate'] = 'YES';
                $_SESSION['id'] = $user->id;
                $_SESSION['profile_Id'] = $user->profile_id;
                header('Location: home.php');
                exit;
            }
        }
        $_SESSION['authenticate'] = 'NO';
        header('Location: index.php?login=erro');
        exit;
    }

    public function addStudent($registration, $course, $name, $password)
    {
        foreach ($this->students as $user) {
            if ($user->registration == $registration) {
                return new Exception('Estudante já cadastrado com essa matrícula.');
            }
        }
        $student = new Student(1, $name, $registration, $course, $password, 10);
        $this->students[] = $student;
        return true;
    }

    public function getStudents()
    {
        return $this->students;
    }

    public function updateStudent(Student $student)
    {
        foreach ($this->students as $key => $user) {
            if ($user->id == $student->id) {
                $this->students[$key] = $student;
                return true;
            }
        }
        return false;
    }

    public function removeStudent(Student $student)
    {
        foreach ($this->students as $key => $user) {
            if ($user->id == $student->id) {
                unset($this->students[$key]);
                return true;
            }
        }
        return false;
    }
}
?>