<?php
$opt = get_option('faded_opt');
$is_mini_cart = !empty($opt['is_mini_cart']) ? $opt['is_mini_cart'] : '';

?>
<div class="ajax_mini_cart_panel panel">
<div class="alter_nav mini_cart_exist">
    <a class="cart-btn nav-link dropdown-toggle mini_cart_box" href="<?php echo wc_get_cart_url() ?>" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="icon_cart_alt"></i>
        <?php  $items_count = WC()->cart->get_cart_contents_count(); ?>
        <span id="mini-cart-count"  class="num"><?php echo esc_html($items_count ? $items_count : '&nbsp;'); ?></span>
    </a>
    <div class="minicart_panel_wrap hover_contnent"></div>
</div>
</div>
