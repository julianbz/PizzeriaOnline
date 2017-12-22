<?php

/* default/index.html.twig */
class __TwigTemplate_5979ee791d4b96b1df90daa28ae5681340c1f71c32ca1e118713ae242dd98bfc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_379c48baf3d561ab4e3b9b0afdf88b16265daa997f2f0a4374bc68bb9a3509c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_379c48baf3d561ab4e3b9b0afdf88b16265daa997f2f0a4374bc68bb9a3509c1->enter($__internal_379c48baf3d561ab4e3b9b0afdf88b16265daa997f2f0a4374bc68bb9a3509c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_3b58e774934a71de9accb8222df3658b16cbcd73b51c985f5f57fbc41b6fc981 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b58e774934a71de9accb8222df3658b16cbcd73b51c985f5f57fbc41b6fc981->enter($__internal_3b58e774934a71de9accb8222df3658b16cbcd73b51c985f5f57fbc41b6fc981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_379c48baf3d561ab4e3b9b0afdf88b16265daa997f2f0a4374bc68bb9a3509c1->leave($__internal_379c48baf3d561ab4e3b9b0afdf88b16265daa997f2f0a4374bc68bb9a3509c1_prof);

        
        $__internal_3b58e774934a71de9accb8222df3658b16cbcd73b51c985f5f57fbc41b6fc981->leave($__internal_3b58e774934a71de9accb8222df3658b16cbcd73b51c985f5f57fbc41b6fc981_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9faaa2d3a1e8f116fd4ebab2c025d54da22a3f73564810f345f0e6eff5f63b51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9faaa2d3a1e8f116fd4ebab2c025d54da22a3f73564810f345f0e6eff5f63b51->enter($__internal_9faaa2d3a1e8f116fd4ebab2c025d54da22a3f73564810f345f0e6eff5f63b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c5bf2c45cfe560362d764dd930b3581ae8fe1008017af50d20fa61ef216b85ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5bf2c45cfe560362d764dd930b3581ae8fe1008017af50d20fa61ef216b85ab->enter($__internal_c5bf2c45cfe560362d764dd930b3581ae8fe1008017af50d20fa61ef216b85ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c5bf2c45cfe560362d764dd930b3581ae8fe1008017af50d20fa61ef216b85ab->leave($__internal_c5bf2c45cfe560362d764dd930b3581ae8fe1008017af50d20fa61ef216b85ab_prof);

        
        $__internal_9faaa2d3a1e8f116fd4ebab2c025d54da22a3f73564810f345f0e6eff5f63b51->leave($__internal_9faaa2d3a1e8f116fd4ebab2c025d54da22a3f73564810f345f0e6eff5f63b51_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5e595f5682f92459968d90f347379caaeb5747b3cbcdf1a632e005e26ca3872c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e595f5682f92459968d90f347379caaeb5747b3cbcdf1a632e005e26ca3872c->enter($__internal_5e595f5682f92459968d90f347379caaeb5747b3cbcdf1a632e005e26ca3872c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e3fa17a557e965e3c7b3f7327d41ac2149acebd98ddb43bb027331e936b2fe8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3fa17a557e965e3c7b3f7327d41ac2149acebd98ddb43bb027331e936b2fe8e->enter($__internal_e3fa17a557e965e3c7b3f7327d41ac2149acebd98ddb43bb027331e936b2fe8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e3fa17a557e965e3c7b3f7327d41ac2149acebd98ddb43bb027331e936b2fe8e->leave($__internal_e3fa17a557e965e3c7b3f7327d41ac2149acebd98ddb43bb027331e936b2fe8e_prof);

        
        $__internal_5e595f5682f92459968d90f347379caaeb5747b3cbcdf1a632e005e26ca3872c->leave($__internal_5e595f5682f92459968d90f347379caaeb5747b3cbcdf1a632e005e26ca3872c_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 6,  41 => 3,  11 => 1,);
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
{% endblock %}

{% block stylesheets %}
{% endblock %}
", "default/index.html.twig", "/home/julian/Julian_Symfony/EFI-Ingsoft/app/Resources/views/default/index.html.twig");
    }
}
