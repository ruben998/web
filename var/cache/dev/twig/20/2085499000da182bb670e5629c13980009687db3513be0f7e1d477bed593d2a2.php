<?php

/* base.html.twig */
class __TwigTemplate_0e2cd2e2ccfca6e8834860c6d83a836a5d9a9e4645c7f92e86564f7d2a8bbc16 extends Twig_Template
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
        $__internal_4f8754c78a82025170c9ca88c8e54f5479b7571f12eac1d4c0e6931135739094 = $this->env->getExtension("native_profiler");
        $__internal_4f8754c78a82025170c9ca88c8e54f5479b7571f12eac1d4c0e6931135739094->enter($__internal_4f8754c78a82025170c9ca88c8e54f5479b7571f12eac1d4c0e6931135739094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_4f8754c78a82025170c9ca88c8e54f5479b7571f12eac1d4c0e6931135739094->leave($__internal_4f8754c78a82025170c9ca88c8e54f5479b7571f12eac1d4c0e6931135739094_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_45783b707418a3200c3209ffe6248858c344edfa1d8a12737ce7a8ab951aabb6 = $this->env->getExtension("native_profiler");
        $__internal_45783b707418a3200c3209ffe6248858c344edfa1d8a12737ce7a8ab951aabb6->enter($__internal_45783b707418a3200c3209ffe6248858c344edfa1d8a12737ce7a8ab951aabb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ruben Nieto";
        
        $__internal_45783b707418a3200c3209ffe6248858c344edfa1d8a12737ce7a8ab951aabb6->leave($__internal_45783b707418a3200c3209ffe6248858c344edfa1d8a12737ce7a8ab951aabb6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e6d3e1b32635c37e87092d72510ba6451b32f98d7acd4108d9f4073d893f703f = $this->env->getExtension("native_profiler");
        $__internal_e6d3e1b32635c37e87092d72510ba6451b32f98d7acd4108d9f4073d893f703f->enter($__internal_e6d3e1b32635c37e87092d72510ba6451b32f98d7acd4108d9f4073d893f703f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e6d3e1b32635c37e87092d72510ba6451b32f98d7acd4108d9f4073d893f703f->leave($__internal_e6d3e1b32635c37e87092d72510ba6451b32f98d7acd4108d9f4073d893f703f_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9504b8aa1e132035487bfc804fb3a7b80137cfff0e1ad2d3e549e89b9331312 = $this->env->getExtension("native_profiler");
        $__internal_f9504b8aa1e132035487bfc804fb3a7b80137cfff0e1ad2d3e549e89b9331312->enter($__internal_f9504b8aa1e132035487bfc804fb3a7b80137cfff0e1ad2d3e549e89b9331312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 37
        echo "
    ";
        
        $__internal_f9504b8aa1e132035487bfc804fb3a7b80137cfff0e1ad2d3e549e89b9331312->leave($__internal_f9504b8aa1e132035487bfc804fb3a7b80137cfff0e1ad2d3e549e89b9331312_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dae91c97e3bd2068b55d5a3d9eb82fd91195a47512d1a57d9e9e4ac3a1a440f1 = $this->env->getExtension("native_profiler");
        $__internal_dae91c97e3bd2068b55d5a3d9eb82fd91195a47512d1a57d9e9e4ac3a1a440f1->enter($__internal_dae91c97e3bd2068b55d5a3d9eb82fd91195a47512d1a57d9e9e4ac3a1a440f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 41
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/js/ownjs.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_dae91c97e3bd2068b55d5a3d9eb82fd91195a47512d1a57d9e9e4ac3a1a440f1->leave($__internal_dae91c97e3bd2068b55d5a3d9eb82fd91195a47512d1a57d9e9e4ac3a1a440f1_prof);

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
