<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
                <h1 ><?php echo $grad; ?> <!-- / --> <?php //echo $matria; ?> </h1>

          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item "><a href="#"><?php //echo $grad; ?>Materia:</a></li>
              <li class="breadcrumb-item active"><?php echo $matria; ?></li>
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
                 <h3 class="card-title"><?php echo $grad; ?>             Materia:<?php echo $matria; ?> 
                  <!-- <button class="btn btn-info" id="btnagregar" onclick="mostrarform(true)" >
                    
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
                 <th title="Actividad 1 periodo 1">Act1 p1</th>
                 <th title="Actividad 2 periodo 1">Act2 p1</th>
                 <th title="Actividad 3 periodo 1">Act3 p1</th>
                 <th title="Actividad 4 periodo 1">Act4 p1</th>
                 <th title="Actividad 5 periodo 1">Act5 p1</th>
                 <th title="Nota de recuperacion periodo 1">NotaR p1</th>

                 <th title="Actividad 1 periodo 2">Act1 p2</th>
                 <th title="Actividad 2 periodo 2">Act2 p2</th>
                 <th title="Actividad 3 periodo 2">Act3 p2</th>
                 <th title="Actividad 4 periodo 2">Act4 p2</th>
                 <th title="Actividad 5 periodo 2">Act5 p2</th>
                 <th title="Nota de recuperacion periodo 2">NotaR p2</th>

                 <th title="Actividad 1 periodo 3">Act1 p3</th>
                 <th title="Actividad 2 periodo 3">Act2 p3</th>
                 <th title="Actividad 3 periodo 3">Act3 p3</th>
                 <th title="Actividad 4 periodo 3">Act4 p3</th>
                 <th title="Actividad 5 periodo 3">Act5 p3</th>
                 <th title="Nota de recuperacion periodo 3">NotaR p3</th>

                 <th title="Actividad 1 periodo 4">Act1 p4</th>
                 <th title="Actividad 2 periodo 4">Act2 p4</th>
                 <th title="Actividad 3 periodo 4">Act3 p4</th>
                 <th title="Actividad 4 periodo 4">Act4 p4</th>
                 <th title="Actividad 5 periodo 4">Act5 p4</th>
                 <th title="Nota de recuperacion periodo 4">NotaR p4</th>
                 
                  <th title="Notas penultimas finales ">Nota Final de Recuperacion</th>
                 <th  title="Notas finales ">Nota Final</th>            
              </thead>  
                    <tbody>
                        <!-- datos de bd en el archivo url: scripts/ -->
                    </tbody>

              <tfoot >
                 <th>Opciones</th>
                 <th>Foto</th>
                <th>Nombre-Completo</th>
                <th>Seccion</th>
                 <th title="Actividad 1 periodo 1">Act1 p1</th>
                 <th title="Actividad 2 periodo 1">Act2 p1</th>
                 <th title="Actividad 3 periodo 1">Act3 p1</th>
                 <th title="Actividad 4 periodo 1">Act4 p1</th>
                 <th title="Actividad 5 periodo 1">Act5 p1</th>
                 <th title="Nota de recuperacion periodo 1">NotaR p1</th>
               
                 <th title="Actividad 1 periodo 2">Act1 p2</th>
                 <th title="Actividad 2 periodo 2">Act2 p2</th>
                 <th title="Actividad 3 periodo 2">Act3 p2</th>
                 <th title="Actividad 4 periodo 2">Act4 p2</th>
                 <th title="Actividad 5 periodo 2">Act5 p2</th>
                 <th title="Nota de recuperacion periodo 2">NotaR p2</th>

                 <th title="Actividad 1 periodo 3">Act1 p3</th>
                 <th title="Actividad 2 periodo 3">Act2 p3</th>
                 <th title="Actividad 3 periodo 3">Act3 p3</th>
                 <th title="Actividad 4 periodo 3">Act4 p3</th>
                 <th title="Actividad 5 periodo 3">Act5 p3</th>
                 <th title="Nota de recuperacion periodo 3">NotaR p3</th>

                 <th title="Actividad 1 periodo 4">Act1 p4</th>
                 <th title="Actividad 2 periodo 4">Act2 p4</th>
                 <th title="Actividad 3 periodo 4">Act3 p4</th>
                 <th title="Actividad 4 periodo 4">Act4 p4</th>
                 <th title="Actividad 5 periodo 4">Act5 p4</th>
                 <th title="Nota de recuperacion periodo 4">NotaR p4</th>
                
                 <th title="Notas penultimas finales ">Nota Final de Recuperacion</th>
                 <th title="Notas finales ">Nota Final</th>             
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
<div class="card  card-success collapsed-card">
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
                <label >Actividad 1:</label>
                    
             
                <input type="number" class="form-control " name="EVA1P1" id="EVA1P1" maxlength="4" placeholder="sin calificar" required>

             </div>

             <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Actividad 2:</label>
                     
             
                <input type="number" class="form-control" name="EVA2P1" id="EVA2P1" maxlength="4" placeholder="sin calificar" >

             </div>



             </div>

