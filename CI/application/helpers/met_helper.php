<?php
function landingProductTemplate($product)
{
    foreach ($product as $k => $v) {
        $$k = $v;
    }

    $imagenUrl = base_url('assets/img/' . $imagen . '.jpg');
    return <<<HTML
<li class="product">
    <div class="prod-wrap"><span class="onsale">$tonnaje ton</span>
        <div class="woo-cover">
            <div id="product_slider_594230f07a23b" class="woo-entry-thumb">
                <div class="preview-thumb"><img src="$imagenUrl" alt=""/></div>
                <div class="woo-entry-thumb-carousel">
                    <div><a href="$imagenUrl" title=""><img
                            src="$imagenUrl" alt=""/></a></div>
                </div>
            </div>
            <div class="hide"><a href="$imagenUrl"></a> <a
                    href="$imagenUrl"></a></div>
            <div class="wishlist-button-wrap"><a href="#" rel="nofollow" data-product-id="20074"
                                                 data-product-type="simple" class="add_to_wishlist"> <i
                    class="dfd-socicon-heart-shape-silhouette"></i> <span>Add to wishlist</span> </a></div>
            <div class="buttons-wrap">
                <div><a rel="nofollow" href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add
                    to cart</a> <a href="$imagenUrl" title="test" rel="prettyPhoto[$imagen]"
                                   class="dfd-prod-lightbox"><i class="dfd-socicon-eye-open"></i></a></div>
            </div>
        </div>
        <div class="woo-title-wrap"><h3 class="dfd-shop-loop-title"><a href="#" title="$ano $marca $modelo">$ano $marca $modelo</a></h3> 
        <h4 class="dfd-woocommerce-subtitle">$marca $modelo</h4> 
        <span class="price">$costo<ins><span class="woocommerce-Price-amount amount">$fecha</span></ins> </span></div>
    </div>
</li>

HTML;

}

