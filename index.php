<?php
require "Personnage.php";
require "Warior.php";
require "Archer.php";

$thomasWarior = new Warior("thomas");
$thomasArcher = new Archer("thomas");

echo "<pre>";
var_dump($thomasWarior);
var_dump($thomasArcher);
echo  "</pre>"; 