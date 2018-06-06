<?php 
class Bureau {
	protected $prisesReseau  = 0;
	protected $prisesSecteur = 0;
	protected $prisesTel     = 0;
	protected $chaises       = 0;
	protected $tables        = 0;
	protected $personnes     = 0;

	static function createRandom() {
		if( $this instanceOf Bureau){
			echo("Bureau");
		}
		if( $this instanceOf BureauDeveloppeur){
			echo("dev");
		}
	}


	function __construct($array = array()){
		if(count($array) == 0){
			$this->prisesReseau  = 2;
			$this->prisesSecteur = 2;
			$this->prisesTel     = 2;
			$this->chaises       = 2;
			$this->tables        = 2;
		} else {
			if(isset($array['reseau'])){
				$this->prisesReseau = $array['reseau'];
			}
			if(isset($array['secteur'])){
				$this->prisesReseau = $array['secteur'];
			}
			if(isset($array['tel'])){
				$this->prisesReseau = $array['tel'];
			}
			if(isset($array['chaises'])){
				$this->prisesReseau = $array['chaises'];
			}
			if(isset($array['tables'])){
				$this->prisesReseau = $array['tables'];
			}
		}
	}
	function tauxEspaceDispo() {
		
		return (5*$this->personnes) - ($this->prisesReseau + $this->prisesSecteur + $this->prisesTel + $this->chaises + $this->tables);
	}
	function addPersonne(){
		$espace = $this->tauxEspaceDispoCorrigé(); 
		if($espace >= 1){
			$this->personnes += 1;
			echo($espace);
		}else{
			echo("pas ajouté");
		}
		
	}

	function tauxEspaceDispoCorrigé() {
		return min(
			$this->prisesReseau  - $this->personnes,
			$this->prisesSecteur - $this->personnes,
			$this->prisesTel     - $this->personnes,
			$this->chaises       - $this->personnes,
			$this->tables        - $this->personnes
		);
	}
}