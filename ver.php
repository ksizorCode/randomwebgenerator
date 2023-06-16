<? 

if(isset($_GET['nombre'])){
    $nombre = $_GET['nombre'];
}

?>

<form action="ver.php" method="get">
    <label for="nombre">¿Quien eres?</label>
    <input type="text" id="nombre" name="nombre">
    <p>Recuerda que estamos trabajando sólo con 3 letras</p>
</form>


<style>
<? include 'themes/'.$nombre.'/style.css';?>
</style>




<? include 'themes/'.$nombre.'/header.php';?>

<? include 'themes/'.$nombre.'/main.php';?>

<? include 'themes/'.$nombre.'/footer.php';?>

