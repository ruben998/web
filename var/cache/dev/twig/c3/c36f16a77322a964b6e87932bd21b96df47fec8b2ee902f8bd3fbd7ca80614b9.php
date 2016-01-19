<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_20f0ef0adb19a6af59765366e9b08ae08ba6ad340b5cedff1a9054cbb68e1eb8 extends Twig_Template
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
        $__internal_e34b1f1d4cb2c717c1bcc6e7a2c5ff892770d6496a3ac4c5796c29d4661ec9ec = $this->env->getExtension("native_profiler");
        $__internal_e34b1f1d4cb2c717c1bcc6e7a2c5ff892770d6496a3ac4c5796c29d4661ec9ec->enter($__internal_e34b1f1d4cb2c717c1bcc6e7a2c5ff892770d6496a3ac4c5796c29d4661ec9ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_e34b1f1d4cb2c717c1bcc6e7a2c5ff892770d6496a3ac4c5796c29d4661ec9ec->leave($__internal_e34b1f1d4cb2c717c1bcc6e7a2c5ff892770d6496a3ac4c5796c29d4661ec9ec_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
