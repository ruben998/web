<?php

/* base.html.twig */
class __TwigTemplate_95fda8794f11b016b2dd89ceb36cef000ec73b8f2eff6800eb0c7e544c5d9bc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_306a8d24e28c176229659b300a4b8be25961401649422f331a9b79e3b9fdf221 = $this->env->getExtension("native_profiler");
        $__internal_306a8d24e28c176229659b300a4b8be25961401649422f331a9b79e3b9fdf221->enter($__internal_306a8d24e28c176229659b300a4b8be25961401649422f331a9b79e3b9fdf221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo "        <!-- Latest compiled and minified CSS -->
        <meta name=\"viewport\" content=\"width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/ownstyle.css"), "html", null, true);
        echo "\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js\"></script>

    </head>
    <body background=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/images/background.png"), "html", null, true);
        echo "\">
    <nav class=\"navbar navbar-default navbar-fixed-top navbar-inverse\" role=\"navigation\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\"
                    data-target=\".navbar-ex1-collapse\">
                <span class=\"sr-only\">Desplegar navegación</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\"><p class=\"homepage\">Rubén Nieto</p></a>
        </div>
        <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
            <ul class=\"nav navbar-nav\">
                <li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("biografia");
        echo "\">Biografia</a></li>
                <li><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("projects_index");
        echo "  \">Proyectos</a></li>
                <li><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("contact");
        echo "\">Contacto</a></li>
            </ul>
        </div>
    </nav>
    <div class=\"container div-main\">
    ";
        // line 36
        $this->displayBlock('body', $context, $blocks);
        // line 39
        echo "    </div>
    ";
        // line 40
        $this->displayBlock('javascripts', $context, $blocks);
        // line 44
        echo "    </body>
</html>
";
        
        $__internal_306a8d24e28c176229659b300a4b8be25961401649422f331a9b79e3b9fdf221->leave($__internal_306a8d24e28c176229659b300a4b8be25961401649422f331a9b79e3b9fdf221_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d648a8d6fe591143b3e3c7630fcc56629da19a034d2e02fa3d933ebd12f917f1 = $this->env->getExtension("native_profiler");
        $__internal_d648a8d6fe591143b3e3c7630fcc56629da19a034d2e02fa3d933ebd12f917f1->enter($__internal_d648a8d6fe591143b3e3c7630fcc56629da19a034d2e02fa3d933ebd12f917f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ruben Nieto";
        
        $__internal_d648a8d6fe591143b3e3c7630fcc56629da19a034d2e02fa3d933ebd12f917f1->leave($__internal_d648a8d6fe591143b3e3c7630fcc56629da19a034d2e02fa3d933ebd12f917f1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c166f7277055d6c9bd44cb5dd618dee66fc1c2f3511da77044b5bb2a6e5cff08 = $this->env->getExtension("native_profiler");
        $__internal_c166f7277055d6c9bd44cb5dd618dee66fc1c2f3511da77044b5bb2a6e5cff08->enter($__internal_c166f7277055d6c9bd44cb5dd618dee66fc1c2f3511da77044b5bb2a6e5cff08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c166f7277055d6c9bd44cb5dd618dee66fc1c2f3511da77044b5bb2a6e5cff08->leave($__internal_c166f7277055d6c9bd44cb5dd618dee66fc1c2f3511da77044b5bb2a6e5cff08_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ad62a9adc661e35e80898b6f7350b944444de1b075ef5825cc311a2cb8db022 = $this->env->getExtension("native_profiler");
        $__internal_4ad62a9adc661e35e80898b6f7350b944444de1b075ef5825cc311a2cb8db022->enter($__internal_4ad62a9adc661e35e80898b6f7350b944444de1b075ef5825cc311a2cb8db022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 37
        echo "
    ";
        
        $__internal_4ad62a9adc661e35e80898b6f7350b944444de1b075ef5825cc311a2cb8db022->leave($__internal_4ad62a9adc661e35e80898b6f7350b944444de1b075ef5825cc311a2cb8db022_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7fdca746fa3e093486dbf6dd9bec5b0c4365e1196b315148623595284993b03c = $this->env->getExtension("native_profiler");
        $__internal_7fdca746fa3e093486dbf6dd9bec5b0c4365e1196b315148623595284993b03c->enter($__internal_7fdca746fa3e093486dbf6dd9bec5b0c4365e1196b315148623595284993b03c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 41
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/js/ownjs.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_7fdca746fa3e093486dbf6dd9bec5b0c4365e1196b315148623595284993b03c->leave($__internal_7fdca746fa3e093486dbf6dd9bec5b0c4365e1196b315148623595284993b03c_prof);

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
        return array (  157 => 42,  152 => 41,  146 => 40,  138 => 37,  132 => 36,  121 => 6,  109 => 5,  100 => 44,  98 => 40,  95 => 39,  93 => 36,  85 => 31,  81 => 30,  77 => 29,  70 => 25,  57 => 15,  50 => 11,  46 => 10,  42 => 9,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Ruben Nieto{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <!-- Latest compiled and minified CSS -->*/
/*         <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0">*/
/*         <link rel="stylesheet" href="{{ asset('bundles/framework/css/bootstrap.min.css') }}">*/
/*         <link rel="stylesheet" href="{{ asset('bundles/framework/css/ownstyle.css') }}">*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>*/
/* */
/*     </head>*/
/*     <body background="{{ asset('bundles/framework/images/background.png') }}">*/
/*     <nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">*/
/*         <div class="navbar-header">*/
/*             <button type="button" class="navbar-toggle" data-toggle="collapse"*/
/*                     data-target=".navbar-ex1-collapse">*/
/*                 <span class="sr-only">Desplegar navegación</span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*             </button>*/
/*             <a class="navbar-brand" href="{{ path('homepage') }}"><p class="homepage">Rubén Nieto</p></a>*/
/*         </div>*/
/*         <div class="collapse navbar-collapse navbar-ex1-collapse">*/
/*             <ul class="nav navbar-nav">*/
/*                 <li><a href="{{ path('biografia') }}">Biografia</a></li>*/
/*                 <li><a href="{{ path('projects_index') }}  ">Proyectos</a></li>*/
/*                 <li><a href="{{ path('contact') }}">Contacto</a></li>*/
/*             </ul>*/
/*         </div>*/
/*     </nav>*/
/*     <div class="container div-main">*/
/*     {% block body %}*/
/* */
/*     {% endblock %}*/
/*     </div>*/
/*     {% block javascripts %}*/
/*         <script type="text/javascript" src="{{ asset('bundles/framework/js/bootstrap.min.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('bundles/framework/js/ownjs.js') }}"></script>*/
/*     {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
