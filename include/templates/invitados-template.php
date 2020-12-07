<section class="seccion contenedor">
        <h2>Invitados</h2>
        <?php 
            try{
                require_once("include/funciones/BD_Conexion.php");

                $sql="SELECT * FROM invitados ";
                $resultado = mysqli_query($conn,$sql) or die ("Salio algo mal".mysqli_error($conn));
            }catch(Exception $e){

                echo ("Error");
            }
        ?>
        <section class="invitados contenedor seccion">
            <ul class="lista-invitados clearfix">
              
                <?php while($invitados = mysqli_fetch_assoc($resultado)){ ?>

                        <li>
                            <div class="invitado">
                                
                                <a class="invitado-info" href="#invitado<?echo $invitados["invitado_id"];?>">
                                    <img src=<? echo "img/".$invitados["url"]; ?> alt="imagen invitado">
                                    <p><? echo $invitados["nombre_invitado"]." ".$invitados["apellido_invitado"]; ?></p>
                                </a>
                                
                        
                            </div>
                        </li>

                        <div style="Display:none;">
                            <div class="invitado-info" id="invitado<?echo $invitados["invitado_id"];?>">  
                                <h2><? echo $invitados["nombre_invitado"]." ".$invitados["apellido_invitado"];?></h2>
                                <img src=<? echo "img/".$invitados["url"]; ?> alt="imagen invitado">
                                <p> <? echo $invitados["descripcion"]; ?></p>

                            </div>
                        </div>

                <?php } ?> <!--Fin While -->
            </ul>
        </section>
                   
        </div>
        <!-- Cierre de Conexion -->
        <? mysqli_close($conn); ?>
  </section>