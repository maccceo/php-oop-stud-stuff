<?php 

include ("classes.php");

$persone = [
	new Persona ("Marco", "Mazzetto", "via C. Pavese 32, Travedona Monate (Va)"),
	new Persona ("Federico", "Feggi", "via Galvani 11, Travedona Monate (Va)"),
	new Persona ("Luca", "Markzi", "via Garibaldi 13A, Sarzana (Sp)")
];

foreach ($persone as $persona) {
	echo $persona -> toString();
}



$studenti = [
	new Studente ("Marco", "Mazzetto", "Laurea Triennale in Lettere", "3000€"),
	new Studente ("Federico", "Feggi", "Licenza Media", "150€"),
	new Studente ("Luca", "Markzi", "Laurea in Giurisprudenza", "8750€")
];

$studenti[0] -> setAddress("via C. Pavese 32, Travedona Monate (Va)");
$studenti[2] -> setAddress("via Garibaldi 13A, Sarzana (Sp)");

foreach ($studenti as $studente) {
	echo $studente -> toString();
}

?>
