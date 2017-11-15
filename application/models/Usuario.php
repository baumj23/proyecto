<?php
Class Usuario extends CI_Model
{
 function login($usuario, $password)
 {
   
   $this -> db -> from('usuarios');
   $this -> db -> where('usuario', $usuario);
   $this -> db -> where('password', $password);
   $this -> db -> limit(1);

   $query = $this -> db -> get();

   if($query -> num_rows() == 1)
   {
     return $query->result();
    
   }
   else
   {
     return false;
   }
 }
 
 
 

 function listaUsuarios()
{
$this->db->from('usuarios');
$this->db->order_by('usuario');

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








}
?>