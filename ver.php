<? 

if(isset($_GET['nombre'])){
    $nombre = $_GET['nombre'];
}

?>

<form action="">
    <label for="nombre">¿Quien eres?</label>
    <input type="text" id="nombre" value="nombre">
    <p>Recuerda que estamos trabajando sólo con 3 letras</p>
</form>


<style>
<? include 'themes/'.$nombre.'style.css';?>
</style>




<p>Esto es tu header:</p>
<? include 'themes/'.$nombre.'header.php';?>

<p>Esto es tu main:</p>
<? include 'themes/'.$nombre.'main.php';?>

<p>Esto es tu footer:</p>
<? include 'themes/'.$nombre.'footer.php';?>

