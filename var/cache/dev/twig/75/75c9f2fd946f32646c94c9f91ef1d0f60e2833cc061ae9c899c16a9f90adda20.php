<?php

/* pizza/show.html.twig */
class __TwigTemplate_7744f4f7ca9873b059ce30de10a23288ff9f8ba96421e6c6b32b9c6612a93de0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pizza/show.html.twig", 1);
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
        $__internal_46dac836c79d21eae4c71a760a6784e44e4043d88d8f3e3e2f2d228e84bafde1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46dac836c79d21eae4c71a760a6784e44e4043d88d8f3e3e2f2d228e84bafde1->enter($__internal_46dac836c79d21eae4c71a760a6784e44e4043d88d8f3e3e2f2d228e84bafde1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pizza/show.html.twig"));

        $__internal_b96b9cb1fd01a7b283c6b6382b7ed7482d12d2714efefc83e1898196cfa36142 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b96b9cb1fd01a7b283c6b6382b7ed7482d12d2714efefc83e1898196cfa36142->enter($__internal_b96b9cb1fd01a7b283c6b6382b7ed7482d12d2714efefc83e1898196cfa36142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pizza/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46dac836c79d21eae4c71a760a6784e44e4043d88d8f3e3e2f2d228e84bafde1->leave($__internal_46dac836c79d21eae4c71a760a6784e44e4043d88d8f3e3e2f2d228e84bafde1_prof);

        
        $__internal_b96b9cb1fd01a7b283c6b6382b7ed7482d12d2714efefc83e1898196cfa36142->leave($__internal_b96b9cb1fd01a7b283c6b6382b7ed7482d12d2714efefc83e1898196cfa36142_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5f36096dba24ea7105cccc985332a84798d7d45de8c8365a23a6dab8664905fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f36096dba24ea7105cccc985332a84798d7d45de8c8365a23a6dab8664905fa->enter($__internal_5f36096dba24ea7105cccc985332a84798d7d45de8c8365a23a6dab8664905fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a7a4dfd16d233fa66fa3d52d5e949744667f10dbc80bf5841df713fe148db710 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7a4dfd16d233fa66fa3d52d5e949744667f10dbc80bf5841df713fe148db710->enter($__internal_a7a4dfd16d233fa66fa3d52d5e949744667f10dbc80bf5841df713fe148db710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <section class=\"content-header\">
        <h1>
            Pizza ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pizza"]) ? $context["pizza"] : $this->getContext($context, "pizza")), "nombre", array()), "html", null, true);
        echo "
            <small>Descripcion</small>
        </h1>
        <ol class=\"breadcrumb\">
            <div class=\"margin pull-right\">
                <div class=\"btn-group\">
                    <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pizza_edit", array("idpizza" => $this->getAttribute((isset($context["pizza"]) ? $context["pizza"] : $this->getContext($context, "pizza")), "idpizza", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\">Editar</a>

                </div>

                <div class=\"btn-group\">
                    ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                    <input class=\"btn btn-primary\" type=\"submit\" value=\"Delete\">
                    ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
                </div>
            </div>
        </ol>
        <br>
    </section>


    <div class=\"col-xs-6\">
        <div class=\"table-responsive\">
            <table class=\"table\">
                <tr>
                    <th style=\"width:50%\">ID:</th>
                    <td>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pizza"]) ? $context["pizza"] : $this->getContext($context, "pizza")), "idpizza", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Nombre variedad:</th>
                    <td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pizza"]) ? $context["pizza"] : $this->getContext($context, "pizza")), "nombre", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Precio:</th>
                    <td>\$ ";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pizza"]) ? $context["pizza"] : $this->getContext($context, "pizza")), "precio", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Descripcion:</th>
                    <td>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pizza"]) ? $context["pizza"] : $this->getContext($context, "pizza")), "descripcion", array()), "html", null, true);
        echo "</td>
                </tr>


            </table>

        </div>
    </div>

";
        
        $__internal_a7a4dfd16d233fa66fa3d52d5e949744667f10dbc80bf5841df713fe148db710->leave($__internal_a7a4dfd16d233fa66fa3d52d5e949744667f10dbc80bf5841df713fe148db710_prof);

        
        $__internal_5f36096dba24ea7105cccc985332a84798d7d45de8c8365a23a6dab8664905fa->leave($__internal_5f36096dba24ea7105cccc985332a84798d7d45de8c8365a23a6dab8664905fa_prof);

    }

    public function getTemplateName()
    {
        return "pizza/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 44,  105 => 40,  98 => 36,  91 => 32,  75 => 19,  70 => 17,  62 => 12,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
            Pizza {{ pizza.nombre }}
            <small>Descripcion</small>
        </h1>
        <ol class=\"breadcrumb\">
            <div class=\"margin pull-right\">
                <div class=\"btn-group\">
                    <a href=\"{{ path('pizza_edit', { 'idpizza': pizza.idpizza }) }}\" class=\"btn btn-primary\">Editar</a>

                </div>

                <div class=\"btn-group\">
                    {{ form_start(delete_form) }}
                    <input class=\"btn btn-primary\" type=\"submit\" value=\"Delete\">
                    {{ form_end(delete_form) }}
                </div>
            </div>
        </ol>
        <br>
    </section>


    <div class=\"col-xs-6\">
        <div class=\"table-responsive\">
            <table class=\"table\">
                <tr>
                    <th style=\"width:50%\">ID:</th>
                    <td>{{ pizza.idpizza }}</td>
                </tr>
                <tr>
                    <th>Nombre variedad:</th>
                    <td>{{ pizza.nombre }}</td>
                </tr>
                <tr>
                    <th>Precio:</th>
                    <td>\$ {{ pizza.precio }}</td>
                </tr>
                <tr>
                    <th>Descripcion:</th>
                    <td>{{ pizza.descripcion }}</td>
                </tr>


            </table>

        </div>
    </div>

{% endblock %}
", "pizza/show.html.twig", "/home/julian/Julian_Symfony/EFI-Ingsoft/app/Resources/views/pizza/show.html.twig");
    }
}
