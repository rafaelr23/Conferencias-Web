<?php include_once 'include/templates/header.php';?>

  <!-- Seccion -->
  <section class="seccion contenedor">
      <h2>La mejor conferencia de diseño web</h2>
      <p>Aqui va un parro de muetra- Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
         sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </section>

    
  <section class="programa">
      
      <!-- Video -->
      <div class="contenedor-video">
          <video autoplay loop poster="img/bg-talleres.jpg" id="idVideo">

              <source src="video/video.mp4" type="video/mp4">
              <source src="video/video.webm" type="video/webm">
              <source src="video/video.ogv" type="video/ogv">
              <source src="video/video.avi" type="video/avi">
          </video>
      </div>
      <!-- Fin Video -->

      <!-- Talleres -->
      <div class="contenido-programa">
          <div class="contenedor">
              <div class="programa-evento">
                  <?
                     try{
                        require_once("include/funciones/BD_Conexion.php");
        
                        $sql="SELECT * FROM categoria_evento";
                      
                        $resultado = mysqli_query($conn,$sql) or die ("Salio algo mal".mysqli_error($conn));
                    }catch(Exception $e){
        
                        echo ("Error");
                    }
                  
                  ?><!--Fin PHP -->
                  <h2>Programa del evento</h2>
                  <nav class="menu-programa">
                      <? //Recorriendo la tabla categoria
                        while($cat = $resultado->fetch_array(MYSQLI_ASSOC)){ ?>
                            <? $categoria = $cat["cat_evento"]; $icono = $cat["icono"]; ?>
                            <a href="#<? echo strtolower($categoria); ?>"><i class="<? echo $icono; ?>"></i><? echo $categoria; ?></a>

                      <? }  ?>
                  </nav>
                
                  <? 
                  
                    try{
                        require_once("include/funciones/BD_Conexion.php");
                        
                        $sql="SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
                        $sql .= " FROM eventos ";
                        $sql .= " INNER JOIN categoria_evento ";
                        $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
                        $sql .= " INNER JOIN invitados ";
                        $sql .= " ON eventos.id_inv = invitados.invitado_id ";
                        $sql .= "AND eventos.id_cat_evento = 1" ;
                        $sql .= " ORDER BY evento_id LIMIT 2;";
                        

                        $sql .="SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
                        $sql .= " FROM eventos ";
                        $sql .= " INNER JOIN categoria_evento ";
                        $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
                        $sql .= " INNER JOIN invitados ";
                        $sql .= " ON eventos.id_inv = invitados.invitado_id ";
                        $sql .= "AND eventos.id_cat_evento = 2";
                        $sql .= " ORDER BY evento_id LIMIT 2;";
                        
                        $sql .="SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
                        $sql .= " FROM eventos ";
                        $sql .= " INNER JOIN categoria_evento ";
                        $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
                        $sql .= " INNER JOIN invitados ";
                        $sql .= " ON eventos.id_inv = invitados.invitado_id ";
                        $sql .= "AND eventos.id_cat_evento = 3";
                        $sql .= " ORDER BY evento_id LIMIT 2;";
                        
                      //  $resultado = mysqli_query($conn,$sql) or die ("Salio algo mal".mysqli_error($conn));
                    }catch(Exception $e){
        
                        echo ("Error");
                    }
                  ?><!--Fin PHP -->

                  <? 
                    $conn->multi_query($sql) or die("Error en la multi Consulta"); 
                  ?>

                  <? 
                    do {
                        $resultado = $conn->store_result();
                        $row = $resultado->fetch_all(MYSQLI_ASSOC); ?>

                        <? $i = 0; ?>
                        <? foreach ($row as $evento) { ?>
                            <? if($i % 2 == 0){ ?>
                                <div id="<? echo strtolower($evento["cat_evento"]); ?>" class="info-curso ocultar clearfix">
                            <? } ?><!--Fin IF -->
                                <div class="detalle-evento">
                                    <h3><? echo $evento["nombre_evento"]; ?></h3>
                                    <p><i class="fas fa-clock"></i><? echo $evento["hora_evento"]; ?></p>
                                    <p><i class="fas fa-calendar"></i><? echo $evento["fecha_evento"]; ?></p>
                                    <p><i class="fas fa-user"></i><? echo $evento["nombre_invitado"]." ".$evento["apellido_invitado"]; ?></p>
                                </div>
                                
                            <? if($i % 2 == 1){ ?>
                                <a href="calendario.php" class="button float-right">Ver Todas</a>
                             </div>
                             <? } ?><!--Fin IF -->
                            <? $i++; ?>
                         <? } ?><!--Fin FOR -->

                         <? $resultado->free();?>
                   <? } while ($conn->more_results() && $conn->next_result()); ?>

                 
                
              </div>
          </div>
      </div>
  </section>
  <!-- Fin Talleres -->
    
  <!-- Invitados -->
  <? include_once "include/templates/invitados-template.php";?>

