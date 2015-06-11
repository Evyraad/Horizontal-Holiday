<?php ?>    
<footer class="row-fluid">
    <p>Разработчик 
        <a href="http://card-mstar.rhcloud.com/">Салычева Татьяна</a>.
        Все материалы на сайте распространяются с использованием лицензии
        <a href="http://creativecommons.org/licenses/by-nc/3.0/legalcode">
            Creative Commons Attribution-NonCommercial.</a>
    </p>
</footer>
   </div><!--conteiner-->
    <!--Stiki slidebar-->
    <script>     
         jQuery(document).ready(function($) {    
            $(window).ready(function() {
                $("#sidebar").stick_in_parent();
            });        
            $(window).on('load resize', function() {
                if ($(window).width() < 768) {
                    $("#sidebar").trigger("sticky_kit:detach");
                } else {
                    $("#sidebar").stick_in_parent();
                }
            });
        });
    </script>
    <?php wp_footer(); ?>
    </body>
</html>    
