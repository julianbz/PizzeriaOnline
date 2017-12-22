<?php

/* pedido/index.html.twig */
class __TwigTemplate_53eb561be3d81540f7b8aa5cf86fd2a19398ca75ffb0633da4fab81d55c4db03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pedido/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de7f14450e76fdebba41e3e093c4f88de8470c8ccc6bb05a2ed0cd00ed937af8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de7f14450e76fdebba41e3e093c4f88de8470c8ccc6bb05a2ed0cd00ed937af8->enter($__internal_de7f14450e76fdebba41e3e093c4f88de8470c8ccc6bb05a2ed0cd00ed937af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pedido/index.html.twig"));

        $__internal_14504fc8704ce9e759f8a207824a099ce6463389b490d4fa3d67efd27b750e55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14504fc8704ce9e759f8a207824a099ce6463389b490d4fa3d67efd27b750e55->enter($__internal_14504fc8704ce9e759f8a207824a099ce6463389b490d4fa3d67efd27b750e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pedido/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de7f14450e76fdebba41e3e093c4f88de8470c8ccc6bb05a2ed0cd00ed937af8->leave($__internal_de7f14450e76fdebba41e3e093c4f88de8470c8ccc6bb05a2ed0cd00ed937af8_prof);

        
        $__internal_14504fc8704ce9e759f8a207824a099ce6463389b490d4fa3d67efd27b750e55->leave($__internal_14504fc8704ce9e759f8a207824a099ce6463389b490d4fa3d67efd27b750e55_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_07b019d1c0ccda233cca3e1c987b1ad45c08bf7e54d31b98d98e0344baa4786a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07b019d1c0ccda233cca3e1c987b1ad45c08bf7e54d31b98d98e0344baa4786a->enter($__internal_07b019d1c0ccda233cca3e1c987b1ad45c08bf7e54d31b98d98e0344baa4786a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ff10613846a0734e87cf7bc2ef3d7c624f2aa953ca2d3ea2258a2402ef7c4ea5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff10613846a0734e87cf7bc2ef3d7c624f2aa953ca2d3ea2258a2402ef7c4ea5->enter($__internal_ff10613846a0734e87cf7bc2ef3d7c624f2aa953ca2d3ea2258a2402ef7c4ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <section class=\"content-header\">
        <h1>
            Pedidos
            <small>Lista de todos los pedidos realizados</small>
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
    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"box\">
                    <div class=\"box-body\">
                        <table id=\"example1\" class=\"table table-bordered table-striped\">
                            <thead>
                                <tr>
                                    <th>Idpedido</th>
                                    <th>Cliente</th>
                                    <th>Direccion de envio</th>
                                    <th>Fecha</th>
                                    <th>Estado</th>
                                    <th>Detalle</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pedidos"]) ? $context["pedidos"] : $this->getContext($context, "pedidos")));
        foreach ($context['_seq'] as $context["_key"] => $context["pedido"]) {
            // line 37
            echo "                                    <tr>
                                        <td><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pedido_show", array("idpedido" => $this->getAttribute($context["pedido"], "idpedido", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pedido"], "idpedido", array()), "html", null, true);
            echo "</a></td>
                                        <td> NULL</td>
                                        <td> NULL</td>
                                        <td>";
            // line 41
            if ($this->getAttribute($context["pedido"], "fecha", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["pedido"], "fecha", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                                        <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pedido"], "idEstadoPedido", array()), "nombre", array()), "html", null, true);
            echo "</td>
                                        <td>
                                            ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pizzapedidos"]) ? $context["pizzapedidos"] : $this->getContext($context, "pizzapedidos")));
            foreach ($context['_seq'] as $context["_key"] => $context["pizzapedido"]) {
                // line 45
                echo "                                                ";
                if (($this->getAttribute($context["pedido"], "idpedido", array()) == $this->getAttribute($this->getAttribute($context["pizzapedido"], "idPedido", array()), "idPedido", array()))) {
                    // line 46
                    echo "                                                        ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pizzapedido"], "idPizza", array()), "nombre", array()), "html", null, true);
                    echo "
                                                    <br>
                                                ";
                }
                // line 49
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pizzapedido'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "                                        </td>
                                        </td>
                                            <td>
                                                <ul>
                                                        ";
            // line 55
            echo "
                                                        <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pedido_edit", array("idpedido" => $this->getAttribute($context["pedido"], "idpedido", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning\">Editar</a>

                                                </ul>
                                            </td>
                                        </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pedido'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

";
        
        $__internal_ff10613846a0734e87cf7bc2ef3d7c624f2aa953ca2d3ea2258a2402ef7c4ea5->leave($__internal_ff10613846a0734e87cf7bc2ef3d7c624f2aa953ca2d3ea2258a2402ef7c4ea5_prof);

        
        $__internal_07b019d1c0ccda233cca3e1c987b1ad45c08bf7e54d31b98d98e0344baa4786a->leave($__internal_07b019d1c0ccda233cca3e1c987b1ad45c08bf7e54d31b98d98e0344baa4786a_prof);

    }

    public function getTemplateName()
    {
        return "pedido/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 62,  138 => 56,  135 => 55,  129 => 50,  123 => 49,  116 => 46,  113 => 45,  109 => 44,  104 => 42,  98 => 41,  90 => 38,  87 => 37,  83 => 36,  49 => 4,  40 => 3,  11 => 1,);
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

{% block body %}
    <section class=\"content-header\">
        <h1>
            Pedidos
            <small>Lista de todos los pedidos realizados</small>
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
    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"box\">
                    <div class=\"box-body\">
                        <table id=\"example1\" class=\"table table-bordered table-striped\">
                            <thead>
                                <tr>
                                    <th>Idpedido</th>
                                    <th>Cliente</th>
                                    <th>Direccion de envio</th>
                                    <th>Fecha</th>
                                    <th>Estado</th>
                                    <th>Detalle</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for pedido in pedidos %}
                                    <tr>
                                        <td><a href=\"{{ path('pedido_show', { 'idpedido': pedido.idpedido }) }}\">{{ pedido.idpedido }}</a></td>
                                        <td> NULL</td>
                                        <td> NULL</td>
                                        <td>{% if pedido.fecha %}{{ pedido.fecha|date('Y-m-d') }}{% endif %}</td>
                                        <td>{{ pedido.idEstadoPedido.nombre }}</td>
                                        <td>
                                            {% for pizzapedido in pizzapedidos %}
                                                {% if pedido.idpedido == pizzapedido.idPedido.idPedido %}
                                                        {{ pizzapedido.idPizza.nombre }}
                                                    <br>
                                                {% endif %}
                                            {% endfor %}
                                        </td>
                                        </td>
                                            <td>
                                                <ul>
                                                        {#<a href=\"{{ path('pedido_show', { 'idpedido': pedido.idpedido }) }}\" class=\"btn btn-warning\">Ver</a>#}

                                                        <a href=\"{{ path('pedido_edit', { 'idpedido': pedido.idpedido }) }}\" class=\"btn btn-warning\">Editar</a>

                                                </ul>
                                            </td>
                                        </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

{% endblock %}
", "pedido/index.html.twig", "/home/julian/Julian_Symfony/EFI-Ingsoft/app/Resources/views/pedido/index.html.twig");
    }
}
