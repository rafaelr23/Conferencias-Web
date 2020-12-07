
<!-- Header -->
<?php include_once 'include/templates/header.php';?> 
<!-- Fin Header -->
 
  <section class="seccion contenedor">
        <h2>Calendario de Eventos</h2>
        <?php 
            try{
                require_once("include/funciones/BD_Conexion.php");

                $sql="SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
                $sql .= " FROM eventos ";
                $sql .= " INNER JOIN categoria_evento ";
                $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
                $sql .= " INNER JOIN invitados ";
                $sql .= " ON eventos.id_inv = invitados.invitado_id ";
                $sql .= " ORDER BY evento_id ";
                $resultado = mysqli_query($conn,$sql) or die ("Salio algo mal".mysqli_error($conn));
            }catch(Exception $e){

                echo ("Error");
            }
        ?>
        <div class = "calendario">

                <!-- Array Evento -->
                <?php 
                    $calendario = array();
                    while($eventos = mysqli_fetch_assoc($resultado)){ 

                        $fecha = $eventos["fecha_evento"];
                        $evento = array(
                            "titulo" => $eventos["nombre_evento"],
                            "fecha" => $eventos["fecha_evento"],
                            "hora" => $eventos["hora_evento"],
                            "categoria" => $eventos["cat_evento"],
                            "icono" =>  $eventos["icono"],
                            "invitado" => $eventos["nombre_invitado"]." ".$eventos["apellido_invitado"]
                        );
                        $calendario[$fecha][] = $evento;
                        ?>
                        
                    
                <?php } ?>
                <!-- Fin Array Evento -->
                    

                <!-- Imprimiendo todos los Eventos -->
                <?  
                    foreach($calendario as $dia => $lista_eventos){ ?>
                        <h3>
                            <i class="fa fa-calendar"></i>
                            
                            <?
                                setlocale(LC_TIME,"spanish");
                                echo utf8_encode(strftime("%A, %d de %B del %Y",strtotime($dia)));
                            ?>
                        </h3>     
                        
                        <? foreach($lista_eventos as $evento){ ?>
                            <div class="dia">
                                <p class="titulo">
                                    <? echo $evento["titulo"]; ?>
                                </p>

                                <p class="hora">
                                    <i class="fa fa-clock" aria-hidden="true"></i>
                                    <?echo $evento["fecha"]." ".$evento["hora"]; ?>
                                </p>

                                <p>
                                    <i class="<? echo $evento["icono"]; ?>"  aria-hidden="true"></i>
                                    <?echo $evento["categoria"]; ?>
                                </p>

                                <p>
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <?echo $evento["invitado"]; ?>
                                </p>  

                            </div>
                       <? } //Fin ForEach Lista Eventos?>
                    <? } //Fin Foreach Dias ?>

                
                <!-- Fin del Imprimir -->
                
        </div>
        <? mysqli_close($conn); ?>
  </section>

 <!-- Footer -->
  <?php include_once 'include/templates/footer.php'; ?>
