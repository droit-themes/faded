<?php
 $header_display_format = asset_opt('header_display_format', 'show');
    $container = 'container';

    if(!$header_display_format == 'show'){
        $container = 'container-fluid';
    }else{
        $container = 'container';
    }

?>

<nav class="navbar navbar-expand-lg menu_one">
    <div class="<?php echo esc_attr( $container ); ?>">
        <?php asset_logo(); ?>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php 
                wp_nav_menu( array(
                        'menu_class' => 'navbar-nav menu',
                        'container'  => '',
                        'theme_location' => 'main_menu',
                        'walker'         => new asset_Navwalker(),
                        'fallback_cb'     => false,
                ) );
            ?>
        </div>
        
        <?php if(class_exists( 'Redux' ) ) { ?>
            <?php  get_template_part( 'template-parts/header/nav/content-nav', 'serch'); ?>
       <?php } ?>

        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"  data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false">
            <span></span><span></span><span></span><span></span><span></span><span></span>
        </button>
        
    </div>
</nav>