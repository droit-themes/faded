<?php
 
 $opt = get_option('asset_opt');

 $display_search  = isset( $opt['is_menu_btn']) ? $opt['is_menu_btn'] : '';
 $menu_btn_label  = isset( $opt['menu_btn_label']) ? $opt['menu_btn_label'] : '';
 $menu_btn_url    = isset( $opt['menu_btn_url']) ? $opt['menu_btn_url'] : '';

 if($display_search =='yes') : ?>
<div class="header_area nav_bar">
    <a class="btn_get btn-meta btn_hover" href="<?php echo esc_url($menu_btn_url); ?>"><?php echo asset_kses($menu_btn_label); ?></a>
</div>
<?php 
endif;