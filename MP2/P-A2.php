<?php
class personInfo{
    private $name;
    private $age;
    private $birthplace;

    public function getName()
    {
        return $this->name;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function getBP()
    {
        return $this->birthplace;
    }

    public function setName($nameNew)
    {
        $this->name = $nameNew;
    }
    public function setAge($ageNew)
    {
        if($ageNew <= 0){
            $this->age = 0;
        }
        $this->age = $ageNew;
    }
    public function setBP($bpNew)
    {
        $this->birthplace = $bpNew;
    }

    public function displayInfo()
    {
        echo "Name: " . $this->name . "<br>";
        echo "Age: " . $this->age . "<br>";
        echo "Birthplace: " . $this->birthplace . "<br><br>";
    }
}

class personInfoChild extends personInfo{
    private $surname;
    
    public function getSurname()
    {
        return $this->surname;
    }
    public function setSurname($surnameNew)
    {
        $this->surname = $surnameNew;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function getBP()
    {
        return $this->birthplace;
    }

    public function setName($nameNew)
    {
        $this->name = $nameNew;
    }
    public function setAge($ageNew)
    {
        if($ageNew <= 0){
            $this->age = 0;
        }
        $this->age = $ageNew;
    }
    public function setBP($bpNew)
    {
        $this->birthplace = $bpNew;
    }

    public function displayInfo()
    {
        echo "Name: " . $this->name . "<br>";
        echo "Age: " . $this->age . "<br>";
        echo "Birthplace: " . $this->birthplace . "<br>";
        echo "This is an override.<br>";
    }

    public function printInfo()
    {
        echo "Surname: " . $this->surname . "<br>";
    }
}

class personInfoGrandchild extends personInfoChild{
    public function displayInfo()
    {
        echo "Name: " . $this->name . "<br>";
        echo "Age: " . $this->age . "<br>";
        echo "Birthplace: " . $this->birthplace . "<br>";
    }
}

class personInfoSecondChild extends personInfo{

}

$personInfo1 = new personInfo();
$personInfo1->setName("Andrie");
$personInfo1->setAge("20");
$personInfo1->setBP("Saudi");
$personInfo1->displayInfo();

$personInfo2 = new personInfoChild();
$personInfo2->setName("Paul");
$personInfo2->setAge("19");
$personInfo2->setBP("Dubai");
$personInfo2->setSurname("Macatangay");
$personInfo2->displayInfo();
$personInfo2->printInfo();

echo "<br>";

$personInfo3 = new personInfoGrandchild();
$personInfo3->setName("Marg");
$personInfo3->setAge("18");
$personInfo3->setBP("Philippines");
$personInfo3->setSurname("Macatangay");
$personInfo3->displayInfo();
$personInfo2->printInfo();