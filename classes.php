<?php 

class Persona {
	protected $name;
	protected $lastname;
	protected $address;

	public function __construct($name,$lastname,$address) {
		$this -> name = $name;
		$this -> lastname = $lastname;
		$this -> address = $address;
	}

	public function toString() {
		return 	"<strong>Nome:</strong> " . $this -> name .
				"<br><strong>Cognome:</strong> " . $this -> lastname .
				"<br><strong>Indirizzo:</strong> " . $this -> address . "<br><br>";
	}
}

?>