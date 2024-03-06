<?php

class Student
{
    protected $id;
    protected $name;
    protected $registration;
    protected $course;
    protected $password;
    protected $profile_id;

    public function __construct($id, $name, $registration, $course, $password, $profile_id)
    {
        $this->id = $id;
        $this->name = $name;
        $this->registration = $registration;
        $this->course = $course;
        $this->password = password_hash($password, PASSWORD_DEFAULT);
        $this->profile_id = $profile_id;
    }

    // Getters
    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getRegistration()
    {
        return $this->registration;
    }

    public function getCourse()
    {
        return $this->course;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getProfile()
    {
        return $this->profile_id;
    }

    // Setters
    public function setName($newName)
    {
        if ($newName != $this->name) {
            $this->name = $newName;
        }
    }

    public function setRegistration($newRegistration)
    {
        if ($newRegistration != $this->registration) {
            $this->registration = $newRegistration;
        } else {
            echo "Error: Registration already exists.";
        }
    }

    public function setCourse($newCourse)
    {
        if ($newCourse != $this->course) {
            $this->course = $newCourse;
        } else {
            echo "Error: The course already exists.";
        }
    }

    public function setPassword($newPassword)
    {
        if ($newPassword != $this->password) {
            $this->password = password_hash($newPassword, PASSWORD_DEFAULT);
        } else {
            echo "Error: The new password is the same as the current password.";
        }
    }

    public function verifyPassword($password)
    {
        return password_verify($password, $this->password);
    }
}
?>