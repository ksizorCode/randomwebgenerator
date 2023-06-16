<?
//Listado de todas las carpetas que están dentro de themes
$casos =['ric','fra','ale','jes','lau','bea','aug','mig','eri'];


//Devuelve un valor aleatorio del 0 a la cantidad total de alumnos
function random(){
    global $casos;
    $numElementos = count($casos)-1;

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
        // Si es Footer carga footer.php
        case 'style':
            echo '<style>';
            include 'themes/'.$casos[random()].'/style.css';
            echo '</style>';
            break;
        
        //Si no es ninguno de los anteriores carga:
        default:
            include $v.'.php';
            break;
    }
}


//Cargar los datos del theme de mig - hasta que el resto de los alumnos mentan los suyos propios
include 'themes/mig/_content.php';

function titulo(){
    global $dato;
    echo $dato['titulo']; 
}

function subtitulo(){
    global $dato;
    echo $dato['subtitulo']; 
}



function ruta_a_theme(){
    global $casos;
   echo  'themes/'.$casos[random()].'/style.css';
}




/******************* POR SI ALGUIEN USASE EL SISTEMA ANTIUGO DEL OTRO DÍA ******************** */


$lang ="es-ES";         // Define el idioma para el HTML lang
$separador="|";                         // Separador para titulo de apartado | web
$miColor="tan";                         // Color principal.
$miFuente="Arial, sans-serif";          // Tipografía principal.

// Elementos del menú de la web..
$miMenu = [
    ['Inicio','index.php','0','Página de Inicio','ini'],
    ['Servicios','servicios.php','0','Página de Inicio','ser'],
    ['Productos','productos.php','0','Página de Inicio','pro'],
    ['Contacto','contacto.php','0','Página de Inicio','cnt'],
    ['Facebook','https://facebook.com','1','Página de Facebook','fb']
];



/* * * * * * * * * * FUNCIONES * * * * * * * * * * */



function obtener_cabecera(){    insertar('header'); }
function obtener_pie(){         insertar('footer'); }


function el_titulo(){           titulo();           }




//Título del apartado + título de la página:
// Inicio - Mi Página Web

function apartadoyTitulo(){
    global $miTitulo;
    global $miTituloApartado;
    global $separador;

    $titulos= $miTituloApartado." ".$separador." ". $miTitulo;

    echo $titulos;
}

//Constructor de Menú
function menuBuilder(){
    global $miMenu;



    echo '<ul class="menu">';
    foreach($miMenu as $e){
        echo '<li>';
        echo '<a href="'.$e[1].'" class="'.$e[4].'" ';

        if($e[2]){
            echo 'target="_blank" ';
        }

        echo '>'.$e[0].'</a>';
        echo '</li>';

    }
    echo '</ul>';

}


//Cargar Color y Fuente principal
function mainColor(){
    global $miColor;
    global $miFuente;
    echo "<style>:root{--c:".$miColor."; --ff:".$miFuente.";}</style>";
}

//lanzar función al final de la etiqueta <head>
function finHead(){
mainColor();
}

//lanzar función al final de la etiqueta <footer>
function finFooter(){
}

//Carga idioma en la etiqueta lang del HTML
function lang(){
    global $lang;
    echo $lang;
}