<div class="row mb-2">
               <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Actividad 3:</label>
                    
             
                <input type="number" class="form-control" name="EVA3P1" id="EVA3P1" maxlength="4" placeholder="sin calificar" >

             </div>

             <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Actividad 4:</label>
                    
             
                <input type="number" class="form-control" name="EVA4P1" id="EVA4P1" maxlength="4" placeholder="sin calificar" >

             </div>

             


             </div>




             <div class="row mb-2">
               <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Actividad 5:</label>
                     
             
                <input type="number" class="form-control" name="EVA5P1" id="EVA5P1" maxlength="4" placeholder="sin calificar" >

             </div>

             <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Nota de Recuperacion p1:</label>
             
                <input type="number" class="form-control " name="NRP1" id="NRP1" maxlength="4" placeholder="sin calificar" >

             </div>


                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Nota Final periodo 1:</label>
             
                <input type="number" class="form-control noaccesso" name="NOTAp1FINAL" id="NOTAp1FINAL"  placeholder="sin calificar" >

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
<div class="card  card-warning collapsed-card">
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
             
                <input type="number" class="form-control" name="EVA1P2" id="EVA1P2" maxlength="4" placeholder="sin calificar" >

             </div>

             <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Actividad 2:</label>
             
                <input type="number" class="form-control" name="EVA2P2" id="EVA2P2" maxlength="4" placeholder="sin calificar" >

             </div>



             </div>

<div class="row mb-2">
               <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Actividad 3:</label>
             
                <input type="number" class="form-control" name="EVA3P2" id="EVA3P2" maxlength="4" placeholder="sin calificar" >

             </div>

             <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Actividad 4:</label>
             
                <input type="number" class="form-control" name="EVA4P2" id="EVA4P2" maxlength="4" placeholder="sin calificar" >

             </div>
             


             </div>




             <div class="row mb-2">
               <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Actividad 5:</label>
             
                <input type="number" class="form-control" name="EVA5P2" id="EVA5P2" maxlength="4" placeholder="sin calificar" >

             </div>

             <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Nota de Recuperacion p2:</label>
             
                <input type="number" class="form-control " name="NRP2" id="NRP2" maxlength="4" placeholder="sin calificar" >

             </div>


             <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Nota Final periodo 2:</label>
             
                <input type="number" class="form-control noaccesso" name="NOTAp2FINAL" id="NOTAp2FINAL"  placeholder="sin calificar" >

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
<div class="card  card-info collapsed-card">
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
             
                <input type="number" class="form-control" name="EVA1P3" id="EVA1P3" maxlength="4" placeholder="sin calificar" >

             </div>

             <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Actividad 2:</label>
             
                <input type="number" class="form-control" name="EVA2P3" id="EVA2P3" maxlength="4" placeholder="sin calificar" >

             </div>



             </div>

<div class="row mb-2">
               <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Actividad 3:</label>
             
                <input type="number" class="form-control" name="EVA3P3" id="EVA3P3" maxlength="4" placeholder="sin calificar" >

             </div>

             <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Actividad 4:</label>
             
                <input type="number" class="form-control" name="EVA4P3" id="EVA4P3" maxlength="4" placeholder="sin calificar" >

             </div>
             


             </div>




             <div class="row mb-2">
               <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Actividad 5:</label>
             
                <input type="number" class="form-control" name="EVA5P3" id="EVA5P3" maxlength="4" placeholder="sin calificar" >

             </div>

             <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Nota de Recuperacion p3:</label>
             
                <input type="number" class="form-control " name="NRP3" id="NRP3" maxlength="4" placeholder="sin calificar" >

             </div>



             <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Nota Final periodo 3:</label>
             
                <input type="number" class="form-control noaccesso" name="NOTAp3FINAL" id="NOTAp3FINAL"  placeholder="sin calificar" >

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
<div class="card  card-danger collapsed-card">
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
             
                <input type="number" class="form-control" name="EVA1P4" id="EVA1P4" maxlength="4" placeholder="sin calificar" >

             </div>

             <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Actividad 2:</label>
             
                <input type="number" class="form-control" name="EVA2P4" id="EVA2P4" maxlength="4" placeholder="sin calificar" >

             </div>



             </div>

