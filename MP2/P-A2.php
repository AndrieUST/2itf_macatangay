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
        echo "Birthplace: " . $this->birthplace . "\n";
    }
}

$personInfo1 = new personInfo();
$personInfo1->setName("Andrie");
$personInfo1->setAge("20");
$personInfo1->setBP("Saudi");
$personInfo1->displayInfo();