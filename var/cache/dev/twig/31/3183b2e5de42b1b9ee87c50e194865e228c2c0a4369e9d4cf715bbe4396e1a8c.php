<?php

/* default/footer.html.twig */
class __TwigTemplate_4a52b5045822ac762614a13c0a0af945ec6c53fe1506aa1c76f1e2cc823d7aa2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8bbf96f13002d546a838fdae03fef1127297bae54b242e4893e35397919fafa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bbf96f13002d546a838fdae03fef1127297bae54b242e4893e35397919fafa9->enter($__internal_8bbf96f13002d546a838fdae03fef1127297bae54b242e4893e35397919fafa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/footer.html.twig"));

        $__internal_bde423b2767512157897522b01eea536454bc88553eede82dd8146d2ea2c384d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bde423b2767512157897522b01eea536454bc88553eede82dd8146d2ea2c384d->enter($__internal_bde423b2767512157897522b01eea536454bc88553eede82dd8146d2ea2c384d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/footer.html.twig"));

        // line 1
        echo "<footer class=\"main-footer\">
    <div class=\"pull-right hidden-xs\">
        <b>Version</b>
        1.0
    </div>
    <strong>
        Copyright © 2017-2017<a href=\"\">Julian Baez</a>
        .
    </strong>
    Derechos reservados
</footer>";
        
        $__internal_8bbf96f13002d546a838fdae03fef1127297bae54b242e4893e35397919fafa9->leave($__internal_8bbf96f13002d546a838fdae03fef1127297bae54b242e4893e35397919fafa9_prof);

        
        $__internal_bde423b2767512157897522b01eea536454bc88553eede82dd8146d2ea2c384d->leave($__internal_bde423b2767512157897522b01eea536454bc88553eede82dd8146d2ea2c384d_prof);

    }

    public function getTemplateName()
    {
        return "default/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<footer class=\"main-footer\">
    <div class=\"pull-right hidden-xs\">
        <b>Version</b>
        1.0
    </div>
    <strong>
        Copyright © 2017-2017<a href=\"\">Julian Baez</a>
        .
    </strong>
    Derechos reservados
</footer>", "default/footer.html.twig", "/home/julian/Julian_Symfony/EFI-Ingsoft/app/Resources/views/default/footer.html.twig");
    }
}
