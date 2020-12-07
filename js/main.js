(function(){
    "use strict";
    /* Variables Globales de los HTML */
    var regalo = document.getElementById('regalo');
    var total = 0


    document.addEventListener('DOMContentLoaded',function(){
        
        //Seleccion de ID

        //Datos Usuarios
        var nombre = document.getElementById('nombre');
        var apellido = document.getElementById('apellido');
        var email = document.getElementById('email');
        //Pases
        var pase_dia = document.getElementById('pase_dia');
        var pase_2_dia = document.getElementById('pase_dos_dias');
        var pase_completo = document.getElementById('pase_completo'); 
        
        //btn y divs
        var calcular = document.getElementById('calcular1');
        var errorDiv = document.getElementById('error');
        var boton_registro = document.getElementById('btnRegistro');
        var listaProducto = document.getElementById('lista-productos');
        var suma = document.getElementById('suma-total');
        
 
        
        //extras
        var etiquetas = document.getElementById('etiquetas');
        var camisas = document.getElementById('camisa_evento');
         
        boton_registro.disabled= true;
    
        //Llamada de funciones
        if(document.getElementById("calcular1")){
            calcular.addEventListener("click",calcularMontos,false);// Funcion para el Click Calcular(Formulario registro.html)
            pase_dia.addEventListener("blur",mostrarDias,false);
            pase_dia.addEventListener("click",mostrarDias,false);
            pase_2_dia.addEventListener("blur",mostrarDias,false);
            pase_2_dia.addEventListener("click",mostrarDias,false);
            pase_completo.addEventListener("blur",mostrarDias,false);
            pase_completo.addEventListener("click",mostrarDias,false);
            nombre.addEventListener('blur',error,false);
            apellido.addEventListener('blur',error,false);
            email.addEventListener('blur',error,false);
            email.addEventListener('blur',validacionEmail,false);
        
            

            //Funcion para el Boton Calcular que genera el Importe Total
            function calcularMontos(event){
                event.preventDefault();
                if(regalo.value != ''){
                    var boleto_dia = parseInt(pase_dia.value, 10) || 0, 
                        boleto_2dias = parseInt(pase_2_dia.value,10)|| 0, 
                        boleto_completo = parseInt(pase_completo.value,10) || 0, 
                        cantCamisas = parseInt(camisas.value,10) || 0, 
                        cantEtiquetas = parseInt(etiquetas.value,10)  || 0;
                    /*Importe Total */
                    total = (boleto_dia * 30) + (boleto_2dias * 45) + (boleto_completo * 50) +((cantCamisas * 10) * .93) + (cantEtiquetas * 2);

                    /* Vector Productos */
                    var listadoProductos = [];


                /* Boletos */
                if(boleto_dia >= 1){
                    listadoProductos.push(boleto_dia + ' Pase por Dia');
                }
                if(boleto_2dias >= 1){
                    listadoProductos.push(boleto_2dias + ' Pase por 2 Dias');
                }
                if(boleto_completo >= 1){
                    listadoProductos.push(boleto_completo + ' Pase Completo');
                }
                /* Camisas */
                if(cantCamisas >= 1){
                    listadoProductos.push(cantCamisas + ' Camisas');
                }
                if(cantEtiquetas >= 1){
                    listadoProductos.push(cantEtiquetas + ' Etiquetas');
                }
                

                listaProducto.innerHTML = '';
                for(var i = 0; i < listadoProductos.length; i++){
                    listaProducto.innerHTML += listadoProductos[i] + '</br>';
                }
                
                suma.innerHTML = "$ " + total.toFixed(2);//Devuelve el Total con dos decimales a traves de toFixed
                listaProducto.style.display = "block";
                
                boton_registro.disabled = false;
                document.getElementById("total_pedido").value = total;
                }else{

                    alert("selecione un regalo");
                    listaProducto.innerHTML = "";
                    listaProducto.style.display = "none";
                    suma.innerHTML = "";
                
                    regalo.focus();
                }
                
            }


            //Vector con los Boletos selecionados
            var vecBoletos = [];
            function mostrarDias(){
                var boleto_dia = parseInt(pase_dia.value, 10) || 0, 
                    boleto_2dias = parseInt(pase_2_dia.value,10)|| 0, 
                    boleto_completo = parseInt(pase_completo.value,10) || 0;
                
                
            
                
                if(boleto_dia > 0){
                    vecBoletos.push('viernes');
                }
            
                if(boleto_2dias > 0){
                    vecBoletos.push('viernes','sabado');
                }

                if(boleto_completo > 0){
                    vecBoletos.push('viernes','sabado','domingo');
                }

                for(var i = 0; i < vecBoletos.length; i++){
                
                    document.getElementById(vecBoletos[i]).style.display = "block";
            
                }
            }

            function error(){
                if(this.value == ''){
                    errorDiv.style.display = "block";
                    errorDiv.innerHTML = "Este campo es OBLIGATORIO";
                    this.style.border = "2px solid red";
                }else{
                    errorDiv.style.display = "none";
                    this.style.border = "1px solid black"
                }

            }
            
            function validacionEmail(){
                if(this.value.indexOf("@") > -1){
                    errorDiv.style.display = "none";
                    this.style.border = "1px solid black"
                }else{
                    errorDiv.style.display = "block";
                    errorDiv.innerHTML = "El Formato de Email es incorrecto";
                    this.style.border = "2px solid red";
                }
            }

      
        } 
              //MAPA
              var map = L.map("mapa").setView([-31.412668, -64.171561], 17);

              L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png",{
                  attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
              }).addTo(map);
  
              L.marker([-31.412668, -64.171561]).addTo(map)
                  .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
                  .openPopup();

        //MODAL
        
    });// DOM Content Loaded
   
})(); 
function display(){
    
    document.getElementById("id01").style.display = "block";
    document.getElementById("btnRegistrar").value = "block";

}
