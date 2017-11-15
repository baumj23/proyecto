<?php
Class Numerodeparte extends CI_Model
{

   function lista()
{
$this->db->from('numeros_de_parte');
$this->db->order_by('numero');

  $query = $this -> db -> get();

   if($query -> num_rows() >  0)
   {
     return $query->result();
    
   }
   else
   {
     return false;
   }
 
 
 
 
 
 
 
}


   public function get()
 {
 $fields = $this->db->field_data('numeros_de_parte');
 $query = $this->db->select('*')->get('numeros_de_parte');
 return array("fields" => $fields, "query" => $query);
 }

 function alta($numero,$descripcion,$ubicacion)
 {
 
  $data = array(
        'numero' => $numero,
        'descripcion' => $descripcion,
        'ubicacion' => $ubicacion
        );

    
$this->db->insert('numeros_de_parte',$data);
   
 




}
 

  function buscar($consulta)
 {

   $this -> db -> from('numeros_de_parte');
   $this -> db -> like('numero', $consulta);

   

   $this -> db -> limit(100);

   $query = $this -> db -> get();

   if($query -> num_rows() > 0)
   {
     return $query->result();
    
   }
   else
   {
     return false;
   }
 }
 
 

  function entrada($cantidad,$id)
  {

 
$sql = "UPDATE numeros_de_parte set existencia = (existencia + '$cantidad') where id = '$id'";

$this->db->query($sql);
 
 
 
 }


 function salida($cantidad,$id)
  {

 
$sql = "UPDATE numeros_de_parte set existencia = (existencia - '$cantidad') where id = '$id'";

$this->db->query($sql);
 
 
 
 }


}
?>