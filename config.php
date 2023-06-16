<?
$casos =['ric','fra','ale','jes','lau','bea','aug','mig'];

//Devuelve un valor aleatorio del 0 a la cantidad de alumnos
function random(){
    global $casos;
    $numElementos = count($casos);

    return rand(0,$numElementos);
}

//Cargar elementos via include
function insertar($v){
    switch ($v) {
        
        // Si es Header o head o html carga header.php
        case 'header':
        case 'head':
        case 'html':
            include 'header.php';
            break;
        // Si es Footer carga footer.php
        case 'footer':
            include 'footer.php';
            break;
        
        //Si no es ninguno de los anteriores carga:
        default:
            include $v.'.php';
            break;
    }
    ?>


}