<?php

/* pedido/edit.html.twig */
class __TwigTemplate_70aba24660597a10d72ee5b919973ad54fd44e43aa06bf2a716aad4aea2ad160 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pedido/edit.html.twig", 1);
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
        $__internal_bb19bf1337ec096f235a96864ab83100867365fb8f17f7a1f84c8d32889e0ea2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb19bf1337ec096f235a96864ab83100867365fb8f17f7a1f84c8d32889e0ea2->enter($__internal_bb19bf1337ec096f235a96864ab83100867365fb8f17f7a1f84c8d32889e0ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pedido/edit.html.twig"));

        $__internal_2074815b066957f0161fae8f1847bc6125765605ce2a429a2ff0d9f44cf723e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2074815b066957f0161fae8f1847bc6125765605ce2a429a2ff0d9f44cf723e7->enter($__internal_2074815b066957f0161fae8f1847bc6125765605ce2a429a2ff0d9f44cf723e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pedido/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb19bf1337ec096f235a96864ab83100867365fb8f17f7a1f84c8d32889e0ea2->leave($__internal_bb19bf1337ec096f235a96864ab83100867365fb8f17f7a1f84c8d32889e0ea2_prof);

        
        $__internal_2074815b066957f0161fae8f1847bc6125765605ce2a429a2ff0d9f44cf723e7->leave($__internal_2074815b066957f0161fae8f1847bc6125765605ce2a429a2ff0d9f44cf723e7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6966f2ee7311eb45db1c977441929585d7245292378b63745f61e10a2173dfb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6966f2ee7311eb45db1c977441929585d7245292378b63745f61e10a2173dfb5->enter($__internal_6966f2ee7311eb45db1c977441929585d7245292378b63745f61e10a2173dfb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6c6d21eff76f1a462cc9fa8a02488a4407886434cae37fd7ff6d1dc7c39e3f4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c6d21eff76f1a462cc9fa8a02488a4407886434cae37fd7ff6d1dc7c39e3f4c->enter($__internal_6c6d21eff76f1a462cc9fa8a02488a4407886434cae37fd7ff6d1dc7c39e3f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <section class=\"content-header\">
        <h1>
            Editar pedido
        </h1>
        <ol class=\"breadcrumb\">
            <div class=\"margin pull-right\">
                <div class=\"btn-group\">
                    <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pedido_index");
        echo "\" class=\"btn btn-warning\">Back to the list</a>

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
                        ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
                        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
                        <input type=\"submit\" value=\"Edit\" />
                        ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
                        <ul>
                            <li>
                                ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                                <input type=\"submit\" value=\"Delete\">
                                ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>



";
        
        $__internal_6c6d21eff76f1a462cc9fa8a02488a4407886434cae37fd7ff6d1dc7c39e3f4c->leave($__internal_6c6d21eff76f1a462cc9fa8a02488a4407886434cae37fd7ff6d1dc7c39e3f4c_prof);

        
        $__internal_6966f2ee7311eb45db1c977441929585d7245292378b63745f61e10a2173dfb5->leave($__internal_6966f2ee7311eb45db1c977441929585d7245292378b63745f61e10a2173dfb5_prof);

    }

    public function getTemplateName()
    {
        return "pedido/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 31,  88 => 29,  82 => 26,  77 => 24,  73 => 23,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
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
            Editar pedido
        </h1>
        <ol class=\"breadcrumb\">
            <div class=\"margin pull-right\">
                <div class=\"btn-group\">
                    <a href=\"{{ path('pedido_index') }}\" class=\"btn btn-warning\">Back to the list</a>

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
                        {{ form_start(edit_form) }}
                        {{ form_widget(edit_form) }}
                        <input type=\"submit\" value=\"Edit\" />
                        {{ form_end(edit_form) }}
                        <ul>
                            <li>
                                {{ form_start(delete_form) }}
                                <input type=\"submit\" value=\"Delete\">
                                {{ form_end(delete_form) }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>



{% endblock %}
", "pedido/edit.html.twig", "/home/julian/Julian_Symfony/EFI-Ingsoft/app/Resources/views/pedido/edit.html.twig");
    }
}
