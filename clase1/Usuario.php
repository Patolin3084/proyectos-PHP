<?php
include_once("contador.php");
require_once("menu.php");

class Usuario{
    private string $userName;
    private string $name;
    private string $surname;
    private string $email;
    private string $password;
    private int $age;
    private string $registerDate;
    private bool $isActive;
    private bool $isAdmin;

function __construct(){
    {
        $this->isActive = true;
        $this->isAdmin = false;
        $this->registerDate = date("Y-M-d H:i s");

    }
}

function getUsername():string {
    return $this->userName;
}

function setUsername(string $u){
    $this->userName = $u;
}

function getName():string {
    return $this->name;
}

function setName(string $n){
    $this->name = $n;
}

function getSurname():string {
    return $this->surname;
}

function setSurname(string $s){
    $this->surname = $s;
}

function getEmail():string {
    return $this->email;
}

function setEmail(string $e){
    $this->email = $e;
}

function getPassword():string {
    return $this->password;
}

function setPassword(string $p){
    $this->password = $p;
}

function getAge():string {
    return $this->age;
}

function setAge(string $a){
    $this->age = $a;
}

function getRegisterDate():string {
    return $this->registerDate;
}

function setRegisterDate(string $r){
    $this->registerDate = $r;
}

function getIsActive():string {
    return $this->isActive;
}

function setIsActive(string $i){
    $this->isActive = $i;
}

function getIsAdmin():string {
    return $this->isAdmin;
}

function setIsAdmin(string $iA){
    $this->isAdmin = $iA;
}
}

?>