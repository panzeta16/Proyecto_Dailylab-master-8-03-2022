<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <script src="jquery-3.5.1.min.js"></script>
    <script src="jquery-ui.min.js"></script>
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.21.0/moment.min.js"></script>
 
    <title>Agenda</title>
</head>
<body>
    
<h1>Agenda tu cita </h1>
<div class= "container-fluid">

                    <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="?c=citas&a=Menu">Inicio</a></li>
                        <li class="breadcrumb-item active">Agendar</li>
                    </ol>
                    </nav>
    


   <section class="contact-box">
       <div class="row no-gutters bg-lithe">

           

                    <div class="form-group">

                    </div>
                    <input type="hidden" id="Id_Cita" name="Id_Cita" require value="<?=$cita->getId_Cita() ?>">

                    <input type="hidden" id="Id_Usuario" name="Id_Usuario"  require value="<?=$_SESSION['user']->getId_Usuario() ?>">

                    <div class="card" style="width: 40rem; margin:auto">
                    <div class="card-body">

                    <div class="container align-self-center p-9">
                        <center>
                    <h1 class=" text-dark font-weight-bold mb-3">Agenda</h1>
                    </center>
                    <br>
                   </div>

<form  id="formulario" action= "?c=citas&a=Agendar" method ="post" >


<div    class="form-group"> 

<div class="form-group col-md-6" >

  <label  class=" text-dark font-weight-bold" for="Fecha_Cita"> Fecha: </label>
  <input id="fecha" onMouseOut='fuera()' class="form-control" type="date"  name="Fecha_Cita" value="<?=$cita->getFecha_Cita() ?>" >
    <div id="info2"></div>
    <script src='Views/js/evitaWeekends.js'></script>

  </div>

 <div  class="form-group col-md-6" >

<label  class=" text-dark font-weight-bold" for="Hora_Cita"> Hora: </label>
<input id="hora" class="form-control" type="time" require name="Hora_Cita"  min='06:00:00' max='18:00:00' value="<?=$cita->getHora_Cita() ?>" >

<script src='Views/js/hora.js'></script>
</div>

</div>
<div id="info"></div>

<div class="form-group">
<div class="form-group col-md-6">

<label  class=" text-dark font-weight-bold" for="Id_Sucursal"> sucursal: </label>
<br>


<select   id="sucursal"  name="Id_Sucursal" class="form-control">
<option > </option>
<?php foreach($sucursales as $sucursal): ?>
    <option  value="<?=$sucursal->getId_Sucursal()?>" <?=$sucursal->getId_Sucursal() == $cita->getId_Sucursal() ? 
    'selected' : ''?> >
     <?=$sucursal->getNombre_Sucursal()?> </option>
    <?php endforeach;?>
</select>


</div>

 <div class="form-group col-md-6">
<label  class=" text-dark font-weight-bold" for="Id_Examen"> examenes: </label>


<select  id="examenes" name="Id_Examen" class="form-control">
<option   > </option>
<?php foreach($examenes as $examen): ?>
    <option value="<?=$examen->getId_Examen()?>" <?=$examen->getId_Examen() == $cita->getId_Examen() ? 
    'selected' : ''?> >
     <?=$examen->getNombre_Examen()?> </option>
    <?php endforeach;?>
</select>

</div>
</div>
<div>
<button  class="btn btn-primary width-100"  onclick='return enviarFormulario();' id="bt1"  class="btn solid" >enviar</button>
                      
                       <div  class="error" id="error"></div>



                       </div>
</form>
</td>
<td> 


</td>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

                       <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                       <script src="Views/js/sweetAlert.js"></script>
</body>
</html>