<?PHP
echo '<h1>uitleg voorwaarden: if else && booleans</h1>';
echo '<p>We kennen if && else al van de lessen Javascript. Let wel goed op de syntax.
      Een boolean is een variabele met de waarde true || false.</p>';

$cijferLijst = [7.3,4.5,9.0,5.5,4.9,10];

echo '<h2>voorwaardelijke opmaak door gebruik te maken van een if</h2>';
foreach ($cijferLijst as $cijfer) {
    $kleur = 'black';
    if ($cijfer < 5.5) {
        $kleur = 'red';
    }
    echo '<h5 style="color: '.$kleur.';">'.$cijfer.'</h5> | ';
}

echo '<h2><i>finetuning</i> tweede variant met een if-else && en if</h2>';
foreach ($cijferLijst as $cijfer) {
    if ($cijfer < 5.5) {
        $kleur = 'red';
    }
    else {
        $kleur = 'black';
    }
    echo '<h5 style="color: '.$kleur.';">'.$cijfer.'</h5>';
    if (next($cijferLijst) == true) { // deze regel laat duidelijker zien hoe het werkt
    // if (next($cijferLijst)) { // deze regel laat zien dat de toevoeging == true (of false) niet hoeft
        echo ' | ';
    }
}

echo '<h2>Toegang beheren op basis van booleans</h2>';
$authenticatie = true; // er is iemand ingelogd
$autorisatie = 'beheer'; // dit zijn de rechten van de ingelogde persoon

if ($authenticatie) {
    echo '<h5>Welkom op het afgeschermde gedeelte van onze website.</h5>';
    if ($autorisatie == 'beheer') {
        echo ' <h5><a href="#">geheime link</a></h5>';
    }
    else {
        echo ' <h5>U heeft <b style="color: dodgerblue;">lees</b>rechten.</h5>';
    }
}
else {
    echo '<h5>U bent niet ingelogd.</h5>';
}

?>