<!-- Contador -->
  <div class="contador parallax">
      <div class="contenedor">
          <ul class="resumen-evento clearfix">
              <li><p class="numero">0</p>Invitados</li>
              <li><p class="numero">0</p>Talleres</li>
              <li><p class="numero">0</p>Dias</li>
              <li><p class="numero">0</p>Conferencias</li>
          </ul>
      </div>
  </div>

<!-- Lista Precios -->

<section class="precios seccion">
    <h2>Precios</h2>
    <div class="contenedor">
        <ul class="lista-precios clearfix">
            <li>
                <div class="tabla-precio">
                    <h3>Pase por Dia</h3>
                    <p class="numero">$30</p>
                    <ul>
                        <li>Bocadillos Gratis</li>
                        <li>Todas las conferencias</li>
                        <li>Todos los talleres</li>
                    </ul>
                    <a href="regirstro.html" class="button hollow">Comprar</a>
                </div>
            </li>

            <li>
                <div class="tabla-precio">
                    <h3>Todos los dias</h3>
                    <p class="numero">$50</p>
                    <ul>
                        <li>Bocadillos Gratis</li>
                        <li>Todas las conferencias</li>
                        <li>Todos los talleres</li>
                    </ul>
                    <a href="regirstro.html" class="buttonM">Comprar</a>
                </div>
            </li>

            <li>
                <div class="tabla-precio">
                    <h3>Pase por dos dias</h3>
                    <p class="numero">$45</p>
                    <ul>
                        <li>Bocadillos Gratis</li>
                        <li>Todas las conferencias</li>
                        <li>Todos los talleres</li>
                    </ul>
                    <a href="regirstro.html" class="button hollow">Comprar</a>
                </div>
            </li>

        </ul>
    </div>
</section>

<div id="mapa" class="mapa">

</div>

<!-- Testimoniales -->
<section class="seccion">
    <h2>Testimoniales</h2>
    <div class="testimoniales contenedor clearfix">

    <div class="testimonial">
          <blockquote>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                 sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                 Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
              <footer class="info-testimoniales clearfix">
                  <img src="img/testimonial.jpg" alt="imagen testimonial">
                  <cite>Joaquin Gomez <span>Maestro Herbostero</span></cite>
              </footer>
          </blockquote>
      </div>

      <div class="testimonial">
          <blockquote>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                 sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                 Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
              <footer class="info-testimoniales clearfix">
                  <img src="img/testimonial.jpg" alt="imagen testimonial">
                  <cite>Joaquin Gomez <span>Maestro Herbostero</span></cite>
              </footer>
          </blockquote>
      </div>

      <div class="testimonial">
          <blockquote>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                 sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                 Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
              <footer class="info-testimoniales clearfix">
                  <img src="img/testimonial.jpg" alt="imagen testimonial">
                  <cite>Joaquin Gomez <span>Maestro Herbostero</span></cite>
              </footer>
          </blockquote>
      </div>
    </div>
</section>

<!-- Newsletter -->
<div class="newsletter parallax">
    <div class="contenido contenedor">
        <p>Registrate a newsletter</p>
        <h3>gldwebcamp</h3>
        
        <button id="btnRegistrar" onclick="display()" style="width:auto;" class="buttonM btnRegistrar">Registrar</button> 
        
    </div>
    <!-- Formulario Oculto de Registro -->
    <div id="id01" class="modal">
        
            <form class="modal-content animate" action="/action_page.php" method="post">
        
                
                
                <div class="container">
                    <span  onclick="document.getElementById('id01').style.display='none'" id="close" class="close" title="Close Modal">&times;</span>

                    <label for="uname"><b>Usuario</b></label>
                    <input type="text" placeholder="Usuario" name="uname" required>

                    <label for="psw"><b>Contraseña</b></label>
                    <input type="password" placeholder="Contraseña" name="psw" required>
                        
                    <label for="email"><b>Email</b></label>
                    <input type="email" placeholder="Email" name="email" required>

                
                    <label>
                        <input type="checkbox" checked="checked" name="remember"> Recordarme
                    </label>

                    <p>Al crear una cuenta, acepta nuestros <a href="#" style="color:dodgerblue">Términos y privacidad</a>.</p>
                </div>

                <div class="container fin-registro" style="background-color:#f1f1f1">
                    <button type="button" onclick="document.getElementById('id01').style.display='none'" id="btnCancelar" class="buttonM">Cancelar</button>
                    <button type="submit" class = "buttonM">Registrar</button>
                  
                </div>
            </form>
        </div>
    <!-- Fin formulario registro -->
</div>






<section class="seccion">
    <h2>Faltan</h2>
    <div class="cuenta-regresiva contenedor">
        <ul class="clearfix">
            <li><p class="numero" id="dias"></p> Dias</li>
            <li><p class="numero" id="horas"></p> Horas</li>
            <li><p class="numero" id="minutos"></p> Minutos</li>
            <li><p class="numero" id="segundos"></p> Segundos</li>
        </ul>
    </div>
</section>
<!-- Footer -->
<?php include_once 'include/templates/footer.php'; ?>
