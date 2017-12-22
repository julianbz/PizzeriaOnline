<?php

/* pizza/index.html.twig */
class __TwigTemplate_cccb8829b3cca8c811fa60a3050f4850004b9250e2e9ee5ba689a8d4928711c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pizza/index.html.twig", 1);
        $this->blocks = array(
            'styleshetts' => array($this, 'block_styleshetts'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e7f1b041395f5581511ee0248ffeb62e70a12a9db9ec7ede1956d04c353c5db1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7f1b041395f5581511ee0248ffeb62e70a12a9db9ec7ede1956d04c353c5db1->enter($__internal_e7f1b041395f5581511ee0248ffeb62e70a12a9db9ec7ede1956d04c353c5db1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pizza/index.html.twig"));

        $__internal_ec2ed0d30eb21754ad88889f86626e6d6f480b1f264a82f5b3125457644f12fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec2ed0d30eb21754ad88889f86626e6d6f480b1f264a82f5b3125457644f12fa->enter($__internal_ec2ed0d30eb21754ad88889f86626e6d6f480b1f264a82f5b3125457644f12fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pizza/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7f1b041395f5581511ee0248ffeb62e70a12a9db9ec7ede1956d04c353c5db1->leave($__internal_e7f1b041395f5581511ee0248ffeb62e70a12a9db9ec7ede1956d04c353c5db1_prof);

        
        $__internal_ec2ed0d30eb21754ad88889f86626e6d6f480b1f264a82f5b3125457644f12fa->leave($__internal_ec2ed0d30eb21754ad88889f86626e6d6f480b1f264a82f5b3125457644f12fa_prof);

    }

    // line 3
    public function block_styleshetts($context, array $blocks = array())
    {
        $__internal_6dac862889254e60138678dc30e8464e5e073d675ee1f80c6dd9c1002ee2e663 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dac862889254e60138678dc30e8464e5e073d675ee1f80c6dd9c1002ee2e663->enter($__internal_6dac862889254e60138678dc30e8464e5e073d675ee1f80c6dd9c1002ee2e663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styleshetts"));

        $__internal_4273e00b4090665540afbd856f8399e7786dbcc425afc0f738ef0bd3af87ef4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4273e00b4090665540afbd856f8399e7786dbcc425afc0f738ef0bd3af87ef4e->enter($__internal_4273e00b4090665540afbd856f8399e7786dbcc425afc0f738ef0bd3af87ef4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styleshetts"));

        // line 4
        echo "    ";
        $this->displayParentBlock("styleshetts", $context, $blocks);
        echo "

    ";
        // line 7
        echo "    ";
        // line 8
        echo "    ";
        // line 9
        echo "



";
        
        $__internal_4273e00b4090665540afbd856f8399e7786dbcc425afc0f738ef0bd3af87ef4e->leave($__internal_4273e00b4090665540afbd856f8399e7786dbcc425afc0f738ef0bd3af87ef4e_prof);

        
        $__internal_6dac862889254e60138678dc30e8464e5e073d675ee1f80c6dd9c1002ee2e663->leave($__internal_6dac862889254e60138678dc30e8464e5e073d675ee1f80c6dd9c1002ee2e663_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd6e0270851b969f5948bacf812f806247fee2b6febe29cbbb0e85df8ffc41f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd6e0270851b969f5948bacf812f806247fee2b6febe29cbbb0e85df8ffc41f2->enter($__internal_dd6e0270851b969f5948bacf812f806247fee2b6febe29cbbb0e85df8ffc41f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6e5d78e18fc54a7c6348fc3e1de4450c5f9eb23dede2635325690896738fa922 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e5d78e18fc54a7c6348fc3e1de4450c5f9eb23dede2635325690896738fa922->enter($__internal_6e5d78e18fc54a7c6348fc3e1de4450c5f9eb23dede2635325690896738fa922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "    <section class=\"content-header\">
        <h1>
            Pizzas
            <small>Lista de todas las variedades disponibles</small>
        </h1>
        <ol class=\"breadcrumb\">
            <div class=\"margin pull-right\">
                <div class=\"btn-group\">
                    <a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pizza_new");
        echo "\" class=\"btn btn-warning\">Agregar una nueva variedad</a>
                </div>
                <div class=\"btn-group\">
                    <a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pizzapedido_cart");
        echo "\" class=\"btn btn-danger\">Ver Carrito</a>
                </div>
            </div>
        </ol>
    </section>

    <br>
<section class=\"content\">
    <div class=\"row\">
        <div class=\"col-xs-12\">



            <div id=\"gallery\" class=\"portfolio\">
                <div class=\"container\">

                    <div class=\"sap_tabs\">
                        <div id=\"horizontalTab\">

                            <div class=\"resp-tabs-container\">
                                <div class=\"tab-1 resp-tab-content\">

        ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pizzas"]) ? $context["pizzas"] : $this->getContext($context, "pizzas")));
        foreach ($context['_seq'] as $context["_key"] => $context["pizza"]) {
            // line 50
            echo "            <tr>

                <div class=\"col-md-4 portfolio-grids\">
                    <div class=\"sc-product-item thumbnail\">
                        <img src='asset/images/ga7.jpg' data-big-src='asset/images/ga1.jpg' class=\"img-responsive\" alt=\" \"/>
                        <div class=\"caption\">
                            <h4 data-name=\"product_name\">Pizza ";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["pizza"], "nombre", array()), "html", null, true);
            echo "</h4>
                            <p data-name=\"product_desc\">";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["pizza"], "descripcion", array()), "html", null, true);
            echo "</p>
                            <hr class=\"line\">
                            <div>
                                <strong class=\"price pull-left\">\$";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["pizza"], "precio", array()), "html", null, true);
            echo "</strong>
                                <input name=\"product_price\" value=\"2990.50\" type=\"hidden\" />
                                <input name=\"product_id\" value=\"12\" type=\"hidden\" />
                                <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pizza_show", array("idpizza" => $this->getAttribute($context["pizza"], "idpizza", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">Ver</a>
                                <a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pizza_edit", array("idpizza" => $this->getAttribute($context["pizza"], "idpizza", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">Editar</a>

                                <a class=\"sc-add-to-cart btn btn-success btn-sm pull-right\" href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pizzapedido_agregar_pizza", array("idpizza" => $this->getAttribute($context["pizza"], "idpizza", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\" >Agregar al carrito</a>

                            </div>
                            <div class=\"clearfix\"></div>
                        </div>
                    </div>
                </div>


                </div>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pizza'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "        </div>
    </div>
</section>

";
        
        $__internal_6e5d78e18fc54a7c6348fc3e1de4450c5f9eb23dede2635325690896738fa922->leave($__internal_6e5d78e18fc54a7c6348fc3e1de4450c5f9eb23dede2635325690896738fa922_prof);

        
        $__internal_dd6e0270851b969f5948bacf812f806247fee2b6febe29cbbb0e85df8ffc41f2->leave($__internal_dd6e0270851b969f5948bacf812f806247fee2b6febe29cbbb0e85df8ffc41f2_prof);

    }

    // line 84
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e497802edba3287334f8d7f114aea3a13e4dd770a1a09e40a7b71ce6bd78c594 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e497802edba3287334f8d7f114aea3a13e4dd770a1a09e40a7b71ce6bd78c594->enter($__internal_e497802edba3287334f8d7f114aea3a13e4dd770a1a09e40a7b71ce6bd78c594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_41fe82236e9a6dad7afb3277635956bc56d007efa3f57fd4404955c4f323f07c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41fe82236e9a6dad7afb3277635956bc56d007efa3f57fd4404955c4f323f07c->enter($__internal_41fe82236e9a6dad7afb3277635956bc56d007efa3f57fd4404955c4f323f07c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 85
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    ";
        // line 88
        echo "    ";
        // line 89
        echo "        ";
        // line 90
        echo "    ";
        // line 91
        echo "    ";
        // line 92
        echo "    ";
        // line 93
        echo "        ";
        // line 94
        echo "            ";
        // line 95
        echo "                ";
        // line 96
        echo "                ";
        // line 97
        echo "                ";
        // line 98
        echo "            ";
        // line 99
        echo "        ";
        // line 100
        echo "    ";
        // line 101
        echo "
    ";
        // line 103
        echo "
";
        
        $__internal_41fe82236e9a6dad7afb3277635956bc56d007efa3f57fd4404955c4f323f07c->leave($__internal_41fe82236e9a6dad7afb3277635956bc56d007efa3f57fd4404955c4f323f07c_prof);

        
        $__internal_e497802edba3287334f8d7f114aea3a13e4dd770a1a09e40a7b71ce6bd78c594->leave($__internal_e497802edba3287334f8d7f114aea3a13e4dd770a1a09e40a7b71ce6bd78c594_prof);

    }

    public function getTemplateName()
    {
        return "pizza/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 103,  235 => 101,  233 => 100,  231 => 99,  229 => 98,  227 => 97,  225 => 96,  223 => 95,  221 => 94,  219 => 93,  217 => 92,  215 => 91,  213 => 90,  211 => 89,  209 => 88,  203 => 85,  194 => 84,  180 => 78,  162 => 66,  157 => 64,  153 => 63,  147 => 60,  141 => 57,  137 => 56,  129 => 50,  125 => 49,  100 => 27,  94 => 24,  84 => 16,  75 => 15,  61 => 9,  59 => 8,  57 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block styleshetts %}
    {{  parent() }}

    {#<link rel=\"stylesheet\" href=\"{{asset('asset/dist/css/skins/_all-skins.min.css') }}\">#}
    {#<link rel=\"stylesheet\" href=\"{{asset('asset/css/jquery.easy-gallery.css') }}\">#}
    {#<link rel=\"stylesheet\" href=\"{{asset('asset/css/style.css') }}\">#}




{% endblock %}

{% block body %}
    <section class=\"content-header\">
        <h1>
            Pizzas
            <small>Lista de todas las variedades disponibles</small>
        </h1>
        <ol class=\"breadcrumb\">
            <div class=\"margin pull-right\">
                <div class=\"btn-group\">
                    <a href=\"{{ path('pizza_new') }}\" class=\"btn btn-warning\">Agregar una nueva variedad</a>
                </div>
                <div class=\"btn-group\">
                    <a href=\"{{ path('pizzapedido_cart') }}\" class=\"btn btn-danger\">Ver Carrito</a>
                </div>
            </div>
        </ol>
    </section>

    <br>
<section class=\"content\">
    <div class=\"row\">
        <div class=\"col-xs-12\">



            <div id=\"gallery\" class=\"portfolio\">
                <div class=\"container\">

                    <div class=\"sap_tabs\">
                        <div id=\"horizontalTab\">

                            <div class=\"resp-tabs-container\">
                                <div class=\"tab-1 resp-tab-content\">

        {% for pizza in pizzas %}
            <tr>

                <div class=\"col-md-4 portfolio-grids\">
                    <div class=\"sc-product-item thumbnail\">
                        <img src='asset/images/ga7.jpg' data-big-src='asset/images/ga1.jpg' class=\"img-responsive\" alt=\" \"/>
                        <div class=\"caption\">
                            <h4 data-name=\"product_name\">Pizza {{ pizza.nombre }}</h4>
                            <p data-name=\"product_desc\">{{ pizza.descripcion }}</p>
                            <hr class=\"line\">
                            <div>
                                <strong class=\"price pull-left\">\${{ pizza.precio }}</strong>
                                <input name=\"product_price\" value=\"2990.50\" type=\"hidden\" />
                                <input name=\"product_id\" value=\"12\" type=\"hidden\" />
                                <a href=\"{{ path('pizza_show', { 'idpizza': pizza.idpizza }) }}\" class=\"btn btn-primary\">Ver</a>
                                <a href=\"{{ path('pizza_edit', { 'idpizza': pizza.idpizza }) }}\" class=\"btn btn-primary\">Editar</a>

                                <a class=\"sc-add-to-cart btn btn-success btn-sm pull-right\" href=\"{{ path('pizzapedido_agregar_pizza', { 'idpizza': pizza.idpizza }) }}\" class=\"btn btn-primary\" >Agregar al carrito</a>

                            </div>
                            <div class=\"clearfix\"></div>
                        </div>
                    </div>
                </div>


                </div>
            </tr>
        {% endfor %}
        </div>
    </div>
</section>

{% endblock %}

{% block javascripts %}
    {{ parent() }}

    {#<script type='text/javascript' src={{asset('asset/js/jquery.easy-gallery.js')}} ></script>#}
    {#<script type='text/javascript'>#}
        {#\$('.portfolio').easyGallery();#}
    {#</script>#}
    {#<script src=\"src={{asset('asset/js/easyResponsiveTabs.js\" type=\"text/javascript')}}\"></script>#}
    {#<script type=\"text/javascript\">#}
        {#\$(document).ready(function () {#}
            {#\$('#horizontalTab').easyResponsiveTabs({#}
                {#type: 'default', //Types: default, vertical, accordion#}
                {#width: 'auto', //auto or any width like 600px#}
                {#fit: true   // 100% fit in a container#}
            {#});#}
        {#});#}
    {#</script>#}

    {#<script type=\"text/javascript\" src=\"{{asset('asset/js/numscroller-1.0.js') }}\"></script>#}

{% endblock %}
", "pizza/index.html.twig", "/home/julian/Julian_Symfony/EFI-Ingsoft/app/Resources/views/pizza/index.html.twig");
    }
}
