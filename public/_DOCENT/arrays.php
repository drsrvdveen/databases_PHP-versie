<?PHP
$titel=strstr(__FILE__,'_DOCENT');
include('opdracht_begin.php');
/****************************
TYP HIERONDER JOUW PHPCODE
****************************/
echo '<h2>Arrays met een volgnummer</h2>';
// een array definiëren
$lijst = array('Alice','Bob','Eve');
// Het eerste element heeft standaard key 0
// Merk op: het gebruik van accolades bij de eerste variant
echo "<p>Het eerste element uit de lijst is {$lijst[0]}!</p>";
// Gebruik een punt voor concateneren: aan elkaar plakken
echo "<p>Het tweede element is ".$lijst[1]."!<p>";

// Er zijn heel veel array-functies: gebruik PHP.net!
echo '<h1>voor</h1>';
print_r($lijst);
// push voegt een element toe aan het eind
array_push($lijst,'Trent');
// shift verwijderd het eerste element
array_shift($lijst);
echo '<h1>na</h1>';
print_r($lijst);

echo '<h2>Arrays met een gekozen sleutel</h2>';
// associatieve arrays worden straks belangrijk bij databases
// de keys zijn hier geen oplopende getallen, maar zelf gedefinieerd
$personen = array('ik' => 'Alice','vriend' => 'Bob','vijand' => 'Eve');
print_r($personen);

/****************************
EINDE VAN JOUW PHPCODE
****************************/
include('opdracht_eind.php');
?>