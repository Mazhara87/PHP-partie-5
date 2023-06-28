<?php
// ex1,2
$months = array(
"janvier",
"février",
"mars",
"avril",
"mai",
"juin",
"juillet",
"aout",
"septembre",
"octobre",
"novembre",
"décembre"
);
echo$months[2]
?>

<?php
// ex3
echo $months[5];
?>
<br>
<?php
// ex4
$months[7] = "août";
?>
<br>
<?php
// ex5
$departements = array(
    "59" => "Nord",
    "62" => "Pas-de-Calais",
    "80" => "Somme",
    "02" => "Aisne",
    "60" => "Oise",
);
// ex6
echo $departements[59];
?>
<br>

<?php
// ex7
$departements[51] = "Marne";
?>

<?php
// ex8
foreach($months as $month) {
    echo $month. "<br>";
}
?>

<?php
// ex9
foreach($departements as $numero =>$nom) {
    echo $nom. "<br>";
}
?>

<?php
// ex10
foreach($departements as $numero =>$nom) {
    echo "Le departement " .$nom. "a le numero " .$numero. "<br>";
}
?>