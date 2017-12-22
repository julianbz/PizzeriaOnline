<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_19b4c863e74d0fa7304b3805ec542e81faa566947f9b9781d92db7ce8701ddf9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_765e9d5a69dd40e9d87af8772e401b6e0cba1e570f14c83595344a55660f6f47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_765e9d5a69dd40e9d87af8772e401b6e0cba1e570f14c83595344a55660f6f47->enter($__internal_765e9d5a69dd40e9d87af8772e401b6e0cba1e570f14c83595344a55660f6f47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_eae7232cbde86072ee78543b743376234b00b3407d7bbd02f8e67d9028aa2c70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eae7232cbde86072ee78543b743376234b00b3407d7bbd02f8e67d9028aa2c70->enter($__internal_eae7232cbde86072ee78543b743376234b00b3407d7bbd02f8e67d9028aa2c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_765e9d5a69dd40e9d87af8772e401b6e0cba1e570f14c83595344a55660f6f47->leave($__internal_765e9d5a69dd40e9d87af8772e401b6e0cba1e570f14c83595344a55660f6f47_prof);

        
        $__internal_eae7232cbde86072ee78543b743376234b00b3407d7bbd02f8e67d9028aa2c70->leave($__internal_eae7232cbde86072ee78543b743376234b00b3407d7bbd02f8e67d9028aa2c70_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cef31645cab8c99e2859b245072fc563fb34cb28a7515f22fe67e42de7b95d66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cef31645cab8c99e2859b245072fc563fb34cb28a7515f22fe67e42de7b95d66->enter($__internal_cef31645cab8c99e2859b245072fc563fb34cb28a7515f22fe67e42de7b95d66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7554ebff58fb9d1ad8c364d0f44e149910d2e6cb3a3cddf8a4d512029b5e8eb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7554ebff58fb9d1ad8c364d0f44e149910d2e6cb3a3cddf8a4d512029b5e8eb0->enter($__internal_7554ebff58fb9d1ad8c364d0f44e149910d2e6cb3a3cddf8a4d512029b5e8eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_7554ebff58fb9d1ad8c364d0f44e149910d2e6cb3a3cddf8a4d512029b5e8eb0->leave($__internal_7554ebff58fb9d1ad8c364d0f44e149910d2e6cb3a3cddf8a4d512029b5e8eb0_prof);

        
        $__internal_cef31645cab8c99e2859b245072fc563fb34cb28a7515f22fe67e42de7b95d66->leave($__internal_cef31645cab8c99e2859b245072fc563fb34cb28a7515f22fe67e42de7b95d66_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7af123936080c08076e1592fe13512859482c71fdeb7b7681525f9316f29e360 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7af123936080c08076e1592fe13512859482c71fdeb7b7681525f9316f29e360->enter($__internal_7af123936080c08076e1592fe13512859482c71fdeb7b7681525f9316f29e360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_634e3781276007252a4dc2de75498b73dbfdce9016f8c256c621746af85d3006 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_634e3781276007252a4dc2de75498b73dbfdce9016f8c256c621746af85d3006->enter($__internal_634e3781276007252a4dc2de75498b73dbfdce9016f8c256c621746af85d3006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_634e3781276007252a4dc2de75498b73dbfdce9016f8c256c621746af85d3006->leave($__internal_634e3781276007252a4dc2de75498b73dbfdce9016f8c256c621746af85d3006_prof);

        
        $__internal_7af123936080c08076e1592fe13512859482c71fdeb7b7681525f9316f29e360->leave($__internal_7af123936080c08076e1592fe13512859482c71fdeb7b7681525f9316f29e360_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2fed0fdb4a108bd0097effd25125aba32e50a8d98c2867546815ca7421cfa94b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fed0fdb4a108bd0097effd25125aba32e50a8d98c2867546815ca7421cfa94b->enter($__internal_2fed0fdb4a108bd0097effd25125aba32e50a8d98c2867546815ca7421cfa94b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a7fa314a9a447b31b2388472fe1bf57d9bd5207631632b91f00dfd379eb603a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7fa314a9a447b31b2388472fe1bf57d9bd5207631632b91f00dfd379eb603a5->enter($__internal_a7fa314a9a447b31b2388472fe1bf57d9bd5207631632b91f00dfd379eb603a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_a7fa314a9a447b31b2388472fe1bf57d9bd5207631632b91f00dfd379eb603a5->leave($__internal_a7fa314a9a447b31b2388472fe1bf57d9bd5207631632b91f00dfd379eb603a5_prof);

        
        $__internal_2fed0fdb4a108bd0097effd25125aba32e50a8d98c2867546815ca7421cfa94b->leave($__internal_2fed0fdb4a108bd0097effd25125aba32e50a8d98c2867546815ca7421cfa94b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/julian/Julian_Symfony/EFI-Ingsoft/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
