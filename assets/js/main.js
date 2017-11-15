$(document).ready(function(){


  $( "#resultado" ).on("click",".salida",function(e){
  var id = e.target.id;
  cantidad = $('[class='+ id +']').val();
                 
  $.ajax({
  type: "POST",
  url: "../Numerosdeparte/salida",
  data: "id="+ id + "&cantidad=" + cantidad,
  error: function(){
   swal("Su accion no puede ser procesada");
    },
   success: function(data){
    
    
    alert("Salio el producto");
    
    busquedaEntrada();
    


    
    
   }
 });

      
      
      
});

$( "#resultado" ).on("click",".entrada",function(e){
  var id = e.target.id;
  cantidad = $('[class='+ id +']').val();
                 
  $.ajax({
  type: "POST",
  url: "../Numerosdeparte/entrada",
  data: "id="+ id + "&cantidad=" + cantidad,
  error: function(){
   swal("Su accion no puede ser procesada");
    },
   success: function(data){
    
    
    alert("Productos agregados");
    
    busquedaEntrada();
    


    
    
   }
 });

      
      
      
});

$("#busqueda").keyup(function(e){

 busquedaEntrada();
   

});


function busquedaEntrada(){
  consulta = $("#busqueda").val();


    console.log(consulta);
      $.ajax({
      type: 'POST',
      url: '../Numerosdeparte/buscar',
      data: "consulta="+consulta,
      error: function(){
      //swal("Tu Conexion a internet es muy lenta");
      },
      beforeSend: function(){
     $("#resultado").html("<p align='center'><img src='http://ferrecava.mx/assets/images/ajax-loader.gif' /></p>");
  },
      success: function (data) {
     $("#resultado").empty();
     $("#resultado").append(data);
      }
      });
}


});