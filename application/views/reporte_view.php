<?php 
$this->load->view("layouts/head_view.php");  
?>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float:left ;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}


</style>
<ul>
  <li><a class="active" href="http://localhost/proyecto/index.php/Sistema/alta">Dar de alta numero de parte</a></li>
  <li><a href="http://localhost/proyecto/index.php/Sistema/acciones">Acciones</a></li>
  <li><a href="http://localhost/proyecto/index.php/Sistema/reporte">Reporte</a></li>
  <li><a href="http://localhost/proyecto/index.php/Login/logout">Cerrar sesion</a><li>
</ul>
<div class="container">
<br>


<?php 
if ($lista !== FALSE) {
echo '<form action="../Numerosdeparte/reporte" method="post">
<button type="submit">Generar excel</button>
</form>';
  echo "<table class='table'>";
     echo "<tr>";
     echo "<th>Numero</th>";
     echo "<th>Descripcion</th>";
     echo "<th>Ubicacion</th>";
     echo "<th>Existencia</th>";
   

  foreach ($lista as $fila) {

    echo "<tr>";
        echo "<td>".$fila->numero."</td>";

        echo "<td>".$fila->descripcion."</td>";

        echo "<td>".$fila->ubicacion."</td>";

        echo "<td>".$fila->existencia."</td>";

        echo "</tr>";
  }


}else{
  echo "Aun no hay numeros registrados ";
  echo 've <a class="active" href="http://localhost/proyecto/index.php/Sistema/alta">aqui</a>';

}

 ?>


</div>
<?php 
$this->load->view("layouts/foot_view.php");  
?>
