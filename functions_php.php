<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=madrassatoun;charset=utf8', 'root', '');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

function Add_Data($table,$champ,$data)
{
	
}

function Update_Data($table,$champ,$data)
{
	
}

function Delete_Data($table,$champ,$data)
{
	
}

?>
