<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Login extends CI_Controller {
 

 
 function index()
 {
 
   $this->load->model('usuario','',TRUE);

   $usuario = $this->input->post('usuario');
   $password = $this->input->post('password');

   $result = $this->usuario->login($usuario, $password);

if($result !== FALSE)
   {
    redirect('http://localhost/Proyecto/index.php/Sistema/alta', 'refresh');
   }else{

     echo'<script >

                window.location="http://localhost/Proyecto"

                alert("usuario o contrasena incorrecta");

                </script>';


    redirect('http://localhost/Proyecto', 'refresh');
  
  }
 
 
 }
 
 
function logout(){
  redirect('http://localhost/Proyecto', 'refresh');

}

}
?>