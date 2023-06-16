<?
//Listado de todas las carpetas que están dentro de themes
$casos =['ric','fra','ale','jes','lau','bea','aug','mig'];




//Devuelve un valor aleatorio del 0 a la cantidad total de alumnos
function random(){
    global $casos;
    $numElementos = count($casos);

    return rand(0,$numElementos);
}



//Cargar elementos via include
function insertar($v){
    global $casos ;
    switch ($v) {
        
        // Si es Header o head o html carga header.php
        case 'header':
        case 'head':
        case 'html':
            include 'themes/'.$casos[random()].'/header.php';
            break;
        // Si es Footer carga footer.php
        case 'footer':
            include 'themes/'.$casos[random()].'/footer.php';
            break;
        
        //Si no es ninguno de los anteriores carga:
        default:
            include $v.'.php';
            break;
    }
}


// IMPORTANCIÓN DE CONTENIDO


include 'themes/mig/_content.php';



function titulo(){
    global $dato;
    echo $dato['titulo'];
}
function subtitulo(){
    global $dato;
    echo $dato['subtitulo'];
}
function txt1(){
    global $dato;
    echo $dato['txt1'];
}
function txt2(){
    global $dato;
    echo $dato['txt2'];
}
function txt3(){
    global $dato;
    echo $dato['txt3'];
}
function img1(){
    global $dato;
    echo $dato['img1'];
}
function img2(){
    global $dato;
    echo $dato['img2'];
}
function img3(){
    global $dato;
    echo $dato['img3'];
}















    ?>

