<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Numerosdeparte extends CI_Controller {
 function reporte(){

  $this->load->model('numerodeparte');
    to_excel($this->numerodeparte->get(), "archivoexcel");
 }
function entrada()
 {
 
   $this->load->model('numerodeparte','',TRUE);

   $cantidad = $this->input->post('cantidad');
   $id = $this->input->post('id');

    $this->numerodeparte->entrada($cantidad,$id);


}
 function salida()
 {
 
   $this->load->model('numerodeparte','',TRUE);

   $cantidad = $this->input->post('cantidad');
   $id = $this->input->post('id');

    $this->numerodeparte->salida($cantidad,$id);


}
 function index()
 {
 
   $this->load->model('numerodeparte','',TRUE);

   $numero = $this->input->post('numero');
   $descripcion = $this->input->post('descripcion');
   $ubicacion = $this->input->post('ubicacion');

    $this->numerodeparte->alta($numero,$descripcion,$ubicacion);

      echo'<script >

                window.location="http://localhost/Proyecto/index.php/Sistema/alta"

                alert("Numero de parte guardado");

                </script>';


    redirect('http://localhost/Proyecto/index.php/Sistema/alta', 'refresh');
 
 }
 
 
function buscar(){

 $this->load->model('numerodeparte');
 $consulta= $this->input->post('consulta');


 $resultado = $this->numerodeparte->buscar($consulta);

 
    if($resultado !== FALSE){
     

     echo "<table class='table'>";
     echo "<tr>";
     echo "<th>Numero</th>";
     echo "<th>Descripcion</th>";
     echo "<th>Ubicacion</th>";
     echo "<th>Existencia</th>";
     echo "<th>Cantidad</th>";

     echo "<th>Opciones</th>";



     echo "</tr>";
     foreach ($resultado as $fila) {

        echo "<tr>";
        echo "<td>".$fila->numero."</td>";

        echo "<td>".$fila->descripcion."</td>";

        echo "<td>".$fila->ubicacion."</td>";

        echo "<td>".$fila->existencia."</td>";

        echo '<td><input class="'.$fila->id.'" type="number" style="width:50px;">';
        
        echo '<td>';

        echo '<button type="button" id="'.$fila->id.'" class="entrada">Entrada</button>';

        echo '<button type="button" id="'.$fila->id.'" class="salida">Salida</button>';

        echo "</td>";


        echo "</tr>";
     }

     echo "</table>";
     
     }else{
       echo "No hay resultados para ".$consulta;
     }
   

}
}
?>