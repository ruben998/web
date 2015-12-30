<?php

/* base.html.twig */
class __TwigTemplate_983ba8b69290feb67b700c8ead86717dc08978077e2b716836cb41da6a71ed23 extends Twig_Template
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
        $__internal_449bec30a5d513f0eab9168478e029fa8d9a41721d8ba0f067291100f23aab35 = $this->env->getExtension("native_profiler");
        $__internal_449bec30a5d513f0eab9168478e029fa8d9a41721d8ba0f067291100f23aab35->enter($__internal_449bec30a5d513f0eab9168478e029fa8d9a41721d8ba0f067291100f23aab35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
            <a class=\"navbar-brand\" href=\"#\">Ruben Nieto</a>
        </div>
        <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"menu\"><a href=\"#\">Biografia</a></li>
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
                <li class=\"menu\"><a href=\"#\">Contacto</a></li>
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
        
        $__internal_449bec30a5d513f0eab9168478e029fa8d9a41721d8ba0f067291100f23aab35->leave($__internal_449bec30a5d513f0eab9168478e029fa8d9a41721d8ba0f067291100f23aab35_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8659e00886bcce58fdcba58887cf69b36aa8e9e315a967526c1cbd00de23b94b = $this->env->getExtension("native_profiler");
        $__internal_8659e00886bcce58fdcba58887cf69b36aa8e9e315a967526c1cbd00de23b94b->enter($__internal_8659e00886bcce58fdcba58887cf69b36aa8e9e315a967526c1cbd00de23b94b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ruben Nieto";
        
        $__internal_8659e00886bcce58fdcba58887cf69b36aa8e9e315a967526c1cbd00de23b94b->leave($__internal_8659e00886bcce58fdcba58887cf69b36aa8e9e315a967526c1cbd00de23b94b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cf22526b9ae0790dfb0af2650b09ff1cbe2b59851d668d23b3e470714762b4ff = $this->env->getExtension("native_profiler");
        $__internal_cf22526b9ae0790dfb0af2650b09ff1cbe2b59851d668d23b3e470714762b4ff->enter($__internal_cf22526b9ae0790dfb0af2650b09ff1cbe2b59851d668d23b3e470714762b4ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_cf22526b9ae0790dfb0af2650b09ff1cbe2b59851d668d23b3e470714762b4ff->leave($__internal_cf22526b9ae0790dfb0af2650b09ff1cbe2b59851d668d23b3e470714762b4ff_prof);

    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        $__internal_c27fbaae5c2c195cfeb5c24d735e6682ad98a3de1864abe4e0e68867ef874b3f = $this->env->getExtension("native_profiler");
        $__internal_c27fbaae5c2c195cfeb5c24d735e6682ad98a3de1864abe4e0e68867ef874b3f->enter($__internal_c27fbaae5c2c195cfeb5c24d735e6682ad98a3de1864abe4e0e68867ef874b3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 47
        echo "
        ";
        
        $__internal_c27fbaae5c2c195cfeb5c24d735e6682ad98a3de1864abe4e0e68867ef874b3f->leave($__internal_c27fbaae5c2c195cfeb5c24d735e6682ad98a3de1864abe4e0e68867ef874b3f_prof);

    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0b4f108750b39b8130a0b670f6dd47d6483c8c695d4f8ec1f4ec4718b1b1df10 = $this->env->getExtension("native_profiler");
        $__internal_0b4f108750b39b8130a0b670f6dd47d6483c8c695d4f8ec1f4ec4718b1b1df10->enter($__internal_0b4f108750b39b8130a0b670f6dd47d6483c8c695d4f8ec1f4ec4718b1b1df10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 50
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/js/ownjs.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_0b4f108750b39b8130a0b670f6dd47d6483c8c695d4f8ec1f4ec4718b1b1df10->leave($__internal_0b4f108750b39b8130a0b670f6dd47d6483c8c695d4f8ec1f4ec4718b1b1df10_prof);

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
/*             <a class="navbar-brand" href="#">Ruben Nieto</a>*/
/*         </div>*/
/*         <div class="collapse navbar-collapse navbar-ex1-collapse">*/
/*             <ul class="nav navbar-nav">*/
/*                 <li class="menu"><a href="#">Biografia</a></li>*/
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
/*                 <li class="menu"><a href="#">Contacto</a></li>*/
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
