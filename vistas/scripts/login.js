$("#frmAcceso").on('submit', function(e)
{
 
   //No se activara la accion predeterminada del evento
   e.preventDefault();
  logina=$("#logina").val();
  clavea=$("#clavea").val();


$.post("../ajax/editablas/Ajax_Usuario.php?op=verificar",
	{"logina":logina,"clavea":clavea},
	function(data)
	{
			if(data!="null")
		{
			 
			 
			    $(location).attr("href","Dperfil.php");

		}else {
			
			
		// bootbox.alert("Usuario y/0 Password incorrectos");
		Swal.fire({
                       icon:'error',
                       title:'Usuario y/o Contraseña incorrectos',
                       grow: 'fullscreen',
                       footer: 'Si no tienes una cuenta crea una <p style="color:#fff;">_</p><a href="#" data-target="#signup-box" class="user-signup-link "> Aqui </a> ',
                       html: '<br> revisa los datos y vuelve a intentar.',
                   });
			 	// Swal.fire({ title: "Usuario y/0 Password incorrectos" });
			
		}
       
	});

})