<h1>Loops</h1>

<?php

$i = 1;
while ($i < 6) {
echo $i;
$i++;
}


$i = 1;
do {
echo $i;
$i++;
}
while ($a < 6);


for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";

}


$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $x) {
echo "$x <br>";
}

?>

