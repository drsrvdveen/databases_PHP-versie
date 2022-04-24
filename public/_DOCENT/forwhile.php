<?PHP
echo '<h1>uitleg for en while</h1>';
echo '<p>Een for gebruik je als je vooraf weet wat het aantal items zal zijn.
      een While gebruik je al het aantal herhalingen door de computer moet worden bepaald.</p>';


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
?>