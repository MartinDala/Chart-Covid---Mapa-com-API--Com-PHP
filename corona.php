<?php

$url="https://coronavirus-19-api.herokuapp.com/countries";

$retorna=file_get_contents($url);
$vendor=json_decode($retorna,true);


#var_dump($vendor);

foreach($vendor as $arrays){

    echo " Pais: ".$arrays['country'] ."<br>";
    echo " Casos: ".$arrays['cases'] ."<br>";
    echo " Mortes: ".$arrays['deaths'] ."<br>";
    echo " Recuperados: ".$arrays['recovered']."<br><hr>";


}

?>