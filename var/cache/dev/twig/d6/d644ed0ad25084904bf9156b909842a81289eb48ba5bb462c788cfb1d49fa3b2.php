<?php

/* pedido/show.html.twig */
class __TwigTemplate_80ca4c580bbc1417a30cca03681717564d95d958a3138236ddec902253deccae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pedido/show.html.twig", 1);
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
        $__internal_9903df3711a985d67436c8f0b8ed9ade11f1a5cc54431f0ba0d5efe63b776c1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9903df3711a985d67436c8f0b8ed9ade11f1a5cc54431f0ba0d5efe63b776c1a->enter($__internal_9903df3711a985d67436c8f0b8ed9ade11f1a5cc54431f0ba0d5efe63b776c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pedido/show.html.twig"));

        $__internal_4abf206c7b030eddea04fa040c68c8213483f45e08fd67da7525e98d6bbb7e7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4abf206c7b030eddea04fa040c68c8213483f45e08fd67da7525e98d6bbb7e7a->enter($__internal_4abf206c7b030eddea04fa040c68c8213483f45e08fd67da7525e98d6bbb7e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pedido/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9903df3711a985d67436c8f0b8ed9ade11f1a5cc54431f0ba0d5efe63b776c1a->leave($__internal_9903df3711a985d67436c8f0b8ed9ade11f1a5cc54431f0ba0d5efe63b776c1a_prof);

        
        $__internal_4abf206c7b030eddea04fa040c68c8213483f45e08fd67da7525e98d6bbb7e7a->leave($__internal_4abf206c7b030eddea04fa040c68c8213483f45e08fd67da7525e98d6bbb7e7a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e6511bc58baf7a2e5f19d940381a4e26698c3989995650e397d79900771641d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e6511bc58baf7a2e5f19d940381a4e26698c3989995650e397d79900771641d->enter($__internal_2e6511bc58baf7a2e5f19d940381a4e26698c3989995650e397d79900771641d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_077e1b84dab464f51ff87bc08a3bc7a89c55e2f6d28493dd4a192f1f7240528e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_077e1b84dab464f51ff87bc08a3bc7a89c55e2f6d28493dd4a192f1f7240528e->enter($__internal_077e1b84dab464f51ff87bc08a3bc7a89c55e2f6d28493dd4a192f1f7240528e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Pedido</h1>

    <table>
        <tbody>
            <tr>
                <th>Idpedido</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "idpedido", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fecha</th>
                <td>";
        // line 14
        if ($this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "fecha", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "fecha", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pedido_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pedido_edit", array("idpedido" => $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "idpedido", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_077e1b84dab464f51ff87bc08a3bc7a89c55e2f6d28493dd4a192f1f7240528e->leave($__internal_077e1b84dab464f51ff87bc08a3bc7a89c55e2f6d28493dd4a192f1f7240528e_prof);

        
        $__internal_2e6511bc58baf7a2e5f19d940381a4e26698c3989995650e397d79900771641d->leave($__internal_2e6511bc58baf7a2e5f19d940381a4e26698c3989995650e397d79900771641d_prof);

    }

    public function getTemplateName()
    {
        return "pedido/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 29,  88 => 27,  82 => 24,  76 => 21,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Pedido</h1>

    <table>
        <tbody>
            <tr>
                <th>Idpedido</th>
                <td>{{ pedido.idpedido }}</td>
            </tr>
            <tr>
                <th>Fecha</th>
                <td>{% if pedido.fecha %}{{ pedido.fecha|date('Y-m-d') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('pedido_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('pedido_edit', { 'idpedido': pedido.idpedido }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "pedido/show.html.twig", "/home/julian/Julian_Symfony/EFI-Ingsoft/app/Resources/views/pedido/show.html.twig");
    }
}
