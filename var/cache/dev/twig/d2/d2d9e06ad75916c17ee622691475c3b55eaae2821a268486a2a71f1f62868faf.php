<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d53c5086159fe5a49688cf64d3ab072be7a7e7a47c3e56920a31c877e13687f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_d24f0843e108ac83c66184528fb8a1780831b3b394f9fc0f6b65ef70a0d77858 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d24f0843e108ac83c66184528fb8a1780831b3b394f9fc0f6b65ef70a0d77858->enter($__internal_d24f0843e108ac83c66184528fb8a1780831b3b394f9fc0f6b65ef70a0d77858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_49d2dff65926bde6f01844ae90bfbddd2d3efceb24ac84661190b18866d04967 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49d2dff65926bde6f01844ae90bfbddd2d3efceb24ac84661190b18866d04967->enter($__internal_49d2dff65926bde6f01844ae90bfbddd2d3efceb24ac84661190b18866d04967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d24f0843e108ac83c66184528fb8a1780831b3b394f9fc0f6b65ef70a0d77858->leave($__internal_d24f0843e108ac83c66184528fb8a1780831b3b394f9fc0f6b65ef70a0d77858_prof);

        
        $__internal_49d2dff65926bde6f01844ae90bfbddd2d3efceb24ac84661190b18866d04967->leave($__internal_49d2dff65926bde6f01844ae90bfbddd2d3efceb24ac84661190b18866d04967_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4297030672bdbe7457cd53762db38fd69e276023800ebd14a6d280fe6d2d47ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4297030672bdbe7457cd53762db38fd69e276023800ebd14a6d280fe6d2d47ef->enter($__internal_4297030672bdbe7457cd53762db38fd69e276023800ebd14a6d280fe6d2d47ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ef6c8b58d222dcca4cac6fdea86b15a81722ef2e7fa91f0d654875457943e484 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef6c8b58d222dcca4cac6fdea86b15a81722ef2e7fa91f0d654875457943e484->enter($__internal_ef6c8b58d222dcca4cac6fdea86b15a81722ef2e7fa91f0d654875457943e484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ef6c8b58d222dcca4cac6fdea86b15a81722ef2e7fa91f0d654875457943e484->leave($__internal_ef6c8b58d222dcca4cac6fdea86b15a81722ef2e7fa91f0d654875457943e484_prof);

        
        $__internal_4297030672bdbe7457cd53762db38fd69e276023800ebd14a6d280fe6d2d47ef->leave($__internal_4297030672bdbe7457cd53762db38fd69e276023800ebd14a6d280fe6d2d47ef_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4ea085c9b6c490347d737a1d189813db4947f03f83455398b1f9444462f1883d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ea085c9b6c490347d737a1d189813db4947f03f83455398b1f9444462f1883d->enter($__internal_4ea085c9b6c490347d737a1d189813db4947f03f83455398b1f9444462f1883d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ce6e0bd77fe997bc0bb45ce21e547376e707749e8b28fdc722c70ba3b6ff1eb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce6e0bd77fe997bc0bb45ce21e547376e707749e8b28fdc722c70ba3b6ff1eb4->enter($__internal_ce6e0bd77fe997bc0bb45ce21e547376e707749e8b28fdc722c70ba3b6ff1eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ce6e0bd77fe997bc0bb45ce21e547376e707749e8b28fdc722c70ba3b6ff1eb4->leave($__internal_ce6e0bd77fe997bc0bb45ce21e547376e707749e8b28fdc722c70ba3b6ff1eb4_prof);

        
        $__internal_4ea085c9b6c490347d737a1d189813db4947f03f83455398b1f9444462f1883d->leave($__internal_4ea085c9b6c490347d737a1d189813db4947f03f83455398b1f9444462f1883d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_022e3d27fdfc02c2dbf4068e3cf88c9eeaa92650db3be433c2905182e7e84d53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_022e3d27fdfc02c2dbf4068e3cf88c9eeaa92650db3be433c2905182e7e84d53->enter($__internal_022e3d27fdfc02c2dbf4068e3cf88c9eeaa92650db3be433c2905182e7e84d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_670110bcd73e34032e227f33b0d22154d2709a9f56628cc294ae59ffdc07dbaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_670110bcd73e34032e227f33b0d22154d2709a9f56628cc294ae59ffdc07dbaf->enter($__internal_670110bcd73e34032e227f33b0d22154d2709a9f56628cc294ae59ffdc07dbaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_670110bcd73e34032e227f33b0d22154d2709a9f56628cc294ae59ffdc07dbaf->leave($__internal_670110bcd73e34032e227f33b0d22154d2709a9f56628cc294ae59ffdc07dbaf_prof);

        
        $__internal_022e3d27fdfc02c2dbf4068e3cf88c9eeaa92650db3be433c2905182e7e84d53->leave($__internal_022e3d27fdfc02c2dbf4068e3cf88c9eeaa92650db3be433c2905182e7e84d53_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/julian/Julian_Symfony/EFI-Ingsoft/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
