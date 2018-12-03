<?php

namespace App\Model;

/**
 * Class Recaptcha
 */
class Recaptcha
{

	// Ma clé privée
	$secret = "6LdP83kUAAAAAP064UABAviVbTEqhd0oVa4noEJx";
	// Paramètre renvoyé par le recaptcha
	$response = $_POST['g-recaptcha-response'];
	// On récupère l'IP de l'utilisateur
	$remoteip = $_SERVER['REMOTE_ADDR'];

	$api_url = "https://www.google.com/recaptcha/api/siteverify?secret="
	    . $secret
	    . "&response=" . $response
	    . "&remoteip=" . $remoteip ;

	$decode = json_decode(file_get_contents($api_url), true);


}