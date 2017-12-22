<?php

/* pizza/new.html.twig */
class __TwigTemplate_cf6d3cb21fc704bcdaa49ba9ef1031b22dcbadc177c795bd2ecab988b00bc2cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pizza/new.html.twig", 1);
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
        $__internal_7f83b690e2afdc363951df38de7b9e112493a29fc8454bbd917fb24882a80d44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f83b690e2afdc363951df38de7b9e112493a29fc8454bbd917fb24882a80d44->enter($__internal_7f83b690e2afdc363951df38de7b9e112493a29fc8454bbd917fb24882a80d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pizza/new.html.twig"));

        $__internal_0a9482c0da24cc75ddf26501bfa7acea87e33aaa3110842d6b1bd737a2f3eb8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a9482c0da24cc75ddf26501bfa7acea87e33aaa3110842d6b1bd737a2f3eb8f->enter($__internal_0a9482c0da24cc75ddf26501bfa7acea87e33aaa3110842d6b1bd737a2f3eb8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pizza/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f83b690e2afdc363951df38de7b9e112493a29fc8454bbd917fb24882a80d44->leave($__internal_7f83b690e2afdc363951df38de7b9e112493a29fc8454bbd917fb24882a80d44_prof);

        
        $__internal_0a9482c0da24cc75ddf26501bfa7acea87e33aaa3110842d6b1bd737a2f3eb8f->leave($__internal_0a9482c0da24cc75ddf26501bfa7acea87e33aaa3110842d6b1bd737a2f3eb8f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_da4e53a8be09ec326e4e3bd866a5749ff2909e505e330364868ba306d052de1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da4e53a8be09ec326e4e3bd866a5749ff2909e505e330364868ba306d052de1e->enter($__internal_da4e53a8be09ec326e4e3bd866a5749ff2909e505e330364868ba306d052de1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f93d50207a53b2f3ab1ff645fc7a85a338d36ab0e79efc5856f47c91232ab92d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f93d50207a53b2f3ab1ff645fc7a85a338d36ab0e79efc5856f47c91232ab92d->enter($__internal_f93d50207a53b2f3ab1ff645fc7a85a338d36ab0e79efc5856f47c91232ab92d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <section class=\"content-header\">
        <h1>
            Nueva variedad
            <small>Agregar una nueva pizza</small>
        </h1>
    </section>

<section class=\"content\">
    <div class=\"row\">
        <div class=\"col-md-1\">
            ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            <br>
                <input class=\"btn btn-warning\" type=\"submit\" value=\"Create\" />
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
</section>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pizza_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_f93d50207a53b2f3ab1ff645fc7a85a338d36ab0e79efc5856f47c91232ab92d->leave($__internal_f93d50207a53b2f3ab1ff645fc7a85a338d36ab0e79efc5856f47c91232ab92d_prof);

        
        $__internal_da4e53a8be09ec326e4e3bd866a5749ff2909e505e330364868ba306d052de1e->leave($__internal_da4e53a8be09ec326e4e3bd866a5749ff2909e505e330364868ba306d052de1e_prof);

    }

    public function getTemplateName()
    {
        return "pizza/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 25,  71 => 18,  65 => 15,  61 => 14,  49 => 4,  40 => 3,  11 => 1,);
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
            Nueva variedad
            <small>Agregar una nueva pizza</small>
        </h1>
    </section>

<section class=\"content\">
    <div class=\"row\">
        <div class=\"col-md-1\">
            {{ form_start(form) }}
                {{ form_widget(form) }}
            <br>
                <input class=\"btn btn-warning\" type=\"submit\" value=\"Create\" />
            {{ form_end(form) }}
        </div>
    </div>
</section>

    <ul>
        <li>
            <a href=\"{{ path('pizza_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "pizza/new.html.twig", "/home/julian/Julian_Symfony/EFI-Ingsoft/app/Resources/views/pizza/new.html.twig");
    }
}
