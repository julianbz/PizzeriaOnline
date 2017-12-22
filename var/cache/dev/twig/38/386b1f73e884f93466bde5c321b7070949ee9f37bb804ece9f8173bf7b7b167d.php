<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5e93d5e3a429ea82cc5e671f8331b5b453268563aaa38cfc38e349a13569248b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c0995a23c2f03b93fd225426d7698d0877ee4486db97aad1fcc7f64b7dfc9c64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0995a23c2f03b93fd225426d7698d0877ee4486db97aad1fcc7f64b7dfc9c64->enter($__internal_c0995a23c2f03b93fd225426d7698d0877ee4486db97aad1fcc7f64b7dfc9c64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_b244f947df446033a2c3ccc13d03094dadcf5ea1412e6422f7610583b45acedb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b244f947df446033a2c3ccc13d03094dadcf5ea1412e6422f7610583b45acedb->enter($__internal_b244f947df446033a2c3ccc13d03094dadcf5ea1412e6422f7610583b45acedb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0995a23c2f03b93fd225426d7698d0877ee4486db97aad1fcc7f64b7dfc9c64->leave($__internal_c0995a23c2f03b93fd225426d7698d0877ee4486db97aad1fcc7f64b7dfc9c64_prof);

        
        $__internal_b244f947df446033a2c3ccc13d03094dadcf5ea1412e6422f7610583b45acedb->leave($__internal_b244f947df446033a2c3ccc13d03094dadcf5ea1412e6422f7610583b45acedb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dcf07ef00adb0a46de4af65efdd45211ef825d26e6ee40d68c87d530b3a7b9e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcf07ef00adb0a46de4af65efdd45211ef825d26e6ee40d68c87d530b3a7b9e5->enter($__internal_dcf07ef00adb0a46de4af65efdd45211ef825d26e6ee40d68c87d530b3a7b9e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a6337970c106812bb7af90b0284ed4ffe756ac38a84332148f1af51f15c33a68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6337970c106812bb7af90b0284ed4ffe756ac38a84332148f1af51f15c33a68->enter($__internal_a6337970c106812bb7af90b0284ed4ffe756ac38a84332148f1af51f15c33a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_a6337970c106812bb7af90b0284ed4ffe756ac38a84332148f1af51f15c33a68->leave($__internal_a6337970c106812bb7af90b0284ed4ffe756ac38a84332148f1af51f15c33a68_prof);

        
        $__internal_dcf07ef00adb0a46de4af65efdd45211ef825d26e6ee40d68c87d530b3a7b9e5->leave($__internal_dcf07ef00adb0a46de4af65efdd45211ef825d26e6ee40d68c87d530b3a7b9e5_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_3eb094883ce258a5c83247b4c6c65e76ecd45851766bd6ebb6ed4441108c3260 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3eb094883ce258a5c83247b4c6c65e76ecd45851766bd6ebb6ed4441108c3260->enter($__internal_3eb094883ce258a5c83247b4c6c65e76ecd45851766bd6ebb6ed4441108c3260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_afcf8f7c36f186a7edd37700cbdd46a44b99a588ed4e80247dc57f81a0b424dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afcf8f7c36f186a7edd37700cbdd46a44b99a588ed4e80247dc57f81a0b424dc->enter($__internal_afcf8f7c36f186a7edd37700cbdd46a44b99a588ed4e80247dc57f81a0b424dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_afcf8f7c36f186a7edd37700cbdd46a44b99a588ed4e80247dc57f81a0b424dc->leave($__internal_afcf8f7c36f186a7edd37700cbdd46a44b99a588ed4e80247dc57f81a0b424dc_prof);

        
        $__internal_3eb094883ce258a5c83247b4c6c65e76ecd45851766bd6ebb6ed4441108c3260->leave($__internal_3eb094883ce258a5c83247b4c6c65e76ecd45851766bd6ebb6ed4441108c3260_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_36d1efecbcea97d0892e130f2837e04316e64e2d1443848cc01ab84c017b2432 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36d1efecbcea97d0892e130f2837e04316e64e2d1443848cc01ab84c017b2432->enter($__internal_36d1efecbcea97d0892e130f2837e04316e64e2d1443848cc01ab84c017b2432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1d46b85185b60a0c25f6c28905c6320f8a283db5af92320c6530268b52f519f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d46b85185b60a0c25f6c28905c6320f8a283db5af92320c6530268b52f519f4->enter($__internal_1d46b85185b60a0c25f6c28905c6320f8a283db5af92320c6530268b52f519f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_1d46b85185b60a0c25f6c28905c6320f8a283db5af92320c6530268b52f519f4->leave($__internal_1d46b85185b60a0c25f6c28905c6320f8a283db5af92320c6530268b52f519f4_prof);

        
        $__internal_36d1efecbcea97d0892e130f2837e04316e64e2d1443848cc01ab84c017b2432->leave($__internal_36d1efecbcea97d0892e130f2837e04316e64e2d1443848cc01ab84c017b2432_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/julian/Julian_Symfony/EFI-Ingsoft/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
