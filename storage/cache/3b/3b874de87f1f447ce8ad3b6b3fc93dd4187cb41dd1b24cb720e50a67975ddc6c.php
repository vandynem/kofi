<?php

/* so-buyshop/template/extension/module/so_deals/default_carousel.twig */
class __TwigTemplate_a4e66bd9c3b06c1d4120454254337484dfe931af97c108ca6007b97394e97499 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"";
        echo (isset($context["tag_id"]) ? $context["tag_id"] : null);
        echo "\" class=\"so-deal modcontent products-list grid clearfix ";
        echo (isset($context["class_respl"]) ? $context["class_respl"] : null);
        echo " ";
        if (((isset($context["button_page"]) ? $context["button_page"] : null) == "top")) {
            echo " ";
            echo "button-type1";
            echo " ";
        } else {
            echo " ";
            echo "button-type2";
            echo " ";
        }
        echo " style2\">
\t";
        // line 2
        if ((isset($context["display_feature"]) ? $context["display_feature"] : null)) {
            // line 3
            echo "\t\t<div class=\"product-feature\">
\t\t";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["product_features"]) ? $context["product_features"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 5
                echo "\t\t\t<div class=\"item\">
\t\t\t\t<div class=\"transition product-layout\">
\t\t\t\t\t<div class=\"product-item-container \">
\t\t\t\t\t\t<div class=\"product-item-container-in\">
\t\t\t\t\t\t\t<div class=\"left-block\">
\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                // line 12
                if ((isset($context["product_image"]) ? $context["product_image"] : null)) {
                    // line 13
                    echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\" target=\"";
                    echo (isset($context["item_link_target"]) ? $context["item_link_target"] : null);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 14
                    if (((isset($context["product_image_num"]) ? $context["product_image_num"] : null) == 2)) {
                        // line 15
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<img data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                        echo $this->getAttribute($context["product"], "thumb", array());
                        echo "\" class=\"img-thumb1 lazyload\" alt=\"";
                        echo $this->getAttribute($context["product"], "name", array());
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<img data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                        // line 16
                        echo $this->getAttribute($context["product"], "thumb2", array());
                        echo "\" class=\"img-thumb2 lazyload\" alt=\"";
                        echo $this->getAttribute($context["product"], "name", array());
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 18
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<img data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                        echo $this->getAttribute($context["product"], "thumb", array());
                        echo "\" alt=\"";
                        echo $this->getAttribute($context["product"], "name", array());
                        echo "\" class=\"lazyload\">
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 20
                    echo "\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                }
                // line 22
                echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t\t\t\t";
                // line 25
                if (($this->getAttribute($context["product"], "special", array()) && (isset($context["display_sale"]) ? $context["display_sale"] : null))) {
                    // line 26
                    echo "\t\t\t\t\t\t\t\t\t\t<span class=\"label-product label-sale\">";
                    echo $this->getAttribute($context["product"], "discount", array());
                    echo "</span>
\t\t\t\t\t\t\t\t\t";
                }
                // line 28
                echo "\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["product"], "productNew", array()) && (isset($context["display_new"]) ? $context["display_new"] : null))) {
                    // line 29
                    echo "\t\t\t\t\t\t\t\t\t\t<span class=\"label-product label-new\">";
                    echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_new"), "method");
                    echo "</span>
\t\t\t\t\t\t\t\t\t";
                }
                // line 31
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"right-block\">
\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t";
                // line 36
                if (((isset($context["display_title"]) ? $context["display_title"] : null) == 1)) {
                    // line 37
                    echo "\t\t\t\t\t\t\t\t\t\t<h4><a href=\"";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\" target=\"";
                    echo (isset($context["item_link_target"]) ? $context["item_link_target"] : null);
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" >";
                    echo $this->getAttribute($context["product"], "name_maxlength", array());
                    echo "</a></h4>
\t\t\t\t\t\t\t\t\t";
                }
                // line 39
                echo "
\t\t\t\t\t\t\t\t\t";
                // line 40
                if (($this->getAttribute($context["product"], "price", array()) && (isset($context["display_price"]) ? $context["display_price"] : null))) {
                    // line 41
                    echo "\t\t\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 42
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 43
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 45
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        // line 46
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span>\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 48
                    echo "
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t";
                }
                // line 52
                echo "
\t\t\t\t\t\t\t\t\t";
                // line 53
                if ((isset($context["display_rating"]) ? $context["display_rating"] : null)) {
                    // line 54
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 55
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                        // line 56
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        if (($this->getAttribute($context["product"], "rating", array()) < $context["j"])) {
                            // line 57
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 59
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 61
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 62
                    echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 64
                echo "
\t\t\t\t\t\t\t\t\t";
                // line 65
                if ((isset($context["display_description"]) ? $context["display_description"] : null)) {
                    // line 66
                    echo "
\t\t\t\t\t\t\t\t\t\t<p>";
                    // line 67
                    echo $this->getAttribute($context["product"], "description_maxlength", array());
                    echo "</p>
\t\t\t\t\t\t\t\t\t";
                }
                // line 69
                echo "
\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t<div class=\"item-time\">
\t\t\t\t\t\t\t\t\t\t<div class=\"item-timer product_time_";
                // line 73
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "\"></div>
\t\t\t\t\t\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\t\t\t\t\t\t//<![CDATA[
\t\t\t\t\t\t\t\t\t\t\tlistdeal";
                // line 76
                echo (isset($context["module"]) ? $context["module"] : null);
                echo ".push('product_time_";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "|";
                echo $this->getAttribute($context["product"], "specialPriceToDate", array());
                echo "')
\t\t\t\t\t\t\t\t\t\t\t//]]>
\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t";
                // line 82
                if ((((isset($context["display_addtocart"]) ? $context["display_addtocart"] : null) || (isset($context["display_wishlist"]) ? $context["display_wishlist"] : null)) || (isset($context["display_compare"]) ? $context["display_compare"] : null))) {
                    // line 83
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"button-group \">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 84
                    if ((isset($context["display_addtocart"]) ? $context["display_addtocart"] : null)) {
                        // line 85
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"addToCart btn-button\" type=\"button\"  title=\"";
                        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "button_cart"), "method");
                        echo "\" onclick=\"cart.add('";
                        echo $this->getAttribute($context["product"], "product_id", array());
                        echo "');\"><i class=\"fa fa-shopping-cart\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 87
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"button-group-in so-quickview\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 88
                    if ((isset($context["display_compare"]) ? $context["display_compare"] : null)) {
                        // line 89
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"compare btn-button\" type=\"button\" title=\"";
                        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "button_compare"), "method");
                        echo "\" onclick=\"compare.add('";
                        echo $this->getAttribute($context["product"], "product_id", array());
                        echo "');\"><i class=\"fa fa-retweet\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 91
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 92
                    if ((isset($context["display_wishlist"]) ? $context["display_wishlist"] : null)) {
                        // line 93
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"wishlist btn-button\" type=\"button\" title=\"";
                        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "button_wishlist"), "method");
                        echo "\" onclick=\"wishlist.add('";
                        echo $this->getAttribute($context["product"], "product_id", array());
                        echo "');\"><i class=\"fa fa-heart\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 95
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"hidden\" data-product='";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "' href=\"";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\" target=\"";
                    echo (isset($context["item_link_target"]) ? $context["item_link_target"] : null);
                    echo "\" ></a>\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 99
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            echo "\t\t</div>
\t";
        }
        // line 107
        echo "\t<div class=\"extraslider-inner\" data-effect=\"";
        echo (isset($context["effect"]) ? $context["effect"] : null);
        echo "\">
\t\t";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            if (!twig_in_filter((isset($context["product_feature_ids"]) ? $context["product_feature_ids"] : null), $this->getAttribute($context["product"], "product_id", array()))) {
                // line 109
                echo "\t\t\t";
                $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
                // line 110
                echo "\t\t\t";
                if (((((isset($context["i"]) ? $context["i"] : null) % (isset($context["nb_rows"]) ? $context["nb_rows"] : null)) == 1) || ((isset($context["nb_rows"]) ? $context["nb_rows"] : null) == 1))) {
                    // line 111
                    echo "
\t\t\t";
                    // line 112
                    if (((isset($context["i"]) ? $context["i"] : null) == ((isset($context["count_item"]) ? $context["count_item"] : null) - 1))) {
                        // line 113
                        echo "\t\t\t\t   <div class=\"item item-last\">\t\t\t\t   
\t\t\t\t";
                    } else {
                        // line 114
                        echo "\t\t\t\t   
\t\t\t\t   <div class=\"item\">
\t\t\t\t";
                    }
                    // line 116
                    echo "\t\t
\t\t\t
\t\t\t\t";
                }
                // line 119
                echo "
\t\t\t\t";
                // line 120
                if ((((isset($context["i"]) ? $context["i"] : null) % (isset($context["nb_rows"]) ? $context["nb_rows"] : null)) == 0)) {
                    // line 121
                    echo "\t\t\t\t   <div class=\"transition product-layout pro-";
                    echo (isset($context["nb_rows"]) ? $context["nb_rows"] : null);
                    echo "\">
\t\t\t\t";
                } else {
                    // line 123
                    echo "\t\t\t\t   <div class=\"transition product-layout\">
\t\t\t\t";
                }
                // line 124
                echo "\t\t\t\t

\t\t\t\t\t<div class=\"product-item-container \">
\t\t\t\t\t\t<div class=\"product-item-container-in\">
\t\t\t\t\t\t\t<div class=\"left-block\">
\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                // line 131
                if ((isset($context["product_image"]) ? $context["product_image"] : null)) {
                    // line 132
                    echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\" target=\"";
                    echo (isset($context["item_link_target"]) ? $context["item_link_target"] : null);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 133
                    if (((isset($context["product_image_num"]) ? $context["product_image_num"] : null) == 2)) {
                        // line 134
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<img data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                        echo $this->getAttribute($context["product"], "thumb", array());
                        echo "\" class=\"img-thumb1 lazyload\" alt=\"";
                        echo $this->getAttribute($context["product"], "name", array());
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<img data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                        // line 135
                        echo $this->getAttribute($context["product"], "thumb2", array());
                        echo "\" class=\"img-thumb2 lazyload\" alt=\"";
                        echo $this->getAttribute($context["product"], "name", array());
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 137
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<img data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                        echo $this->getAttribute($context["product"], "thumb", array());
                        echo "\" alt=\"";
                        echo $this->getAttribute($context["product"], "name", array());
                        echo "\" class=\"lazyload\">
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 139
                    echo "\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                }
                // line 141
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t\t\t\t\t";
                // line 143
                if (($this->getAttribute($context["product"], "special", array()) && (isset($context["display_sale"]) ? $context["display_sale"] : null))) {
                    // line 144
                    echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"label-product label-sale\">";
                    echo $this->getAttribute($context["product"], "discount", array());
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 146
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["product"], "productNew", array()) && (isset($context["display_new"]) ? $context["display_new"] : null))) {
                    // line 147
                    echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"label-product label-new\">";
                    echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_new"), "method");
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 149
                echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"right-block\">
\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t";
                // line 154
                if (((isset($context["display_title"]) ? $context["display_title"] : null) == 1)) {
                    // line 155
                    echo "\t\t\t\t\t\t\t\t\t\t<h4><a href=\"";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\" target=\"";
                    echo (isset($context["item_link_target"]) ? $context["item_link_target"] : null);
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\">";
                    echo $this->getAttribute($context["product"], "name_maxlength", array());
                    echo "</a></h4>
\t\t\t\t\t\t\t\t\t";
                }
                // line 157
                echo "
\t\t\t\t\t\t\t\t\t";
                // line 158
                if (($this->getAttribute($context["product"], "price", array()) && (isset($context["display_price"]) ? $context["display_price"] : null))) {
                    // line 159
                    echo "\t\t\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 160
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 161
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 163
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\">";
                        // line 164
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        // line 165
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 167
                    echo "
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t";
                }
                // line 171
                echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                // line 172
                if ((isset($context["display_rating"]) ? $context["display_rating"] : null)) {
                    // line 173
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 174
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                        // line 175
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        if (($this->getAttribute($context["product"], "rating", array()) < $context["j"])) {
                            // line 176
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 178
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 180
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 181
                    echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 183
                echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t";
                // line 186
                if ((isset($context["display_description"]) ? $context["display_description"] : null)) {
                    // line 187
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"description\">";
                    echo $this->getAttribute($context["product"], "description_maxlength", array());
                    echo "</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 189
                echo "
\t\t\t\t\t\t\t\t\t";
                // line 190
                if ((isset($context["display_all_countdown"]) ? $context["display_all_countdown"] : null)) {
                    // line 191
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"item-time\">
\t\t\t\t\t\t\t\t\t\t<div class=\"item-timer product_time_";
                    // line 192
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "\"></div>
\t\t\t\t\t\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\t\t\t\t\t\t//<![CDATA[
\t\t\t\t\t\t\t\t\t\t\tlistdeal";
                    // line 195
                    echo (isset($context["module"]) ? $context["module"] : null);
                    echo ".push('product_time_";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "|";
                    echo $this->getAttribute($context["product"], "specialPriceToDate", array());
                    echo "')
\t\t\t\t\t\t\t\t\t\t\t//]]>
\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 200
                echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t";
                // line 203
                if ((((isset($context["display_addtocart"]) ? $context["display_addtocart"] : null) || (isset($context["display_wishlist"]) ? $context["display_wishlist"] : null)) || (isset($context["display_compare"]) ? $context["display_compare"] : null))) {
                    // line 204
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 205
                    if ((isset($context["display_addtocart"]) ? $context["display_addtocart"] : null)) {
                        // line 206
                        echo "\t\t\t\t\t\t\t\t\t\t\t<button class=\"addToCart btn-button\" type=\"button\" title=\"";
                        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "button_cart"), "method");
                        echo "\" onclick=\"cart.add('";
                        echo $this->getAttribute($context["product"], "product_id", array());
                        echo "');\"><i class=\"fa fa-shopping-cart\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 208
                    echo "
\t\t\t\t\t\t\t\t\t\t\t<div class=\"button-group-in so-quickview\">

\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 211
                    if ((isset($context["display_compare"]) ? $context["display_compare"] : null)) {
                        // line 212
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"compare btn-button\" type=\"button\" title=\"";
                        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "button_compare"), "method");
                        echo "\" onclick=\"compare.add('";
                        echo $this->getAttribute($context["product"], "product_id", array());
                        echo "');\"><i class=\"fa fa-retweet\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 214
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 215
                    if ((isset($context["display_wishlist"]) ? $context["display_wishlist"] : null)) {
                        // line 216
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"wishlist btn-button\" type=\"button\" title=\"";
                        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "button_wishlist"), "method");
                        echo "\" onclick=\"wishlist.add('";
                        echo $this->getAttribute($context["product"], "product_id", array());
                        echo "');\"><i class=\"fa fa-heart\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 218
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"hidden\" data-product='";
                    // line 219
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "' href=\"";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\" target=\"";
                    echo (isset($context["item_link_target"]) ? $context["item_link_target"] : null);
                    echo "\" ></a>\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 223
                echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t";
                // line 229
                if (((((isset($context["i"]) ? $context["i"] : null) % (isset($context["nb_rows"]) ? $context["nb_rows"] : null)) == 0) || ((isset($context["i"]) ? $context["i"] : null) == (isset($context["count_item"]) ? $context["count_item"] : null)))) {
                    // line 230
                    echo "\t\t\t</div>
\t\t\t";
                }
                // line 232
                echo "\t\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 233
        echo "\t</div>
</div>
<script type=\"text/javascript\">
//<![CDATA[
jQuery(document).ready(function (\$) {  ;
(function (element) {
\tvar \$element = \$(element),
\t\t\t\$extraslider = \$('.extraslider-inner', \$element),
\t\t\t\$featureslider = \$('.product-feature', \$element),
\t\t\t_delay = ";
        // line 242
        echo (isset($context["delay"]) ? $context["delay"] : null);
        echo ",
\t\t\t_duration = ";
        // line 243
        echo (isset($context["duration"]) ? $context["duration"] : null);
        echo ",
\t\t\t_effect = '";
        // line 244
        echo (isset($context["effect"]) ? $context["effect"] : null);
        echo "';

\t\$extraslider.on('initialized.owl.carousel2', function () {
\t\tvar \$item_active = \$('.extraslider-inner .owl2-item.active', \$element);
\t\tif (\$item_active.length > 1 && _effect != 'none') {
\t\t\t_getAnimate(\$item_active);
\t\t}
\t\telse {
\t\t\tvar \$item = \$('.extraslider-inner .owl2-item', \$element);
\t\t\t\$item.css({'opacity': 1, 'filter': 'alpha(opacity = 100)'});
\t\t}
\t\t";
        // line 255
        if (((isset($context["button_page"]) ? $context["button_page"] : null) == "top")) {
            // line 256
            echo "\t\t\t\$('.extraslider-inner .owl2-dots', \$element).insertAfter(\$('.extraslider-inner .owl2-prev', \$element));
\t\t\t\$('.extraslider-inner .owl2-controls', \$element).insertBefore(\$extraslider).addClass('extraslider');
\t\t";
        } else {
            // line 259
            echo "\t\t\t\$('.extraslider-inner .owl2-nav', \$element).insertBefore(\$extraslider);
\t\t\t\$('.extraslider-inner .owl2-controls', \$element).insertAfter(\$extraslider).addClass('extraslider');
\t\t";
        }
        // line 262
        echo "\t});

\t\$extraslider.owlCarousel2({
\t\trtl: ";
        // line 265
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo ",
\t\tmargin: ";
        // line 266
        echo (isset($context["margin"]) ? $context["margin"] : null);
        echo ",
\t\tslideBy: ";
        // line 267
        echo (isset($context["slideBy"]) ? $context["slideBy"] : null);
        echo ",
\t\tautoplay: ";
        // line 268
        echo (isset($context["autoplay"]) ? $context["autoplay"] : null);
        echo ",
\t\tautoplayHoverPause: ";
        // line 269
        echo (isset($context["autoplayHoverPause"]) ? $context["autoplayHoverPause"] : null);
        echo ",
\t\tautoplayTimeout: ";
        // line 270
        echo (isset($context["autoplayTimeout"]) ? $context["autoplayTimeout"] : null);
        echo ",
\t\tautoplaySpeed: ";
        // line 271
        echo (isset($context["autoplaySpeed"]) ? $context["autoplaySpeed"] : null);
        echo ",
\t\tstartPosition: ";
        // line 272
        echo (isset($context["startPosition"]) ? $context["startPosition"] : null);
        echo ",
\t\tmouseDrag: ";
        // line 273
        echo (isset($context["mouseDrag"]) ? $context["mouseDrag"] : null);
        echo ",
\t\ttouchDrag: ";
        // line 274
        echo (isset($context["touchDrag"]) ? $context["touchDrag"] : null);
        echo ",
\t\tautoWidth: false,
\t\tresponsive: {
\t\t\t0: \t{ items: ";
        // line 277
        echo (isset($context["nb_column4"]) ? $context["nb_column4"] : null);
        echo " } ,
\t\t\t480: { items: ";
        // line 278
        echo (isset($context["nb_column3"]) ? $context["nb_column3"] : null);
        echo " },
\t\t\t768: { items: ";
        // line 279
        echo (isset($context["nb_column2"]) ? $context["nb_column2"] : null);
        echo " },
\t\t\t992: { items: ";
        // line 280
        echo (isset($context["nb_column1"]) ? $context["nb_column1"] : null);
        echo " },
\t\t\t1200: {items: ";
        // line 281
        echo (isset($context["nb_column0"]) ? $context["nb_column0"] : null);
        echo " }
\t\t},
\t\tdotClass: 'owl2-dot',
\t\tdotsClass: 'owl2-dots',
\t\tdots: ";
        // line 285
        echo (isset($context["dots"]) ? $context["dots"] : null);
        echo ",
\t\tdotsSpeed: ";
        // line 286
        echo (isset($context["dotsSpeed"]) ? $context["dotsSpeed"] : null);
        echo ",
\t\tnav: ";
        // line 287
        echo (isset($context["navs"]) ? $context["navs"] : null);
        echo ",
\t\tloop: ";
        // line 288
        echo (isset($context["loop"]) ? $context["loop"] : null);
        echo ",
\t\tnavSpeed: ";
        // line 289
        echo (isset($context["navSpeed"]) ? $context["navSpeed"] : null);
        echo ",
\t\tnavText: ['&#171;', '&#187;'],
\t\tnavClass: ['owl2-prev', 'owl2-next']
\t});

\t\$extraslider.on('translated.owl.carousel2', function (e) {
\t\tvar \$item_active = \$('.extraslider-inner .owl2-item.active', \$element);
\t\tvar \$item = \$('.extraslider-inner .owl2-item', \$element);

\t\t_UngetAnimate(\$item);

\t\tif (\$item_active.length > 1 && _effect != 'none') {
\t\t\t_getAnimate(\$item_active);
\t\t} else {
\t\t\t\$item.css({'opacity': 1, 'filter': 'alpha(opacity = 100)'});
\t\t}
\t});
\t/*feature product*/
\t\$featureslider.on('initialized.owl.carousel2', function () {
\t\tvar \$item_active = \$('.product-feature .owl2-item.active', \$element);
\t\tif (\$item_active.length > 1 && _effect != 'none') {
\t\t\t_getAnimate(\$item_active);
\t\t}
\t\telse {
\t\t\tvar \$item = \$('.owl2-item', \$element);
\t\t\t\$item.css({'opacity': 1, 'filter': 'alpha(opacity = 100)'});
\t\t}
\t\t";
        // line 316
        if (((isset($context["button_page"]) ? $context["button_page"] : null) == "top")) {
            // line 317
            echo "\t\t\t\$('.product-feature .owl2-dots', \$element).insertAfter(\$('.product-feature .owl2-prev', \$element));
\t\t\t\$('.product-feature .owl2-controls', \$element).insertBefore(\$featureslider).addClass('featureslider');\t
\t\t";
        } else {
            // line 320
            echo "\t\t\t\$('.product-feature .owl2-nav', \$element).insertBefore(\$featureslider);
\t\t\t\$('.product-feature .owl2-controls', \$element).insertAfter(\$featureslider).addClass('featureslider');;
\t\t";
        }
        // line 323
        echo "\t});

\t\$featureslider.owlCarousel2({
\t\trtl: ";
        // line 326
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo ",
\t\tmargin: ";
        // line 327
        echo (isset($context["margin"]) ? $context["margin"] : null);
        echo ",
\t\tslideBy: ";
        // line 328
        echo (isset($context["slideBy"]) ? $context["slideBy"] : null);
        echo ",
\t\tautoplay: ";
        // line 329
        echo (isset($context["autoplay"]) ? $context["autoplay"] : null);
        echo ",
\t\tautoplayHoverPause: ";
        // line 330
        echo (isset($context["autoplayHoverPause"]) ? $context["autoplayHoverPause"] : null);
        echo ",
\t\tautoplayTimeout: ";
        // line 331
        echo (isset($context["autoplayTimeout"]) ? $context["autoplayTimeout"] : null);
        echo ",
\t\tautoplaySpeed: ";
        // line 332
        echo (isset($context["autoplaySpeed"]) ? $context["autoplaySpeed"] : null);
        echo ",
\t\tstartPosition: ";
        // line 333
        echo (isset($context["startPosition"]) ? $context["startPosition"] : null);
        echo ",
\t\tmouseDrag: ";
        // line 334
        echo (isset($context["mouseDrag"]) ? $context["mouseDrag"] : null);
        echo ",
\t\ttouchDrag: ";
        // line 335
        echo (isset($context["touchDrag"]) ? $context["touchDrag"] : null);
        echo ",
\t\tautoWidth: false,
\t\tresponsive: {
\t\t\t0: \t{ items: 1 } ,
\t\t\t480: { items: 1 },
\t\t\t768: { items: 1 },
\t\t\t992: { items: 1 },
\t\t\t1200: {items: 1}
\t\t},
\t\tdotClass: 'owl2-dot',
\t\t\tdotsClass: 'owl2-dots',
\t\tdots: ";
        // line 346
        echo (isset($context["dots"]) ? $context["dots"] : null);
        echo ",
\t\tdotsSpeed: ";
        // line 347
        echo (isset($context["dotsSpeed"]) ? $context["dotsSpeed"] : null);
        echo ",
\t\tnav: ";
        // line 348
        echo (isset($context["navs"]) ? $context["navs"] : null);
        echo ",
\t\tloop: ";
        // line 349
        echo (isset($context["loop"]) ? $context["loop"] : null);
        echo ",
\t\tnavSpeed: ";
        // line 350
        echo (isset($context["navSpeed"]) ? $context["navSpeed"] : null);
        echo ",
\t\tnavText: ['&#171;', '&#187;'],
\t\tnavClass: ['owl2-prev', 'owl2-next']
\t});

\t\$featureslider.on('translated.owl.carousel2', function (e) {
\t\tvar \$item_active = \$('.product-feature .owl2-item.active', \$element);
\t\tvar \$item = \$('.product-feature .owl2-item', \$element);

\t\t_UngetAnimate(\$item);

\t\tif (\$item_active.length > 1 && _effect != 'none') {
\t\t\t_getAnimate(\$item_active);
\t\t} else {
\t\t\t\$item.css({'opacity': 1, 'filter': 'alpha(opacity = 100)'});
\t\t}
\t});
\t
\tfunction _getAnimate(\$el) {
\t\tif (_effect == 'none') return;
\t\t\$extraslider.removeClass('extra-animate');
\t\t\$el.each(function (i) {
\t\t\tvar \$_el = \$(this);
\t\t\t\$(this).css({
\t\t\t\t'-webkit-animation': _effect + ' ' + _duration + \"ms ease both\",
\t\t\t\t'-moz-animation': _effect + ' ' + _duration + \"ms ease both\",
\t\t\t\t'-o-animation': _effect + ' ' + _duration + \"ms ease both\",
\t\t\t\t'animation': _effect + ' ' + _duration + \"ms ease both\",
\t\t\t\t'-webkit-animation-delay': +i * _delay + 'ms',
\t\t\t\t'-moz-animation-delay': +i * _delay + 'ms',
\t\t\t\t'-o-animation-delay': +i * _delay + 'ms',
\t\t\t\t'animation-delay': +i * _delay + 'ms',
\t\t\t\t'opacity': 1
\t\t\t}).animate({
\t\t\t\topacity: 1
\t\t\t});

\t\t\tif (i == \$el.size() - 1) {
\t\t\t\t\$extraslider.addClass(\"extra-animate\");
\t\t\t}
\t\t});
\t}

\tfunction _UngetAnimate(\$el) {
\t\t\$el.each(function (i) {
\t\t\t\$(this).css({
\t\t\t\t'animation': '',
\t\t\t\t'-webkit-animation': '',
\t\t\t\t'-moz-animation': '',
\t\t\t\t'-o-animation': '',
\t\t\t\t'opacity': 1
\t\t\t});
\t\t});
\t}
\tdata = new Date(2013, 10, 26, 12, 00, 00);
\tfunction CountDown(date, id) {
\t\tdateNow = new Date();
\t\tamount = date.getTime() - dateNow.getTime();
\t\tif (amount < 0 && \$('#' + id).length) {
\t\t\t\$('.' + id).html(\"Now!\");
\t\t} else {
\t\t\tdays = 0;
\t\t\thours = 0;
\t\t\tmins = 0;
\t\t\tsecs = 0;
\t\t\tout = \"\";
\t\t\tamount = Math.floor(amount / 1000);
\t\t\tdays = Math.floor(amount / 86400);
\t\t\tamount = amount % 86400;
\t\t\thours = Math.floor(amount / 3600);
\t\t\tamount = amount % 3600;
\t\t\tmins = Math.floor(amount / 60);
\t\t\tamount = amount % 60;
\t\t\tsecs = Math.floor(amount);

\t\t\tout += \"<div class='time-item time-day'>\" + \"<div class='num-time'>\" + days + \"</div>\" + \"<div class='name-time'> \" + ((days == 1) ? \"";
        // line 425
        echo (isset($context["text_Day"]) ? $context["text_Day"] : null);
        echo "\" : \"";
        echo (isset($context["text_Days"]) ? $context["text_Days"] : null);
        echo "\") + \"</div>\" + \"</div> \";
\t\t\tout += \"<div class='time-item time-hour'>\" + \"<div class='num-time'>\" + hours + \"</div>  \" + \" <div class='name-time'> \" + ((hours == 1) ? \"";
        // line 426
        echo (isset($context["text_Hour"]) ? $context["text_Hour"] : null);
        echo "\" : \"";
        echo (isset($context["text_Hours"]) ? $context["text_Hours"] : null);
        echo "\") + \"</div>\" + \"</div> \";
\t\t\tout += \"<div class='time-item time-min' >\" + \"<div class='num-time'>\" + mins + \"</div>\" + \" <div class='name-time'> \" + ((mins == 1) ? \"";
        // line 427
        echo (isset($context["text_Min"]) ? $context["text_Min"] : null);
        echo "\" : \"";
        echo (isset($context["text_Mins"]) ? $context["text_Mins"] : null);
        echo "\") + \"</div>\" + \"</div> \";
\t\t\tout += \"<div class='time-item time-sec' >\" + \"<div class='num-time'>\" + secs + \"</div>\" + \" <div class='name-time'>\" + ((secs == 1) ? \"";
        // line 428
        echo (isset($context["text_Sec"]) ? $context["text_Sec"] : null);
        echo "\" : \"";
        echo (isset($context["text_Secs"]) ? $context["text_Secs"] : null);
        echo "\") + \"</div>\" + \"</div> \";
\t\t\tout = out.substr(0, out.length - 2);
\t\t\t

\t\t\t\$('.' + id).html(out);

\t\t\tsetTimeout(function () {
\t\t\t\tCountDown(date, id);
\t\t\t}, 1000);
\t\t}
\t}
\t
\tif (listdeal";
        // line 440
        echo (isset($context["module"]) ? $context["module"] : null);
        echo ".length > 0) {
\t\tfor (var i = 0; i < listdeal";
        // line 441
        echo (isset($context["module"]) ? $context["module"] : null);
        echo ".length; i++) {
\t\t\tvar arr = listdeal";
        // line 442
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "[i].split(\"|\");
\t\t\tif (arr[1].length) {
\t\t\t\tvar data = new Date(arr[1]);
\t\t\t\tCountDown(data, arr[0]);
\t\t\t}
\t\t}
\t}
\t})('#";
        // line 449
        echo (isset($context["tag_id"]) ? $context["tag_id"] : null);
        echo "');
});
//]]>
</script>";
    }

    public function getTemplateName()
    {
        return "so-buyshop/template/extension/module/so_deals/default_carousel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1007 => 449,  997 => 442,  993 => 441,  989 => 440,  972 => 428,  966 => 427,  960 => 426,  954 => 425,  876 => 350,  872 => 349,  868 => 348,  864 => 347,  860 => 346,  846 => 335,  842 => 334,  838 => 333,  834 => 332,  830 => 331,  826 => 330,  822 => 329,  818 => 328,  814 => 327,  810 => 326,  805 => 323,  800 => 320,  795 => 317,  793 => 316,  763 => 289,  759 => 288,  755 => 287,  751 => 286,  747 => 285,  740 => 281,  736 => 280,  732 => 279,  728 => 278,  724 => 277,  718 => 274,  714 => 273,  710 => 272,  706 => 271,  702 => 270,  698 => 269,  694 => 268,  690 => 267,  686 => 266,  682 => 265,  677 => 262,  672 => 259,  667 => 256,  665 => 255,  651 => 244,  647 => 243,  643 => 242,  632 => 233,  625 => 232,  621 => 230,  619 => 229,  611 => 223,  600 => 219,  597 => 218,  589 => 216,  587 => 215,  584 => 214,  576 => 212,  574 => 211,  569 => 208,  561 => 206,  559 => 205,  556 => 204,  554 => 203,  549 => 200,  537 => 195,  531 => 192,  528 => 191,  526 => 190,  523 => 189,  517 => 187,  515 => 186,  510 => 183,  506 => 181,  500 => 180,  496 => 178,  492 => 176,  489 => 175,  485 => 174,  482 => 173,  480 => 172,  477 => 171,  471 => 167,  466 => 165,  462 => 164,  459 => 163,  453 => 161,  451 => 160,  448 => 159,  446 => 158,  443 => 157,  431 => 155,  429 => 154,  422 => 149,  416 => 147,  413 => 146,  407 => 144,  405 => 143,  401 => 141,  397 => 139,  389 => 137,  382 => 135,  375 => 134,  373 => 133,  366 => 132,  364 => 131,  355 => 124,  351 => 123,  345 => 121,  343 => 120,  340 => 119,  335 => 116,  330 => 114,  326 => 113,  324 => 112,  321 => 111,  318 => 110,  315 => 109,  310 => 108,  305 => 107,  301 => 105,  290 => 99,  278 => 95,  270 => 93,  268 => 92,  265 => 91,  257 => 89,  255 => 88,  252 => 87,  244 => 85,  242 => 84,  239 => 83,  237 => 82,  224 => 76,  218 => 73,  212 => 69,  207 => 67,  204 => 66,  202 => 65,  199 => 64,  195 => 62,  189 => 61,  185 => 59,  181 => 57,  178 => 56,  174 => 55,  171 => 54,  169 => 53,  166 => 52,  160 => 48,  155 => 46,  150 => 45,  144 => 43,  142 => 42,  139 => 41,  137 => 40,  134 => 39,  122 => 37,  120 => 36,  113 => 31,  107 => 29,  104 => 28,  98 => 26,  96 => 25,  91 => 22,  87 => 20,  79 => 18,  72 => 16,  65 => 15,  63 => 14,  56 => 13,  54 => 12,  45 => 5,  41 => 4,  38 => 3,  36 => 2,  19 => 1,);
    }
}
/* <div id="{{ tag_id }}" class="so-deal modcontent products-list grid clearfix {{ class_respl }} {% if button_page == 'top' %} {{ 'button-type1' }} {% else %} {{ 'button-type2' }} {% endif %} style2">*/
/* 	{% if display_feature %}*/
/* 		<div class="product-feature">*/
/* 		{% for product in product_features %}*/
/* 			<div class="item">*/
/* 				<div class="transition product-layout">*/
/* 					<div class="product-item-container ">*/
/* 						<div class="product-item-container-in">*/
/* 							<div class="left-block">*/
/* 								<div class="image">*/
/* 									*/
/* 									{% if product_image %}*/
/* 										<a href="{{ product.href }}" target="{{ item_link_target }}">*/
/* 											{% if product_image_num ==2 %}*/
/* 												<img data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ product.thumb }}" class="img-thumb1 lazyload" alt="{{ product.name }}">*/
/* 												<img data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ product.thumb2 }}" class="img-thumb2 lazyload" alt="{{ product.name }}">*/
/* 											{% else %}*/
/* 												<img data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ product.thumb }}" alt="{{ product.name }}" class="lazyload">*/
/* 											{% endif %}*/
/* 										</a>*/
/* 									{% endif %}*/
/* */
/* 								</div>*/
/* 								<div class="box-label">*/
/* 									{% if product.special and display_sale %}*/
/* 										<span class="label-product label-sale">{{ product.discount }}</span>*/
/* 									{% endif %}*/
/* 									{% if product.productNew and display_new %}*/
/* 										<span class="label-product label-new">{{ objlang.get('text_new') }}</span>*/
/* 									{% endif %}*/
/* 								</div>*/
/* 								*/
/* 							</div>*/
/* 							<div class="right-block">*/
/* 								<div class="caption">*/
/* 									{% if display_title == 1 %}*/
/* 										<h4><a href="{{ product.href }}" target="{{ item_link_target }}" title="{{ product.name }}" >{{ product.name_maxlength }}</a></h4>*/
/* 									{% endif %}*/
/* */
/* 									{% if product.price and display_price %}*/
/* 										<p class="price">*/
/* 											{% if not product.special %}*/
/* 												{{ product.price }}*/
/* 											{% else %}*/
/* 												<span class="price-old">{{ product.price }}</span>*/
/* 												<span class="price-new">{{ product.special }}</span>												*/
/* 											{% endif %}*/
/* */
/* 											*/
/* 										</p>*/
/* 									{% endif %}*/
/* */
/* 									{% if display_rating %}*/
/* 										<div class="rating">*/
/* 											{% for j in 1..5 %}*/
/* 												{% if product.rating < j %}*/
/* 													<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 												{% else %}*/
/* 													<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 												{% endif %}*/
/* 											{% endfor %}*/
/* 										</div>*/
/* 									{% endif %}*/
/* */
/* 									{% if display_description %}*/
/* */
/* 										<p>{{ product.description_maxlength|raw }}</p>*/
/* 									{% endif %}*/
/* */
/* 									*/
/* */
/* 									<div class="item-time">*/
/* 										<div class="item-timer product_time_{{ product.product_id }}"></div>*/
/* 										<script type="text/javascript">*/
/* 											//<![CDATA[*/
/* 											listdeal{{ module }}.push('product_time_{{ product.product_id }}|{{ product.specialPriceToDate }}')*/
/* 											//]]>*/
/* 										</script>*/
/* 									</div>*/
/* 								</div>*/
/* */
/* 								{% if display_addtocart or display_wishlist or display_compare %}*/
/* 										<div class="button-group ">*/
/* 											{% if display_addtocart %}*/
/* 												<button class="addToCart btn-button" type="button"  title="{{ objlang.get('button_cart') }}" onclick="cart.add('{{ product.product_id }}');"><i class="fa fa-shopping-cart"></i></button>*/
/* 											{% endif %}*/
/* 											<div class="button-group-in so-quickview">*/
/* 												{% if display_compare %}*/
/* 													<button class="compare btn-button" type="button" title="{{ objlang.get('button_compare') }}" onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-retweet"></i></button>*/
/* 												{% endif %}*/
/* 												*/
/* 												{% if display_wishlist %}*/
/* 													<button class="wishlist btn-button" type="button" title="{{ objlang.get('button_wishlist') }}" onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart"></i></button>*/
/* 												{% endif %}*/
/* 												<a class="hidden" data-product='{{ product.product_id }}' href="{{ product.href }}" target="{{ item_link_target }}" ></a>	*/
/* 											</div>*/
/* 										</div>*/
/* 									{% endif %}*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		{% endfor %}*/
/* 		</div>*/
/* 	{% endif %}*/
/* 	<div class="extraslider-inner" data-effect="{{ effect }}">*/
/* 		{% for product in list if product_feature_ids not in product.product_id %}*/
/* 			{% set i = i + 1 %}*/
/* 			{% if i % nb_rows == 1 or nb_rows == 1 %}*/
/* */
/* 			{% if i == count_item-1 %}*/
/* 				   <div class="item item-last">				   */
/* 				{% else %}				   */
/* 				   <div class="item">*/
/* 				{% endif %}		*/
/* 			*/
/* 				{% endif %}*/
/* */
/* 				{% if i % nb_rows == 0  %}*/
/* 				   <div class="transition product-layout pro-{{ nb_rows }}">*/
/* 				{% else %}*/
/* 				   <div class="transition product-layout">*/
/* 				{% endif %}				*/
/* */
/* 					<div class="product-item-container ">*/
/* 						<div class="product-item-container-in">*/
/* 							<div class="left-block">*/
/* 								<div class="image">*/
/* 									*/
/* 									{% if product_image %}*/
/* 										<a href="{{ product.href }}" target="{{ item_link_target }}">*/
/* 											{% if product_image_num ==2 %}*/
/* 												<img data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ product.thumb }}" class="img-thumb1 lazyload" alt="{{ product.name }}">*/
/* 												<img data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ product.thumb2 }}" class="img-thumb2 lazyload" alt="{{ product.name }}">*/
/* 											{% else %}*/
/* 												<img data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ product.thumb }}" alt="{{ product.name }}" class="lazyload">*/
/* 											{% endif %}*/
/* 										</a>*/
/* 									{% endif %}*/
/* 								</div>*/
/* 								<div class="box-label">*/
/* 										{% if product.special and display_sale %}*/
/* 											<span class="label-product label-sale">{{ product.discount }}</span>*/
/* 										{% endif %}*/
/* 										{% if product.productNew and display_new %}*/
/* 											<span class="label-product label-new">{{ objlang.get('text_new') }}</span>*/
/* 										{% endif %}*/
/* 									</div>*/
/* 								*/
/* 							</div>*/
/* 							<div class="right-block">*/
/* 								<div class="caption">*/
/* 									{% if display_title == 1 %}*/
/* 										<h4><a href="{{ product.href }}" target="{{ item_link_target }}" title="{{ product.name }}">{{ product.name_maxlength }}</a></h4>*/
/* 									{% endif %}*/
/* */
/* 									{% if product.price and display_price %}*/
/* 										<p class="price">*/
/* 											{% if not product.special %}*/
/* 												{{ product.price }}*/
/* 											{% else %}*/
/* 												*/
/* 												<span class="price-old">{{ product.price }}</span>*/
/* 												<span class="price-new">{{ product.special }}</span>*/
/* 											{% endif %}*/
/* */
/* 											*/
/* 										</p>*/
/* 									{% endif %}*/
/* 									*/
/* 									{% if display_rating %}*/
/* 										<div class="rating">*/
/* 											{% for j in 1..5 %}*/
/* 												{% if product.rating < j %}*/
/* 													<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 												{% else %}*/
/* 													<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 												{% endif %}*/
/* 											{% endfor %}*/
/* 										</div>*/
/* 									{% endif %}*/
/* 									*/
/* 									*/
/* */
/* 									{% if display_description %}*/
/* 										<div class="description">{{ product.description_maxlength|raw }}</div>*/
/* 									{% endif %}*/
/* */
/* 									{% if display_all_countdown %}*/
/* 									<div class="item-time">*/
/* 										<div class="item-timer product_time_{{ product.product_id }}"></div>*/
/* 										<script type="text/javascript">*/
/* 											//<![CDATA[*/
/* 											listdeal{{ module }}.push('product_time_{{ product.product_id }}|{{ product.specialPriceToDate }}')*/
/* 											//]]>*/
/* 										</script>*/
/* 									</div>*/
/* 									{% endif %}*/
/* 									*/
/* 								</div>*/
/* */
/* 								{% if display_addtocart or display_wishlist or display_compare %}*/
/* 										<div class="button-group">*/
/* 											{% if display_addtocart %}*/
/* 											<button class="addToCart btn-button" type="button" title="{{ objlang.get('button_cart') }}" onclick="cart.add('{{ product.product_id }}');"><i class="fa fa-shopping-cart"></i></button>*/
/* 											{% endif %}*/
/* */
/* 											<div class="button-group-in so-quickview">*/
/* */
/* 												{% if display_compare %}*/
/* 													<button class="compare btn-button" type="button" title="{{ objlang.get('button_compare') }}" onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-retweet"></i></button>*/
/* 												{% endif %}*/
/* */
/* 												{% if display_wishlist %}*/
/* 													<button class="wishlist btn-button" type="button" title="{{ objlang.get('button_wishlist') }}" onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart"></i></button>*/
/* 												{% endif %}*/
/* */
/* 												<a class="hidden" data-product='{{ product.product_id }}' href="{{ product.href }}" target="{{ item_link_target }}" ></a>	*/
/* 											</div>*/
/* 										</div>*/
/* 								{% endif %}*/
/* */
/* 							</div>*/
/* 						</div>*/
/* 					</div>	*/
/* 					*/
/* 				</div>*/
/* 				{% if i % nb_rows == 0 or i == count_item %}*/
/* 			</div>*/
/* 			{% endif %}*/
/* 		{% endfor %}*/
/* 	</div>*/
/* </div>*/
/* <script type="text/javascript">*/
/* //<![CDATA[*/
/* jQuery(document).ready(function ($) {  ;*/
/* (function (element) {*/
/* 	var $element = $(element),*/
/* 			$extraslider = $('.extraslider-inner', $element),*/
/* 			$featureslider = $('.product-feature', $element),*/
/* 			_delay = {{ delay }},*/
/* 			_duration = {{ duration }},*/
/* 			_effect = '{{ effect }}';*/
/* */
/* 	$extraslider.on('initialized.owl.carousel2', function () {*/
/* 		var $item_active = $('.extraslider-inner .owl2-item.active', $element);*/
/* 		if ($item_active.length > 1 && _effect != 'none') {*/
/* 			_getAnimate($item_active);*/
/* 		}*/
/* 		else {*/
/* 			var $item = $('.extraslider-inner .owl2-item', $element);*/
/* 			$item.css({'opacity': 1, 'filter': 'alpha(opacity = 100)'});*/
/* 		}*/
/* 		{% if button_page == "top" %}*/
/* 			$('.extraslider-inner .owl2-dots', $element).insertAfter($('.extraslider-inner .owl2-prev', $element));*/
/* 			$('.extraslider-inner .owl2-controls', $element).insertBefore($extraslider).addClass('extraslider');*/
/* 		{% else %}*/
/* 			$('.extraslider-inner .owl2-nav', $element).insertBefore($extraslider);*/
/* 			$('.extraslider-inner .owl2-controls', $element).insertAfter($extraslider).addClass('extraslider');*/
/* 		{% endif %}*/
/* 	});*/
/* */
/* 	$extraslider.owlCarousel2({*/
/* 		rtl: {{ direction }},*/
/* 		margin: {{ margin }},*/
/* 		slideBy: {{ slideBy }},*/
/* 		autoplay: {{ autoplay }},*/
/* 		autoplayHoverPause: {{ autoplayHoverPause }},*/
/* 		autoplayTimeout: {{ autoplayTimeout }},*/
/* 		autoplaySpeed: {{ autoplaySpeed }},*/
/* 		startPosition: {{ startPosition }},*/
/* 		mouseDrag: {{ mouseDrag }},*/
/* 		touchDrag: {{ touchDrag }},*/
/* 		autoWidth: false,*/
/* 		responsive: {*/
/* 			0: 	{ items: {{ nb_column4 }} } ,*/
/* 			480: { items: {{ nb_column3 }} },*/
/* 			768: { items: {{ nb_column2 }} },*/
/* 			992: { items: {{ nb_column1 }} },*/
/* 			1200: {items: {{ nb_column0 }} }*/
/* 		},*/
/* 		dotClass: 'owl2-dot',*/
/* 		dotsClass: 'owl2-dots',*/
/* 		dots: {{ dots }},*/
/* 		dotsSpeed: {{ dotsSpeed }},*/
/* 		nav: {{ navs }},*/
/* 		loop: {{ loop }},*/
/* 		navSpeed: {{ navSpeed }},*/
/* 		navText: ['&#171;', '&#187;'],*/
/* 		navClass: ['owl2-prev', 'owl2-next']*/
/* 	});*/
/* */
/* 	$extraslider.on('translated.owl.carousel2', function (e) {*/
/* 		var $item_active = $('.extraslider-inner .owl2-item.active', $element);*/
/* 		var $item = $('.extraslider-inner .owl2-item', $element);*/
/* */
/* 		_UngetAnimate($item);*/
/* */
/* 		if ($item_active.length > 1 && _effect != 'none') {*/
/* 			_getAnimate($item_active);*/
/* 		} else {*/
/* 			$item.css({'opacity': 1, 'filter': 'alpha(opacity = 100)'});*/
/* 		}*/
/* 	});*/
/* 	/*feature product*//* */
/* 	$featureslider.on('initialized.owl.carousel2', function () {*/
/* 		var $item_active = $('.product-feature .owl2-item.active', $element);*/
/* 		if ($item_active.length > 1 && _effect != 'none') {*/
/* 			_getAnimate($item_active);*/
/* 		}*/
/* 		else {*/
/* 			var $item = $('.owl2-item', $element);*/
/* 			$item.css({'opacity': 1, 'filter': 'alpha(opacity = 100)'});*/
/* 		}*/
/* 		{% if button_page == "top" %}*/
/* 			$('.product-feature .owl2-dots', $element).insertAfter($('.product-feature .owl2-prev', $element));*/
/* 			$('.product-feature .owl2-controls', $element).insertBefore($featureslider).addClass('featureslider');	*/
/* 		{% else %}*/
/* 			$('.product-feature .owl2-nav', $element).insertBefore($featureslider);*/
/* 			$('.product-feature .owl2-controls', $element).insertAfter($featureslider).addClass('featureslider');;*/
/* 		{% endif %}*/
/* 	});*/
/* */
/* 	$featureslider.owlCarousel2({*/
/* 		rtl: {{ direction }},*/
/* 		margin: {{ margin }},*/
/* 		slideBy: {{ slideBy }},*/
/* 		autoplay: {{ autoplay }},*/
/* 		autoplayHoverPause: {{ autoplayHoverPause }},*/
/* 		autoplayTimeout: {{ autoplayTimeout }},*/
/* 		autoplaySpeed: {{ autoplaySpeed }},*/
/* 		startPosition: {{ startPosition }},*/
/* 		mouseDrag: {{ mouseDrag }},*/
/* 		touchDrag: {{ touchDrag }},*/
/* 		autoWidth: false,*/
/* 		responsive: {*/
/* 			0: 	{ items: 1 } ,*/
/* 			480: { items: 1 },*/
/* 			768: { items: 1 },*/
/* 			992: { items: 1 },*/
/* 			1200: {items: 1}*/
/* 		},*/
/* 		dotClass: 'owl2-dot',*/
/* 			dotsClass: 'owl2-dots',*/
/* 		dots: {{ dots }},*/
/* 		dotsSpeed: {{ dotsSpeed }},*/
/* 		nav: {{ navs }},*/
/* 		loop: {{ loop }},*/
/* 		navSpeed: {{ navSpeed }},*/
/* 		navText: ['&#171;', '&#187;'],*/
/* 		navClass: ['owl2-prev', 'owl2-next']*/
/* 	});*/
/* */
/* 	$featureslider.on('translated.owl.carousel2', function (e) {*/
/* 		var $item_active = $('.product-feature .owl2-item.active', $element);*/
/* 		var $item = $('.product-feature .owl2-item', $element);*/
/* */
/* 		_UngetAnimate($item);*/
/* */
/* 		if ($item_active.length > 1 && _effect != 'none') {*/
/* 			_getAnimate($item_active);*/
/* 		} else {*/
/* 			$item.css({'opacity': 1, 'filter': 'alpha(opacity = 100)'});*/
/* 		}*/
/* 	});*/
/* 	*/
/* 	function _getAnimate($el) {*/
/* 		if (_effect == 'none') return;*/
/* 		$extraslider.removeClass('extra-animate');*/
/* 		$el.each(function (i) {*/
/* 			var $_el = $(this);*/
/* 			$(this).css({*/
/* 				'-webkit-animation': _effect + ' ' + _duration + "ms ease both",*/
/* 				'-moz-animation': _effect + ' ' + _duration + "ms ease both",*/
/* 				'-o-animation': _effect + ' ' + _duration + "ms ease both",*/
/* 				'animation': _effect + ' ' + _duration + "ms ease both",*/
/* 				'-webkit-animation-delay': +i * _delay + 'ms',*/
/* 				'-moz-animation-delay': +i * _delay + 'ms',*/
/* 				'-o-animation-delay': +i * _delay + 'ms',*/
/* 				'animation-delay': +i * _delay + 'ms',*/
/* 				'opacity': 1*/
/* 			}).animate({*/
/* 				opacity: 1*/
/* 			});*/
/* */
/* 			if (i == $el.size() - 1) {*/
/* 				$extraslider.addClass("extra-animate");*/
/* 			}*/
/* 		});*/
/* 	}*/
/* */
/* 	function _UngetAnimate($el) {*/
/* 		$el.each(function (i) {*/
/* 			$(this).css({*/
/* 				'animation': '',*/
/* 				'-webkit-animation': '',*/
/* 				'-moz-animation': '',*/
/* 				'-o-animation': '',*/
/* 				'opacity': 1*/
/* 			});*/
/* 		});*/
/* 	}*/
/* 	data = new Date(2013, 10, 26, 12, 00, 00);*/
/* 	function CountDown(date, id) {*/
/* 		dateNow = new Date();*/
/* 		amount = date.getTime() - dateNow.getTime();*/
/* 		if (amount < 0 && $('#' + id).length) {*/
/* 			$('.' + id).html("Now!");*/
/* 		} else {*/
/* 			days = 0;*/
/* 			hours = 0;*/
/* 			mins = 0;*/
/* 			secs = 0;*/
/* 			out = "";*/
/* 			amount = Math.floor(amount / 1000);*/
/* 			days = Math.floor(amount / 86400);*/
/* 			amount = amount % 86400;*/
/* 			hours = Math.floor(amount / 3600);*/
/* 			amount = amount % 3600;*/
/* 			mins = Math.floor(amount / 60);*/
/* 			amount = amount % 60;*/
/* 			secs = Math.floor(amount);*/
/* */
/* 			out += "<div class='time-item time-day'>" + "<div class='num-time'>" + days + "</div>" + "<div class='name-time'> " + ((days == 1) ? "{{text_Day}}" : "{{text_Days}}") + "</div>" + "</div> ";*/
/* 			out += "<div class='time-item time-hour'>" + "<div class='num-time'>" + hours + "</div>  " + " <div class='name-time'> " + ((hours == 1) ? "{{text_Hour}}" : "{{text_Hours}}") + "</div>" + "</div> ";*/
/* 			out += "<div class='time-item time-min' >" + "<div class='num-time'>" + mins + "</div>" + " <div class='name-time'> " + ((mins == 1) ? "{{text_Min}}" : "{{text_Mins}}") + "</div>" + "</div> ";*/
/* 			out += "<div class='time-item time-sec' >" + "<div class='num-time'>" + secs + "</div>" + " <div class='name-time'>" + ((secs == 1) ? "{{text_Sec}}" : "{{text_Secs}}") + "</div>" + "</div> ";*/
/* 			out = out.substr(0, out.length - 2);*/
/* 			*/
/* */
/* 			$('.' + id).html(out);*/
/* */
/* 			setTimeout(function () {*/
/* 				CountDown(date, id);*/
/* 			}, 1000);*/
/* 		}*/
/* 	}*/
/* 	*/
/* 	if (listdeal{{ module }}.length > 0) {*/
/* 		for (var i = 0; i < listdeal{{ module }}.length; i++) {*/
/* 			var arr = listdeal{{ module }}[i].split("|");*/
/* 			if (arr[1].length) {*/
/* 				var data = new Date(arr[1]);*/
/* 				CountDown(data, arr[0]);*/
/* 			}*/
/* 		}*/
/* 	}*/
/* 	})('#{{ tag_id }}');*/
/* });*/
/* //]]>*/
/* </script>*/
