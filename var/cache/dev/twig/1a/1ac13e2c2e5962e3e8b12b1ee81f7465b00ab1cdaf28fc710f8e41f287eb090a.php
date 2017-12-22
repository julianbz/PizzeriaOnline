<?php

/* default/header.html.twig */
class __TwigTemplate_e1b4e663986ff719088388c6520e6da4107dcb31dd11015f7ca4611fe4337ac6 extends Twig_Template
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
        $__internal_f537254ca88a6be8a64cdd455035c195738e99976f85e15631cb691dcbc0700b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f537254ca88a6be8a64cdd455035c195738e99976f85e15631cb691dcbc0700b->enter($__internal_f537254ca88a6be8a64cdd455035c195738e99976f85e15631cb691dcbc0700b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/header.html.twig"));

        $__internal_d67e6b5e3cd4b21099bab9a6066ab12fa25b5752235a3ff46e14ea68977017d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d67e6b5e3cd4b21099bab9a6066ab12fa25b5752235a3ff46e14ea68977017d7->enter($__internal_d67e6b5e3cd4b21099bab9a6066ab12fa25b5752235a3ff46e14ea68977017d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/header.html.twig"));

        // line 1
        echo "<header class=\"main-header\">
    <nav class=\"navbar navbar-static-top\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <a href=\"../../index2.html\" class=\"navbar-brand\"><b>Pizzeria</b>Online</a>
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
                    <i class=\"fa fa-bars\"></i>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse pull-left\" id=\"navbar-collapse\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"\"><a href=\"/pizza\">Pizzas <span class=\"sr-only\">(current)</span></a></li>
                    <li><a href=\"/pedido\">Pedidos</a></li>

                </ul>

            </div>
            <!-- /.navbar-collapse -->
            <!-- Navbar Right Menu -->
            <div class=\"navbar-custom-menu\">
                <ul class=\"nav navbar-nav\">
                    <!-- Messages: style can be found in dropdown.less-->

                    <!-- /.messages-menu -->


                    <!-- User Account Menu -->
                    <li class=\"dropdown user user-menu\">
                        <!-- Menu Toggle Button -->
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <!-- The user image in the navbar-->
                            <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\">
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class=\"hidden-xs\">Julian Baez</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <!-- The user image in the menu -->
                            <li class=\"user-header\">
                                <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">

                                <p>
                                    Julian Baez
                                    <small>Estudiante en Desarrollo de Software</small>
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class=\"user-footer\">
                                <div class=\"pull-left\">
                                    <a href=\"#\" class=\"btn btn-default btn-flat\">Profile</a>
                                </div>
                                <div class=\"pull-right\">
                                    <a href=\"#\" class=\"btn btn-default btn-flat\">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-custom-menu -->
        </div>
        <!-- /.container-fluid -->
    </nav>
</header>";
        
        $__internal_f537254ca88a6be8a64cdd455035c195738e99976f85e15631cb691dcbc0700b->leave($__internal_f537254ca88a6be8a64cdd455035c195738e99976f85e15631cb691dcbc0700b_prof);

        
        $__internal_d67e6b5e3cd4b21099bab9a6066ab12fa25b5752235a3ff46e14ea68977017d7->leave($__internal_d67e6b5e3cd4b21099bab9a6066ab12fa25b5752235a3ff46e14ea68977017d7_prof);

    }

    public function getTemplateName()
    {
        return "default/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 41,  60 => 34,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header class=\"main-header\">
    <nav class=\"navbar navbar-static-top\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <a href=\"../../index2.html\" class=\"navbar-brand\"><b>Pizzeria</b>Online</a>
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
                    <i class=\"fa fa-bars\"></i>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse pull-left\" id=\"navbar-collapse\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"\"><a href=\"/pizza\">Pizzas <span class=\"sr-only\">(current)</span></a></li>
                    <li><a href=\"/pedido\">Pedidos</a></li>

                </ul>

            </div>
            <!-- /.navbar-collapse -->
            <!-- Navbar Right Menu -->
            <div class=\"navbar-custom-menu\">
                <ul class=\"nav navbar-nav\">
                    <!-- Messages: style can be found in dropdown.less-->

                    <!-- /.messages-menu -->


                    <!-- User Account Menu -->
                    <li class=\"dropdown user user-menu\">
                        <!-- Menu Toggle Button -->
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <!-- The user image in the navbar-->
                            <img src=\"{{ asset('asset/dist/img/user2-160x160.jpg')}}\" class=\"user-image\" alt=\"User Image\">
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class=\"hidden-xs\">Julian Baez</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <!-- The user image in the menu -->
                            <li class=\"user-header\">
                                <img src=\"{{ asset('asset/dist/img/user2-160x160.jpg') }}\" class=\"img-circle\" alt=\"User Image\">

                                <p>
                                    Julian Baez
                                    <small>Estudiante en Desarrollo de Software</small>
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class=\"user-footer\">
                                <div class=\"pull-left\">
                                    <a href=\"#\" class=\"btn btn-default btn-flat\">Profile</a>
                                </div>
                                <div class=\"pull-right\">
                                    <a href=\"#\" class=\"btn btn-default btn-flat\">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-custom-menu -->
        </div>
        <!-- /.container-fluid -->
    </nav>
</header>", "default/header.html.twig", "/home/julian/Julian_Symfony/EFI-Ingsoft/app/Resources/views/default/header.html.twig");
    }
}
