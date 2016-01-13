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
        $__internal_26d05e235e65b5cb376456babb33845f357fcafcc87b97df5ccfdff6d3148cef = $this->env->getExtension("native_profiler");
        $__internal_26d05e235e65b5cb376456babb33845f357fcafcc87b97df5ccfdff6d3148cef->enter($__internal_26d05e235e65b5cb376456babb33845f357fcafcc87b97df5ccfdff6d3148cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26d05e235e65b5cb376456babb33845f357fcafcc87b97df5ccfdff6d3148cef->leave($__internal_26d05e235e65b5cb376456babb33845f357fcafcc87b97df5ccfdff6d3148cef_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7efe69a12e7f24de50b9ebd660adc75be19c087918bbc567ae58bc2da6e3f741 = $this->env->getExtension("native_profiler");
        $__internal_7efe69a12e7f24de50b9ebd660adc75be19c087918bbc567ae58bc2da6e3f741->enter($__internal_7efe69a12e7f24de50b9ebd660adc75be19c087918bbc567ae58bc2da6e3f741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7efe69a12e7f24de50b9ebd660adc75be19c087918bbc567ae58bc2da6e3f741->leave($__internal_7efe69a12e7f24de50b9ebd660adc75be19c087918bbc567ae58bc2da6e3f741_prof);

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
