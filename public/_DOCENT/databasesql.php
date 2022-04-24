<?PHP
echo '<h1>PHP laten <i>praten</i> met MySQL</h1>';
echo '<p>PHP kan pagina-resultaten genereren die het gevolg zijn van informatie in de database</p>';

echo '<h2>Het begint met het maken van een <i>connectie</i>.</h2>';
$server = 'localhost';
$user = 'username';
$pass = 'password';
$db = 'postcode';
$con = mysqli_connect($server, $user, $pass, $db);

if (!$con) {
    die("Verbinding mislukt: " . mysqli_connect_error());
}
else {
    echo '<h3>verbinding gelukt</h3>';
}

echo '<h2>Als de verbinding is gelegd kun je een query uitvoeren.</h2>';
$sql = "SELECT DISTINCT plaats,gemeente FROM postcode WHERE Pcnum = 9801";
$records = mysqli_query($con,$sql);
if (mysqli_num_rows($records) > 0) {
    while($record = mysqli_fetch_assoc($records)) {
        echo $record['plaats'].' (gemeente '.$record['gemeente'].')<br>';
    }
}

echo '<h2>Een aantrekkelijk alternatief is een constructie met foreach.</h2>';
$sql = "SELECT DISTINCT plaats,gemeente FROM postcode WHERE Pcnum = 9800 ORDER BY plaats DESC";
$records = mysqli_query($con,$sql);
$straten = mysqli_fetch_all($records,MYSQLI_ASSOC);
foreach ($straten as $straat) {
    echo $straat['plaats'].' (gemeente '.$straat['gemeente'].')<br>';
}

echo '<h2>Met mysqli_fetch_array wordt elk record apart omgezet in een associatieve array.</h2>';
$sql = "SELECT DISTINCT plaats,gemeente FROM postcode WHERE Pcnum = 9999 ORDER BY plaats ASC";
$records = mysqli_query($con,$sql);
while ($straat = mysqli_fetch_array($records,MYSQLI_ASSOC)) {
    echo $straat['plaats'].' (gemeente '.$straat['gemeente'].')<br>';
}
?>