<?PHP
$titel=strstr(__FILE__,'_DOCENT');
include('opdracht_begin.php');
/****************************
TYP HIERONDER JOUW PHPCODE
****************************/

echo '<h2>Een lijst met meer dimensies</h2>';
// een array definiëren
$A = array('naam' => 'Alice','plaats' => 'Groningen','leeftijd' => 16);
$B = array('naam' => 'Bob','plaats' => 'Eelde','leeftijd' => 17);
$E = array('naam' => 'Eve','plaats' => 'Bedum','leeftijd' => 15);
$lijst = array($A,$B,$E);
echo '<pre>';
print_r($lijst);
echo '</pre>';
echo "De woonplaats van {$lijst[1]['naam']} is {$lijst[1]['plaats']}.";

echo '<h2>Een lijst doorlopen met foreach</h2>';
foreach ($lijst as $persoon) {
    echo "{$persoon['naam']} woont in {$persoon['plaats']}.<br>";
}

/****************************
EINDE VAN JOUW PHPCODE
****************************/
include('opdracht_eind.php');
?>