<div class="row mb-2">
               <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Actividad 3:</label>
             
                <input type="number" class="form-control" name="EVA3P4" id="EVA3P4" maxlength="4" placeholder="sin calificar" >

             </div>

             <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Actividad 4:</label>
             
                <input type="number" class="form-control" name="EVA4P4" id="EVA4P4" maxlength="4" placeholder="sin calificar" >

             </div>
             


             </div>




             <div class="row mb-2">
               <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Actividad 5:</label>
             
                <input type="number" class="form-control" name="EVA5P4" id="EVA5P4" maxlength="4" placeholder="sin calificar" >

             </div>

             <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Nota de Recuperacion p4:</label>
             
                <input type="number" class="form-control " name="NRP4" id="NRP4" maxlength="4" placeholder="sin calificar" >

             </div>


             <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Nota Final periodo 4:</label>
             
                <input type="number" class="form-control noaccesso" name="NOTAp4FINAL" id="NOTAp4FINAL"  placeholder="sin calificar" >

             </div>
             


             </div>






              </div>
              <!-- /.card-body -->
            </div>



              
           </div>
            

   <!--   </div> -->
<!-----------------------------------------------------fin de periodo 4----------------------------------------------------------------->


<!-- notas finales -->
<!-- _____________________________________________________________________________________________________________________________________ -->

<div class="col-md-12 text-muted">

              <!-- Targeta -->
<div class="card  card-secondary collapsed-card">
              <div class="card-header">
                <h3 class="card-title">NOTAS FINALES</h3>

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
                <label>Periodo 1:</label>
             
                <input type="number" class="form-control noaccesso" name="NOTAFINALp1" id="NOTAFINALp1" maxlength="4" placeholder="sin calificar" >

             </div>

             <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Periodo 2:</label>
             
                <input type="number" class="form-control noaccesso" name="NOTAFINALp2" id="NOTAFINALp2" maxlength="4" placeholder="sin calificar" >

             </div>



             </div>

<div class="row mb-2">
               <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Periodo 3:</label>
             
                <input type="number" class="form-control noaccesso" name="NOTAFINALp3" id="NOTAFINALp3" maxlength="4" placeholder="sin calificar" >

             </div>

             <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Periodo 4:</label>
             
                <input type="number" class="form-control noaccesso" name="NOTAFINALp4" id="NOTAFINALp4" maxlength="4" placeholder="sin calificar" >

             </div>
             


             </div>






<div class="row mb-2">
               <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>nota Final de Recuperacion:</label>
             
                <input type="number" class="form-control " name="NRFINAL" id="NRFINAL"  placeholder="Nota final de recuperacion" >

             </div>

             <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Nota Final:</label>
             
                <input type="number" class="form-control noaccesso" name="NOTAFINAL" id="NOTAFINAL"  placeholder="sin calificar" >

             </div>
             


             </div>

<!-- fin de  notas finales -->




              </div>
              <!-- /.card-body -->
            </div>



              
           </div>





    
             
             
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

<?php 
######################################################################################################################
// porcentajes de actividades de la institucion
 $porcentaj = mysqli_query($coneion,"SELECT  * FROM porcentaje WHERE   id='1' ");
 $por = mysqli_fetch_array($porcentaj);

 $p1= $por['p1'];
 $p2= $por['p2'];
 $p3= $por['p3'];
 $p4= $por['p4'];
 $p5= $por['p5'];
######################################################################################################################
 ?>
<!-- LOS INPUT CONTIENEN LOS PORCENTAJES ALMACENADOS EN BD -->
 <input type="hidden" name="p1" value="<?php echo $p1; ?>"> <br>
 <input type="hidden" name="p2" value="<?php echo $p2; ?>"> <br>
 <input type="hidden" name="p3" value="<?php echo $p3; ?>"> <br>
 <input type="hidden" name="p4" value="<?php echo $p4; ?>"> <br>
 <input type="hidden" name="p5" value="<?php echo $p5; ?>"> <br>
<!--  -->


</div>  <!-- / fin card  -->




</section>
  <!--fin de  seccion del contenido -->


</div>