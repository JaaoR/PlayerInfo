<?php

class Player {

	private $name;

	public function getUUID(){
		$url = "https://api.mojang.com/users/profiles/minecraft/$this->name";
		$json = json_decode(file_get_contents($url), true);
		return $json['id'];
	}

	public function getName(){
		return $this->name;
	}

	public function setName($n){
		$this->name = $n; 
	}

	public function getHeadSkin($size){
		return "http://cravatar.eu/avatar/$this->name/$size.png";
	}


}

?>