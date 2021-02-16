<!-- Contenedor de todo -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
                <h1 ><?php echo $conduct; ?> de <?php echo $grad; ?></h1>

          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"><?php echo $grad; ?></a></li>
              <li class="breadcrumb-item active"><?php echo $conduct; ?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<!-- seccion del contenido -->
<section class="content">










<!-- inicio card -->
 <div class="card">
              <div class="card-header"> <!-- inicio card-header-->
                 <h3 class="card-title"><?php echo $conduct; ?>
                <!--   <button class="btn btn-info" id="btnagregar" onclick="mostrarform(true)" >
                    
                    <i class="fa fa-plus-circle"></i>Agregar
                  
                  </button> -->
                  </h3>
              
              </div><!-- / fin card-header-->
 
          
      <!-- inicio card-body  -->
     <div class="card-body" >



      
      <div class="box-tools pull-right">  
        <!-- nose si es necesario en esta version -->
      </div>
       
        <!-- inicio panel-body o cuerpo de tabla -->
        <div class="panel-body table-responsive" id="listadoregistros">
              <!-- inicio tabla -->
          <table id="tbllistado" class=" table table-striped table-bordered  table-condensed table-hover" >
               <thead >
                 <th>Opciones</th>
                 <th>Foto</th>
                 <th>Nombre-Completo</th>
                 <th>Seccion</th>
                 <th title="conducta de la actividad 1 periodo 1">Act1 p1</th>
                 <th title="conducta de la actividad 2 periodo 1">Act2 p1</th>
                 <th title="conducta de la actividad 3 periodo 1">Act3 p1</th>
                 <th title="conducta de la actividad 4 periodo 1">Act4 p1</th>
                 <th title="conducta de la actividad 5 periodo 1">Act5 p1</th>
                 <th title="conducta de la actividad 6 periodo 1">Act6 p1</th>

                 <th title="conducta de la actividad 1 periodo 2">Act1 p2</th>
                 <th title="conducta de la actividad 2 periodo 2">Act2 p2</th>
                 <th title="conducta de la actividad 3 periodo 2">Act3 p2</th>
                 <th title="conducta de la actividad 4 periodo 2">Act4 p2</th>
                 <th title="conducta de la actividad 5 periodo 2">Act5 p2</th>
                 <th title="conducta de la actividad 6 periodo 2">Act6 p2</th>

                 <th title="conducta de la actividad 1 periodo 3">Act1 p3</th>
                 <th title="conducta de la actividad 2 periodo 3">Act2 p3</th>
                 <th title="conducta de la actividad 3 periodo 3">Act3 p3</th>
                 <th title="conducta de la actividad 4 periodo 3">Act4 p3</th>
                 <th title="conducta de la actividad 5 periodo 3">Act5 p3</th>
                 <th title="conducta de la actividad 6 periodo 3">Act6 p3</th>

                 <th title="conducta de la actividad 1 periodo 4">Act1 p4</th>
                 <th title="conducta de la actividad 2 periodo 4">Act2 p4</th>
                 <th title="conducta de la actividad 3 periodo 4">Act3 p4</th>
                 <th title="conducta de la actividad 4 periodo 4">Act4 p4</th>
                 <th title="conducta de la actividad 5 periodo 4">Act5 p4</th>
                 <th title="conducta de la actividad 6 periodo 4">Act6 p4</th>
                 
                 
                            
              </thead>  
                    <tbody>
                        <!-- datos de bd en el archivo url: scripts/conducta.js -->
                    </tbody>

              <tfoot >
                 <th>Opciones</th>
                 <th>Foto</th>
                <th>Nombre-Completo</th>
                <th>Seccion</th>
                 <th title="conducta de la actividad 1 periodo 1">Act1 p1</th>
                 <th title="conducta de la actividad 2 periodo 1">Act2 p1</th>
                 <th title="conducta de la actividad 3 periodo 1">Act3 p1</th>
                 <th title="conducta de la actividad 4 periodo 1">Act4 p1</th>
                 <th title="conducta de la actividad 5 periodo 1">Act5 p1</th>
                 <th title="conducta de la actividad 6 periodo 1">Act6 p1</th>

                 <th title="conducta de la actividad 1 periodo 2">Act1 p2</th>
                 <th title="conducta de la actividad 2 periodo 2">Act2 p2</th>
                 <th title="conducta de la actividad 3 periodo 2">Act3 p2</th>
                 <th title="conducta de la actividad 4 periodo 2">Act4 p2</th>
                 <th title="conducta de la actividad 5 periodo 2">Act5 p2</th>
                 <th title="conducta de la actividad 6 periodo 2">Act6 p2</th>

                 <th title="conducta de la actividad 1 periodo 3">Act1 p3</th>
                 <th title="conducta de la actividad 2 periodo 3">Act2 p3</th>
                 <th title="conducta de la actividad 3 periodo 3">Act3 p3</th>
                 <th title="conducta de la actividad 4 periodo 3">Act4 p3</th>
                 <th title="conducta de la actividad 5 periodo 3">Act5 p3</th>
                 <th title="conducta de la actividad 6 periodo 3">Act6 p3</th>

                 <th title="conducta de la actividad 1 periodo 4">Act1 p4</th>
                 <th title="conducta de la actividad 2 periodo 4">Act2 p4</th>
                 <th title="conducta de la actividad 3 periodo 4">Act3 p4</th>
                 <th title="conducta de la actividad 4 periodo 4">Act4 p4</th>
                 <th title="conducta de la actividad 5 periodo 4">Act5 p4</th>
                 <th title="conducta de la actividad 6 periodo 4">Act6 p4</th>
                
               
                            
              </tfoot>


          </table>
          <!-- / fin tabla -->

        </div>
       



       <!-- inicio panel-body -->
       <div class="panel-body"  id="formularioregistros">
            <!--inicio del formulario de registrar y editar -->
            <form name="formulario" id="formulario" method="POST">
    
                <input type="hidden" name="imagenactual" id="imagenactual">
                <img src="" width="180px" height="150px" id="imagenmuestra"><br>


     <div class="row mb-2">
            <div class="col-md-6 text-muted">
              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <label>nombre del Alumno:</label>
                     <!-- para trabajar con el id -->
                <input type="hidden" name="carnet" id="carnet">
                  <input type="text" class="form-control noaccesso"  id="NombreComplet">

         

             </div>
           </div>

            

     </div>




