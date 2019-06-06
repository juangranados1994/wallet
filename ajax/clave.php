<?php

$palabra1 = $_POST['palabra1'];
$palabra2 = $_POST['palabra2'];
$palabra3 = $_POST['palabra3'];
$palabra4 = $_POST['palabra4'];
$palabra5 = $_POST['palabra5'];
$palabra6 = $_POST['palabra6'];
$palabra7 = $_POST['palabra7'];
$palabra8 = $_POST['palabra8'];
$palabra9 = $_POST['palabra9'];
$palabra10 = $_POST['palabra10'];
$palabra11 = $_POST['palabra11'];
$palabra12 = $_POST['palabra12'];
$password = 'fabian';


$palabras = $palabra1.$palabra2.$palabra3.$palabra4.$palabra5.$palabra6.$palabra7.$palabra8.$palabra9.$palabra10.$palabra11.$palabra12;
$password = hash('sha256', $palabras.$password);
echo $password;


