<?php
require_once('../models/student.php');

class RegisterStudent extends Student
{
    private $students = [];

    public function __construct()
    {
        $this->students[] = new Student(1, 'Braio', '2024031', 'Moda', '1234');
        $this->students[] = new Student(2, 'Zampier', '2024032', 'Engenheiro', '1234');
    }

    public function addStudent(Student $student)
    {
        try {
            foreach ($this->students as $user) {
                if ($user->registration == $student->registration) {
                    throw new Exception('Estudante já cadastrado com essa matrícula.');
                }
            }
            $this->students[] = $student;
        } catch (Exception $e) {
            return $e;
        }
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
