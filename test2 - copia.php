
         
<!-- Verificar si nick y fc existen en base de datos entrenadores
    
    Si existe mostrar mensaje diciendo no puedes participar dos veces
    y que actualiice l apagina si ya esta seleccionado   
                                   
        
       
         
        -->
        <?php

if($_POST['nick']!="" && $_POST['fc']!=""){

//echo "<script>alert('Valor de nick: $_POST[nick]');</script>";
$conexion2=mysql_connect("localhost","id1672792_root","pkm333333") or die("Problemas en la conexion");
mysql_select_db("id1672792_pkm",$conexion2) or die("Problemas en la selección de la base de datos");  
mysql_query ("SET NAMES 'utf8'");
                                    //seleccionando loto correspondiente
          //de preferencia cifrar idloto para que no lo visualicen en la url
$clavebuscadah2=mysql_query("select * from pokemones where idloto = 1 and (pokemon = '$_POST[id1]' or nick = '$_POST[nick]')",$conexion2) or
die("Problemas en el select:".mysql_error());
    
$cc=true;
while($row2 = mysql_fetch_array($clavebuscadah2) or $cc==true )
{
    $cc=false;                              //0=pendiente 1=asignado(ya lo ganaron)
    if($row2['nick'] != $_POST['nick'] && $row2['estado'] ==0){
        
?>

         <div class="pkm" id="pkm<?php echo $_POST['id1'];?>" >
          <h1><?php echo $_POST['id1'];?></h1>
          <a href="https://www.google.hn/search?q=<?php echo $_POST['id1']; ?>+pokemon&rlz=1C1NDCM_esHN722HN722&source=lnms&tbm=isch&sa=X&sqi=2&ved=0ahUKEwi0udrnuvDTAhXJyyYKHdaTB8AQ_AUIBigB&biw=1280&bih=883" target="_blank">Visualizar</a>
      </div>
      <div class="">
        <h3 id="nick">Nick: <?php echo $_POST['nick'];?></h3>
        <p id="tc">FC: <?php echo $_POST['fc'];?></p>
      </div>
      
        
        <?php

//UPDATE MyGuests SET lastname='Doe' WHERE id=2  
    
    $clavebuscadah3=mysql_query("UPDATE pokemones SET estado = 1, nick='$_POST[nick]', fc='$_POST[fc]' where pokemon ='$_POST[id1]' and idloto = $_POST[idloto]",$conexion2) or
die("Problemas en el select2:".mysql_error());
echo 'Felicidades as registrado tus datos, ahora solo comenta que poke dejaste en la gts para recibir el regalo.';

?>
        
       
      
    <?php }else{
        
        //
    
   
    
    ?>
     
   
      <div class="pkm" id="pkm<?php echo $row['id2'];?>" >
       <?php 
         $img="https://glomerular-fours.000webhostapp.com/pokemon/img/Pokeball.PNG";
         if($row2['estado']==0){ echo $row2['pokemon'];}
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
          
         
        