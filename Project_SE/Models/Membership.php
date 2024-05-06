<?php 
require 'DBController.php';
class Membership
{
private $Name;
private $Mobile_Number;
private $ID;
private $type;
public function __construct() {
}
public function getName() {
    return $this->Name;
}

public function getNumber() {
    return $this->Mobile_Number;
}
public function getId() {
    return $this->ID;
}
public function getType() {
    return $this->type;
}
public function setName($Name) {
    $this->Name = $Name;
}
public function setnumber($Mobile_Number) {
    $this-> Mobile_Number = $Mobile_Number;
}public function setID($ID) {
    $this->ID = $ID;
}public function setType($type) {
    $this->type =$type;
}
}
?>