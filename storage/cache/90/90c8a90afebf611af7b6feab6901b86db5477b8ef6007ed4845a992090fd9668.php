<?php

/* so-buyshop/template/common/column_right.twig */
class __TwigTemplate_117251f988afa8f6405373d7c888c6a6891d20225adc9e6ad621cb25a520ff21 extends Twig_Template
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
        if ((isset($context["modules"]) ? $context["modules"] : null)) {
            // line 2
            echo "\t<aside class=\"col-md-3 col-sm-4 col-xs-12 content-aside right_column sidebar-offcanvas\" >
\t \t   <span id=\"close-sidebar\" class=\"fa fa-times\"></span>
\t\t  ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["modules"]) ? $context["modules"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 5
                echo "\t\t  ";
                echo $context["module"];
                echo "
\t\t  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "\t</aside>
";
        }
    }

    public function getTemplateName()
    {
        return "so-buyshop/template/common/column_right.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  29 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if modules %}*/
/* 	<aside class="col-md-3 col-sm-4 col-xs-12 content-aside right_column sidebar-offcanvas" >*/
/* 	 	   <span id="close-sidebar" class="fa fa-times"></span>*/
/* 		  {% for module in modules %}*/
/* 		  {{ module }}*/
/* 		  {% endfor %}*/
/* 	</aside>*/
/* {% endif %}*/
/* */
