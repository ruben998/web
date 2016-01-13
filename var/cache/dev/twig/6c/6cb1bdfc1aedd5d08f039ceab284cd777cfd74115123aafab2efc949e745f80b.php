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
        $__internal_660b4ebbfcf152553c6d8b9a91d19dda212024e09990f8b350a21b7586991e11 = $this->env->getExtension("native_profiler");
        $__internal_660b4ebbfcf152553c6d8b9a91d19dda212024e09990f8b350a21b7586991e11->enter($__internal_660b4ebbfcf152553c6d8b9a91d19dda212024e09990f8b350a21b7586991e11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_660b4ebbfcf152553c6d8b9a91d19dda212024e09990f8b350a21b7586991e11->leave($__internal_660b4ebbfcf152553c6d8b9a91d19dda212024e09990f8b350a21b7586991e11_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9c74b80de5619667794bf61f21777b550cab4c22fd1b49844a8fde65b569459b = $this->env->getExtension("native_profiler");
        $__internal_9c74b80de5619667794bf61f21777b550cab4c22fd1b49844a8fde65b569459b->enter($__internal_9c74b80de5619667794bf61f21777b550cab4c22fd1b49844a8fde65b569459b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ruben Nieto";
        
        $__internal_9c74b80de5619667794bf61f21777b550cab4c22fd1b49844a8fde65b569459b->leave($__internal_9c74b80de5619667794bf61f21777b550cab4c22fd1b49844a8fde65b569459b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f4c9dac364c0fb34aa6fedcbe8c53dd64cd65aa66f91cb3289ef52d35af6d633 = $this->env->getExtension("native_profiler");
        $__internal_f4c9dac364c0fb34aa6fedcbe8c53dd64cd65aa66f91cb3289ef52d35af6d633->enter($__internal_f4c9dac364c0fb34aa6fedcbe8c53dd64cd65aa66f91cb3289ef52d35af6d633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f4c9dac364c0fb34aa6fedcbe8c53dd64cd65aa66f91cb3289ef52d35af6d633->leave($__internal_f4c9dac364c0fb34aa6fedcbe8c53dd64cd65aa66f91cb3289ef52d35af6d633_prof);

    }

    // line 47
    public function block_body($context, array $blocks = array())
    {
        $__internal_503d17009350c3f7a38526c35da2ab75faf6e6f2d505dbd4580892afcd16596c = $this->env->getExtension("native_profiler");
        $__internal_503d17009350c3f7a38526c35da2ab75faf6e6f2d505dbd4580892afcd16596c->enter($__internal_503d17009350c3f7a38526c35da2ab75faf6e6f2d505dbd4580892afcd16596c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 48
        echo "
    ";
        
        $__internal_503d17009350c3f7a38526c35da2ab75faf6e6f2d505dbd4580892afcd16596c->leave($__internal_503d17009350c3f7a38526c35da2ab75faf6e6f2d505dbd4580892afcd16596c_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9810cb02c92fa22aa4b67fa051c2c82239d825e4ea375d25e071a2088fdbb66c = $this->env->getExtension("native_profiler");
        $__internal_9810cb02c92fa22aa4b67fa051c2c82239d825e4ea375d25e071a2088fdbb66c->enter($__internal_9810cb02c92fa22aa4b67fa051c2c82239d825e4ea375d25e071a2088fdbb66c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/js/ownjs.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_9810cb02c92fa22aa4b67fa051c2c82239d825e4ea375d25e071a2088fdbb66c->leave($__internal_9810cb02c92fa22aa4b67fa051c2c82239d825e4ea375d25e071a2088fdbb66c_prof);

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
        return array (  153 => 53,  148 => 52,  142 => 51,  134 => 48,  128 => 47,  117 => 6,  105 => 5,  96 => 55,  94 => 51,  91 => 50,  89 => 47,  50 => 11,  46 => 10,  42 => 9,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
