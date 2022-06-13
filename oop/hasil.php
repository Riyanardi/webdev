<?php
require_once "human.php"
require_once "hitung.php"

$person = new Human();

var_dump($person instanceof Human) 

$person->set_name("jarjit");

echo $person->get_name();

class pria extends Human {
    function salam() {
        return "salam kenal nama saya".$this->nama;
    }
}

$orang = new pria();

$orang->set_name("axel");


