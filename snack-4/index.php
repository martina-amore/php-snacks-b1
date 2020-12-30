<!-- SNACK 4: Creare un array con 15 numeri casuali, tenendo conto che l’array non
dovrà contenere lo stesso numero più di una volta -->

<h3>Generatore numeri casuali da 1 a 30</h3>
<ol>
<?php

    $numbers = [];
    while (count($numbers) < 15) {
        $number = rand(1, 30);
        if (!in_array($number, $numbers)) {
            $numbers[] = $number;
            echo "<li>"
            .$number
            ."<br>"
            ."</li>";
        }
    }

?>

</ol>
