var obj = {
    "data": {
        "101": {
            "model": "2001 Peterbilt 330",
            "label": "Terex BT4792",
            "capacity": "23.5 Ton",
            "date": "Mayo 31",
            "imgurl": "assets/img/products/101.jpg",
            "country": "united_states"
        },

        "102 ": {
            "model": "2002 Sterling M7500",
            "label": "Acterra S/A Manitowoc 1770C",
            "capacity": "17 Ton",
            "date": "Mayo 31",
            "imgurl": "assets/img/products/102.jpg",
            "country": "united_states"
        },

        "103": {
            "model": "2003 Sterling L7500",
            "label": "Manitowoc 2892S",
            "capacity": "28 Ton",
            "date": "Junio 1",
            "imgurl": "assets/img/products/103.jpg",
            "country": "united_states"
        },

        "104": {
            "model": "1999 Sterling L7501",
            "label": "Terex TC3063",
            "capacity": "15 Ton",
            "date": "Junio 1",
            "imgurl": "assets/img/products/104.jpg",
            "country": "united_states"
        },

        "105": {
            "model": "1999 Sterling L7501",
            "label": "Terex TC3063",
            "capacity": "15 Ton",
            "date": "Junio 1",
            "imgurl": "assets/img/products/105.jpg",
            "country": "united_states"
        },

        "106": {
            "model": "1994 International 2674",
            "label": "Simon-RO TC4792",
            "capacity": "23 Ton",
            "date": "Junio 1",
            "imgurl": "assets/img/products/106.jpg",
            "country": "united_states"
        },

        "107": {
            "model": "1995 Ford L9000",
            "label": " National 1195",
            "capacity": "27 Ton",
            "date": "Junio 1",
            "imgurl": "assets/img/products/107.jpg",
            "country": "united_states"
        },

        "108": {
            "model": "2001 Sterling M7500",
            "label": "Terex BT3063",
            "capacity": "22 Ton",
            "date": "Junio 6",
            "imgurl": "assets/img/products/108.jpg",
            "country": "united_states"
        },

        "109": {
            "model": "1998 Ford LT9513",
            "label": "National 1500",
            "capacity": "36 Ton",
            "date": "Junio 6",
            "imgurl": "assets/img/products/109.jpg",
            "country": "united_states"
        },

        "110": {
            "model": "2004 Sterling LT7500",
            "label": "Manitex 26101 ",
            "capacity": "22 Ton",
            "date": "Junio 6",
            "imgurl": "assets/img/products/110.jpg",
            "country": "united_states"
        },

        "111": {
            "model": "2000 Sterling LT7501",
            "label": "Terex BT3874 ",
            "capacity": "19 Ton",
            "date": "Junio 6",
            "imgurl": "assets/img/products/111.jpg",
            "country": "united_states"
        },

        "112": {
            "model": "1999 GMC 6500",
            "label": "Manitex 1461",
            "capacity": "14 Ton",
            "date": "Junio 6",
            "imgurl": "assets/img/products/112.jpg",
            "country": "united_states"
        },

        "113": {
            "model": "1986 Ford 8000",
            "label": "National 455",
            "capacity": "8 Ton",
            "date": "Junio 6",
            "imgurl": "assets/img/products/113.jpg",
            "country": "united_states"
        },

        "114": {
            "model": "2003 Sterling L8500",
            "label": "National 600D",
            "capacity": "18 Ton",
            "date": "Junio 9",
            "imgurl": "assets/img/products/114.jpg",
            "country": "united_states"
        },

        "115": {
            "model": "2013 International 7400",
            "label": "Workstar con National 8100D",
            "capacity": "20 Ton",
            "date": "Junio 9",
            "imgurl": "assets/img/products/115.jpg",
            "country": "mexico"
        },

        "116": {
            "model": "1991 Ford F800 (Nacional)",
            "label": "Stinger-RO",
            "capacity": "12.5 Ton",
            "imgurl": "assets/img/products/116.jpg",
            "country": "mexico"
        }
    }
};

