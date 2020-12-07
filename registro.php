  

  <!-- Header -->
  <?php include_once 'include/templates/header.php';?>
  <!-- fin Header -->
  
  
  <!-- Datos Usuario -->
  <section class="seccion contenedor">
        <h2>Registro de Usuarios</h2>

        <form id="registro" class="registro" action="validar_registro.php" method="POST">
            <div id="datos_usuarios" class="registro caja clearfix">
                <div class="campo">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Tu Nombre">
                </div>
                <div class="campo">
                    <label for="apellido">Apellido:</label>
                    <input type="text" id="apellido" name="apellido" placeholder="Tu Apellido">
                </div>
                <div class="campo">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Tu Email">
                </div>
                <div id="error"></div>
            </div>

                    <!-- Paquetes -->
            <div id="paquetes" class="paquetes">
                <h3>Elige el numero de boletos</h3>
                <ul class="lista-precios clearfix">
                    <li>
                        <div class="tabla-precio">
                            <h3>Pase por Dia(Viernes)</h3>
                            <p class="numero">$30</p>
                            <ul>
                                <li>Bocadillos Gratis</li>
                                <li>Todas las conferencias</li>
                                <li>Todos los talleres</li>
                            </ul>
                            <div class="orden">
                                <label for="pase_dia">Boletos deseados:</label>
                                <input type="number" min="0" id="pase_dia" size="3" name="boletos[]" placeholder="0">
                            </div>
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
                            <div class="orden">
                                <label for="pase_completo">Boletos deseados:</label>
                                <input type="number" min="0" id="pase_completo" size="3" name="boletos[]" placeholder="0">
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="tabla-precio">
                            <h3>Pase por dos dias(viernes y Sabado)</h3>
                            <p class="numero">$45</p>
                            <ul>
                                <li>Bocadillos Gratis</li>
                                <li>Todas las conferencias</li>
                                <li>Todos los talleres</li>
                            </ul>
                            <div class="orden">
                                <label for="pase_dos_dias">Boletos deseados:</label>
                                <input type="number" min="0" id="pase_dos_dias" size="3" name="boletos[]" placeholder="0">
                            </div>
                        </div>
                    </li>

                </ul>
            </div>

            <div id="eventos" class="eventos clearfix">
                <h3>Elige tus talleres</h3>
                <!--Viernes-->
                <div class="caja">
                    <div id="viernes" class="contenido-dia clearfix">
                        <h4>Viernes</h4>
                        <div>
                            <p>Talleres:</p>
                            <label><input type="checkbox" name="registro[]" id="taller_01" value="taller_01"><time>10:00</time> Responsive Web Desing</label>
                            <label><input type="checkbox" name="registro[]" id="taller_02" value="taller_02"><time>12:00</time> Flexbox</label>
                            <label><input type="checkbox" name="registro[]" id="taller_03" value="taller_03"><time>14:00</time> HTML5 y CSS3</label>
                            <label><input type="checkbox" name="registro[]" id="taller_04" value="taller_04"><time>16:00</time> Drupal</label>
                            <label><input type="checkbox" name="registro[]" id="taller_05" value="taller_05"><time>18:00</time> WordPress</label>
                        </div>
                        <div>
                            <p>Conferencias:</p>
                            <label><input type="checkbox" name="registro[]" id="conf_01" value="conf_01"><time>10:00</time> Como ser Freelancer</label>
                            <label><input type="checkbox" name="registro[]" id="conf_02" value="conf_02"><time>12:00</time> Tecnologias del Futuro</label>
                            <label><input type="checkbox" name="registro[]" id="conf_03" value="conf_03"><time>14:00</time> Seguridad de la Web</label>
                           
                        </div>
                        <div>
                            <p>Seminarios:</p>
                            <label><input type="checkbox" name="registro[]" id="sem_01" value="sem_01"><time>10:00</time> Diseño UI y UX para Moviles</label>
                            
                        </div>
                    </div>

                    <!--Sabado-->
                <div id="sabado" class="contenido-dia clearfix">
                    <h4>Sabado</h4>
                    <div>
                        <p>Talleres:</p>
                        <label><input type="checkbox" name="registro[]" id="taller_01" value="taller_01"><time>10:00</time> AngularJS</label>
                        <label><input type="checkbox" name="registro[]" id="taller_02" value="taller_02"><time>12:00</time> PHP y MySQL</label>
                        <label><input type="checkbox" name="registro[]" id="taller_03" value="taller_03"><time>14:00</time> JavaScript Avanzado</label>
                        <label><input type="checkbox" name="registro[]" id="taller_04" value="taller_04"><time>16:00</time> SEO en Google</label>
                        <label><input type="checkbox" name="registro[]" id="taller_05" value="taller_05"><time>18:00</time> De Photoshop a HTML5 Y CSS3</label>
                        <label><input type="checkbox" name="registro[]" id="taller_06" value="taller_06"><time>20:00</time> PHP Medio y Avanzado</label>
                    </div>
                    <div>
                        <p>Conferencias:</p>
                        <label><input type="checkbox" name="registro[]" id="conf_01" value="conf_01"><time>10:00</time> Como crear tu propia tienda online con grandes ganancias en pocos dias</label>
                        <label><input type="checkbox" name="registro[]" id="conf_02" value="conf_02"><time>12:00</time> Las mejores formas de buscar trabajo</label>
                        <label><input type="checkbox" name="registro[]" id="conf_03" value="conf_03"><time>14:00</time> Pasos para crear un negocio rentable</label>
                       
                    </div>
                    <div>
                        <p>Seminarios:</p>
                        <label><input type="checkbox" name="registro[]" id="sem_01" value="sem_01"><time>10:00</time> Aprende a programar en un dias</label>
                        <label><input type="checkbox" name="registro[]" id="sem_02" value="sem_02"><time>12:00</time> Diseño UI y UX para Moviles</label>
                        
                    </div>
                </div>
                <!--Domingo-->
                <div id="domingo" class="contenido-dia clearfix">
                    <h4>Domingo</h4>
                    <div>
                        <p>Talleres:</p>
                        <label><input type="checkbox" name="registro[]" id="taller_01" value="taller_01"><time>10:00</time> Laravel</label>
                        <label><input type="checkbox" name="registro[]" id="taller_02" value="taller_02"><time>12:00</time> Crea tu propia API</label>
                        <label><input type="checkbox" name="registro[]" id="taller_03" value="taller_03"><time>14:00</time> JavaScript y JQuery</label>
                        <label><input type="checkbox" name="registro[]" id="taller_04" value="taller_04"><time>16:00</time> Creando plantillas para WordPress</label>
                        <label><input type="checkbox" name="registro[]" id="taller_05" value="taller_05"><time>18:00</time> Tiendas Virtuales en Magento</label>
                       
                    </div>
                    <div>
                        <p>Conferencias:</p>
                        <label><input type="checkbox" name="registro[]" id="conf_01" value="conf_01"><time>10:00</time> Como hacer Marketing en linea</label>
                        <label><input type="checkbox" name="registro[]" id="conf_02" value="conf_02"><time>12:00</time> Con que lenguaje debo empezar?</label>
                        <label><input type="checkbox" name="registro[]" id="conf_03" value="conf_03"><time>14:00</time> Frameworks y libreria Open Source</label>
                       
                    </div>
                    <div>
                        <p>Seminarios:</p>
                        <label><input type="checkbox" name="registro[]" id="sem_01" value="sem_01"><time>10:00</time> Creando una App en Android en una Tarde</label>
                        <label><input type="checkbox" name="registro[]" id="sem_02" value="sem_02"><time>12:00</time> Creando una App en iOS en una tarde </label>
                        
                    </div>
                </div>
                </div>
                
            </div>
            
            <!--Resumen-->
            <div class="resumen clearfix" id="resumen">   
                <h3>Pago y Extras</h3>
                <div class="caja clearfix">
                    <div class="extras">

                        <!--Camisas-->
                        <div class="orden">
                            <label for="camisa_evento">Camisa del evento 10$ <small>(promocion 7% dto.)</small> </label>
                            <input type="number" min="0" id="camisa_evento" size="3" name="pedido_camisas" placeholder="0">
                        </div>
                        
                        <!--Etiquetas-->
                        <div class="orden">
                            <label for="etiquetas">Paquete de 10 etiquetas 2$ <small>(HTML5, CSS3, JavaScript)</small> </label>
                            <input type="number" min="0" id="etiquetas" name="pedido_etiquetas" size="3" placeholder="0">
                        </div>

                        <!--Regalos-->
                        <div class="orden">
                            <label for="regalo">Selecione un regalo</label> <br>
                            <select name="regalo" id="regalo"  required>
                                <option value="">Selecione un Regalo</option>
                                <option value="2">Etiquetas</option>
                                <option value="1">Pulceras</option>
                                <option value="3">Plumas</option>
                                
                            </select>
                        </div>

                        <input type="button" id="calcular1" class="button" value="CALCULAR">

                    </div>

                    <div class="total">
                        <p>Resumen:</p>
                        <div id="lista-productos">

                        </div>
                        <p>Total:</p>
                        <div id="suma-total">
                      
                        </div>
                        <input type="hidden" name="total_pedido" id="total_pedido">
                        <input type="submit" name="submit" value="PAGAR" id="btnRegistro" class="button">
                    </div>
                </div>
            </div>

        </form>
  </section>


<!-- Footer -->
  <?php include_once 'include/templates/footer.php'; ?>
