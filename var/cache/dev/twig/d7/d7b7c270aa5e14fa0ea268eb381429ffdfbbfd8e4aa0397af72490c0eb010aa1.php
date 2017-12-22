<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_4ab0d1599d6fabc4058bc359f1f626bef78779911e18157e59cabab6d769661f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d9e68cd57e05f85f4a0dde547ca5343542f57d263fb29b8c535350d711095006 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9e68cd57e05f85f4a0dde547ca5343542f57d263fb29b8c535350d711095006->enter($__internal_d9e68cd57e05f85f4a0dde547ca5343542f57d263fb29b8c535350d711095006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_878801204721fc5d301b379d712746a30f5a1f3a4e396c847bd1a8c2d37ed030 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_878801204721fc5d301b379d712746a30f5a1f3a4e396c847bd1a8c2d37ed030->enter($__internal_878801204721fc5d301b379d712746a30f5a1f3a4e396c847bd1a8c2d37ed030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_d9e68cd57e05f85f4a0dde547ca5343542f57d263fb29b8c535350d711095006->leave($__internal_d9e68cd57e05f85f4a0dde547ca5343542f57d263fb29b8c535350d711095006_prof);

        
        $__internal_878801204721fc5d301b379d712746a30f5a1f3a4e396c847bd1a8c2d37ed030->leave($__internal_878801204721fc5d301b379d712746a30f5a1f3a4e396c847bd1a8c2d37ed030_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2cab9f137b1cc57684daa688bdedef6f33d6f10951f3f4ed1874329959dc468f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cab9f137b1cc57684daa688bdedef6f33d6f10951f3f4ed1874329959dc468f->enter($__internal_2cab9f137b1cc57684daa688bdedef6f33d6f10951f3f4ed1874329959dc468f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3533656b70bd87f5737f0caa87420236832ce333895714da3379d321a11387bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3533656b70bd87f5737f0caa87420236832ce333895714da3379d321a11387bd->enter($__internal_3533656b70bd87f5737f0caa87420236832ce333895714da3379d321a11387bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_3533656b70bd87f5737f0caa87420236832ce333895714da3379d321a11387bd->leave($__internal_3533656b70bd87f5737f0caa87420236832ce333895714da3379d321a11387bd_prof);

        
        $__internal_2cab9f137b1cc57684daa688bdedef6f33d6f10951f3f4ed1874329959dc468f->leave($__internal_2cab9f137b1cc57684daa688bdedef6f33d6f10951f3f4ed1874329959dc468f_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_292a944c2027f7a592612f4983f082c313e745c544ba1ea7d302f290ae78a7c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_292a944c2027f7a592612f4983f082c313e745c544ba1ea7d302f290ae78a7c1->enter($__internal_292a944c2027f7a592612f4983f082c313e745c544ba1ea7d302f290ae78a7c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b2d51f742b141ec61ca405c6edceca63f47139bf18731e806a106d48b788d6a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2d51f742b141ec61ca405c6edceca63f47139bf18731e806a106d48b788d6a3->enter($__internal_b2d51f742b141ec61ca405c6edceca63f47139bf18731e806a106d48b788d6a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_b2d51f742b141ec61ca405c6edceca63f47139bf18731e806a106d48b788d6a3->leave($__internal_b2d51f742b141ec61ca405c6edceca63f47139bf18731e806a106d48b788d6a3_prof);

        
        $__internal_292a944c2027f7a592612f4983f082c313e745c544ba1ea7d302f290ae78a7c1->leave($__internal_292a944c2027f7a592612f4983f082c313e745c544ba1ea7d302f290ae78a7c1_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_370b47a2f47e8d2fe069a6f3a6ea6f99b73d56e1718b9784751259ad6a9328b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_370b47a2f47e8d2fe069a6f3a6ea6f99b73d56e1718b9784751259ad6a9328b2->enter($__internal_370b47a2f47e8d2fe069a6f3a6ea6f99b73d56e1718b9784751259ad6a9328b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cd73177a805bf628def5c85202764dc428320ddc3008acea32aae806f6cbc538 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd73177a805bf628def5c85202764dc428320ddc3008acea32aae806f6cbc538->enter($__internal_cd73177a805bf628def5c85202764dc428320ddc3008acea32aae806f6cbc538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cd73177a805bf628def5c85202764dc428320ddc3008acea32aae806f6cbc538->leave($__internal_cd73177a805bf628def5c85202764dc428320ddc3008acea32aae806f6cbc538_prof);

        
        $__internal_370b47a2f47e8d2fe069a6f3a6ea6f99b73d56e1718b9784751259ad6a9328b2->leave($__internal_370b47a2f47e8d2fe069a6f3a6ea6f99b73d56e1718b9784751259ad6a9328b2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/julian/Julian_Symfony/EFI-Ingsoft/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
