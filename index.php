<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Loto Pokemon| Competitivo Pokemon Latino Am&eacute;rica</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/css.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="img/favicon.ico" rel="icon" type="image/x-icon" />
  </head>
  <body>
  
      <!-- -->
      <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <!-- The mobile navbar-toggle button can be safely removed since you do not need it in a non-responsive implementation -->
          <a class="navbar-brand" href="#">Loto Pokemon |Competitivo Pokemon Latino Am&eacute;rica</a>
        </div>
        <!-- Note that the .navbar-collapse and .collapse classes have been removed from the #navbar -->
        <div id="navbar">
          <ul class="nav navbar-nav">
           <!-- <li class="active"><a href="#">Inicio</a></li>-->
            
           
          </ul>
         
          <ul class="nav navbar-nav navbar-right">
           
            <li><a href="admin/Login.php">Administracion</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      <div class="page-header">
       <br>
        <h1>Recibe un Pokemon</h1>
        <p class="lead">Para participar en el Evento Visitanos en <a href="https://www.facebook.com/groups/1079498115484034/">Competitivo Pokemon Latino Am&eacute;rica</a> Te esperamos.</p>
      </div>

          	<p>Click en la Pokeball que deseas tomar</p>

      <h3> <small></small> Elije tu pokemon</h3>
      
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
      <div class="row">
      
      <?php
          
          //inicio if loto
         // echo md5(28);
          
          $LT=md5(1);
          if(isset($_GET['lot'])){
              $LT=$_GET['lot'];
          }
          
          
include("admin/Base.php");
          //seleccionando loto correspondiente
          //de preferencia cifrar idloto para que no lo visualicen en la url
          //Mostrando pokes pendientes
$clavebuscadah=mysql_query("select * from pokemones where md5(idloto) = '$LT' and estado = 0",$conexion) or
die("Problemas en el select:".mysql_error());
          $Comprobante=true;
while($row = mysql_fetch_array($clavebuscadah))
{
//echo'<OPTION VALUE="'.$row['id'].'">'.$row['nombre'].'</OPTION>';

          
          ?>
      
<!-- Inicio pokeball-->     
<?php //seria seleccionar los pokes si estan disponibles poner la pokebl
    //si no poner el nombre del poke, 2 si llenando el formulario otro lo lleno primero
          //veriifcar y mostrar un mensaje diciendo "Algioen se registro primero!"
   
    if($row['estado']==0){
//Cargando img de pokes pendientes  
        $Comprobante=false;
 ?>  
         
<div class="col-md-4 col-sm-6 col-xs-12">
  
   <div class="" id="thumbnail<?php echo $row['id'];?>">
<div class="pkm" id="pkm<?php echo $row['id'];?>" >

          <input type="image" src="https://glomerular-fours.000webhostapp.com/pokemon/img/Pokeball.PNG" id="submit<?php echo $row['id'];?>">
      </div>
      <div class="caption">
        <h3 id="nick"></h3>
        <p id="tc"></p>
      </div>
    </div>
</div>
 <!-- Valor a pasar:-->
 <input type="hidden" id="Numid<?php echo $row['id'];?>" value="<?php echo $row['id'];?>">
  <input type="hidden" id="id<?php echo $row['id'];?>" value="<?php echo $row['pokemon'];?>">
    


        <!-- Prueba-->
        
        <!-- sCRIPT PA actualizar iimagene con datos si y solo si no habi aparticipado-->
        <script>
    $(document).ready(function() {
        $('#submit<?php echo $row['id'];?>').click(function(e) {
            var nick1 = prompt("Ingrese su nick");
            var fc1 = prompt("Ingrese su fc");
            var idloto1="<?php echo $row['idloto'];?>";
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: 'test2.php',
                           //aqui en data podrias pasar los datos nick y fc
                data: {id1: $('#id<?php echo $row['id'];?>').val(),Numid1: $('#Numid<?php echo $row['id'];?>').val(),nick:nick1,fc:fc1,idloto:idloto1},
                success: function(data)
                {
                      
                    $("#thumbnail<?php echo $row['id'];?>").html(data);
                }
            });
        });
    });
            
            
</script>
        <!-- fin sCRIPT PA actualizar iimagene con datos si y solo si no habi aparticipado-->
   
       <?php
    
   
}//Fin Cargando img de pokes pendientes
else{
    
        //Mostrando datos del poke ganado
        ?>
        <div class="col-md-4 col-sm-6 col-xs-12">
         <div class="" id="thumbnail<?php echo $row['id'];?>">
       <div class="pkm" id="pkm<?php echo $row['id'];?>">
          <h1><?php echo $row['pokemon'];?> </h1>
          <a href="https://www.google.hn/search?q=<?php echo $row['pokemon']; ?>+pokemon&rlz=1C1NDCM_esHN722HN722&source=lnms&tbm=isch&sa=X&sqi=2&ved=0ahUKEwi0udrnuvDTAhXJyyYKHdaTB8AQ_AUIBigB&biw=1280&bih=883" target="_blank">Visualizar Pokemon</a>
      </div>
      <div class="caption">
        <h3 id="nick">Nick: <?php echo $row['nick'];?></h3>
        <p id="tc">FC: <?php echo $row['fc'];?></p>
      </div> 
          </div>
          </div>
          
   <?php     
    } //Fin Mostrando datos del poke ganado




} //fin while
    
          //Mostrando pokes que ya no estan pendientes
          $clavebuscadah=mysql_query("select * from pokemones where md5(idloto) = '$LT' and estado = 1",$conexion) or
die("Problemas en el select:".mysql_error());
         // $Comprobante=true;
while($row = mysql_fetch_array($clavebuscadah))
{
    
    
        //Mostrando datos del poke ganado
        ?>
        <div class="col-md-4 col-sm-6 col-xs-12">
         <div class="" id="thumbnail<?php echo $row['id'];?>">
       <div class="pkm" id="pkm<?php echo $row['id'];?>">
          <h1><?php echo $row['pokemon'];?> </h1>
          <a href="https://www.google.hn/search?q=<?php echo $row['pokemon']; ?>+pokemon&rlz=1C1NDCM_esHN722HN722&source=lnms&tbm=isch&sa=X&sqi=2&ved=0ahUKEwi0udrnuvDTAhXJyyYKHdaTB8AQ_AUIBigB&biw=1280&bih=883" target="_blank">Visualizar Pokemon</a>
      </div>
      <div class="caption">
        <h3 id="nick">Nick: <?php echo $row['nick'];?></h3>
        <p id="tc">FC: <?php echo $row['fc'];?></p>
      </div> 
          </div>
          </div>
          
   <?php     
    }

                 //Fin Mostrando pokes que ya no estan pendientes

          
          
          
          //fin if inicio
          ?>
        

          
      </div>

        
        
            
    </div> <!-- /container -->

      <!-- -->

 <script>
      
            function aviso()
            {
                
                alert('Proximamente...');
            }
      </script>
 
    
    <footer class="footer">
      <hr>
       <?php if($Comprobante){?>
        <p class="lead">Ni modo ya todos los pokemones han sido o est&aacute;n pendientes de entregar. <br>
        </p>
        <h1>En otra ocasi&oacute;n te tocara!</h1>
        <?php }?>
   
        
    </footer>
    
  </body>
</html>