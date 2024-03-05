<?php
class Student{
    private $id;
    private $name;
    private $registration;
    private $course;
    private $password;

    public function __construct($id,$name,$registration,$course,$password){
        $this->id = $id;
        $this->name = $name;
        $this->registration = $registration;
        $this->course = $course;
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }
    //Função Getter
    public function getId($id){
       return $this->id = $id;
    }
    public function getName($name){
        return $this->name = $name;
    }
    public function getRegistration($registration){
        return $this->registration = $registration;
    }
    public function getCourse($course){
        return $this->course = $course;
    }
    public function getPassword($password){
        return $this->password = $password;
    }

    //Public setter
    public function setName($newName){
        if($newName != $this->name){
            return $this->name = $newName;
        }
    }
    public function setRegistration($newRegistration){
        if ($newRegistration != $this->registration){
            return $this->registration = $newRegistration;
        }
        else{
            echo "Error son of a bitch";
        }
    }
    public function setCourse($newCourse){
        if($newCourse != $this->course){
            return $this->course = $newCourse;
        }
        else{
            echo "The course already exists";
        }
    }
    public function setPassword($newPassword){
        if($newPassword != $this->password){
            return $this->password = $newPassword;
       }
       else{
        echo "The password is the same";
       }
    }
    public function verifyPassword($password){
        return password_verify($password, $this->password);
    }
}
?>