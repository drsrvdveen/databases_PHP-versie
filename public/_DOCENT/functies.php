<?PHP
echo '<h1>functies in PHP</h1>';
echo '<p>We laten hier drie hoofdvoorbeelden van functies zien. 
      Merk op dat we hier dezelfde functie <i>geefCijferOverzicht</i> HERgebruiken.</p>';

echo '<h2>voorbeeld van een functie die een vaste opdracht uitvoert.</h2>';
inleiding();
function inleiding() {
    echo '<h5>Beste leerling, jouw ip-adres is '.$_SERVER['REMOTE_ADDR'].'.</h5>';
}

echo '<h2>voorbeeld van een functie die een opdracht uitvoert op basis van invoer.</h2>';
$cijferLijst = [7.3,4.5,9.0,5.5,4.9,10];
geefCijferOverzicht($cijferLijst);

function geefCijferOverzicht($lijst) {
    foreach ($lijst as $cijfer) {
        $kleur = 'black';
        if ($cijfer < 5.5) {
            $kleur = 'red';
        }
        echo '<h5 style="color: '.$kleur.';">'.$cijfer.'</h5> | ';
    }
}

echo '<h2>voorbeeld van een functie die een resultaat teruggeeft (in een variabele).</h2>';
// $onvoldoendes = getOnvoldoendes();
$onvoldoendes = filterOnvoldoendes($cijferLijst);
geefCijferOverzicht($onvoldoendes);

function filterOnvoldoendes($lijst) {
    foreach($lijst as $volgnummer => $cijfer) {
        if ($cijfer >= 5.5) {
            unset($lijst[$volgnummer]);
        }
    }
    return $lijst;
}
?>