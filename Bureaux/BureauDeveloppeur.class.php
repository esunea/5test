<?php
require_once("Bureau.class.php");

class BureauDeveloppeur extends Bureau {

	function __construct($array = array()){
		parent::__construct($array);
		if(count($array) == 0){
			$this->prisesReseau  = 6;
			$this->prisesSecteur = 6;
			$this->chaises       = 3;
		}
	}
	function tauxEspaceDispo() {
		
		return (5*$this->personnes) - ($this->prisesReseau * 3 + $this->prisesSecteur * 3 + $this->prisesTel + $this->chaises * 1.5 + $this->tables);
	}
	
	function tauxEspaceDispoCorrigé() {
		return min(
			$this->prisesReseau / 3  - $this->personnes,
			$this->prisesSecteur / 3 - $this->personnes,
			$this->prisesTel         - $this->personnes,
			$this->chaises / 1.5     - $this->personnes,
			$this->tables            - $this->personnes
		);
	}
}