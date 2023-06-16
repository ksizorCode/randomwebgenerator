<?php

// Jess
//Array q almacena todos los datos

$dato =[
    'titulo'=>"Desarrollo Web en Dicampus",
    'subtitulo'=>' Recta final para terminar el curso ',
    'txt2'=>'Día 23 Fiesta',
    'txt3'=>' >>-------->',
    'img1'=>'001.jpg',
    'img2'=>'002.jpg',
    'img3'=>'003.jpg',
    
    ];

    
echo $dato['txt3'];
echo $dato['img1'];
echo $dato['img2'];
echo $dato['img3'];

foreach($dato['menu'] as $e){
    echo '<ul>';
    echo '<li>';
    echo '<a href="'.$e[1].'">';
    echo $e[0];
    echo '</a>';
    echo '</li>';
    echo '</ul>';
}