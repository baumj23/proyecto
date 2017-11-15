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
   <form action="../Numerosdeparte" method="post">
      <input type="text" name="numero" class="form-control" placeholder="Escribe el numero de parte">
      <br>
      <input type="text" name="descripcion" class="form-control" placeholder="Ingresa la descripcion">
      <br>

      <input type="text" name="ubicacion"  class="form-control"placeholder="Ingresa la ubicacion">
      <br>
     <button class="form-control btn btn-success" type="submit">Guardar</button>
   </form>

</div>




<?php 
$this->load->view("layouts/foot_view.php");  
?>
