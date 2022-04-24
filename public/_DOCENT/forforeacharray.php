<?PHP
echo '<h1>uitleg for en foreach met arrays</h1>';
echo '<p>Je kunt zowel een for als een foreach gebruiken om door een resultatenlijst te lopen.
      Het advies is om met een foreach te werken.</p>';

$lijst = ['Nederlands','Engels','Frans','Duits'];

echo '<h2>een array bekijken met for-loop. LET OP: niet <= maar < en gebruik { } voor arrays</h2>';
for ($itemNummer = 0; $itemNummer < count($lijst); $itemNummer++) {
    echo "$itemNummer => {$lijst[$itemNummer]} * ";
}

echo '<h2>een array bekijken met foreach</h2>';
foreach ($lijst as $item) {
    echo "$item * ";
}

echo '<h2>een associatieve array bekijken met foreach</h2>';
$leraar = array('afko' =>'VNR', 'achternaam' => 'Van der Veen', 'woonplaats' => 'B207');
foreach ($leraar as $kenmerk => $waarde) {
    echo "$kenmerk : $waarde <br>";
}

echo '<h2>EXTRA Complexere data met een "lijst in een lijst"</h2>';
$leraar['vakken'] = ['natuurkunde','informatica'];
echo "{$leraar['achternaam']} geeft de vakken: ";
foreach ($leraar['vakken'] as $vak) {
    echo $vak.' ';
}

?>