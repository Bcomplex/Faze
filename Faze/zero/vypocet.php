<?php
if (isset($_POST['a']) && isset($_POST['b']) && isset($_POST['v']) ) {
    $strana1 = $_POST['a'];
    $strana2 = $_POST['b'];
    $vyska = $_POST['v'];
    $sum = $strana1 * $strana2 * $vyska;
    echo 'Množství štěrku které potřebujete je: ' . $sum . ' metrů krychlovích';

}else
    echo 'problem';


?>