//Function e amra code er ekta block ke ekta name diye define kori<br>
//Function ke call kore amra oi block er code ke onek bar use korte pari<br>
//Normal function without parameter
<br><br>
<?php


function saikat()
{
    echo "Hello, I am Saikat. I am a web developer.<br>";

}
saikat(); 
saikat();
saikat();

?>

<?php

function marks($mark)
{
    $sum = 0;
    foreach($mark as $value)
        {
            $sum += $value;
        }
            return $sum;
}
$saikat = [90, 80, 85, 95, 88];
$SaikatMarks = marks($saikat);
echo "Saikat total marks: " . $SaikatMarks . "<br>";
 
$tamim = [85, 75, 80, 90, 92];
$TamimMarks = marks($tamim);
echo "Tamim total marks: " . $TamimMarks . "<br>";


?>
//eita function er parameter diye array pass kore tar total marks ber kora hoyeche<br>