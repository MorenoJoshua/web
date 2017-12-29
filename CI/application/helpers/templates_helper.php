<?php
/**
 * Created by PhpStorm.
 * User: moren
 * Date: 5/16/2017
 * Time: 7:53 PM
 */

function cardTemplate($contenido)
{
    $imagen = isset($contenido['imagen']) ? $contenido['imagen'] : '101';
    $tipo = isset($contenido['tipo']) ? ' ' . $contenido['tipo'] : '';
    $baseUrl = base_url();
    return <<<HTML
        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 producto" data-toggle="modal" data-target="#thumbnailModal" data-imagen="$imagen">
            <div class="thumb">
                <div class="embed-responsive embed-responsive-4by3 producto-thumb">
                    <img src="$baseUrl/assets/img/{$imagen}.jpg" alt="" class="embed-responsive-item">
                    <div class="embed-responsive-item">
                        <div class="p-3 thumbnal-overlay-footer{$tipo} h4 m-0"><div class="span m-2">{$contenido['peso']}</div></div>
                    </div>
                </div>
            </div>
            <div class="producto-footer">
                <div class="">{$contenido['marca']} <br/> {$contenido['modelo']}</div>
            </div>
            <div class="producto-footer">
                <div class="">
                    {$contenido['pie']}
                </div>
            </div>
        </div>
HTML;


    function landingProductTemplate($product)
    {
        var_dump($product);
        return <<<HTML
<li class="product">
    <div class="prod-wrap"><span class="onsale">15 Ton</span>
        <div class="woo-cover">
            <div id="product_slider_594230f07a23b" class="woo-entry-thumb">
                <div class="preview-thumb"><img src="wp-content/uploads/2016/11/105.jpg" alt=""/></div>
                <div class="woo-entry-thumb-carousel">
                    <div><a href="wp-content/uploads/2016/11/105.jpg" title=""><img
                            src="wp-content/uploads/2016/11/105.jpg" alt=""/></a></div>
                </div>
            </div>
            <div class="hide"><a href="wp-content/uploads/2016/11/105.jpg"></a> <a
                    href="wp-content/uploads/2016/11/105.jpg"></a></div>
            <div class="wishlist-button-wrap"><a href="#" rel="nofollow" data-product-id="20074"
                                                 data-product-type="simple" class="add_to_wishlist"> <i
                    class="dfd-socicon-heart-shape-silhouette"></i> <span>Add to wishlist</span> </a></div>
            <div class="buttons-wrap">
                <div><a rel="nofollow" href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add
                    to cart</a> <a href="wp-content/uploads/2016/11/105.jpg" title="test" rel="prettyPhoto[105]"
                                   class="dfd-prod-lightbox"><i class="dfd-socicon-eye-open"></i></a></div>
            </div>
        </div>
        <div class="woo-title-wrap"><h3 class="dfd-shop-loop-title"><a href="#" title="1999 Sterling L7501">1999
            Sterling L7501</a></h3> <h4 class="dfd-woocommerce-subtitle">Terex TC3063</h4> <span class="price"> <ins><span
                class="woocommerce-Price-amount amount">June 1st</span></ins> </span></div>
    </div>
</li>

HTML;

    }

}