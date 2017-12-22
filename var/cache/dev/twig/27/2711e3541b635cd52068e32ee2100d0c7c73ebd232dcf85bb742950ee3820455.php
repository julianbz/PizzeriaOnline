<?php

/* pizzapedido/cart.html.twig */
class __TwigTemplate_2a0348f5a9c55b064bddb640935bd707f7c7e4f0200a506a9456d72cc0d5bf5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pizzapedido/cart.html.twig", 1);
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
        $__internal_9b547d1400a5932d58c9b285e660258e91982e4a8465cc42c04122013c179aee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b547d1400a5932d58c9b285e660258e91982e4a8465cc42c04122013c179aee->enter($__internal_9b547d1400a5932d58c9b285e660258e91982e4a8465cc42c04122013c179aee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pizzapedido/cart.html.twig"));

        $__internal_26ffbea53edc2f6dcf63ffee849ff06b4c08de2164736e0b5e4ad04ec5e197d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26ffbea53edc2f6dcf63ffee849ff06b4c08de2164736e0b5e4ad04ec5e197d4->enter($__internal_26ffbea53edc2f6dcf63ffee849ff06b4c08de2164736e0b5e4ad04ec5e197d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pizzapedido/cart.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b547d1400a5932d58c9b285e660258e91982e4a8465cc42c04122013c179aee->leave($__internal_9b547d1400a5932d58c9b285e660258e91982e4a8465cc42c04122013c179aee_prof);

        
        $__internal_26ffbea53edc2f6dcf63ffee849ff06b4c08de2164736e0b5e4ad04ec5e197d4->leave($__internal_26ffbea53edc2f6dcf63ffee849ff06b4c08de2164736e0b5e4ad04ec5e197d4_prof);

    }

    // line 3
    public function block_styleshetts($context, array $blocks = array())
    {
        $__internal_9c7c276d8b53cf0698cabf50e1621ae7f65924c794711b10c5302be1d0184c76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c7c276d8b53cf0698cabf50e1621ae7f65924c794711b10c5302be1d0184c76->enter($__internal_9c7c276d8b53cf0698cabf50e1621ae7f65924c794711b10c5302be1d0184c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styleshetts"));

        $__internal_7cf94256922cc0399d9fe802969e42c2a7377d15e7299f13d5009a04555094e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cf94256922cc0399d9fe802969e42c2a7377d15e7299f13d5009a04555094e8->enter($__internal_7cf94256922cc0399d9fe802969e42c2a7377d15e7299f13d5009a04555094e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styleshetts"));

        // line 4
        echo "    ";
        $this->displayParentBlock("styleshetts", $context, $blocks);
        echo "

    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\">

";
        
        $__internal_7cf94256922cc0399d9fe802969e42c2a7377d15e7299f13d5009a04555094e8->leave($__internal_7cf94256922cc0399d9fe802969e42c2a7377d15e7299f13d5009a04555094e8_prof);

        
        $__internal_9c7c276d8b53cf0698cabf50e1621ae7f65924c794711b10c5302be1d0184c76->leave($__internal_9c7c276d8b53cf0698cabf50e1621ae7f65924c794711b10c5302be1d0184c76_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_27aaab8159f1152b58644271c76368e05c992e6e625523145e857795331da659 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27aaab8159f1152b58644271c76368e05c992e6e625523145e857795331da659->enter($__internal_27aaab8159f1152b58644271c76368e05c992e6e625523145e857795331da659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bfa23a6523260a9996633d63775e0caa6d2b49e70b2af6e7f781373633b7d187 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfa23a6523260a9996633d63775e0caa6d2b49e70b2af6e7f781373633b7d187->enter($__internal_bfa23a6523260a9996633d63775e0caa6d2b49e70b2af6e7f781373633b7d187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    <section class=\"content-header\">
        <h1>
            Tu carrito
            <small>Lista de todos los productos seleccionados</small>
        </h1>
        <ol class=\"breadcrumb\">
            <div class=\"margin pull-right\">
                <div class=\"btn-group\">
                    <a type=\"button\" href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pizza_index");
        echo "\" class=\"btn btn-warning\">Volver</a>
                </div>

                <div class=\"btn-group\">
                    <a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pizzapedido_confirma");
        echo "\" class=\"btn btn-danger\">Confirmar pedido</a>
                </div>
            </div>
        </ol>
        <br>
    </section>

    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-xs-12\">


                <div class=\"box\">
                    <!-- /.box-header -->
                    <div class=\"box-body\">
                        <table id=\"example1\" class=\"table table-bordered table-striped\">
                            <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Precio</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 47
        $context["total"] = 0;
        // line 48
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")));
        foreach ($context['_seq'] as $context["_key"] => $context["pizza"]) {
            // line 49
            echo "                                <tr>
                                    <td> ";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["pizza"], "nombre", array()), "html", null, true);
            echo "</td>
                                    <td> ";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["pizza"], "descripcion", array()), "html", null, true);
            echo "</td>
                                    <td> ";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["pizza"], "precio", array()), "html", null, true);
            echo "</td>
                                    ";
            // line 53
            $context["total"] = ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) + $this->getAttribute($context["pizza"], "precio", array()));
            // line 54
            echo "                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pizza'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                            </tbody>
                        </table>

                        <h3>Precio total: \$";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
        echo "</h3>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>

";
        
        $__internal_bfa23a6523260a9996633d63775e0caa6d2b49e70b2af6e7f781373633b7d187->leave($__internal_bfa23a6523260a9996633d63775e0caa6d2b49e70b2af6e7f781373633b7d187_prof);

        
        $__internal_27aaab8159f1152b58644271c76368e05c992e6e625523145e857795331da659->leave($__internal_27aaab8159f1152b58644271c76368e05c992e6e625523145e857795331da659_prof);

    }

    // line 72
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c5dc5b6552878d7727cbd623a52aa516e52c756e8038d8b7e13642cff0b440a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5dc5b6552878d7727cbd623a52aa516e52c756e8038d8b7e13642cff0b440a4->enter($__internal_c5dc5b6552878d7727cbd623a52aa516e52c756e8038d8b7e13642cff0b440a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_46602d42562d4dbc59edefb6f9e3513e161f750c3150fb54995473ba0a5796e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46602d42562d4dbc59edefb6f9e3513e161f750c3150fb54995473ba0a5796e6->enter($__internal_46602d42562d4dbc59edefb6f9e3513e161f750c3150fb54995473ba0a5796e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 73
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        \$(function () {
            \$('#example1').DataTable()
        })
    </script>

";
        
        $__internal_46602d42562d4dbc59edefb6f9e3513e161f750c3150fb54995473ba0a5796e6->leave($__internal_46602d42562d4dbc59edefb6f9e3513e161f750c3150fb54995473ba0a5796e6_prof);

        
        $__internal_c5dc5b6552878d7727cbd623a52aa516e52c756e8038d8b7e13642cff0b440a4->leave($__internal_c5dc5b6552878d7727cbd623a52aa516e52c756e8038d8b7e13642cff0b440a4_prof);

    }

    public function getTemplateName()
    {
        return "pizzapedido/cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 73,  181 => 72,  159 => 59,  154 => 56,  147 => 54,  145 => 53,  141 => 52,  137 => 51,  133 => 50,  130 => 49,  125 => 48,  123 => 47,  96 => 23,  89 => 19,  79 => 11,  70 => 10,  57 => 6,  51 => 4,  42 => 3,  11 => 1,);
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

    <link rel=\"stylesheet\" href=\"{{asset('asset/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}\">

{% endblock %}

{% block body %}
    <section class=\"content-header\">
        <h1>
            Tu carrito
            <small>Lista de todos los productos seleccionados</small>
        </h1>
        <ol class=\"breadcrumb\">
            <div class=\"margin pull-right\">
                <div class=\"btn-group\">
                    <a type=\"button\" href=\"{{ path('pizza_index') }}\" class=\"btn btn-warning\">Volver</a>
                </div>

                <div class=\"btn-group\">
                    <a href=\"{{ path('pizzapedido_confirma') }}\" class=\"btn btn-danger\">Confirmar pedido</a>
                </div>
            </div>
        </ol>
        <br>
    </section>

    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-xs-12\">


                <div class=\"box\">
                    <!-- /.box-header -->
                    <div class=\"box-body\">
                        <table id=\"example1\" class=\"table table-bordered table-striped\">
                            <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Precio</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% set total = 0 %}
                            {% for pizza in cart %}
                                <tr>
                                    <td> {{ pizza.nombre }}</td>
                                    <td> {{ pizza.descripcion }}</td>
                                    <td> {{ pizza.precio }}</td>
                                    {% set total =  total + pizza.precio %}
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>

                        <h3>Precio total: \${{ total }}</h3>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>

{% endblock %}

{% block javascripts %}
    {{  parent() }}
    <script>
        \$(function () {
            \$('#example1').DataTable()
        })
    </script>

{% endblock %}
", "pizzapedido/cart.html.twig", "/home/julian/Julian_Symfony/EFI-Ingsoft/app/Resources/views/pizzapedido/cart.html.twig");
    }
}
