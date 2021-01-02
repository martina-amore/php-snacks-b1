<!-- SNACK 7: Creare un array contenente qualche alunno di un’ipotetica classe. Ogni
alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php

    $alunni = [
            [
                'nome' => 'Pippo',
                'cognome' => 'Disney',
                'voti' => [5, 8, 10, 4, 2],
            ],
            [
                'nome' => 'Pluto',
                'cognome' => 'Disney',
                'voti' => [9, 7, 8, 6, 1],
            ],
            [
                'nome' => 'Topolino',
                'cognome' => 'Disney',
                'voti' => [10, 10, 10, 9, 10],
            ],
            [
                'nome' => 'Paperino',
                'cognome' => 'Disney',
                'voti' => [2, 3, 0, 4, 2],
            ],
    ];

    foreach ($alunni as $i => $alunno) {
        echo "Alunno n. " .($i + 1) ."<br>"
        .$alunno["nome"] ."\n"
        .$alunno["cognome"] ."<br>"
        ."Voti: ";
        foreach ($alunno["voti"] as $vote) {
            echo $vote ."\n";
        }
        echo "<br>Media voti: " .$average = array_sum($alunno["voti"]) / count($alunno["voti"])
        ."<br><br>";
    }

?>
