<?php

// Fran
//Array que  que almacena todos los datos

$dato =[
    'lang'=>'es-ES',
    'webtitulo'=>"Vamos al lado más dulce",
    'titulo'=>"Date un gusto",
    'subtitulo'=>'Cuál vas a probar primero....',
    'txt1'=>'Uno de los dulces tradicionales que personalmente más disfruto casadielles ...',
    'txt2'=>'el turrón (en todas sus variedades) es el dulce más típico que encontramos en todas las mesas durante la Navidad. ',
    'txt3'=>'Seguramente os pase como a mi, Makowiec no lo había escuchado en la vida, pero si me hacéis caso, pasara a vuestro fondo de cocina porque es una maravilla.',
    'img1'=>'001.jpg',
    'img2'=>'002.jpg',
    'img3'=>'003.jpg',
    'menu'=>[
            ['Home','index.php',0],
            ['Historia','historia.php',0],
            ['Fotos','fotos.php',0],
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