function processList(data) {
    var html = "";

    jQuery.each(data, function(item, info) {
        html += '<li class="dfd-demo dfd-iso-item text-center product" data-category="' + (info.date ? 'USA' : 'MX') + '" style="position: absolute; left: 885px; top: 1769px;">';
        html += '    <div class="prod-wrap cover">';
        html += '        <span class="onsale">' + info.capacity + '</span>';
        html += '        <div class="woo-cover">';
        html += '            <div id="product_slider_594230f07a23b" class="woo-entry-thumb">';
        html += '                <div class="preview-thumb"><img src="' + info.imgurl + '" alt="" /></div>';
        html += '                <div class="woo-entry-thumb-carousel">';
        html += '                    <div>';
        html += '                        <a href="' + info.imgurl + '" title=""><img src="' + info.imgurl + '" alt="" /></a>';
        html += '                    </div>';
        html += '                </div>';
        html += '            </div>';
        html += '            <div class="hide">';
        html += '                <a href="' + info.imgurl + '"></a>';
        html += '                <a href="' + info.imgurl + '"></a>';
        html += '            </div>';
        // html += '            <div class="wishlist-button-wrap">';
        // html += '                <a href="#" rel="nofollow" data-product-id="20074" data-product-type="simple" class="add_to_wishlist">';
        // html += '                    <i class="dfd-socicon-heart-shape-silhouette"></i>';
        // html += '                    <span>Add to wishlist</span>';
        // html += '                </a>';
        // html += '            </div>';
        html += '            <div class="buttons-wrap">';
        html += '                <div>';
        html += '                    <a rel="nofollow" href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Buy Now</a>';
        html += '                    <a href="' + info.imgurl + '" rel="prettyPhoto[' + item + ']" " title="' + info.model + '" class="dfd-prod-lightbox"><i class="dfd-socicon-eye-open"></i></a>';
        html += '                </div>';
        html += '            </div>';
        html += '        </div>';
        html += '        <div class="woo-title-wrap">';
        html += '            <h3 class="dfd-shop-loop-title"><a href="#" title="' + info.model + '">' + info.model + '</a></h3>';
        html += '            <h4 class="dfd-woocommerce-subtitle">' + info.label + '</h4>';
        html += '            <span class="price"><ins><span class="woocommerce-Price-amount amount">' + (info.date ? info.date : ' ') + '</span></ins></span>';
        html += '        </div>';
        html += '    </div>';
        html += '</li>';
    });

    jQuery('#ProductList').html(html);
    var c = window.location.href;
        jQuery(".dfd-iso-item a[rel^='prettyPhoto']").prettyPhoto({
            hook: "data-rel",
            show_title: !0,
            opacity: 1,
            animation_speed: "fast",
            theme: "dfd-custom-theme",
            markup: '<div class="pp_pic_holder"> \t\t\t\t\t\t\t<div class="pp_top"> \t\t\t\t\t\t\t\t<div class="pp_left"></div> \t\t\t\t\t\t\t\t<div class="pp_middle"></div> \t\t\t\t\t\t\t\t<div class="pp_right"></div> \t\t\t\t\t\t\t</div> \t\t\t\t\t\t\t<div class="pp_content_container"> \t\t\t\t\t\t\t\t<div class="pp_left"> \t\t\t\t\t\t\t\t\t<div class="pp_right"> \t\t\t\t\t\t\t\t\t\t<div class="pp_content"> \t\t\t\t\t\t\t\t\t\t\t<div class="pp_loaderIcon"></div> \t\t\t\t\t\t\t\t\t\t\t<div class="pp_fade"> \t\t\t\t\t\t\t\t\t\t\t\t<div class="pp_hoverContainer"> \t\t\t\t\t\t\t\t\t\t\t\t\t<a class="pp_close" href="#"><i class="dfd-socicon-icon-close-round"></i></a> \t\t\t\t\t\t\t\t\t\t\t\t\t<a href="#" class="pp_expand" title="Expand the image"></a> \t\t\t\t\t\t\t\t\t\t\t\t\t<a class="pp_next" href="#"><i class="dfd-socicon-arrow-right-01"><span class="count"></span></i></a> \t\t\t\t\t\t\t\t\t\t\t\t\t<a class="pp_previous" href="#"><i class="dfd-socicon-arrow-left-01"><span class="count"></span></i></a> \t\t\t\t\t\t\t\t\t\t\t\t\t<div class="pp_social">{pp_social}</div> \t\t\t\t\t\t\t\t\t\t\t\t\t<div class="pp_nav"> \t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href="#" class="pp_arrow_previous">Previous</a> \t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class="currentTextHolder">0/0</p> \t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href="#" class="pp_arrow_next">Next</a> \t\t\t\t\t\t\t\t\t\t\t\t\t</div> \t\t\t\t\t\t\t\t\t\t\t\t</div> \t\t\t\t\t\t\t\t\t\t\t\t<div id="pp_full_res"></div> \t\t\t\t\t\t\t\t\t\t\t\t<div class="pp_details"> \t\t\t\t\t\t\t\t\t\t\t\t\t<div class="ppt">&nbsp;</div> \t\t\t\t\t\t\t\t\t\t\t\t\t<p class="pp_description"></p> \t\t\t\t\t\t\t\t\t\t\t\t</div> \t\t\t\t\t\t\t\t\t\t\t</div> \t\t\t\t\t\t\t\t\t\t</div> \t\t\t\t\t\t\t\t\t</div> \t\t\t\t\t\t\t\t</div> \t\t\t\t\t\t\t</div> \t\t\t\t\t\t\t<div class="pp_bottom"> \t\t\t\t\t\t\t\t<div class="pp_left"></div> \t\t\t\t\t\t\t\t<div class="pp_middle"></div> \t\t\t\t\t\t\t\t<div class="pp_right"></div> \t\t\t\t\t\t\t</div> \t\t\t\t\t\t</div> \t\t\t\t\t\t<div class="pp_overlay"></div>',
            gallery_markup: '<div class="pp_gallery mobile-hide"> \t\t\t\t\t\t\t\t\t<div> \t\t\t\t\t\t\t\t\t\t<ul> \t\t\t\t\t\t\t\t\t\t\t{gallery} \t\t\t\t\t\t\t\t\t\t</ul> \t\t\t\t\t\t\t\t\t</div> \t\t\t\t\t\t\t\t</div>',
            changepicturecallback: function() {},
            social_tools: ""
        });
}

