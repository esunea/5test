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
$bureaux[] = new BureauCommercial();
echo("<br/>");
BureauDeveloppeur::createRandom();