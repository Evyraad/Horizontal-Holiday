<?php ?>    
<footer class="row-fluid">
    <p><?php echo get_theme_mod( 'footer_setting' )?></p>
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
