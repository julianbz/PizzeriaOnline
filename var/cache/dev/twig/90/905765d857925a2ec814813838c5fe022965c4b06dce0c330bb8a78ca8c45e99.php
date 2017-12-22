<?php

/* base.html.twig */
class __TwigTemplate_0ece4e24c3c79246bde713514b3e0c5ef137f6f29c92a214a7c50585135842f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a7c1319742a57e24bcf6513d89839143515b5507d85b7f793c77cd418ed0020e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7c1319742a57e24bcf6513d89839143515b5507d85b7f793c77cd418ed0020e->enter($__internal_a7c1319742a57e24bcf6513d89839143515b5507d85b7f793c77cd418ed0020e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_e68a715e47ed20d6d193ae1f52c4cfe6ba8af38bc3924a56ff0b0d503502d1dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e68a715e47ed20d6d193ae1f52c4cfe6ba8af38bc3924a56ff0b0d503502d1dc->enter($__internal_e68a715e47ed20d6d193ae1f52c4cfe6ba8af38bc3924a56ff0b0d503502d1dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/Ionicons/css/ionicons.min.css"), "html", null, true);
        echo "\">
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/dist/css/skins/_all-skins.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/morris.js/morris.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\">


</head>


<body class=\"hold-transition skin-blue layout-top-nav\">

";
        // line 25
        $this->displayBlock('header', $context, $blocks);
        // line 26
        echo "
<div class=\"wrapper\">
    <div class=\"content-wrapper\">


            ";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 32
        echo "
    </div>

    ";
        // line 35
        $this->displayBlock('footer', $context, $blocks);
        // line 36
        echo "
</div>

";
        // line 39
        $this->displayBlock('javascripts', $context, $blocks);
        // line 67
        echo "</body>
</html>";
        
        $__internal_a7c1319742a57e24bcf6513d89839143515b5507d85b7f793c77cd418ed0020e->leave($__internal_a7c1319742a57e24bcf6513d89839143515b5507d85b7f793c77cd418ed0020e_prof);

        
        $__internal_e68a715e47ed20d6d193ae1f52c4cfe6ba8af38bc3924a56ff0b0d503502d1dc->leave($__internal_e68a715e47ed20d6d193ae1f52c4cfe6ba8af38bc3924a56ff0b0d503502d1dc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c2b7de8ab45976698fb61930891cd76a4916b5beb6a168fcf6ae2b43380906ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2b7de8ab45976698fb61930891cd76a4916b5beb6a168fcf6ae2b43380906ab->enter($__internal_c2b7de8ab45976698fb61930891cd76a4916b5beb6a168fcf6ae2b43380906ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5e7c09b60392190072ee8d20d0bd43f1ace30eec02bf372ebc1fb837b63232d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e7c09b60392190072ee8d20d0bd43f1ace30eec02bf372ebc1fb837b63232d3->enter($__internal_5e7c09b60392190072ee8d20d0bd43f1ace30eec02bf372ebc1fb837b63232d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenido a PizzaOnline!";
        
        $__internal_5e7c09b60392190072ee8d20d0bd43f1ace30eec02bf372ebc1fb837b63232d3->leave($__internal_5e7c09b60392190072ee8d20d0bd43f1ace30eec02bf372ebc1fb837b63232d3_prof);

        
        $__internal_c2b7de8ab45976698fb61930891cd76a4916b5beb6a168fcf6ae2b43380906ab->leave($__internal_c2b7de8ab45976698fb61930891cd76a4916b5beb6a168fcf6ae2b43380906ab_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_aebe7e3d3726be55926d8efff2b804bc64269fd5a3ef26947a2aaaf32f4a3623 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aebe7e3d3726be55926d8efff2b804bc64269fd5a3ef26947a2aaaf32f4a3623->enter($__internal_aebe7e3d3726be55926d8efff2b804bc64269fd5a3ef26947a2aaaf32f4a3623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a963d5e86dddf641e77346729806d02688dc8064fd01809944c3b32c93df790a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a963d5e86dddf641e77346729806d02688dc8064fd01809944c3b32c93df790a->enter($__internal_a963d5e86dddf641e77346729806d02688dc8064fd01809944c3b32c93df790a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a963d5e86dddf641e77346729806d02688dc8064fd01809944c3b32c93df790a->leave($__internal_a963d5e86dddf641e77346729806d02688dc8064fd01809944c3b32c93df790a_prof);

        
        $__internal_aebe7e3d3726be55926d8efff2b804bc64269fd5a3ef26947a2aaaf32f4a3623->leave($__internal_aebe7e3d3726be55926d8efff2b804bc64269fd5a3ef26947a2aaaf32f4a3623_prof);

    }

    // line 25
    public function block_header($context, array $blocks = array())
    {
        $__internal_0f9723f834f65c4a4ee9fdf36a56dbfc0e7daaf5592d6f44f8ec31c3b5045c2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f9723f834f65c4a4ee9fdf36a56dbfc0e7daaf5592d6f44f8ec31c3b5045c2c->enter($__internal_0f9723f834f65c4a4ee9fdf36a56dbfc0e7daaf5592d6f44f8ec31c3b5045c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_0e2a59474242b84d19ab2904feee57c6d0579b4575da467a4f95e377d351ba37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e2a59474242b84d19ab2904feee57c6d0579b4575da467a4f95e377d351ba37->enter($__internal_0e2a59474242b84d19ab2904feee57c6d0579b4575da467a4f95e377d351ba37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " ";
        $this->loadTemplate("default/header.html.twig", "base.html.twig", 25)->display($context);
        echo " ";
        
        $__internal_0e2a59474242b84d19ab2904feee57c6d0579b4575da467a4f95e377d351ba37->leave($__internal_0e2a59474242b84d19ab2904feee57c6d0579b4575da467a4f95e377d351ba37_prof);

        
        $__internal_0f9723f834f65c4a4ee9fdf36a56dbfc0e7daaf5592d6f44f8ec31c3b5045c2c->leave($__internal_0f9723f834f65c4a4ee9fdf36a56dbfc0e7daaf5592d6f44f8ec31c3b5045c2c_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_b14c1661800447a5a4cafdf1957d9196568d8a794e9605ba23ccb1a7aa80101b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b14c1661800447a5a4cafdf1957d9196568d8a794e9605ba23ccb1a7aa80101b->enter($__internal_b14c1661800447a5a4cafdf1957d9196568d8a794e9605ba23ccb1a7aa80101b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_47382d42b87110c0f7d80e2913bd743cdd500a8bc6426a72b2ddb90ce778d375 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47382d42b87110c0f7d80e2913bd743cdd500a8bc6426a72b2ddb90ce778d375->enter($__internal_47382d42b87110c0f7d80e2913bd743cdd500a8bc6426a72b2ddb90ce778d375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        $this->loadTemplate("default/index.html.twig", "base.html.twig", 31)->display($context);
        echo " ";
        
        $__internal_47382d42b87110c0f7d80e2913bd743cdd500a8bc6426a72b2ddb90ce778d375->leave($__internal_47382d42b87110c0f7d80e2913bd743cdd500a8bc6426a72b2ddb90ce778d375_prof);

        
        $__internal_b14c1661800447a5a4cafdf1957d9196568d8a794e9605ba23ccb1a7aa80101b->leave($__internal_b14c1661800447a5a4cafdf1957d9196568d8a794e9605ba23ccb1a7aa80101b_prof);

    }

    // line 35
    public function block_footer($context, array $blocks = array())
    {
        $__internal_bbfaa389bbb019d12cc07f58e747ba0c695ac2c9adb9f73b67d9bd92a43655cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbfaa389bbb019d12cc07f58e747ba0c695ac2c9adb9f73b67d9bd92a43655cf->enter($__internal_bbfaa389bbb019d12cc07f58e747ba0c695ac2c9adb9f73b67d9bd92a43655cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_efa22cd8d2f94f8c21077a204b94a0b04002598fcffc93c97acdee47454d0d18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efa22cd8d2f94f8c21077a204b94a0b04002598fcffc93c97acdee47454d0d18->enter($__internal_efa22cd8d2f94f8c21077a204b94a0b04002598fcffc93c97acdee47454d0d18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        echo " ";
        $this->loadTemplate("default/footer.html.twig", "base.html.twig", 35)->display($context);
        echo " ";
        
        $__internal_efa22cd8d2f94f8c21077a204b94a0b04002598fcffc93c97acdee47454d0d18->leave($__internal_efa22cd8d2f94f8c21077a204b94a0b04002598fcffc93c97acdee47454d0d18_prof);

        
        $__internal_bbfaa389bbb019d12cc07f58e747ba0c695ac2c9adb9f73b67d9bd92a43655cf->leave($__internal_bbfaa389bbb019d12cc07f58e747ba0c695ac2c9adb9f73b67d9bd92a43655cf_prof);

    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3b638682b67be6a491fa15d81a4d6610549bd904e4b24a5d5aa5074e86ded20d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b638682b67be6a491fa15d81a4d6610549bd904e4b24a5d5aa5074e86ded20d->enter($__internal_3b638682b67be6a491fa15d81a4d6610549bd904e4b24a5d5aa5074e86ded20d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_16da416e09f34d34122c073910e2b90f9e4f8e782134cfa8e84299a90b714203 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16da416e09f34d34122c073910e2b90f9e4f8e782134cfa8e84299a90b714203->enter($__internal_16da416e09f34d34122c073910e2b90f9e4f8e782134cfa8e84299a90b714203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 40
        echo "    <script>
        \$.widget.bridge('uibutton', \$.ui.button);
    </script>
    <script>
        \$(function () {
            \$('#example1').DataTable()
        })
    </script>
    <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/morris.js/morris.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/jquery-knob/dist/jquery.knob.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/fastclick/lib/fastclick.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/dist/js/adminlte.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/datatables.net/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/dist/js/pages/dashboard.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/dist/js/demo.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_16da416e09f34d34122c073910e2b90f9e4f8e782134cfa8e84299a90b714203->leave($__internal_16da416e09f34d34122c073910e2b90f9e4f8e782134cfa8e84299a90b714203_prof);

        
        $__internal_3b638682b67be6a491fa15d81a4d6610549bd904e4b24a5d5aa5074e86ded20d->leave($__internal_3b638682b67be6a491fa15d81a4d6610549bd904e4b24a5d5aa5074e86ded20d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 65,  303 => 64,  299 => 63,  295 => 62,  291 => 61,  287 => 60,  283 => 59,  279 => 58,  275 => 57,  271 => 56,  267 => 55,  263 => 54,  259 => 53,  255 => 52,  251 => 51,  247 => 50,  243 => 49,  239 => 48,  229 => 40,  220 => 39,  200 => 35,  180 => 31,  160 => 25,  143 => 6,  125 => 5,  114 => 67,  112 => 39,  107 => 36,  105 => 35,  100 => 32,  98 => 31,  91 => 26,  89 => 25,  77 => 16,  73 => 15,  69 => 14,  65 => 13,  61 => 12,  57 => 11,  53 => 10,  49 => 9,  43 => 7,  41 => 6,  37 => 5,  31 => 1,);
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
    <meta charset=\"UTF-8\" />
    <title>{% block title %}Bienvenido a PizzaOnline!{% endblock %}</title>
    {% block stylesheets %}{% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />

    <link rel=\"stylesheet\" href=\"{{asset('asset/bower_components/bootstrap/dist/css/bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{asset('asset/bower_components/Ionicons/css/ionicons.min.css') }}\">
    <link href=\"{{asset('asset/bower_components/font-awesome/css/font-awesome.min.css')}}\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{asset('asset/dist/css/AdminLTE.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{asset('asset/dist/css/skins/_all-skins.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{asset('asset/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{asset('asset/bower_components/morris.js/morris.css') }}\">
    <link rel=\"stylesheet\" href=\"{{asset('asset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\">


</head>


<body class=\"hold-transition skin-blue layout-top-nav\">

{% block header %} {% include 'default/header.html.twig' %} {% endblock %}

<div class=\"wrapper\">
    <div class=\"content-wrapper\">


            {% block body %} {% include 'default/index.html.twig' %} {% endblock %}

    </div>

    {% block footer %} {% include 'default/footer.html.twig' %} {% endblock %}

</div>

{% block javascripts %}
    <script>
        \$.widget.bridge('uibutton', \$.ui.button);
    </script>
    <script>
        \$(function () {
            \$('#example1').DataTable()
        })
    </script>
    <script src=\"{{asset('asset/bower_components/jquery/dist/jquery.min.js')}}\"></script>
    <script src=\"{{asset('asset/bower_components/jquery-ui/jquery-ui.min.js')}}\"></script>
    <script src=\"{{asset('asset/bower_components/bootstrap/dist/js/bootstrap.min.js')}}\"></script>
    <script src=\"{{asset('asset/bower_components/raphael/raphael.min.js')}}\"></script>
    <script src=\"{{asset('asset/bower_components/morris.js/morris.min.js')}}\"></script>
    <script src=\"{{asset('asset/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}\"></script>
    <script src=\"{{asset('asset/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}\"></script>
    <script src=\"{{asset('asset/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}\"></script>
    <script src=\"{{asset('asset/bower_components/jquery-knob/dist/jquery.knob.min.js')}}\"></script>
    <script src=\"{{asset('asset/bower_components/moment/min/moment.min.js')}}\"></script>
    <script src=\"{{asset('asset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}\"></script>
    <script src=\"{{asset('asset/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}\"></script>
    <script src=\"{{asset('asset/bower_components/fastclick/lib/fastclick.js')}}\"></script>
    <script src=\"{{asset('asset/dist/js/adminlte.min.js')}}\"></script>
    <script src=\"{{ asset('asset/bower_components/datatables.net/js/jquery.dataTables.min.js') }}\"></script>
    <script src=\"{{ asset('asset/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}\"></script>
    <script src=\"{{asset('asset/dist/js/pages/dashboard.js')}}\"></script>
    <script src=\"{{asset('asset/dist/js/demo.js')}}\"></script>
{% endblock %}
</body>
</html>", "base.html.twig", "/home/julian/Julian_Symfony/EFI-Ingsoft/app/Resources/views/base.html.twig");
    }
}
