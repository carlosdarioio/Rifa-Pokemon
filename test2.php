
         
<!-- Verificar si nick y fc existen en base de datos entrenadores
    
    Si existe mostrar mensaje diciendo no puedes participar dos veces
    y que actualiice l apagina si ya esta seleccionado   
                                   
        
       
         
        -->
        <?php
include("admin/Base.php");
if($_POST['nick']!="" && $_POST['fc']!=""){


                                    //seleccionando loto correspondiente
          //de preferencia cifrar idloto para que no lo visualicen en la url
$comprobante = true;
/*comprobando*/
$clavebuscadah2XX=mysql_query("select * from pokemones where idloto = $_POST[idloto] and id = '$_POST[Numid1]'",$conexion) or die("Problemas en el select:".mysql_error());    
while($row2XX = mysql_fetch_array($clavebuscadah2XX))
{
 if($row2XX['estado'] ==1){
    $comprobante = false;
}
}
$clavebuscadah2XX=mysql_query("select * from pokemones where idloto = $_POST[idloto] and nick = '$_POST[nick]'",$conexion) or die("Problemas en el select2:".mysql_error());    
while($row2XX = mysql_fetch_array($clavebuscadah2XX))
{
 if(strtolower($row2XX['nick']) ==strtolower($_POST['nick'])){
    $comprobante = false;
}
}
    /*Fin comprobando*/
    
$clavebuscadah2=mysql_query("select * from pokemones where idloto = $_POST[idloto] and id = '$_POST[Numid1]'",$conexion) or die("Problemas en el select3:".mysql_error());
    
$cc=true;
while($row2 = mysql_fetch_array($clavebuscadah2) or $cc==true )
{
    $cc=false;                              //0=pendiente 1=asignado(ya lo ganaron)
    if($comprobante==true){
        
?>

         <div class="pkm" id="pkm<?php echo $_POST['id1'];?>" >
          <h1><?php echo $_POST['id1'];?></h1>
          <a href="https://www.google.hn/search?q=<?php echo $_POST['id1']; ?>+pokemon&rlz=1C1NDCM_esHN722HN722&source=lnms&tbm=isch&sa=X&sqi=2&ved=0ahUKEwi0udrnuvDTAhXJyyYKHdaTB8AQ_AUIBigB&biw=1280&bih=883" target="_blank">Visualizar Pokemon</a>
      </div>
      <div class="">
        <h3 id="nick">Nick: <?php echo $_POST['nick'];?></h3>
        <p id="tc">FC: <?php echo $_POST['fc'];?></p>
      </div>
      
        
        <?php

//UPDATE MyGuests SET lastname='Doe' WHERE id=2  
    
    $clavebuscadah3=mysql_query("UPDATE pokemones SET estado = 1, nick='$_POST[nick]', fc='$_POST[fc]' where id ='$_POST[Numid1]' and idloto = $_POST[idloto]",$conexion) or
die("Problemas en el select2:".mysql_error());
echo 'Felicidades as registrado tus datos, ahora solo comenta que poke dejaste en la gts para recibir el regalo.';

?>
        
       
      
    <?php }else{
        
        //
    
   
    
    ?>
     
   
      <div class="pkm" id="pkm<?php echo $row['id'];?>" >
       <?php 
         $img="https://glomerular-fours.000webhostapp.com/pokemon/img/Pokeball.PNG";
         if($row2['estado']==0 and $comprobante==true){ echo $row2['pokemon'];}
        else{   
        ?>
          <input type="image" src="https://glomerular-fours.000webhostapp.com/pokemon/img/Pokeball.PNG" id="submit<?php echo $row['id'];?>">
        <?php } ?>  
      </div>
      
      <div class="caption">
      
       <?php
        
        echo "<script>alert('El pokemon ya fue elegido o Ya participaste, solo puedes elegir un pokemon, en la proxima entrega si podras. Presiona F5 para actualizar')</script>";
        ?>
      </div>
        
        
        <?php
        
        //echo "Ya participaste, solo puedes elegir un pokemon, en la proxima entrega si podras.";
    }//fin else 
}//fin while
    
}//fin if verificador
else{echo "<script>alert('Error no ingresaste correctamente datos');</script>";}
    ?>
    <!--
      <div class="thumbnail" id="thumbnail<?php //echo $row2['id'];?>">
       <div class="pkm" id="pkm<?php// echo $row2['id'];?>">
          <h1><?php // $row2['pokemon'];?> </h1>
      </div>
      <div class="caption">
        <h3 id="nick">Nick</h3>
        <p id="tc">1865-4323-18KJH SADKJSAHD KJSAH DKJASDH 65</p>
      </div> 
          </div>-->
          
         
        