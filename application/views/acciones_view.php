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

input.search{
    background: url("http://localhost/Proyecto/assets/img/iconos.gif") no-repeat scroll 0 0 transparent;
    margin-bottom:10px;

    border: 1px solid #BFBFBF;
    color: #272822;
    padding: 5px 5px 2px 25px;
    width: 200px;
  background-position: 4px 8px; }

</style>
<ul>
  <li><a class="active" href="http://localhost/proyecto/index.php/Sistema/alta">Dar de alta numero de parte</a></li>
  <li><a href="http://localhost/proyecto/index.php/Sistema/acciones">Acciones</a></li>
  <li><a href="http://localhost/proyecto/index.php/Sistema/reporte">Reporte</a></li>
  <li><a href="http://localhost/proyecto/index.php/Login/logout">Cerrar sesion</a><li>
</ul>



<br>

<div class="contenido">
<div class="container">
<input id="busqueda" class="search" background:="" http:="" rxmautomation.mx="" assets="" images="" iconos.gif="" no-repeat="" scroll="" 0="" transparent;"="" type="text" placeholder="Buscar numero de parte">
  
<div id="resultado">
  
</div>


</div>

</div>
<?php 
$this->load->view("layouts/foot_view.php");  
?>
