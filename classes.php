<?php 

trait FullName {
	public function getFullName() {
		return $this -> name . ' ' . $this -> lastname; 
	}
}


class Persona {
	protected $name;
	protected $lastname;
	protected $address;

	use FullName;

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


class Studente extends Persona {
	protected $studies;
	protected $taxes;

	use FullName;

	public function __construct($name,$lastname,$studies,$taxes) {
		$this -> name = $name;
		$this -> lastname = $lastname;
		$this -> studies = $studies;
		$this -> taxes = $taxes;
	}

	public function toString() {
		if ($this -> address) {
			return 	"<strong>" . $this -> getFullName() . "</strong>" .
					"<br><strong>Indirizzo:</strong> " . $this -> address .
					"<br><strong>Programma di studi:</strong> " . $this -> studies .
					"<br><strong>Tasse:</strong> " . $this -> taxes . "<br><br>";
		} else {
			return 	"<strong>" . $this -> getFullName() . "</strong>" .
					"<br><strong>Programma di studi:</strong> " . $this -> studies .
					"<br><strong>Tasse:</strong> " . $this -> taxes . "<br><br>";
		}
	}

	public function setAddress($address) {
		$this -> address = $address;
	}

	public function getAddress() {
		return $this -> address;
	}
}


class Professore extends Persona {
	protected $specialization;
	protected $wage;

	use FullName;

	public function __construct($name,$lastname,$specialization,$wage) {
		$this -> name = $name;
		$this -> lastname = $lastname;
		$this -> specialization = $specialization;
		$this -> wage = $wage;
	}

	public function toString() {
		if ($this -> address) {
			return 	"<strong>" . $this -> getFullName() . "</strong>" .
					"<br><strong>Indirizzo:</strong> " . $this -> address .
					"<br><strong>Specializzazione:</strong> " . $this -> specialization .
					"<br><strong>Paga:</strong> " . $this -> wage . "<br><br>";
		} else {
			return 	"<strong>" . $this -> getFullName() . "</strong>" .
					"<br><strong>Specializzazione:</strong> " . $this -> specialization .
					"<br><strong>Paga:</strong> " . $this -> wage . "<br><br>";
		}
	}

	public function setAddress($address) {
		$this -> address = $address;
	}

	public function getAddress() {
		return $this -> address;
	}
}

?>