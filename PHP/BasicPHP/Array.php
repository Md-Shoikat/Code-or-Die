//Associative array<br>
//Associative array is an array where elements are stored as key-value pairs instead of numeric index.
<?php
$favoriteColors = array(
    "Saikat" => "Blue",
    "Tamim" => "Green",
    "Rafi" => "Red",
    "Sabbir" => "Yellow"
    //Kye-value pair e key holo name and value holo color
);
foreach ($favoriteColors as $key => $value) {
    echo "$key's favorite color is: $value<br>";
}
// echo "Saikat favorite color is:";
// echo $favoriteColors["Saikat"];
// echo "<br>";
// echo "Tamim favorite color is:";
// echo $favoriteColors["Tamim"];
// echo "<br>";
// echo "Rafi favorite color is:";
// echo $favoriteColors["Rafi"];
// echo "<br>";
// echo "Sabbir favorite color is:";
// echo $favoriteColors["Sabbir"];
// echo "<br>";

?>