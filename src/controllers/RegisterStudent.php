<?php
class RegisterStudent
{
    private $students = [];

    public function __construct()
    {
        $this->students[] = new Student(1, 'Braio', '2024031', 'Moda');
        $this->students[] = new Student(2, 'Zampier', '2024032', 'Engenheiro');
    }

    public function addStudent(Student $student){
        try{
            foreach($this->students as $user){
                if( $user->registration == $student->registration ){
                    return throw Exception;
                }
            }
            $this->students[] = $student;
        } catch(Exception $e) {
            return $e;
        }
    }

    public function getStudents(){
        return $this->students;
    }

    public function updateStudent(Student $student){
        foreach($this->students as $user){
            if( $user->id == $student->id ){
                return $this->students[$user->id] = $student;
            }
        }
    }

    public function removeStudent(Student $student){
        foreach($this->students as $user){
            if( $user->id == $student->id ){
                //remove from the list
                return $this->students[] = $student;
            }
        }
    }


}
?>