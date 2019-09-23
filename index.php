<?php 

include ("classes.php");

echo "<h2>Persone</h2>";

$persone = [
	new Persona ("Marco", "Mazzetto", "via C. Pavese 32, Travedona Monate (Va)"),
	new Persona ("Federico", "Feggi", "via Galvani 11, Travedona Monate (Va)"),
	new Persona ("Luca", "Markzi", "via Garibaldi 13A, Sarzana (Sp)")
];

foreach ($persone as $persona) {
	echo $persona -> toString();
}



echo "<h2>Studenti</h2>";

$studenti = [
	new Studente ("Pietro", "Turbolento", "Laurea Triennale in Lettere", "3000€"),
	new Studente ("Maurizio", "Altofuoco", "Licenza Media", "150€"),
	new Studente ("Graziano", "Tiralecuoia", "Laurea in Giurisprudenza", "8750€")
];

$studenti[0] -> setAddress("via C. Pavese 32, Travedona Monate (Va)");
$studenti[2] -> setAddress("via Garibaldi 13A, Sarzana (Sp)");

foreach ($studenti as $studente) {
	echo $studente -> toString();
}



echo "<h2>Professori</h2>";

$professori = [
	new Professore ("Gianluca", "Tenoni", "Matematica difficile, molto difficile", "30000€/year"),
	new Professore ("Damiano", "Campari", "Antologia", "150€/year"),
	new Professore ("Nino", "Eldorado", "Ginnastica", "25600€/year")
];

$professori[0] -> setAddress("via Silvio Giudici, Cassano Magnago (Va)");
$professori[2] -> setAddress("via Franco Cavallero, Novalja (Cro)");

foreach ($professori as $professore) {
	echo $professore -> toString();
}

?>
