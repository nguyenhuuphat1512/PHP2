<?php
namespace app\controllers;

class product
{
    public $id;
    protected $name;
    private $age;

public function __construct($id, $name, $age)
{
   $this->id = $id;
$this->name = $name;
$this->age = $age; 
}


public function getName(){
echo "Product is $this->id, $this->name, $this->age";
}
public function __destruct(){
    echo "";
}
}

?>