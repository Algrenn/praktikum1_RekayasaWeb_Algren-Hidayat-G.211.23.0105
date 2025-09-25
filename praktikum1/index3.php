<?php
$jsonobj='{"Azril":20 , "Rexy":18 , "Luthfi":22}';

$obj = json_decode($jsonobj);

echo $obj->Azril;
echo $obj->Rexy;
echo $obj->Luthfi;
?>