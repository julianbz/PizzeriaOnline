<?php

/* pizzapedido/index.html.twig */
class __TwigTemplate_49bbac11fe7a7093ec793b8c118526deb7605ae9cfb43fa6813bbe01ab049acf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pizzapedido/index.html.twig", 1);
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
        $__internal_eb3b802c0ee3c17eed4cf49a1fee05e181ed14f967cc1cddf1daa89d2cbbc7f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb3b802c0ee3c17eed4cf49a1fee05e181ed14f967cc1cddf1daa89d2cbbc7f8->enter($__internal_eb3b802c0ee3c17eed4cf49a1fee05e181ed14f967cc1cddf1daa89d2cbbc7f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pizzapedido/index.html.twig"));

        $__internal_4d35e333635f076f587c811d9f20d1725561dc93286fe7600029f1122f4bf1e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d35e333635f076f587c811d9f20d1725561dc93286fe7600029f1122f4bf1e1->enter($__internal_4d35e333635f076f587c811d9f20d1725561dc93286fe7600029f1122f4bf1e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pizzapedido/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb3b802c0ee3c17eed4cf49a1fee05e181ed14f967cc1cddf1daa89d2cbbc7f8->leave($__internal_eb3b802c0ee3c17eed4cf49a1fee05e181ed14f967cc1cddf1daa89d2cbbc7f8_prof);

        
        $__internal_4d35e333635f076f587c811d9f20d1725561dc93286fe7600029f1122f4bf1e1->leave($__internal_4d35e333635f076f587c811d9f20d1725561dc93286fe7600029f1122f4bf1e1_prof);

    }

    // line 2
    public function block_styleshetts($context, array $blocks = array())
    {
        $__internal_3c75cbb55f7a189c40f82396ef00d9f50367deac857af29659dfd87f94e72c2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c75cbb55f7a189c40f82396ef00d9f50367deac857af29659dfd87f94e72c2e->enter($__internal_3c75cbb55f7a189c40f82396ef00d9f50367deac857af29659dfd87f94e72c2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styleshetts"));

        $__internal_410f362eafa7da23d2da43c0f7fd7012bb55cf51a859ef0d4e9c2c9ed5c173a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_410f362eafa7da23d2da43c0f7fd7012bb55cf51a859ef0d4e9c2c9ed5c173a0->enter($__internal_410f362eafa7da23d2da43c0f7fd7012bb55cf51a859ef0d4e9c2c9ed5c173a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styleshetts"));

        // line 3
        echo "    ";
        $this->displayParentBlock("styleshetts", $context, $blocks);
        echo "

    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\">

";
        
        $__internal_410f362eafa7da23d2da43c0f7fd7012bb55cf51a859ef0d4e9c2c9ed5c173a0->leave($__internal_410f362eafa7da23d2da43c0f7fd7012bb55cf51a859ef0d4e9c2c9ed5c173a0_prof);

        
        $__internal_3c75cbb55f7a189c40f82396ef00d9f50367deac857af29659dfd87f94e72c2e->leave($__internal_3c75cbb55f7a189c40f82396ef00d9f50367deac857af29659dfd87f94e72c2e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe76201d782dda816e94daafb1d1919aa7707d033ae11c83196f00cca4e558e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe76201d782dda816e94daafb1d1919aa7707d033ae11c83196f00cca4e558e5->enter($__internal_fe76201d782dda816e94daafb1d1919aa7707d033ae11c83196f00cca4e558e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_55ca0d37bb568711747f5637bc49fedff6b7efc73c9545ad0d5cd9a914697460 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55ca0d37bb568711747f5637bc49fedff6b7efc73c9545ad0d5cd9a914697460->enter($__internal_55ca0d37bb568711747f5637bc49fedff6b7efc73c9545ad0d5cd9a914697460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <section class=\"content-header\">
        <h1>
            Detalle del pedido
            <small>Elementos pertenecientes a un pedido</small>
        </h1>
        <ol class=\"breadcrumb\">
            <div class=\"margin pull-right\">
                <div class=\"btn-group\">
                    <a href=\"/pizza\" class=\"btn btn-warning\">Crear un nuevo pedido</a>
                </div>
            </div>
        </ol>
    </section>
    <br>

        <!-- Main content -->
        <section class=\"content\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <div class=\"box\">
                        <!-- /.box-header -->
                        <div class=\"box-body\">
                            <table id=\"example1\" class=\"table table-bordered table-striped\">
                                <thead>
                                <tr>
                                <tr>
                                    <th>Pedido ID </th>
                                    <th>Producto</th>
                                    <th class=\"pull-right\">Acciones    </th>
                                    <th> </th>
                                </tr>
                                </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pizzapedidos"]) ? $context["pizzapedidos"] : $this->getContext($context, "pizzapedidos")));
        foreach ($context['_seq'] as $context["_key"] => $context["pizzapedido"]) {
            // line 44
            echo "                                        <tr>
                                            <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pizzapedido"], "idPedido", array()), "idPedido", array()), "html", null, true);
            echo "</td>

                                            <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pizzapedido"], "idPizza", array()), "nombre", array()), "html", null, true);
            echo "</td>

                                            <td>

                                                <ul class=\"pull-right\">
                                                    <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pizzapedido_show", array("idpizzapedido" => $this->getAttribute($context["pizzapedido"], "idpizzapedido", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning\">Ver</a>
                                                </ul>
                                                ";
            // line 55
            echo "                                                    ";
            // line 56
            echo "                                                ";
            // line 57
            echo "
                                            </td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pizzapedido'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "
                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>

";
        
        $__internal_55ca0d37bb568711747f5637bc49fedff6b7efc73c9545ad0d5cd9a914697460->leave($__internal_55ca0d37bb568711747f5637bc49fedff6b7efc73c9545ad0d5cd9a914697460_prof);

        
        $__internal_fe76201d782dda816e94daafb1d1919aa7707d033ae11c83196f00cca4e558e5->leave($__internal_fe76201d782dda816e94daafb1d1919aa7707d033ae11c83196f00cca4e558e5_prof);

    }

    // line 78
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d2da8c8476aca21b6996c8e3c3dfbd173d1341d3c7c9278367a222aa7dc11276 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2da8c8476aca21b6996c8e3c3dfbd173d1341d3c7c9278367a222aa7dc11276->enter($__internal_d2da8c8476aca21b6996c8e3c3dfbd173d1341d3c7c9278367a222aa7dc11276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ce844c76560a62d9c82f7922e5c450dca132f6d78da05b5fb496452b78442f62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce844c76560a62d9c82f7922e5c450dca132f6d78da05b5fb496452b78442f62->enter($__internal_ce844c76560a62d9c82f7922e5c450dca132f6d78da05b5fb496452b78442f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 79
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        \$(function () {
            \$('#example1').DataTable()
        })
    </script>

";
        
        $__internal_ce844c76560a62d9c82f7922e5c450dca132f6d78da05b5fb496452b78442f62->leave($__internal_ce844c76560a62d9c82f7922e5c450dca132f6d78da05b5fb496452b78442f62_prof);

        
        $__internal_d2da8c8476aca21b6996c8e3c3dfbd173d1341d3c7c9278367a222aa7dc11276->leave($__internal_d2da8c8476aca21b6996c8e3c3dfbd173d1341d3c7c9278367a222aa7dc11276_prof);

    }

    public function getTemplateName()
    {
        return "pizzapedido/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 79,  178 => 78,  153 => 61,  144 => 57,  142 => 56,  140 => 55,  135 => 52,  127 => 47,  122 => 45,  119 => 44,  115 => 43,  79 => 9,  70 => 8,  57 => 5,  51 => 3,  42 => 2,  11 => 1,);
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
            Detalle del pedido
            <small>Elementos pertenecientes a un pedido</small>
        </h1>
        <ol class=\"breadcrumb\">
            <div class=\"margin pull-right\">
                <div class=\"btn-group\">
                    <a href=\"/pizza\" class=\"btn btn-warning\">Crear un nuevo pedido</a>
                </div>
            </div>
        </ol>
    </section>
    <br>

        <!-- Main content -->
        <section class=\"content\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <div class=\"box\">
                        <!-- /.box-header -->
                        <div class=\"box-body\">
                            <table id=\"example1\" class=\"table table-bordered table-striped\">
                                <thead>
                                <tr>
                                <tr>
                                    <th>Pedido ID </th>
                                    <th>Producto</th>
                                    <th class=\"pull-right\">Acciones    </th>
                                    <th> </th>
                                </tr>
                                </tr>
                                </thead>
                                <tbody>
                                    {% for pizzapedido in pizzapedidos %}
                                        <tr>
                                            <td>{{ pizzapedido.idPedido.idPedido }}</td>

                                            <td>{{ pizzapedido.idPizza.nombre }}</td>

                                            <td>

                                                <ul class=\"pull-right\">
                                                    <a href=\"{{ path('pizzapedido_show', { 'idpizzapedido': pizzapedido.idpizzapedido }) }}\" class=\"btn btn-warning\">Ver</a>
                                                </ul>
                                                {#<ul class=\"pull-right\">#}
                                                    {#<a href=\"{{ path('pizzapedido_edit', { 'idpizzapedido': pizzapedido.idpizzapedido }) }}\" class=\"btn btn-warning\">Editar</a>#}
                                                {#</ul>#}

                                            </td>
                                        </tr>
                                    {% endfor %}

                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>

{% endblock %}

{% block javascripts %}
    {{  parent() }}
    <script>
        \$(function () {
            \$('#example1').DataTable()
        })
    </script>

{% endblock %}

", "pizzapedido/index.html.twig", "/home/julian/Julian_Symfony/EFI-Ingsoft/app/Resources/views/pizzapedido/index.html.twig");
    }
}
