<?php
require_once("Bureau.class.php");

class BureauCommercial extends Bureau {

	function __construct($array = array()){
		parent::__construct($array);
		if(count($array) == 0){
			$this->prisesTel = 4;
			$this->chaises   = 4;
		}
	}
	function tauxEspaceDispo() {
		
		return ( 5*$this->personnes ) - ($this->prisesReseau + $this->prisesSecteur  + $this->prisesTel * 2 + $this->chaises * 2 + $this->tables);
	}
	function tauxEspaceDispoCorrigé() {
		return min(
			$this->prisesReseau  - $this->personnes,
			$this->prisesSecteur - $this->personnes,
			$this->prisesTel / 2 - $this->personnes,
			$this->chaises   / 2 - $this->personnes,
			$this->tables        - $this->personnes
		);
	}
}