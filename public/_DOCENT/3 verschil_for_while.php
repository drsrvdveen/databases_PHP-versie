<?PHP
$titel=strstr(__FILE__,'_DOCENT');
include('opdracht_begin.php');
/****************************
TYP HIERONDER JOUW PHPCODE
****************************/

echo '<p>Een <strong>for</strong> gebruik je als je vooraf weet wat het aantal items zal zijn.<br>
      Een <strong>while</strong> gebruik je als het aantal herhalingen door de computer moet worden bepaald.</p>';


echo '<h2>aftellen tot 0 met for-loop</h2>';
$beginWaarde = 10;
for ($getal = $beginWaarde ; $getal>=0 ; $getal--) {
    echo "$getal * ";
}

echo '<h2>aftellen tot 0 met while-voorwaarde</h2>';
$getal = $beginWaarde;
while ($getal >= 0) {
    echo "$getal * ";
    $getal--;
}

/****************************
EINDE VAN JOUW PHPCODE
****************************/
include('opdracht_eind.php');
?>