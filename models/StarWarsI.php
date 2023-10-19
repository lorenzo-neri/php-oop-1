<?php
$starWars = new Movie('Star wars');

$starWars->time = '121 min';
$starWars->poster = 'https://imgs.search.brave.com/Aotnl-7JiQ_0yoIcbcZpW_C8QuXr_hhjbtP3haLX2Zg/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9tLm1l/ZGlhLWFtYXpvbi5j/b20vaW1hZ2VzL0kv/ODFaYXB2LWNYREwu/anBn';
$starWars->get_genre('Fantasy');
$starWars->get_genre('Adventure');
