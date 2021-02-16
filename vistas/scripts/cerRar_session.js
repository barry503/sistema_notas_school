//Funcion para cerrar session
function FCerrandOSecion()
{
	

   var Usalir= document.getElementsByName("usuario0salirXD")[0].value;
   var IMg= document.getElementsByName("ImgSalirXD")[0].value;
   
  bootbox.confirm("<img width='100px' src='../files/usuarios/"+IMg+"' class='user-image img-circle elevation-2'><br><div>Cerrar la Session de "+Usalir+" ? </div>.", function(result) {

      if(result)
      {
       $.post("../ajax/editablas/Ajax_Usuario.php?op=salir", function(e){
         // bootbox.alert(e);
         window.location.href = "../index.php";         
        
       });  
          }
      }

          );

}

