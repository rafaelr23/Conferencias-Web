<footer class="site-footer">
    <div class="contenedor clearfix">
        <div class="footer-informacion">
            <h3>Sobre <span>gldwebcamp</span></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
               sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
               Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit,</p>
        </div>
        <div class="ultimos-tweets">
            <h3>Ultimos <span>Tweets</span></h3>
            <ul>
              <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit,Lorem ipsum dolor sit amet, consectetur adipisicing elit,Lorem ipsum dolor sit amet, consectetur adipisicing elit,Lorem ipsum dolor sit amet, consectetur adipisicing elit,</li>
              <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit,Lorem ipsum dolor sit amet, consectetur adipisicing elit,Lorem ipsum dolor sit amet, consectetur adipisicing elit,Lorem ipsum dolor sit amet, consectetur adipisicing elit,</li>
              <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit,Lorem ipsum dolor sit amet, consectetur adipisicing elit,Lorem ipsum dolor sit amet, consectetur adipisicing elit,</li>
            </ul>
        </div>
        <div class="menu">
            <h3>Redes <span>Sociales</span></h3>
            <nav class="redes-sociales">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </nav>
        </div>
    </div>

    <p class="copyright">Todos los derechos reservados GLDWEBCAMP 2020</p>
</footer>
 
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script> window.jQuery || document.whrite('<script src="js/jquery-min.js"><\/script>') </script>
  
  <script src="js/plugins.js"></script>
  <script src="js/jquery.animateNumber.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  
  <? 
  
 
  $phpSelf = filter_input(INPUT_SERVER, 'PHP_SELF', FILTER_SANITIZE_URL);
  $path_parts = pathinfo($phpSelf);
  $basename = $path_parts['basename']; // Use this variable for action='':
  $pageName = ucfirst($path_parts['filename']);

 
  if($pageName == "Invitados" || $pageName == "Index"){
    echo "<script src=js/jquery.colorbox-min.js></script>";
  }elseif($pageName == "Conferencia"){
    echo "<script src=js/lightbox.js></script>";
  }
?>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src=js/jquery.lettering.js></script>
  
  
  <script src="js/jquey.js"></script>
   <script src="js/main.js"></script>

  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>



  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>