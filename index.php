<?php 

include ("classes.php");

$dottori = [
	new Persona ("Marco", "Mazzetto", "via C. Pavese 32, Travedona Monate (Va)"),
	new Persona ("Federico", "Feggi", "via Galvani 11, Travedona Monate (Va)"),
	new Persona ("Luca", "Markzi", "via Garibaldi 13A, Sarzana (Sp)")
];

foreach ($dottori as $dottore) {
	echo $dottore -> toString();
}

?>
