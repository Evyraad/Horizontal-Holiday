<div class="navbar">
    <div class="navbar-header navbar-default">
        <button type="button" class="navbar-toggle" data-toggle="collapse" 
            data-target="#example-navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <div class="sidebar-left collapse navbar-collapse" id="example-navbar-collapse">
<!--        <section class="sidebar-left">-->
            <div class="ih-item">
                <a href="/">
                    <img id="logo" class="img-rounded" src="<?php bloginfo( 'template_directory' ); ?>/img/flourish_logo.png" 
                    alt="Логотип: Темы для Wordpress Horizontal Holiday." />
                    <h1>Horizontal Holiday</h1>
                </a>
            </div>
            <div class="my-dots"></div>
            <nav>
                <?php if ( is_active_sidebar( 'sidebar-left' ) ) {      
                        dynamic_sidebar( 'sidebar-left' );      
                } ?>
            </nav>    
            <div class="my-dots"></div>
            <ul class="icons">
                <li><a href="#">
                        <img src="<?php bloginfo( 'template_directory' ); ?>/img/Icon/e-mail_active.png" alt="E-mail" />
                    </a></li>
                <li><a href="#">
                        <img src="<?php bloginfo( 'template_directory' ); ?>/img/Icon/Skype_active.png" alt="Skype" />
                    </a></li>
                <li><a href="#">
                        <img src="<?php bloginfo( 'template_directory' ); ?>/img/Icon/instagram_active.png" alt="instagram" />
                    </a></li>  
                <li><a href="#">
                        <img src="<?php bloginfo( 'template_directory' ); ?>/img/Icon/Facebook_active.png" alt="facebook" />
                    </a></li>         
            </ul>
            <div id="copyright_and_text">
                <p> &#169; <?php echo date( 'Y' ); ?><br />
                Horizontal Holiday </p>
            </div>
        <!--</section>-->
    </div>
</div>







    
