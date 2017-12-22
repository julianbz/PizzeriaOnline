<?php

/* pizzapedido/show.html.twig */
class __TwigTemplate_b8b01f48c02de11e5e6be0b710b6543f3a6aec75ff28fca72859c762426b655d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pizzapedido/show.html.twig", 1);
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
        $__internal_f091cfdda1394fa51e8725afffe45601feae12fbb927976339802b753ae9a14a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f091cfdda1394fa51e8725afffe45601feae12fbb927976339802b753ae9a14a->enter($__internal_f091cfdda1394fa51e8725afffe45601feae12fbb927976339802b753ae9a14a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pizzapedido/show.html.twig"));

        $__internal_333c3afe5a42190605ec7102ed3625e664997a110896483605b164605fac9297 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_333c3afe5a42190605ec7102ed3625e664997a110896483605b164605fac9297->enter($__internal_333c3afe5a42190605ec7102ed3625e664997a110896483605b164605fac9297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pizzapedido/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f091cfdda1394fa51e8725afffe45601feae12fbb927976339802b753ae9a14a->leave($__internal_f091cfdda1394fa51e8725afffe45601feae12fbb927976339802b753ae9a14a_prof);

        
        $__internal_333c3afe5a42190605ec7102ed3625e664997a110896483605b164605fac9297->leave($__internal_333c3afe5a42190605ec7102ed3625e664997a110896483605b164605fac9297_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_50e7d0a12143f7024db5fde24bf55ee451795e0738c052f7866125e676f7e63b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50e7d0a12143f7024db5fde24bf55ee451795e0738c052f7866125e676f7e63b->enter($__internal_50e7d0a12143f7024db5fde24bf55ee451795e0738c052f7866125e676f7e63b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eeceea088c249a1b222669eaf7be540c9bbba4976f2e62afbd28b2efe645cac1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeceea088c249a1b222669eaf7be540c9bbba4976f2e62afbd28b2efe645cac1->enter($__internal_eeceea088c249a1b222669eaf7be540c9bbba4976f2e62afbd28b2efe645cac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Pizzapedido</h1>

    <table>
        <tbody>
            <tr>
                <th>Idpizzapedido</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pizzapedido"]) ? $context["pizzapedido"] : $this->getContext($context, "pizzapedido")), "idpizzapedido", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pizzapedido_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pizzapedido_edit", array("idpizzapedido" => $this->getAttribute((isset($context["pizzapedido"]) ? $context["pizzapedido"] : $this->getContext($context, "pizzapedido")), "idpizzapedido", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_eeceea088c249a1b222669eaf7be540c9bbba4976f2e62afbd28b2efe645cac1->leave($__internal_eeceea088c249a1b222669eaf7be540c9bbba4976f2e62afbd28b2efe645cac1_prof);

        
        $__internal_50e7d0a12143f7024db5fde24bf55ee451795e0738c052f7866125e676f7e63b->leave($__internal_50e7d0a12143f7024db5fde24bf55ee451795e0738c052f7866125e676f7e63b_prof);

    }

    public function getTemplateName()
    {
        return "pizzapedido/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 25,  79 => 23,  73 => 20,  67 => 17,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Pizzapedido</h1>

    <table>
        <tbody>
            <tr>
                <th>Idpizzapedido</th>
                <td>{{ pizzapedido.idpizzapedido }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('pizzapedido_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('pizzapedido_edit', { 'idpizzapedido': pizzapedido.idpizzapedido }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "pizzapedido/show.html.twig", "/home/julian/Julian_Symfony/EFI-Ingsoft/app/Resources/views/pizzapedido/show.html.twig");
    }
}
