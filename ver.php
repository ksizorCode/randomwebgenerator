<? require 'config.php'; ?>

<? 
if(isset($_GET['nombre'])){
    $nombre = $_GET['nombre'];
}
?>

<link rel="stylesheet" href="<? echo 'themes/'.$nombre.'/style.css?v='.date('U');?>">


<a href="index.php">Volver a random theme</a>
<form action="ver.php" method="get">
    <select name="nombre" id="nombre">
        <option>Seleccione un theme</option>
        <? foreach($casos as $caso){
            echo '<option name="'.$caso.'">';
            echo $caso;
            echo '</option>';
        }?>
    </select>
    <input type="submit" value="Cargar">

</form>







<? include 'themes/'.$nombre.'/header.php';?>



<? include 'themes/'.$nombre.'/main.php';?>

<? include 'themes/'.$nombre.'/footer.php';?>
<!-- inserción forzada de CSS -->
<link rel="stylesheet" href="<? echo 'themes/'.$nombre.'/style.css?v='.date('U');?>">
