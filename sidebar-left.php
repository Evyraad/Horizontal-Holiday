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
                <!--Если будешь лого уменьшать делай 200х13.. px-->
                <a href="/">
                    <img id="logo" class="img-rounded" src="<?php bloginfo('template_directory'); ?>/img/flourish_logo.png" 
                    alt="Логотип: Мастерская семейных событий. Особый случай.">
                    <h1>Horizontal Holiday</h1>
                </a>
            </div>
            <div class="my-dots"></div>
            <nav>
                <?php if ( is_active_sidebar( 'sidebar-left' ) ) : ?>      
                    <?php dynamic_sidebar( 'sidebar-left' ); ?>       
                <?php endif; ?>
            </nav>    
            <div class="my-dots"></div>
            <ul class="icons">
                <a href="mailto:ossluch@mail.ru"><li id="icon_e-mail"></li></a>
                <a href=""><li id="icon_Skype"></li></a>
                <a href=""><li id="icon_Ok"></li></a>
                <a href=""><li id="icon_VK"></li></a>
            </ul>
            <div id="copyright_and_text">
                <p> &#169; <?php echo date('Y'); ?><br>
                Horizontal Holiday </p>
            </div>
        <!--</section>-->
    </div>
</div>
