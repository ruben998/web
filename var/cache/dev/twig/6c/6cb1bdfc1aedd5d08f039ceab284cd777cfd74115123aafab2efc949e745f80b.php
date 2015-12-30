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
        $__internal_f474ac811637b16b948bd44fdc915f3d8cd496cca77cb639861f6ce768483aa4 = $this->env->getExtension("native_profiler");
        $__internal_f474ac811637b16b948bd44fdc915f3d8cd496cca77cb639861f6ce768483aa4->enter($__internal_f474ac811637b16b948bd44fdc915f3d8cd496cca77cb639861f6ce768483aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
    <body background=\"bundles/framework/images/background.png\">

    <nav class=\"navbar navbar-default navbar-fixed-top navbar-inverse\" role=\"navigation\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\"
                    data-target=\".navbar-ex1-collapse\">
                <span class=\"sr-only\">Desplegar navegación</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"/\">Ruben Nieto</a>
        </div>
        <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"menu\"><a href=\"/\">Biografia</a></li>
                <li class=\"dropdown menu\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        Proyectos
                        <b class=\"caret\"></b>
                    </a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">Assetjats 1714</a></li>
                        <li><a href=\"#\">Bootcamp Incubio</a></li>
                        <li><a href=\"#\">Web personal</a></li>
                    </ul>
                </li>
                <li class=\"menu\"><a href=\"contact\">Contacto</a></li>
            </ul>
        </div>
    </nav>
        ";
        // line 46
        $this->displayBlock('body', $context, $blocks);
        // line 49
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 53
        echo "    </body>
</html>
";
        
        $__internal_f474ac811637b16b948bd44fdc915f3d8cd496cca77cb639861f6ce768483aa4->leave($__internal_f474ac811637b16b948bd44fdc915f3d8cd496cca77cb639861f6ce768483aa4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f6e663e7c5b2055a621da1ecf2c91f544e18f8fe3a5d541071d61a26feef026 = $this->env->getExtension("native_profiler");
        $__internal_3f6e663e7c5b2055a621da1ecf2c91f544e18f8fe3a5d541071d61a26feef026->enter($__internal_3f6e663e7c5b2055a621da1ecf2c91f544e18f8fe3a5d541071d61a26feef026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ruben Nieto";
        
        $__internal_3f6e663e7c5b2055a621da1ecf2c91f544e18f8fe3a5d541071d61a26feef026->leave($__internal_3f6e663e7c5b2055a621da1ecf2c91f544e18f8fe3a5d541071d61a26feef026_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1e23185455abea008c1ffeddb58d54834b1703d85d2e1dedcb7c1cbe3a1299b4 = $this->env->getExtension("native_profiler");
        $__internal_1e23185455abea008c1ffeddb58d54834b1703d85d2e1dedcb7c1cbe3a1299b4->enter($__internal_1e23185455abea008c1ffeddb58d54834b1703d85d2e1dedcb7c1cbe3a1299b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1e23185455abea008c1ffeddb58d54834b1703d85d2e1dedcb7c1cbe3a1299b4->leave($__internal_1e23185455abea008c1ffeddb58d54834b1703d85d2e1dedcb7c1cbe3a1299b4_prof);

    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        $__internal_98fbddba31fdd00264a696a3b9edd32bf4da01117175e1e42dc29e7e9eeca1ef = $this->env->getExtension("native_profiler");
        $__internal_98fbddba31fdd00264a696a3b9edd32bf4da01117175e1e42dc29e7e9eeca1ef->enter($__internal_98fbddba31fdd00264a696a3b9edd32bf4da01117175e1e42dc29e7e9eeca1ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 47
        echo "
        ";
        
        $__internal_98fbddba31fdd00264a696a3b9edd32bf4da01117175e1e42dc29e7e9eeca1ef->leave($__internal_98fbddba31fdd00264a696a3b9edd32bf4da01117175e1e42dc29e7e9eeca1ef_prof);

    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_84fee70692cc5fbfd0d86fcaebfd7ec24bffa2d463817b8583195a9fbfbaab7c = $this->env->getExtension("native_profiler");
        $__internal_84fee70692cc5fbfd0d86fcaebfd7ec24bffa2d463817b8583195a9fbfbaab7c->enter($__internal_84fee70692cc5fbfd0d86fcaebfd7ec24bffa2d463817b8583195a9fbfbaab7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 50
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/js/ownjs.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_84fee70692cc5fbfd0d86fcaebfd7ec24bffa2d463817b8583195a9fbfbaab7c->leave($__internal_84fee70692cc5fbfd0d86fcaebfd7ec24bffa2d463817b8583195a9fbfbaab7c_prof);

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
        return array (  150 => 51,  145 => 50,  139 => 49,  131 => 47,  125 => 46,  114 => 6,  102 => 5,  93 => 53,  90 => 49,  88 => 46,  50 => 11,  46 => 10,  42 => 9,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
/*     <body background="bundles/framework/images/background.png">*/
/* */
/*     <nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">*/
/*         <div class="navbar-header">*/
/*             <button type="button" class="navbar-toggle" data-toggle="collapse"*/
/*                     data-target=".navbar-ex1-collapse">*/
/*                 <span class="sr-only">Desplegar navegación</span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*             </button>*/
/*             <a class="navbar-brand" href="/">Ruben Nieto</a>*/
/*         </div>*/
/*         <div class="collapse navbar-collapse navbar-ex1-collapse">*/
/*             <ul class="nav navbar-nav">*/
/*                 <li class="menu"><a href="/">Biografia</a></li>*/
/*                 <li class="dropdown menu">*/
/*                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*                         Proyectos*/
/*                         <b class="caret"></b>*/
/*                     </a>*/
/*                     <ul class="dropdown-menu">*/
/*                         <li><a href="#">Assetjats 1714</a></li>*/
/*                         <li><a href="#">Bootcamp Incubio</a></li>*/
/*                         <li><a href="#">Web personal</a></li>*/
/*                     </ul>*/
/*                 </li>*/
/*                 <li class="menu"><a href="contact">Contacto</a></li>*/
/*             </ul>*/
/*         </div>*/
/*     </nav>*/
/*         {% block body %}*/
/* */
/*         {% endblock %}*/
/*         {% block javascripts %}*/
/*             <script type="text/javascript" src="{{ asset('bundles/framework/js/bootstrap.min.js') }}"></script>*/
/*             <script type="text/javascript" src="{{ asset('bundles/framework/js/ownjs.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
