<?php

$posts = [

    '25/12/2020' => [
        [
            'title' => 'Post 1',
            'author' => 'Martina Amore',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Martina Amore',
            'text' => 'Testo post 2'
        ],
    ],
    '26/12/2020' => [
        [
            'title' => 'Post 3',
            'author' => 'Martina Amore',
            'text' => 'Testo post 3'
        ]
    ],
    '29/12/2020' => [
        [
            'title' => 'Post 4',
            'author' => 'Martina Amore',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Martina Amore',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Martina Amore',
            'text' => 'Testo post 6'
        ]
    ],
];

?>

<p>
    <?php
        foreach ($posts as $key => $value) {
            foreach ($value as $post) {
                echo $key ."<br>";
                echo $post["title"]
                ."<br>"
                . $post["author"]
                ."<br>"
                . $post["text"]
                ."<br>" ."<br>";
            }
        }
    ?>
</p>
