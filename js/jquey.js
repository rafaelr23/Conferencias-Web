$(document).ready(function(){

    //LOGO
    $(".nombre-sitio").lettering();

    //Agregado Clase ACTIVOC a Barra Principal de Navegacion
    $('body.Conferencia .navegacion-principal a:contains("Conferencia")').addClass("activoC");
    $('body.Calendario .navegacion-principal a:contains("Calendario")').addClass("activoC");
    $('body.Invitados .navegacion-principal a:contains("Invitados")').addClass("activoC");

    //Lista de Eventos de Conferencias
    $("div.ocultar").hide();//Oculta los eventos
    $(".programa-evento .info-curso:first").show();//Muestra el Primer evento
    $(".menu-programa a:first").addClass("activo");//El Primer Evento es el que tiene la CLASE

    //Funciones Menu FIJO
    var windowAlto = $(window).height();
    var barraAltura = $(".barra").innerHeight();   
    $(window).scroll(function(){
        var scroll = $(window).scrollTop();
       
        if(scroll > windowAlto){
            $(".barra").addClass("fixed");
            $("body").css({"margin-top": barraAltura+"px"});
        }else{
            $(".barra").removeClass("fixed");
            $("body").css({"margin-top":0+"px"});
        }
    })

    //Funciones Menu RESPONSIVE
    $(".menu-movil").on("click",function(){
        $(".navegacion-principal").slideToggle();
    });

    //Funciones para LISTA EVENTOS
    $('.menu-programa a').on("click",function(){

        $(".menu-programa a").removeClass();//Primero se remueven todas las clases de los eventos
        $(this).addClass("activo");//Luego se agrega la clase al ENLACE o EVENTO Clickeado

        $("div.ocultar").hide();//Oculta los eventos
        var enlace = $(this).attr("href");
        $(enlace).fadeIn(1000);// 1000 = 1Segundo

        return false // retorna en falso para que no se mueva la pantalla al hacer click sobre los eventos
    })



    //Funciones Cuenta Regresiva
    $(".cuenta-regresiva").countdown('2020/12/10 09:00:00',function(event){
        $('#dias').html(event.strftime('%D'));
        $('#horas').html(event.strftime('%H'));
        $('#minutos').html(event.strftime('%M'));
        $('#segundos').html(event.strftime('%S'));
    })

    //Funcion animacion de numeros (CONTADOR)
    var AnimacionEvento = jQuery(".resumen-evento");
    if(AnimacionEvento.length > 0){
        $(".resumen-evento").waypoint(function(){
            $(".resumen-evento li:nth-child(1) p").animateNumber({number: 6},1200);
            $(".resumen-evento li:nth-child(2) p").animateNumber({number: 15},1200);
            $(".resumen-evento li:nth-child(3) p").animateNumber({number: 3},1400);
            $(".resumen-evento li:nth-child(4) p").animateNumber({number: 9},1200);
        },{
            offset: "60%"
        });
    }
    //MODAL
    $("#btnRegistrar").on("click",function(){
        $(".barra").removeClass("fixed");
       $(".barra").removeClass("animate");
   
     
        $("body").css({"margin-top":0+"px"});
        $('html, body').css({
            'overflow': 'hidden',
        });
    });
    $("#close").on("click",function(){
        $('html, body').css({
            'overflow': 'auto'
        });
        $(".barra").addClass("animate");
    
    });
    $("#btnCancelar").on("click",function(){
        $('html, body').css({
            'overflow': 'auto'
        });
       $(".barra").addClass("animate");

    });

    //ColorBox sobre Invitados
        
        $(".invitado-info").colorbox({inline:true,width:"50%"});

});