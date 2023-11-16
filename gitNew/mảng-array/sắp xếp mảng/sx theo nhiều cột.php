<?php
$players = [
    [
        'name' => 'Adam',
        'score' => 70,
        'health' => 80
    ],
    [
        'name' => 'Joey',
        'score' => 60,
        'health' => 90
    ],
    [
        'name' => 'Monty',
        'score' => 70,
        'health' => 45
    ],
    [
        'name' => 'Andrew',
        'score' => 90,
        'health' => 80
    ],
    [
        'name' => 'Sally',
        'score' => 60,
        'health' => 85
    ],
    [
        'name' => 'Amanda',
        'score' => 98,
        'health' => 50
    ],
    [
        'name' => 'James',
        'score' => 50,
        'health' => 50
    ]
];
$p_score = array_column($players, 'score');
$p_health = array_column($players, 'health');
array_multisort($p_score, SORT_DESC, $p_health, SORT_ASC, $players);

print_r($players);
?>