<?php
require_once("Bureau.class.php");
require_once("BureauDeveloppeur.class.php");
require_once("BureauCommercial.class.php");
$arrayKeys = array("reseau", "secteur", "tel", "chaises", "tables");	


$bureau = new Bureau();
$result = $bureau->tauxEspaceDispo();
echo($result . "<br/>");
$bureau->addPersonne();
$bureau->addPersonne();
$bureau->addPersonne();

$bureauDev = new BureauDeveloppeur();
echo($bureauDev->tauxEspaceDispo() . "<br/>");
$bureauDev->addPersonne();
$bureauDev->addPersonne();
$bureauDev->addPersonne();

echo("<br/>");
$bureauComm = new BureauCommercial();
$bureauComm->addPersonne();
$bureauComm->addPersonne();
$bureauComm->addPersonne();
$bureauComm->addPersonne();


$bureaux = array();

echo("<br/>");
// BureauDeveloppeur::createRandom();
function generateRandomDevBureau ($bureaux) {
	$array = array();
	foreach ($arrayKeys as $index => $key) {
		$array[$key] = rand(3,8);
	}
	$bureaux[] = new BureauDeveloppeur($array);
}
function generateRandomComBureau ($bureaux) {
	$array = array();
	foreach ($arrayKeys as $index => $key) {
		$array[$key] = rand(3,8);
	}
	$bureaux[] = new BureauCommercial($array);
}