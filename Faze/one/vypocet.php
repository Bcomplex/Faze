<?php

if (isset($_POST['m']) && isset($_POST['f'])) {
    $volume = $_POST["m"];
    $fraction = $_POST["f"];
//    echo '<pre>';
//    var_dump($fraction);
//    echo '</pre>';
    // fraction stone to volume and price
    function selectFraction($item)
    {
        switch ($item) {
            case 'frakce1':
                return array('volume' => 1.6,
                    'price' => 50);
                break;

            case 'frakce2':
                return array('volume' => 1.3,
                    'price' => 40);
                break;

            case 'frakce3':
                return array('volume' => 1.1,
                    'price' => 35);
                break;
            default:
                echo 'chyba';
                break;
        }

    }

    // stone => množstvý
    //$vol => selectFraction


    function volumeStone($stone, $vol)
    {
        $mass = $stone * $vol['volume'];
        $price = $mass * $vol['price'];
        return ['tun' => $mass,
            'price' => $price];

    }

    $n = selectFraction($fraction);
    $prices = volumeStone($volume, $n);
    echo 'potřebujete objednat: ' . $prices['tun'] . ' tun frakce. Bude vas to stát: ' . $prices['price'] . ' Kč';


}else
    echo'problem';

