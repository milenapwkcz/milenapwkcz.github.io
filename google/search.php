<?php
    $miasta= file_get_contents('./cities.json', true);
    $dekodowanie= json_decode($cities);
    $wynik=array();
    $slowo= htmlspecialchars($_GET["name"]);
    foreach ($dekodowanie as &$miasto)
    {
        if (is_numeric(stripos($miasto->name, $slowo)))
        {
            array_push($wynik, $miasto->name);
        }
    }
    
    $lista= json_encode($wynik);
    echo $lista;
?>
