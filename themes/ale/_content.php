<?php

// Miguel
//Array que  que almacena todos los datos

$dato =[
    'lang'=>'es-ES',
    'webtitulo'=>"calzadas wars",
    'titulo'=>"la guerra de las calzadas",
    'subtitulo'=>'los estudiantes de desarrollo web se revelan al profesor Darth Miguel.',
    'txt1'=>'Han pasado más casi 6 meses desde que el curso empezo, los estudiantes se revela a la fuerza oscura de la web. ',
    'txt2'=>'Ttodos se uniran a lña fuerza galactica de la calzada para luchar contra darth Miguel y el lado oscuro.

    
    'img1'=>'001.jpg',
    'img2'=>'002.jpg',
    'img3'=>'003.jpg',
    'menu'=>[
            ['Home','index.php',0],
            ['Películas','peliculas.php',0],
            ['Cartelera','cartelera.php',0],
            ['facebook','https://facebook.com',1]
            ]
    ];

 /*   
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

*/