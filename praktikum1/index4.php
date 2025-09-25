<?php
$jsonobj = '{"Azril":20 , "Rexy":18 , "Luthfi":22}';

$arr = json_decode($jsonobj , true);

echo $arr["Azril"];
echo $arr["Rexy"];
echo $arr["Luthfi"];

?>