<!------------------------------------------------------periodo 1------------------------------------------------------------------------->
<!-- <div class="row mb-2"> -->
            <div class="col-md-12 text-muted">

              <!-- Targeta -->
<div class="card card-outline card-success collapsed-card">
              <div class="card-header">
                <h3 class="card-title">1° Primer Periodo</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="display: none;">
             

             <!-- cuerpo de la tarjeta -->
             <div class="row mb-2">
               <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Actividad 1:</label>
                    <style type="text/css">

                      /*.opcio0{ background-color: rgba(99, 109, 110, 0.38);   }
                      .opcio1{ background-color: rgba(15, 186, 69, 0.4);   }
                      .opcio2{ background-color: rgba(63, 220, 235, 0.4);   }
                      .opcio3{ background-color: rgba(194, 30, 8, 0.42);   }*/

                      .opcio0 { /*background-color: #636D6E;*/ color: #636D6E;  }
                      .opcio1 { /*background-color: #28a745;*/ color: #28a745;  }
                      /*.opcio1 { background-color: rgba(48, 252, 140, 0.15); color: #fff;  }*/
                      .opcio2 { /*background-color: #17a2b8;*/ color: #17a2b8;  }
                      .opcio3 { /*background-color: #dc3545;*/ color: #dc3545;  } 

                    /*  .opcio0:hover { background-color: #636D6E; color: #fff;  }
                      .opcio1:hover { background-color: #11C749; color: #fff;  }
                      .opcio2:hover { background-color: #2BBACD; color: #fff;  }
                      .opcio3:hover { background-color: #DE0B0B; color: #fff;  }*/
                    </style>
 <!-- <input type="text" class="form-control" name="CDCA1P1" id="CDCA1P1" maxlength="10" placeholder="sin calificar" required> -->
             <select name="CDCA1P1" id="CDCA1P1" maxlength="10" class="form-control">
              <option  value="0"><i class="opcio0">Ninguna seleccion<i class=" fa fa-meh-o"></i></i> </option>
               <option  value="9.1"><i class="opcio1">Excelente <i class=" fa fa-smile-o "></i></i> </option>
               <option  value="7.8"><i class="opcio2"> Muy Bueno <i class="opcio2 fa fa-meh-o "></i></i></option>
               <option class="opcio3" value="5.6">Bueno  <i class="fa fa-frown-o"></i></option>

             </select>
               

             </div>

             <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Actividad 2:</label>
                     
              <!-- <input type="text" class="form-control" name="CDCA2P1" id="CDCA2P1" maxlength="10" placeholder="sin calificar" required> -->

             <select class="form-control" name="CDCA2P1" id="CDCA2P1" maxlength="10" class="form-control">
              <option  value="0"><i class="opcio0">Ninguna seleccion<i class=" fa fa-meh-o"></i></i> </option>
               <option  value="9.1"><i class="opcio1">Excelente <i class=" fa fa-smile-o "></i></i> </option>
               <option  value="7.8"><i class="opcio2"> Muy Bueno <i class="opcio2 fa fa-meh-o "></i></i></option>
               <option  value="5.6"><i class="opcio3">Bueno <i class="fa fa-frown-o"></i></i></option>

             </select>


             </div>



             </div>

<div class="row mb-2">
               <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Actividad 3:</label>
                    
             
                <!-- <input type="text" class="form-control" name="CDCA3P1" id="CDCA3P1" maxlength="10" placeholder="sin calificar" required> -->

            <select class="form-control" name="CDCA3P1" id="CDCA3P1" maxlength="10" class="form-control">
              <option  value="0"><i class="opcio0">Ninguna seleccion<i class=" fa fa-meh-o"></i></i> </option>
               <option  value="9.1"><i class="opcio1">Excelente <i class=" fa fa-smile-o "></i></i> </option>
               <option  value="7.8"><i class="opcio2"> Muy Bueno <i class="opcio2 fa fa-meh-o "></i></i></option>
               <option  value="5.6"><i class="opcio3">Bueno <i class="fa fa-frown-o"></i></i></option>

             </select>

             </div>

             <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Actividad 4:</label>
                    
             
                <!-- <input type="text" class="form-control" name="CDCA4P1" id="CDCA4P1" maxlength="10" placeholder="sin calificar" required> -->
                 <select class="form-control" name="CDCA4P1" id="CDCA4P1" maxlength="10" class="form-control">
              <option  value="0"><i class="opcio0">Ninguna seleccion<i class=" fa fa-meh-o"></i></i> </option>
               <option  value="9.1"><i class="opcio1">Excelente <i class=" fa fa-smile-o "></i></i> </option>
               <option  value="7.8"><i class="opcio2"> Muy Bueno <i class="opcio2 fa fa-meh-o "></i></i></option>
               <option  value="5.6"><i class="opcio3">Bueno <i class="fa fa-frown-o"></i></i></option>

             </select>


             </div>
             


             </div>




             <div class="row mb-2">
               <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Actividad 5:</label>
                     
             
                <!-- <input type="text" class="form-control" name="CDCA5P1" id="CDCA5P1" maxlength="10" placeholder="sin calificar" required> -->
                <select class="form-control" name="CDCA5P1" id="CDCA5P1" maxlength="10" class="form-control">
              <option  value="0"><i class="opcio0">Ninguna seleccion<i class=" fa fa-meh-o"></i></i> </option>
               <option  value="9.1"><i class="opcio1">Excelente <i class=" fa fa-smile-o "></i></i> </option>
               <option  value="7.8"><i class="opcio2"> Muy Bueno <i class="opcio2 fa fa-meh-o "></i></i></option>
               <option  value="5.6"><i class="opcio3">Bueno <i class="fa fa-frown-o"></i></i></option>

             </select>


             </div>

             <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Actividad 6:</label>
             
                <!-- <input type="text" class="form-control" name="CDCA6P1" id="CDCA6P1" maxlength="10" placeholder="sin calificar" required> -->
                <select class="form-control" name="CDCA6P1" id="CDCA6P1" maxlength="10" class="form-control">
              <option  value="0"><i class="opcio0">Ninguna seleccion<i class=" fa fa-meh-o"></i></i> </option>
               <option  value="9.1"><i class="opcio1">Excelente <i class=" fa fa-smile-o "></i></i> </option>
               <option  value="7.8"><i class="opcio2"> Muy Bueno <i class="opcio2 fa fa-meh-o "></i></i></option>
               <option  value="5.6"><i class="opcio3">Bueno <i class="fa fa-frown-o"></i></i></option>

             </select>

             </div>
             


             </div>






              </div>
              <!-- /.card-body -->
            </div>



              
           </div>
            

   <!--   </div> -->
<!-----------------------------------------------------fin de periodo 1----------------------------------------------------------------->



<!------------------------------------------------------periodo 2------------------------------------------------------------------------->
<!-- <div class="row mb-2"> -->
            <div class="col-md-12 text-muted">

              <!-- Targeta -->
<div class="card card-outline card-warning collapsed-card">
              <div class="card-header">
                <h3 class="card-title">2° Segundo Periodo</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="display: none;">
             

             <!-- cuerpo de la tarjeta -->
             <div class="row mb-2">
               <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Actividad 1:</label>
             
                <!-- <input type="text" class="form-control" name="CDCA1P2" id="CDCA1P2" maxlength="10" placeholder="sin calificar" required> -->
                <select class="form-control" name="CDCA1P2" id="CDCA1P2" maxlength="10" class="form-control">
              <option  value="0"><i class="opcio0">Ninguna seleccion<i class=" fa fa-meh-o"></i></i> </option>
               <option  value="9.1"><i class="opcio1">Excelente <i class=" fa fa-smile-o "></i></i> </option>
               <option  value="7.8"><i class="opcio2"> Muy Bueno <i class="opcio2 fa fa-meh-o "></i></i></option>
               <option  value="5.6"><i class="opcio3">Bueno <i class="fa fa-frown-o"></i></i></option>

             </select>

             </div>

             <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Actividad 2:</label>
             
                <!-- <input type="text" class="form-control" name="CDCA2P2" id="CDCA2P2" maxlength="10" placeholder="sin calificar" required> -->
                <select class="form-control" name="CDCA2P2" id="CDCA2P2" maxlength="10" class="form-control">
              <option  value="0"><i class="opcio0">Ninguna seleccion<i class=" fa fa-meh-o"></i></i> </option>
               <option  value="9.1"><i class="opcio1">Excelente <i class=" fa fa-smile-o "></i></i> </option>
               <option  value="7.8"><i class="opcio2"> Muy Bueno <i class="opcio2 fa fa-meh-o "></i></i></option>
               <option  value="5.6"><i class="opcio3">Bueno <i class="fa fa-frown-o"></i></i></option>

             </select>

             </div>



             </div>

<div class="row mb-2">
               <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Actividad 3:</label>
             
                <!-- <input type="text" class="form-control" name="CDCA3P2" id="CDCA3P2" maxlength="10" placeholder="sin calificar" required> -->
                <select class="form-control" name="CDCA3P2" id="CDCA3P2" maxlength="10" class="form-control">
              <option  value="0"><i class="opcio0">Ninguna seleccion<i class=" fa fa-meh-o"></i></i> </option>
               <option  value="9.1"><i class="opcio1">Excelente <i class=" fa fa-smile-o "></i></i> </option>
               <option  value="7.8"><i class="opcio2"> Muy Bueno <i class="opcio2 fa fa-meh-o "></i></i></option>
               <option  value="5.6"><i class="opcio3">Bueno <i class="fa fa-frown-o"></i></i></option>

             </select>

             </div>

             <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Actividad 4:</label>
             
                <!-- <input type="text" class="form-control" name="CDCA4P2" id="CDCA4P2" maxlength="10" placeholder="sin calificar" required> -->
                <select class="form-control" name="CDCA4P2" id="CDCA4P2" maxlength="10" class="form-control">
              <option  value="0"><i class="opcio0">Ninguna seleccion<i class=" fa fa-meh-o"></i></i> </option>
               <option  value="9.1"><i class="opcio1">Excelente <i class=" fa fa-smile-o "></i></i> </option>
               <option  value="7.8"><i class="opcio2"> Muy Bueno <i class="opcio2 fa fa-meh-o "></i></i></option>
               <option  value="5.6"><i class="opcio3">Bueno <i class="fa fa-frown-o"></i></i></option>

             </select>

             </div>
             


             </div>




             <div class="row mb-2">
               <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Actividad 5:</label>
             
                <!-- <input type="text" class="form-control" name="CDCA5P2" id="CDCA5P2" maxlength="10" placeholder="sin calificar" required> -->
                 <select class="form-control" name="CDCA5P2" id="CDCA5P2" maxlength="10" class="form-control">
              <option  value="0"><i class="opcio0">Ninguna seleccion<i class=" fa fa-meh-o"></i></i> </option>
               <option  value="9.1"><i class="opcio1">Excelente <i class=" fa fa-smile-o "></i></i> </option>
               <option  value="7.8"><i class="opcio2"> Muy Bueno <i class="opcio2 fa fa-meh-o "></i></i></option>
               <option  value="5.6"><i class="opcio3">Bueno <i class="fa fa-frown-o"></i></i></option>

             </select>

             </div>

             <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Actividad 6:</label>
             
                <!-- <input type="text" class="form-control" name="CDCA6P2" id="CDCA6P2" maxlength="10" placeholder="sin calificar" required> -->
                 <select class="form-control" name="CDCA6P2" id="CDCA6P2" maxlength="10" class="form-control">
              <option  value="0"><i class="opcio0">Ninguna seleccion<i class=" fa fa-meh-o"></i></i> </option>
               <option  value="9.1"><i class="opcio1">Excelente <i class=" fa fa-smile-o "></i></i> </option>
               <option  value="7.8"><i class="opcio2"> Muy Bueno <i class="opcio2 fa fa-meh-o "></i></i></option>
               <option  value="5.6"><i class="opcio3">Bueno <i class="fa fa-frown-o"></i></i></option>

             </select>

             </div>
             


             </div>






              </div>
              <!-- /.card-body -->
            </div>



              
           </div>
            

   <!--   </div> -->
<!-----------------------------------------------------fin de periodo 2----------------------------------------------------------------->





<!------------------------------------------------------periodo 3------------------------------------------------------------------------->
<!-- <div class="row mb-2"> -->
            <div class="col-md-12 text-muted">

              <!-- Targeta -->
<div class="card card-outline card-info collapsed-card">
              <div class="card-header">
                <h3 class="card-title">3° Tercer Periodo</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="display: none;">
             

             <!-- cuerpo de la tarjeta -->
             <div class="row mb-2">
               <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Actividad 1:</label>
             
                <!-- <input type="text" class="form-control" name="CDCA1P3" id="CDCA1P3" maxlength="10" placeholder="sin calificar" required> -->
                 <select class="form-control" name="CDCA1P3" id="CDCA1P3" maxlength="10" class="form-control">
              <option  value="0"><i class="opcio0">Ninguna seleccion<i class=" fa fa-meh-o"></i></i> </option>
               <option  value="9.1"><i class="opcio1">Excelente <i class=" fa fa-smile-o "></i></i> </option>
               <option  value="7.8"><i class="opcio2"> Muy Bueno <i class="opcio2 fa fa-meh-o "></i></i></option>
               <option  value="5.6"><i class="opcio3">Bueno <i class="fa fa-frown-o"></i></i></option>

             </select>

             </div>

             <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Actividad 2:</label>
             
                <!-- <input type="text" class="form-control" name="CDCA2P3" id="CDCA2P3" maxlength="10" placeholder="sin calificar" required> -->
                  <select class="form-control" name="CDCA2P3" id="CDCA2P3" maxlength="10" class="form-control">
              <option  value="0"><i class="opcio0">Ninguna seleccion<i class=" fa fa-meh-o"></i></i> </option>
               <option  value="9.1"><i class="opcio1">Excelente <i class=" fa fa-smile-o "></i></i> </option>
               <option  value="7.8"><i class="opcio2"> Muy Bueno <i class="opcio2 fa fa-meh-o "></i></i></option>
               <option  value="5.6"><i class="opcio3">Bueno <i class="fa fa-frown-o"></i></i></option>

             </select>

             </div>



             </div>

<div class="row mb-2">
               <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Actividad 3:</label>
             
                <!-- <input type="text" class="form-control" name="CDCA3P3" id="CDCA3P3" maxlength="10" placeholder="sin calificar" required> -->
                  <select class="form-control" name="CDCA3P3" id="CDCA3P3" maxlength="10" class="form-control">
              <option  value="0"><i class="opcio0">Ninguna seleccion<i class=" fa fa-meh-o"></i></i> </option>
               <option  value="9.1"><i class="opcio1">Excelente <i class=" fa fa-smile-o "></i></i> </option>
               <option  value="7.8"><i class="opcio2"> Muy Bueno <i class="opcio2 fa fa-meh-o "></i></i></option>
               <option  value="5.6"><i class="opcio3">Bueno <i class="fa fa-frown-o"></i></i></option>

             </select>

             </div>

             <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Actividad 4:</label>
             
                <!-- <input type="text" class="form-control" name="CDCA4P3" id="CDCA4P3" maxlength="10" placeholder="sin calificar" required> -->
                   <select class="form-control" name="CDCA4P3" id="CDCA4P3" maxlength="10" class="form-control">
              <option  value="0"><i class="opcio0">Ninguna seleccion<i class=" fa fa-meh-o"></i></i> </option>
               <option  value="9.1"><i class="opcio1">Excelente <i class=" fa fa-smile-o "></i></i> </option>
               <option  value="7.8"><i class="opcio2"> Muy Bueno <i class="opcio2 fa fa-meh-o "></i></i></option>
               <option  value="5.6"><i class="opcio3">Bueno <i class="fa fa-frown-o"></i></i></option>

             </select>

             </div>
             


             </div>




             <div class="row mb-2">
               <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Actividad 5:</label>
             
                <!-- <input type="text" class="form-control" name="CDCA5P3" id="CDCA5P3" maxlength="10" placeholder="sin calificar" required> -->
                  <select class="form-control" name="CDCA5P3" id="CDCA5P3" maxlength="10" class="form-control">
              <option  value="0"><i class="opcio0">Ninguna seleccion<i class=" fa fa-meh-o"></i></i> </option>
               <option  value="9.1"><i class="opcio1">Excelente <i class=" fa fa-smile-o "></i></i> </option>
               <option  value="7.8"><i class="opcio2"> Muy Bueno <i class="opcio2 fa fa-meh-o "></i></i></option>
               <option  value="5.6"><i class="opcio3">Bueno <i class="fa fa-frown-o"></i></i></option>

             </select>

             </div>

             <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Actividad 6:</label>
             
                <!-- <input type="text" class="form-control" name="CDCA6P3" id="CDCA6P3" maxlength="10" placeholder="sin calificar" required> -->
                  <select class="form-control" name="CDCA6P3" id="CDCA6P3" maxlength="10" class="form-control">
              <option  value="0"><i class="opcio0">Ninguna seleccion<i class=" fa fa-meh-o"></i></i> </option>
               <option  value="9.1"><i class="opcio1">Excelente <i class=" fa fa-smile-o "></i></i> </option>
               <option  value="7.8"><i class="opcio2"> Muy Bueno <i class="opcio2 fa fa-meh-o "></i></i></option>
               <option  value="5.6"><i class="opcio3">Bueno <i class="fa fa-frown-o"></i></i></option>

             </select>

             </div>
             


             </div>






              </div>
              <!-- /.card-body -->
            </div>



              
           </div>
            

   <!--   </div> -->
<!-----------------------------------------------------fin de periodo 3----------------------------------------------------------------->




<!------------------------------------------------------periodo 4------------------------------------------------------------------------->
<!-- <div class="row mb-2"> -->
            <div class="col-md-12 text-muted">

              <!-- Targeta -->
<div class="card card-outline card-danger collapsed-card">
              <div class="card-header">
                <h3 class="card-title">4° Cuarto Periodo</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="display: none;">
             

             <!-- cuerpo de la tarjeta -->
             <div class="row mb-2">
               <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Actividad 1:</label>
             
                <!-- <input type="text" class="form-control" name="CDCA1P4" id="CDCA1P4" maxlength="10" placeholder="sin calificar" required> -->
                     <select class="form-control" name="CDCA1P4" id="CDCA1P4" maxlength="10" class="form-control">
              <option  value="0"><i class="opcio0">Ninguna seleccion<i class=" fa fa-meh-o"></i></i> </option>
               <option  value="9.1"><i class="opcio1">Excelente <i class=" fa fa-smile-o "></i></i> </option>
               <option  value="7.8"><i class="opcio2"> Muy Bueno <i class="opcio2 fa fa-meh-o "></i></i></option>
               <option  value="5.6"><i class="opcio3">Bueno <i class="fa fa-frown-o"></i></i></option>

             </select>

             </div>

             <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Actividad 2:</label>
             
                <!-- <input type="text" class="form-control" name="CDCA2P4" id="CDCA2P4" maxlength="10" placeholder="sin calificar" required> -->
                   <select class="form-control" name="CDCA2P4" id="CDCA2P4" maxlength="10" class="form-control">
              <option  value="0"><i class="opcio0">Ninguna seleccion<i class=" fa fa-meh-o"></i></i> </option>
               <option  value="9.1"><i class="opcio1">Excelente <i class=" fa fa-smile-o "></i></i> </option>
               <option  value="7.8"><i class="opcio2"> Muy Bueno <i class="opcio2 fa fa-meh-o "></i></i></option>
               <option  value="5.6"><i class="opcio3">Bueno <i class="fa fa-frown-o"></i></i></option>

             </select>

             </div>



             </div>

<div class="row mb-2">
               <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Actividad 3:</label>
             
                <!-- <input type="text" class="form-control" name="CDCA3P4" id="CDCA3P4" maxlength="10" placeholder="sin calificar" required> -->
                 <select class="form-control" name="CDCA3P4" id="CDCA3P4" maxlength="10" class="form-control">
              <option  value="0"><i class="opcio0">Ninguna seleccion<i class=" fa fa-meh-o"></i></i> </option>
               <option  value="9.1"><i class="opcio1">Excelente <i class=" fa fa-smile-o "></i></i> </option>
               <option  value="7.8"><i class="opcio2"> Muy Bueno <i class="opcio2 fa fa-meh-o "></i></i></option>
               <option  value="5.6"><i class="opcio3">Bueno <i class="fa fa-frown-o"></i></i></option>

             </select>

             </div>

             <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Actividad 4:</label>
             
                <!-- <input type="text" class="form-control" name="CDCA4P4" id="CDCA4P4" maxlength="10" placeholder="sin calificar" required> -->
                  <select class="form-control" name="CDCA4P4" id="CDCA4P4" maxlength="10" class="form-control">
              <option  value="0"><i class="opcio0">Ninguna seleccion<i class=" fa fa-meh-o"></i></i> </option>
               <option  value="9.1"><i class="opcio1">Excelente <i class=" fa fa-smile-o "></i></i> </option>
               <option  value="7.8"><i class="opcio2"> Muy Bueno <i class="opcio2 fa fa-meh-o "></i></i></option>
               <option  value="5.6"><i class="opcio3">Bueno <i class="fa fa-frown-o"></i></i></option>

             </select>

             </div>
             


             </div>




             <div class="row mb-2">
               <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Actividad 5:</label>
             
                <!-- <input type="text" class="form-control" name="CDCA5P4" id="CDCA5P4" maxlength="10" placeholder="sin calificar" required> -->
                  <select class="form-control" name="CDCA5P4" id="CDCA5P4" maxlength="10" class="form-control">
              <option  value="0"><i class="opcio0">Ninguna seleccion<i class=" fa fa-meh-o"></i></i> </option>
               <option  value="9.1"><i class="opcio1">Excelente <i class=" fa fa-smile-o "></i></i> </option>
               <option  value="7.8"><i class="opcio2"> Muy Bueno <i class="opcio2 fa fa-meh-o "></i></i></option>
               <option  value="5.6"><i class="opcio3">Bueno <i class="fa fa-frown-o"></i></i></option>

             </select>

             </div>

             <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Actividad 6:</label>
             
                <!-- <input type="text" class="form-control" name="CDCA6P4" id="CDCA6P4" maxlength="10" placeholder="sin calificar" required> -->
                  <select class="form-control" name="CDCA6P4" id="CDCA6P4" maxlength="10" class="form-control">
              <option  value="0"><i class="opcio0">Ninguna seleccion<i class=" fa fa-meh-o"></i></i> </option>
               <option  value="9.1"><i class="opcio1">Excelente <i class=" fa fa-smile-o "></i></i> </option>
               <option  value="7.8"><i class="opcio2"> Muy Bueno <i class="opcio2 fa fa-meh-o "></i></i></option>
               <option  value="5.6"><i class="opcio3">Bueno <i class="fa fa-frown-o"></i></i></option>

             </select>

             </div>
             


             </div>






              </div>
              <!-- /.card-body -->
            </div>



              
           </div>
            

   <!--   </div> -->
<!-----------------------------------------------------fin de periodo 4----------------------------------------------------------------->






    
             
             
             <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <button class="btn btn-info " type="submit" id="btnGuardar">
                    <i class="fa fa-save"></i> Guardar
                </button>

                <button class="btn btn-danger"  onclick="cancelarform()" type="button">
                    <i class="fa fa-arrow-circle-left"></i> Cancelar
                </button>



                </div>
            </form>

       </div><!-- fin panel-body -->

     </div> <!-- / card body fin -->


<br><br><br>

 </div>  <!-- / fin card  -->


</section>
  <!--fin de  seccion del contenido -->


</div>
<!-- fin  Contenedor de todo -->