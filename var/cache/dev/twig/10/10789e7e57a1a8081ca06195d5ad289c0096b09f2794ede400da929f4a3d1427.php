<?php

/* default/index.html.twig */
class __TwigTemplate_b92a74b0c7ed1d49a251e2baa87d7ec74ed209859023e50a9234adab92bb4183 extends Twig_Template
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
        $__internal_13d8ba9b7bbea13e5e57ee3215074b6087375b43b2a86392e19899f3bb780138 = $this->env->getExtension("native_profiler");
        $__internal_13d8ba9b7bbea13e5e57ee3215074b6087375b43b2a86392e19899f3bb780138->enter($__internal_13d8ba9b7bbea13e5e57ee3215074b6087375b43b2a86392e19899f3bb780138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13d8ba9b7bbea13e5e57ee3215074b6087375b43b2a86392e19899f3bb780138->leave($__internal_13d8ba9b7bbea13e5e57ee3215074b6087375b43b2a86392e19899f3bb780138_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_19650239329280f3e9a7b445f96d0eec9769cceab5f5f66a2958daa58dd9bd32 = $this->env->getExtension("native_profiler");
        $__internal_19650239329280f3e9a7b445f96d0eec9769cceab5f5f66a2958daa58dd9bd32->enter($__internal_19650239329280f3e9a7b445f96d0eec9769cceab5f5f66a2958daa58dd9bd32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"jumbotron div-jumbotron\" align=\"center\">
        <h1>R U B É N &nbsp; N I E T O</h1>
        <p>Página personal</p>
    </div>
    <div align=\"center\" class=\"col-md-4\">
        <a href=\"/bio\"><p class=\"div-btn\">Biografia</p></a>
    </div>
    <div align=\"center\" class=\"col-md-4\">
        <a href=\"/projects\"><p class=\"div-btn\">Proyectos</p></a>
    </div>
    <div align=\"center\" class=\"col-md-4\">
        <a href=\"/contact\"><p class=\"div-btn\">Contacto</p></a>
    </div>
";
        
        $__internal_19650239329280f3e9a7b445f96d0eec9769cceab5f5f66a2958daa58dd9bd32->leave($__internal_19650239329280f3e9a7b445f96d0eec9769cceab5f5f66a2958daa58dd9bd32_prof);

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
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="jumbotron div-jumbotron" align="center">*/
/*         <h1>R U B É N &nbsp; N I E T O</h1>*/
/*         <p>Página personal</p>*/
/*     </div>*/
/*     <div align="center" class="col-md-4">*/
/*         <a href="/bio"><p class="div-btn">Biografia</p></a>*/
/*     </div>*/
/*     <div align="center" class="col-md-4">*/
/*         <a href="/projects"><p class="div-btn">Proyectos</p></a>*/
/*     </div>*/
/*     <div align="center" class="col-md-4">*/
/*         <a href="/contact"><p class="div-btn">Contacto</p></a>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* */
