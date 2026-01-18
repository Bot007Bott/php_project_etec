<?php
class Person
{
    protected $id;
    private $username;
    private $gender;

    public function __construct($sid, $username, $gender)
    {
        $this->id = $sid;
        $this->username = $username;
        $this->gender = $gender;
    }

    public function show()
    {
        echo $this->id . " - " . $this->username . " - " . $this->gender;
    }
}

class Student extends Person
{
    public function getID()
    {
        return $this->id;
    }
}

$student = new Student("001", "Sok Om Bi", "female");
echo $student->show() . "<br> ";
echo $student->getID();
