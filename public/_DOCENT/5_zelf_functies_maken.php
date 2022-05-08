<?PHP
$titel=strstr(__FILE__,'_DOCENT');
include('opdracht_begin.php');
/****************************
TYP HIERONDER JOUW PHPCODE
****************************/

echo '<h1>functies in PHP</h1>';
echo '<p>We laten hier drie hoofdvoorbeelden van functies zien. 
      Merk op dat we hier dezelfde functie <i>geefCijferOverzicht</i> HERgebruiken.</p>';

echo '<h2>voorbeeld van een functie die een vaste opdracht uitvoert.</h2>';
// aanroepen van de functie
inleiding();

// declaratie van de functie
function inleiding() {
    echo '<h5>Beste leerling, jouw ip-adres is '.$_SERVER['REMOTE_ADDR'].'.</h5>';
}

echo '<h2>voorbeeld van een functie die een opdracht uitvoert op basis van invoer.</h2>';

$cijferLijst = [7.3,4.5,9.0,5.5,4.9,10];
// aanroepen van de functie
geefCijferOverzicht($cijferLijst);

// declaratie van de functie
function geefCijferOverzicht($lijst) {
    echo "| ";
    foreach ($lijst as $cijfer) {
        $kleur = 'black';
        if ($cijfer < 5.5) {
            $kleur = 'red';
        }
        echo '<h4 style="color: '.$kleur.';">'.$cijfer.'</h4> | ';
    }
}

echo '<h2>voorbeeld van een functie die een resultaat teruggeeft (in een variabele).</h2>';
// aanroepen van de functie
$onvoldoendes = filterOnvoldoendes($cijferLijst);
// aanroepen van de eerder gemaakte functie
geefCijferOverzicht($onvoldoendes);

// declaratie van de functie
function filterOnvoldoendes($lijst) {
    foreach($lijst as $volgnummer => $cijfer) {
        if ($cijfer >= 5.5) {
            unset($lijst[$volgnummer]);
        }
    }
    return $lijst;
}

/****************************
EINDE VAN JOUW PHPCODE
****************************/
include('opdracht_eind.php');
?>