<?php

/* pizza/edit.html.twig */
class __TwigTemplate_60e0cb8951882ffa1a1637c228dc75a52f8722779cf7548f1b209d67abda90d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pizza/edit.html.twig", 1);
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
        $__internal_a9ff87e1fba5659ac7c9710f0c6df77588b9f0c015bb993d3a19eaec33b0d324 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9ff87e1fba5659ac7c9710f0c6df77588b9f0c015bb993d3a19eaec33b0d324->enter($__internal_a9ff87e1fba5659ac7c9710f0c6df77588b9f0c015bb993d3a19eaec33b0d324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pizza/edit.html.twig"));

        $__internal_2b24b950dcb178f649cc96f26a45519f31831dd5fe76045b4c7b39e6b779977c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b24b950dcb178f649cc96f26a45519f31831dd5fe76045b4c7b39e6b779977c->enter($__internal_2b24b950dcb178f649cc96f26a45519f31831dd5fe76045b4c7b39e6b779977c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pizza/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9ff87e1fba5659ac7c9710f0c6df77588b9f0c015bb993d3a19eaec33b0d324->leave($__internal_a9ff87e1fba5659ac7c9710f0c6df77588b9f0c015bb993d3a19eaec33b0d324_prof);

        
        $__internal_2b24b950dcb178f649cc96f26a45519f31831dd5fe76045b4c7b39e6b779977c->leave($__internal_2b24b950dcb178f649cc96f26a45519f31831dd5fe76045b4c7b39e6b779977c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_846c5a23ff3dc68b200a71f0fa28449f079e02df21c13939e9034e1d7906cc59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_846c5a23ff3dc68b200a71f0fa28449f079e02df21c13939e9034e1d7906cc59->enter($__internal_846c5a23ff3dc68b200a71f0fa28449f079e02df21c13939e9034e1d7906cc59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9ca2e1cf0decb16bb7f79cf3cfee77a89f9e9ba30b30f9a331ca9d014ed097c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ca2e1cf0decb16bb7f79cf3cfee77a89f9e9ba30b30f9a331ca9d014ed097c7->enter($__internal_9ca2e1cf0decb16bb7f79cf3cfee77a89f9e9ba30b30f9a331ca9d014ed097c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <section class=\"content-header\">
        <h1>
            Editar variedad
            <small>Editar una pizza existente</small>
        </h1>
        <ol class=\"breadcrumb\">
            <div class=\"margin pull-right\">
                <div class=\"btn-group\">
                    <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pizza_index");
        echo "\" class=\"btn btn-warning\">Volver</a>
                </div>

                <div class=\"btn-group\">
                    ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                    <input type=\"submit\" class=\"btn btn-danger\" value=\"Delete\">
                    ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
                </div>
            </div>
        </ol>
        <br>
    </section>

    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
                ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
                <input type=\"submit\" value=\"Edit\" />
                ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>

";
        
        $__internal_9ca2e1cf0decb16bb7f79cf3cfee77a89f9e9ba30b30f9a331ca9d014ed097c7->leave($__internal_9ca2e1cf0decb16bb7f79cf3cfee77a89f9e9ba30b30f9a331ca9d014ed097c7_prof);

        
        $__internal_846c5a23ff3dc68b200a71f0fa28449f079e02df21c13939e9034e1d7906cc59->leave($__internal_846c5a23ff3dc68b200a71f0fa28449f079e02df21c13939e9034e1d7906cc59_prof);

    }

    public function getTemplateName()
    {
        return "pizza/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 31,  88 => 29,  84 => 28,  71 => 18,  66 => 16,  59 => 12,  49 => 4,  40 => 3,  11 => 1,);
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
            Editar variedad
            <small>Editar una pizza existente</small>
        </h1>
        <ol class=\"breadcrumb\">
            <div class=\"margin pull-right\">
                <div class=\"btn-group\">
                    <a href=\"{{ path('pizza_index') }}\" class=\"btn btn-warning\">Volver</a>
                </div>

                <div class=\"btn-group\">
                    {{ form_start(delete_form) }}
                    <input type=\"submit\" class=\"btn btn-danger\" value=\"Delete\">
                    {{ form_end(delete_form) }}
                </div>
            </div>
        </ol>
        <br>
    </section>

    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                {{ form_start(edit_form) }}
                {{ form_widget(edit_form) }}
                <input type=\"submit\" value=\"Edit\" />
                {{ form_end(edit_form) }}
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>

{% endblock %}
", "pizza/edit.html.twig", "/home/julian/Julian_Symfony/EFI-Ingsoft/app/Resources/views/pizza/edit.html.twig");
    }
}
