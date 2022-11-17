<?php
$opt = get_option('faded_opt');
$is_mini_cart = !empty($opt['is_mini_cart']) ? $opt['is_mini_cart'] : '';

?>
    <div class="alter_nav mini_cart_exist">
        <ul class="navbar-nav search_cart">
            <?php
            if( class_exists('WooCommerce') && $is_mini_cart == '1' ) :
                global $woocommerce;
                $total_items = count(WC()->cart->get_cart());
                ?>
                <li class="nav-item shpping-cart dropdown submenu">
                    <a class="cart-btn nav-link dropdown-toggle" href="<?php echo wc_get_cart_url() ?>" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon_cart_alt"></i>
                        <?php  $items_count = WC()->cart->get_cart_contents_count(); ?>
                        <span id="mini-cart-count"  class="num"><?php echo esc_html($items_count ? $items_count : '&nbsp;'); ?></span>

                    </a>
                    <?php if( $total_items > 0 ) : ?>
                        <ul class="dropdown-menu">
                            <?php
                            $i = 0;
                            foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
                                $is_single_item = ($total_items == 1) ? 'only_single_item' : '';
                                $_product = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);
                                $product_id = apply_filters('woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key);

                                if ($_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters('woocommerce_cart_item_visible', true, $cart_item, $cart_item_key)) {
                                    $product_permalink = apply_filters('woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink($cart_item) : '', $cart_item, $cart_item_key);
                                    ?>
                                    <li class="cart-single-item clearfix <?php echo esc_attr($is_single_item); echo ( ++$i === $total_items ) ? ' last_cart_item' : '';  ?>">
                                        <div class="cart-img">
                                            <?php
                                            $thumbnail = apply_filters('woocommerce_cart_item_thumbnail', $_product->get_image('faded_80x80'), $cart_item, $cart_item_key);
                                            if (!$product_permalink) {
                                                echo faded_extention_wp_kses($thumbnail);
                                            } else {
                                                printf('<a href="%s">%s</a>', esc_url($product_permalink), faded_extention_wp_kses($thumbnail));
                                            }
                                            ?>
                                        </div>
                                        <div class="cart-content text-left">
                                            <p class="cart-title">
                                                <a href="<?php echo esc_url($product_permalink) ?>">
                                                    <?php
                                                    if (!$product_permalink) {
                                                        echo faded_extention_wp_kses(apply_filters('woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key) . '&nbsp;');
                                                    } else {
                                                        echo faded_extention_wp_kses(apply_filters('woocommerce_cart_item_name', sprintf('<a href="%s">%s</a>', esc_url($product_permalink), $_product->get_name()), $cart_item, $cart_item_key));
                                                    }

                                                    do_action('woocommerce_after_cart_item_name', $cart_item, $cart_item_key);

                                                    // Meta data.
                                                    echo wc_get_formatted_cart_item_data($cart_item); // PHPCS: XSS ok.

                                                    // Backorder notification.
                                                    if ($_product->backorders_require_notification() && $_product->is_on_backorder($cart_item['quantity'])) {
                                                        echo faded_extention_wp_kses(apply_filters('woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__('Available on backorder', 'faded') . '</p>'));
                                                    }
                                                    ?>
                                                </a>
                                            </p>
                                            <p> <?php echo apply_filters('woocommerce_cart_item_price', WC()->cart->get_product_price($_product), $cart_item, $cart_item_key); ?> </p>
                                        </div>
                                        <div class="cart-remove">
                                            <?php
                                            // @codingStandardsIgnoreLine
                                            echo apply_filters('woocommerce_cart_item_remove_link', sprintf(
                                                '<a href="%s" class="remove action" aria-label="%s" data-product_id="%s" data-product_sku="%s"><i class="fas fa-times"></i></a>',
                                                esc_url(wc_get_cart_remove_url($cart_item_key)),
                                                esc_html__('Remove this item', 'faded'),
                                                esc_attr($product_id),
                                                esc_attr($_product->get_sku())
                                            ), $cart_item_key);
                                            ?>
                                        </div>
                                    </li>
                                    <?php
                                }
                            }
                            ?>
                            <li class="cart_f">
                                <div class="cart-pricing">
                                    <p class="total"> <?php esc_html_e('Subtotal :', 'faded') ?> <span class="p-total text-right"> <?php wc_cart_totals_order_total_html(); ?> </span></p>
                                </div>
                                <div class="cart-button text-center">
                                    <a class="btn btn-cart get_btn pink" href="<?php echo wc_get_cart_url() ?>"> <?php esc_html_e('View Cart', 'faded') ?> </a>
                                    <a class="btn btn-cart get_btn dark" href="<?php echo wc_get_checkout_url() ?>"> <?php esc_htmL_e('Checkout', 'faded') ?> </a>
                                </div>
                            </li>
                        </ul>
                    <?php endif; ?>
                </li>
                <?php
            endif;
            ?>
        </ul>
    </div>