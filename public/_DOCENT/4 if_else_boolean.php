<?PHP
$titel=strstr(__FILE__,'_DOCENT');
include('opdracht_begin.php');
/****************************
TYP HIERONDER JOUW PHPCODE
****************************/

echo '<h2>uitleg voorwaarden: if else && booleans</h3>';
echo '<p>We kennen if && else al van de lessen Javascript. Let wel goed op de syntax.<br>
      Een boolean is een variabele met de waarde true || false.</p>';

$cijferLijst = [7.3,4.5,9.0,5.5,4.9,10];

echo '<h2>voorwaardelijke opmaak door gebruik te maken van een if [foreach]</h2>';
foreach ($cijferLijst as $cijfer) {
    $kleur = 'black';
    if ($cijfer < 5.5) {
        $kleur = 'red';
    }
    echo '<h4 style="color: '.$kleur.';">'.$cijfer.'</h4> | ';
}

echo '<h2>wanneer gebruik je while (en niet if)?</h2>';
echo '<p>Antwoord: als je wil doorgaan tot (/ stoppen na) een aantal herhalingen dat vooraf onbekend is.</p>';

$aantal = 0;
$totaal = 0;
while ($totaal < 25) {
    $totaal+= $cijferLijst[$aantal];
    $aantal++;
    echo "tussenstand: het totaal is $totaal na $aantal cijfer(-s).<br>";
}


echo '<h2>Toegang beheren op basis van booleans</h2>';
$authenticatie = false; // er is (n-)iemand ingelogd
$autorisatie = 'beheer'; // dit zijn de rechten van de ingelogde persoon

if ($authenticatie) {
    echo '<h3>Welkom op het afgeschermde gedeelte van onze website.</h3>';
    if ($autorisatie == 'beheer') {
        echo ' <h3><a href="#">geheime link</a></h3>';
    }
    else {
        echo ' <h3>U heeft <b style="color: dodgerblue;">lees</b>rechten.</h3>';
    }
}
else {
    echo '<h3>U bent niet ingelogd.</h3>';
}

/****************************
EINDE VAN JOUW PHPCODE
****************************/
include('opdracht_eind.php');
?>