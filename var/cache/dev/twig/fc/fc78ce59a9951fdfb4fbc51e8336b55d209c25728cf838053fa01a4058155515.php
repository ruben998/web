<?php

/* :default:bio.html.twig */
class __TwigTemplate_b65a334318465b4761ea918e2c85a2acbd0018bb04d3fff040c1093458a70104 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:bio.html.twig", 1);
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
        $__internal_164def45e8a83feb1dd1253a5dd7d78059e87e6ce03f78210cb4943a4c67e85e = $this->env->getExtension("native_profiler");
        $__internal_164def45e8a83feb1dd1253a5dd7d78059e87e6ce03f78210cb4943a4c67e85e->enter($__internal_164def45e8a83feb1dd1253a5dd7d78059e87e6ce03f78210cb4943a4c67e85e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:bio.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_164def45e8a83feb1dd1253a5dd7d78059e87e6ce03f78210cb4943a4c67e85e->leave($__internal_164def45e8a83feb1dd1253a5dd7d78059e87e6ce03f78210cb4943a4c67e85e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_25b0cd0abbffc602a7853322ddeb2214a6bbc65d2d932cc6070e14ffdc5b0001 = $this->env->getExtension("native_profiler");
        $__internal_25b0cd0abbffc602a7853322ddeb2214a6bbc65d2d932cc6070e14ffdc5b0001->enter($__internal_25b0cd0abbffc602a7853322ddeb2214a6bbc65d2d932cc6070e14ffdc5b0001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Biografia</h1>
    <h4>Sóc un noi de Badalona amant de les noves tecnologies i amb curiositats per aprendre. En aquesta pàgina podràs
    trobar els projectes fets fins ara. Sóc estudiant d'enginyeria informàtica en la Universitat de Barcelona. </h4>
";
        
        $__internal_25b0cd0abbffc602a7853322ddeb2214a6bbc65d2d932cc6070e14ffdc5b0001->leave($__internal_25b0cd0abbffc602a7853322ddeb2214a6bbc65d2d932cc6070e14ffdc5b0001_prof);

    }

    public function getTemplateName()
    {
        return ":default:bio.html.twig";
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
/*     <h1>Biografia</h1>*/
/*     <h4>Sóc un noi de Badalona amant de les noves tecnologies i amb curiositats per aprendre. En aquesta pàgina podràs*/
/*     trobar els projectes fets fins ara. Sóc estudiant d'enginyeria informàtica en la Universitat de Barcelona. </h4>*/
/* {% endblock %}*/
/* */
/* */
