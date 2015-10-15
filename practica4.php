Practica
Simular tabla post

Post
-id
-titulo
-contenido
-autor

<?php

  $registros = array(
    0=> array(
       "id"=> "1",
       "titulo"=> "Patito feo",
       "contenido"=> "gdshgfjsad",
       "autor"=> "Benito"
    ),

    1=> array(
       "id"=> "2",
       "titulo"=> "Cutonala",
       "contenido"=> "Es el contenido",
       "autor"=> "admin"
    ),

    2=> array(
       "id"=> "3",
       "titulo"=> "icco",
       "contenido"=> "ciencias computacionales",
       "autor"=> "jesus"
    ),
   
    3=> array(
       "id"=> "4",
       "titulo"=> "nano",
       "contenido"=> "nanotecnologia",
       "autor"=> "rober"
    ),

    4=> array(
       "id"=> "5",
       "titulo"=> "nutricion",
       "contenido"=> "alimentacion",
       "autor"=> "oscar"
      )
    );

  
?>


<?php foreach($registros as $registro){ ?>
  <div>
     <h1> <?php echo $registro["titulo"]; ?> </h1>
   <p>
      <?php echo $registro["contenido"]; ?> 
   </p>
      
   <div>
     <?php echo $registro["autor"]; ?>

  </div>
 </div>



 <?php } ?>
    