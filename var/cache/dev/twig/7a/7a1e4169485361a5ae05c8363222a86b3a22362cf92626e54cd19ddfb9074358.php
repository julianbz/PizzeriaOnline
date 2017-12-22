<?php

/* default/asside.html.twig */
class __TwigTemplate_c5d24a2265b9eeb3ac75996ac65fbfa992078cbe750721a1e2bb2c5fc4b57dc1 extends Twig_Template
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
        $__internal_2a97bdeb3f65ed99bc52452b7f02f5fb02b186bdc975666a3f300500ee4be2bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a97bdeb3f65ed99bc52452b7f02f5fb02b186bdc975666a3f300500ee4be2bf->enter($__internal_2a97bdeb3f65ed99bc52452b7f02f5fb02b186bdc975666a3f300500ee4be2bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/asside.html.twig"));

        $__internal_2abe40d7e00909c3e8a874829dcc799750bb9a747251dcbb38893f4407f393b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2abe40d7e00909c3e8a874829dcc799750bb9a747251dcbb38893f4407f393b4->enter($__internal_2abe40d7e00909c3e8a874829dcc799750bb9a747251dcbb38893f4407f393b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/asside.html.twig"));

        // line 1
        echo "<aside class=\"main-sidebar\">
    <section class=\"sidebar\">
        <form action=\"#\" class=\"sidebar-form\" method=\"get\">
            <div class=\"input-group\">
                <input class=\"form-control\" name=\"q\" placeholder=\"Search...\" type=\"text\"/>
                            <span class=\"input-group-btn\">
                                <button class=\"btn btn-flat\" id=\"search-btn\" name=\"search\" type=\"submit\">
                                    <i class=\"fa fa-search\"></i>
                                </button>
                            </span>
            </div>
        </form>
        <ul class=\"sidebar-menu\" data-widget=\"tree\">
            <li class=\"header\">MENU PRINCIPAL</li>
            <li class=\"\">
                <a href=\"pizza\">
                    <i class=\"fa ion-pie-graph\"></i>
                    <span>Productos</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                </a>
            </li>
            <li class=\"treeview\">
                <a href=\"#\">
                    <i class=\"fa fa-th\"></i>
                    <span>Pedidos</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                </a>
                <ul class=\"treeview-menu\">
                    <li>
                        <a href=\"pizzapedido/new\">
                            <i class=\"fa fa-circle-o\"></i>
                            Nuevo
                        </a>
                    </li>
                    <li>
                        <a href=\"pizzapedido/\">
                            <i class=\"fa fa-circle-o\"></i>
                            Ver todos
                        </a>
                    </li>
                </ul>
            </li>

        </ul>
    </section>
</aside>";
        
        $__internal_2a97bdeb3f65ed99bc52452b7f02f5fb02b186bdc975666a3f300500ee4be2bf->leave($__internal_2a97bdeb3f65ed99bc52452b7f02f5fb02b186bdc975666a3f300500ee4be2bf_prof);

        
        $__internal_2abe40d7e00909c3e8a874829dcc799750bb9a747251dcbb38893f4407f393b4->leave($__internal_2abe40d7e00909c3e8a874829dcc799750bb9a747251dcbb38893f4407f393b4_prof);

    }

    public function getTemplateName()
    {
        return "default/asside.html.twig";
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
        return new Twig_Source("<aside class=\"main-sidebar\">
    <section class=\"sidebar\">
        <form action=\"#\" class=\"sidebar-form\" method=\"get\">
            <div class=\"input-group\">
                <input class=\"form-control\" name=\"q\" placeholder=\"Search...\" type=\"text\"/>
                            <span class=\"input-group-btn\">
                                <button class=\"btn btn-flat\" id=\"search-btn\" name=\"search\" type=\"submit\">
                                    <i class=\"fa fa-search\"></i>
                                </button>
                            </span>
            </div>
        </form>
        <ul class=\"sidebar-menu\" data-widget=\"tree\">
            <li class=\"header\">MENU PRINCIPAL</li>
            <li class=\"\">
                <a href=\"pizza\">
                    <i class=\"fa ion-pie-graph\"></i>
                    <span>Productos</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                </a>
            </li>
            <li class=\"treeview\">
                <a href=\"#\">
                    <i class=\"fa fa-th\"></i>
                    <span>Pedidos</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                </a>
                <ul class=\"treeview-menu\">
                    <li>
                        <a href=\"pizzapedido/new\">
                            <i class=\"fa fa-circle-o\"></i>
                            Nuevo
                        </a>
                    </li>
                    <li>
                        <a href=\"pizzapedido/\">
                            <i class=\"fa fa-circle-o\"></i>
                            Ver todos
                        </a>
                    </li>
                </ul>
            </li>

        </ul>
    </section>
</aside>", "default/asside.html.twig", "/home/julian/Julian_Symfony/EFI-Ingsoft/app/Resources/views/default/asside.html.twig");
    }
}