// Some variables for later
var dictionary, set_lang;

// Object literal behaving as multi-dictionary
dictionary = {
    "english": {
        "_Phone": "Phone",
        "_Sign_in": "Sign in",
        "_Your_email": "Your email",
        "_Your_password": "Your password",
        "_Remember_Me": "Remember Me",
        "_Forgot_password": "Forgot password?",
        "_Login_site": "Login on site",
        "_Restore_password": "Restore password",
        "_Username_Email": "Username or Email",
        "_Please_enter": "Please enter your username or email address.",
        "_You_will_receive": "You will receive a link to create a new password via email.",
        "_Home": "Home",
        "_About_Us": "About Us",
        "_Services": "Services",
        "_Features": "Features",
        "_Contact": "Contact",
        "_Sales": "Sales",
        "_Trading_Localization_and_Logistics": "<i>Trading, Localization and Logistics</i><br><span>for</span> your business",
        "_Welcome_to_our_website": "Welcome <span>to</span> our website"

    },
    "spanish": {
        "_Phone": "Tel.",
        "_Sign_in": "Ingresar",
        "_Your_email": "Email",
        "_Your_password": "Contraseña",
        "_Remember_Me": "Recordar",
        "_Forgot_password": "Olvido contraseña?",
        "_Login_site": "Ingresar",
        "_Restore_password": "Restaurar contraseña",
        "_Username_Email": "Nombre de usuario o Email",
        "_Please_enter": "Por favor ingrese nombre de usuario o correo electronico",
        "_You_will_receive": "Recibira una enlace en su correo",
        "_Home": "Inicio",
        "_About_Us": "Nosotros",
        "_Services": "Servicios",
        "_Features": "Más",
        "_Contact": "Contacto",
        "_Sales": "Ventas",
        "_Trading_Localization_and_Logistics": "<i>Comercio, Localización y Logistica</i><br><span>para</span> tu negocio",
        "_Welcome_to_our_website": "Bienvenidos <span>a</span> nuestra web"

    }
};


jQuery(function() {
    processList(obj.data);

    // Function for swapping dictionaries
    set_lang = function(dictionary) {
        jQuery("[data-translate]").html(function() {
            var key = jQuery(this).data("translate");
            if (dictionary.hasOwnProperty(key)) {
                return dictionary[key];
            }
        });
    };

    // Swap languages when menu changes
    jQuery("#LangEsp").on("click", function() {
        if (dictionary.hasOwnProperty('spanish')) {
            set_lang(dictionary.spanish);
        }
        jQuery("#LangEsp").addClass('active');
        jQuery("#LangEn").removeClass('active')
        jQuery("#LangSelected").addClass('esp');
        jQuery("#LangSelected").removeClass('eng');
    });
    // Swap languages when menu changes
    jQuery("#LangEn").on("click", function() {
        if (dictionary.hasOwnProperty('spanish')) {
            set_lang(dictionary.english);
        }
        jQuery("#LangEn").addClass('active');
        jQuery("#LangEsp").removeClass('active')
        jQuery("#LangSelected").addClass('eng');
        jQuery("#LangSelected").removeClass('esp');
    });

    // Set initial language to English
    set_lang(dictionary.english);

});
