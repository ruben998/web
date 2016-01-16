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
        $__internal_5b29c01eab1018e191f4d7197c9a96b55b545453773e0158f514a40443fb3e17 = $this->env->getExtension("native_profiler");
        $__internal_5b29c01eab1018e191f4d7197c9a96b55b545453773e0158f514a40443fb3e17->enter($__internal_5b29c01eab1018e191f4d7197c9a96b55b545453773e0158f514a40443fb3e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
            <a class=\"navbar-brand\" href=\"/\">Ruben Nieto</a>
        </div>
        <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"menu\"><a href=\"bio\">Biografia</a></li>
                <li class=\"dropdown menu\">
                    <a href=\"projects\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        Proyectos
                        <b class=\"caret\"></b>
                    </a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"/projects/1\">Plug in, voluntariat</a></li>
                        <li><a href=\"#\">Assetjats 1714</a></li>
                        <li><a href=\"#\">Bootcamp Incubio</a></li>
                        <li><a href=\"#\">Web personal</a></li>
                    </ul>
                </li>
                <li class=\"menu\"><a href=\"contact\">Contacto</a></li>
            </ul>
        </div>
    </nav>
    <div class=\"container div-main\">
    ";
        // line 47
        $this->displayBlock('body', $context, $blocks);
        // line 50
        echo "    </div>
    ";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        // line 55
        echo "    </body>
</html>
";
        
        $__internal_5b29c01eab1018e191f4d7197c9a96b55b545453773e0158f514a40443fb3e17->leave($__internal_5b29c01eab1018e191f4d7197c9a96b55b545453773e0158f514a40443fb3e17_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2f9c5910615298e883f9bae36236c33bc5b539e503dcfc3f1816d77c69e3748c = $this->env->getExtension("native_profiler");
        $__internal_2f9c5910615298e883f9bae36236c33bc5b539e503dcfc3f1816d77c69e3748c->enter($__internal_2f9c5910615298e883f9bae36236c33bc5b539e503dcfc3f1816d77c69e3748c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ruben Nieto";
        
        $__internal_2f9c5910615298e883f9bae36236c33bc5b539e503dcfc3f1816d77c69e3748c->leave($__internal_2f9c5910615298e883f9bae36236c33bc5b539e503dcfc3f1816d77c69e3748c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_acc2ff16f2856932834bc1633833bf8374eedf5b843251a130d0e9e9207da9b5 = $this->env->getExtension("native_profiler");
        $__internal_acc2ff16f2856932834bc1633833bf8374eedf5b843251a130d0e9e9207da9b5->enter($__internal_acc2ff16f2856932834bc1633833bf8374eedf5b843251a130d0e9e9207da9b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_acc2ff16f2856932834bc1633833bf8374eedf5b843251a130d0e9e9207da9b5->leave($__internal_acc2ff16f2856932834bc1633833bf8374eedf5b843251a130d0e9e9207da9b5_prof);

    }

    // line 47
    public function block_body($context, array $blocks = array())
    {
        $__internal_07a4c6f9270a2bf0e82a08d66e3f0bee5cee18d6d708c4b92b9048d7a0698f1a = $this->env->getExtension("native_profiler");
        $__internal_07a4c6f9270a2bf0e82a08d66e3f0bee5cee18d6d708c4b92b9048d7a0698f1a->enter($__internal_07a4c6f9270a2bf0e82a08d66e3f0bee5cee18d6d708c4b92b9048d7a0698f1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 48
        echo "
    ";
        
        $__internal_07a4c6f9270a2bf0e82a08d66e3f0bee5cee18d6d708c4b92b9048d7a0698f1a->leave($__internal_07a4c6f9270a2bf0e82a08d66e3f0bee5cee18d6d708c4b92b9048d7a0698f1a_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_23176bc65c59ffdc6fd44f76798fb5e9207188dfe13514fe86d4971e0af1f531 = $this->env->getExtension("native_profiler");
        $__internal_23176bc65c59ffdc6fd44f76798fb5e9207188dfe13514fe86d4971e0af1f531->enter($__internal_23176bc65c59ffdc6fd44f76798fb5e9207188dfe13514fe86d4971e0af1f531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/js/ownjs.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_23176bc65c59ffdc6fd44f76798fb5e9207188dfe13514fe86d4971e0af1f531->leave($__internal_23176bc65c59ffdc6fd44f76798fb5e9207188dfe13514fe86d4971e0af1f531_prof);

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
        return array (  156 => 53,  151 => 52,  145 => 51,  137 => 48,  131 => 47,  120 => 6,  108 => 5,  99 => 55,  97 => 51,  94 => 50,  92 => 47,  57 => 15,  50 => 11,  46 => 10,  42 => 9,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
/*             <a class="navbar-brand" href="/">Ruben Nieto</a>*/
/*         </div>*/
/*         <div class="collapse navbar-collapse navbar-ex1-collapse">*/
/*             <ul class="nav navbar-nav">*/
/*                 <li class="menu"><a href="bio">Biografia</a></li>*/
/*                 <li class="dropdown menu">*/
/*                     <a href="projects" class="dropdown-toggle" data-toggle="dropdown">*/
/*                         Proyectos*/
/*                         <b class="caret"></b>*/
/*                     </a>*/
/*                     <ul class="dropdown-menu">*/
/*                         <li><a href="/projects/1">Plug in, voluntariat</a></li>*/
/*                         <li><a href="#">Assetjats 1714</a></li>*/
/*                         <li><a href="#">Bootcamp Incubio</a></li>*/
/*                         <li><a href="#">Web personal</a></li>*/
/*                     </ul>*/
/*                 </li>*/
/*                 <li class="menu"><a href="contact">Contacto</a></li>*/
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
