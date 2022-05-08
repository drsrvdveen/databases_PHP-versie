<?PHP
$titel=strstr(__FILE__,'_DOCENT');
include('opdracht_begin.php');
/****************************
TYP HIERONDER JOUW PHPCODE
****************************/

// Je kunt zowel een for als een foreach gebruiken om door een resultatenlijst te lopen.
// Het advies is om met een foreach te werken.

$lijst = ['Nederlands','Engels','Frans','Duits'];

echo '<h2>een array bekijken met for-loop. LET OP: niet <= maar < en gebruik { } voor arrays</h2>';
for ($itemNummer = 0; $itemNummer < count($lijst); $itemNummer++) {
    echo "$itemNummer => {$lijst[$itemNummer]} * ";
}

echo '<h2>een array bekijken met foreach</h2>';
foreach ($lijst as $item) {
    echo "$item * ";
}

echo '<h2>een associatieve array INCLUSIEF SLEUTELS bekijken</h2>';
$dieren =array(
    "aap" => array('voedsel' => 'noot', 'land' => 'Gibraltar', 'eigenaar' => 'Mies'),
    "vis" => array('voedsel' => 'worm', 'land' => 'Tuvalu', 'eigenaar' => 'Teun')
    );

foreach ($dieren as $sleutel => $dier) {
    echo "<h3>soort: $sleutel</h3>";
    foreach ($dier as $eigenschap => $waarde) {
        echo "<i>$eigenschap</i> : $waarde | ";
    }
    echo "<br>";
}

echo '<pre>';
print_r($dieren);
echo '</pre>';

/****************************
EINDE VAN JOUW PHPCODE
****************************/
include('opdracht_eind.php');
?>