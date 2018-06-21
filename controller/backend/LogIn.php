<?php
require_once('model/LogIn.php');
function logIn()
{
    $logIn = new LogIn(); // Création d'un objet
    $logIn = $logIn->LogIn(); // Appel d'une fonction de cet objet

}

function showlogIn()
{
	require('view/backend/login.php');
}

function logOut()
{
	$logIn = new LogIn(); // Création d'un objet
	$logIn = $logIn->LogOut(); // Appel d'une fonction de cet objet

}