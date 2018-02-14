<body>
   <script type="text/javascript">var req=[];</script>
   <div style="min-width:1300px;", class="container">
      <?php
      if($informacion==false){?>
        <script type="text/javascript">alert("alumno no encontrad");</script>
      <?php }else{
         foreach ($informacion->result() as  $alumno) {
               echo "<p align=\"center\">".$alumno->nombre."</p>";
               echo "<p align=\"center\">".$alumno->rut."</p>";
               echo " <script type=\"text/javascript\">var rut=".$alumno->rut."</script>";
             }?>
      <div class="row">
         <?php 
            for ($i=1; $i <=12 ; $i++) {?>
         <div class="col-xs-1" style="background-color:#CACACA;min-height: 535px;">
            <div id="saodjsa" class="contenedor"  style="background-color:#8BFC90;" >
               <p>semestre </p>
            </div>
            <?php
               $x="s".$i;
               foreach($$x->result() as $curso){ ?>
            <?php 
               if($curso->estado=="0"){?>
            <div id=<?php echo $curso->idAsignatura ?> class="contenedor" style="background-color:rgb(90,237,247);" ondblclick="myButton_onclick(this,id)" onmouseenter="requisitos(id)"  onmouseleave="colornormal(id)">
               <p><?php echo $curso->nombre;?></p>
            </div>
            <?php 
               }else{
               ?>
            <div id=<?php echo $curso->idAsignatura ?> class="contenedor" style="background-color:rgb(255, 114, 144);" ondblclick="myButton_onclick(this,id)" onmouseenter="requisitos(id)"  onmouseleave="colornormal(id)">
               <p><?php echo $curso->nombre;?></p>
            </div>
            <?php 
               } 
               ?>
            <script type="text/javascript"> req["<?php echo ($curso->idAsignatura) ?>"]=new Array(); var i=0;</script>
            <?php
               foreach($req->result() as $requisito ){
                 if($requisito->idAsignatura==$curso->idAsignatura){?>
            <script type="text/javascript"> req["<?php echo ($curso->idAsignatura) ?>"][i]="<?php echo ($requisito->idrequisito)?>"; i++;</script>
            <?php
               } 
               ?>
            <?php
               }
               
                
               
               
               }?>
         </div>
         <?php }?>
      </div>
      <div align="center"><button type="button" class="btn btn-success" onclick=envio()>Guardar malla</button></div>
   <?php } ?>
   </div>
   <script type="text/javascript">
      var colorr=[];
      var r;
      var color;
      //funcion para volver el div a color normal
      function colornormal(id){
        div=document.getElementById(id);
        div.style.backgroundColor=color;
        var len =req[id].length-1;
       
         for(i=0;i<=len;i++){
        
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
       var len =req[id].length-1;
      
        for(i=0;i<=len;i++){
        
        if(req[id][i]!="SIN00"){
          r=document.getElementById(req[id][i]);
          colorr[i]=$(r).css('backgroundColor');
          r.style.backgroundColor='green';}
         
        }
       
      }
      //funcioon para guardar la malla editada
      function envio(){
        var jsonObject=actualizar;
        
          $.ajax({
            url: "guardarmalla",
            type  :'POST',
            data   :{"cursos":jsonObject,"rut":rut},
           success: function(result){
           location.reload();
           
           }
          });
      
      
      
      }
      
   </script>
</body>
</html>