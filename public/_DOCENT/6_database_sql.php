<?PHP
$titel=strstr(__FILE__,'_DOCENT');
include('opdracht_begin.php');
/****************************
TYP HIERONDER JOUW PHPCODE
****************************/

echo '<h2>PHP laten <i>praten</i> met MySQL</h2>';
echo '<p>PHP kan pagina-resultaten genereren die het gevolg zijn van informatie in de database</p>';

echo '<h2>Het begint met het maken van een <i>connectie</i>.</h2>';
$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'postcode';
$con = mysqli_connect($server, $user, $pass, $db);

echo '<h2>Als de verbinding is gelegd kun je een query uitvoeren.</h2>';
$sql = "SELECT DISTINCT plaats,gemeente FROM postcode WHERE Pcnum = 9801";
$records = mysqli_query($con,$sql);
// Haal alle rijen op en zet ze om in een associatieve array
$straten = mysqli_fetch_all($records,MYSQLI_ASSOC);

echo '<pre>';
print_r($straten);
echo '<pre>';

foreach ($straten as $straat) {
    echo $straat['plaats'].' (gemeente '.$straat['gemeente'].')<br>';
}

echo '<h2>variant met key-values</h2>';
foreach ($straten as $straat) {
    echo "| ";
    foreach ($straat as $sleutel => $waarde) {
        echo "$sleutel: $waarde | ";
    }
    echo "<br>";
}

/****************************
EINDE VAN JOUW PHPCODE
****************************/
include('opdracht_eind.php');
?>