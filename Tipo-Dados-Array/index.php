<?php

$nome = 'Fernando';

$filmes = ['terror' => 'panico', 'fantasia' => 'senhor dos aneis'];
$filmes['dramas'] = 'O massacre da serra eletrica';
$terror = $filmes['terror'];
//echo $terror;

$livros = [
  
    'ficcao' => ['livro_filme'=>['o senhor dos aneis','Harry potter']],
    'terror' => ['vampiros'=>'livro de vampiro', 'lobisomem'=>'livro de lobisomem']
    
];

print_r($livros['ficcao']['livro_filme'][1]);