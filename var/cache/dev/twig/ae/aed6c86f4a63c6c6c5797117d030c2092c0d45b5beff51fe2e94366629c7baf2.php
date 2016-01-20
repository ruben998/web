<?php

/* default/index.html.twig */
class __TwigTemplate_542ff745dc0583d63782937f78c04d28365d2df410bce8af046bb607064b30cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a0136e7782acb851780ac9261b9bd5202b1ddcd77df81184865d53b5fb128c9 = $this->env->getExtension("native_profiler");
        $__internal_7a0136e7782acb851780ac9261b9bd5202b1ddcd77df81184865d53b5fb128c9->enter($__internal_7a0136e7782acb851780ac9261b9bd5202b1ddcd77df81184865d53b5fb128c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a0136e7782acb851780ac9261b9bd5202b1ddcd77df81184865d53b5fb128c9->leave($__internal_7a0136e7782acb851780ac9261b9bd5202b1ddcd77df81184865d53b5fb128c9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_23d45f710737a5e79d933e95ecb2b2abbc3f01ea63b39cfd9d3fb0532e97fb06 = $this->env->getExtension("native_profiler");
        $__internal_23d45f710737a5e79d933e95ecb2b2abbc3f01ea63b39cfd9d3fb0532e97fb06->enter($__internal_23d45f710737a5e79d933e95ecb2b2abbc3f01ea63b39cfd9d3fb0532e97fb06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"jumbotron div-jumbotron\" align=\"center\">
        <img style=\"margin-top: 0.65em;\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/images/ruben.png"), "html", null, true);
        echo "\" align=\"right\" >
        <h1 class=\"letter\">RUBÉN &nbsp; NIETO</h1>
        <p>Página personal</p>
    </div>
    <div align=\"center\" class=\"col-md-4\">
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("biografia");
        echo "\"><p class=\"div-btn\">Biografia</p></a>
    </div>
    <div align=\"center\" class=\"col-md-4\">
        <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("projects_index");
        echo "\"><p class=\"div-btn\">Proyectos</p></a>
    </div>
    <div align=\"center\" class=\"col-md-4\">
        <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("contact");
        echo "\"><p class=\"div-btn\">Contacto</p></a>
    </div>
";
        
        $__internal_23d45f710737a5e79d933e95ecb2b2abbc3f01ea63b39cfd9d3fb0532e97fb06->leave($__internal_23d45f710737a5e79d933e95ecb2b2abbc3f01ea63b39cfd9d3fb0532e97fb06_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 16,  57 => 13,  51 => 10,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="jumbotron div-jumbotron" align="center">*/
/*         <img style="margin-top: 0.65em;" src="{{ asset('bundles/framework/images/ruben.png') }}" align="right" >*/
/*         <h1 class="letter">RUBÉN &nbsp; NIETO</h1>*/
/*         <p>Página personal</p>*/
/*     </div>*/
/*     <div align="center" class="col-md-4">*/
/*         <a href="{{ path('biografia') }}"><p class="div-btn">Biografia</p></a>*/
/*     </div>*/
/*     <div align="center" class="col-md-4">*/
/*         <a href="{{ path('projects_index') }}"><p class="div-btn">Proyectos</p></a>*/
/*     </div>*/
/*     <div align="center" class="col-md-4">*/
/*         <a href="{{ path('contact') }}"><p class="div-btn">Contacto</p></a>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* */
