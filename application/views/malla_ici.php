<body>
   <div style="min-width:1300px;", class="container">
   <div class="row"  >
      <script type="text/javascript">var req=[];</script>
      <!--  -->
      <?php for ($i=1; $i <=12 ; $i++) {
        // consulta los ramos del semestre i
         $query=llamar_modelo($i);
         // if para cambiar alternar el color de fondo entre dos colores
         if($i%2==0){
          ?>
          <!-- creacion de grilla, 12 columnas  el color depende del if de arriba -->
      <div class="col-xs-1" style="background-color:#BEBEBE;min-height: 575px;" >
         <?php }
            else{?>
         <div class="col-xs-1" style="background-color:#CACACA;min-height: 575px;">
            <?php }
               ?>
               <!-- div con el semestre correspondiente-->
            <div id=<?php echo $i ?> class="contenedor"  style="background-color:#8BFC90;" >
               <p>semestre <?php echo $i?></p>
            </div>
            <!-- recorre el resultado de la consulta de ramos   -->
            <?php foreach ($query  as $asignatura) {
              //consulta de los requisitos de ese ramo
               $query_requisitos=consultar_requisitos($asignatura->idAsignatura);?>
              <!-- JS que guarda en un array asociativo(req) el nombre de la asignatura y sus requisitos-->
            <script type="text/javascript">
               var <?php echo ($asignatura->idAsignatura)?>=[<?php foreach($query_requisitos as $a)
                  { echo ('"'.$a->idrequisito.'",');} ?> "0"];
               req["<?php echo ($asignatura->idAsignatura) ?>"]=<?php echo ($asignatura->idAsignatura)?>;
            </script>
            <!--  if para asignar el color de la asignatura dependiendo si esta aprobado o no, ademas se asignan las funciones de doble click y pasar el mause-->
            <?php if($asignatura->aprobado=="0"){?>
            <div id=<?php echo $asignatura->idAsignatura ?> class="contenedor" style="background-color:rgb(90,237,247);" ondblclick="myButton_onclick(this,id)"  onmouseenter="requisitos(id)"  onmouseleave="colornormal(id)">
               <p><?php echo $asignatura->nombre;?></p>
            </div>
            <?php }else{?>
            <div id=<?php echo $asignatura->idAsignatura ?> class="contenedor" style="background-color:rgb(255, 114, 144);" ondblclick="myButton_onclick(this,id)" onmouseenter="requisitos(id)" onmouseleave="colornormal(id)">
               <p><?php echo $asignatura->nombre;?></p>
            </div>
            <?php }?>
            <?php }?>
         </div>
         <?php } ?>
      </div>
      <div align="center"><button type="button" class="btn btn-success" onclick=envio()>Guardar malla</button></div>
   </div>
</body>
<script type="text/javascript">
   var colorr=[];
   var r;
   var color;
   //funcion para volver el div a color normal
   function colornormal(id){
     div=document.getElementById(id);
     div.style.backgroundColor=color;
     var len =req[id].length-2;
      for(i=0;i<=len;i++){
     console.log(req[id][i]);
     if(req[id][i]!="SIN00"){
        r=document.getElementById(req[id][i]);
       r.style.backgroundColor=colorr[i];}
      
     }
    
   }
   // funcion para colorear los requisitos de la asigantura
   function requisitos(id){
    div=document.getElementById(id);
    color=$(div).css('backgroundColor');
    div.style.backgroundColor='orange';
    var len =req[id].length-2;
     for(i=0;i<=len;i++){
     console.log(req[id][i]);
     if(req[id][i]!="SIN00"){
       r=document.getElementById(req[id][i]);
       colorr[i]=$(r).css('backgroundColor');
       r.style.backgroundColor='green';}
      
     }
    
   }
   //funcioon para guardar la malla editada
   function envio(){
     var jsonObject={"cursos":actualizar};
       $.ajax({
         url: "cursos/guardarmalla",
         type  :'POST',
         data   :jsonObject,
        success: function(result){
         location.reload();
        }
       });
   
   
   
   }
   
</script>
</html>