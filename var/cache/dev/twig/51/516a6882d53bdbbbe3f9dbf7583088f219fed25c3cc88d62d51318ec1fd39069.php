<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_c969fd7370548b210d53c3b87cbc972affa7c059e233dddfad0775f97d6ef3ec extends Twig_Template
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
        $__internal_cba8cdefb3f6810fae15f4bbf79e099b57f6ee4735989cade4f78903495f95f9 = $this->env->getExtension("native_profiler");
        $__internal_cba8cdefb3f6810fae15f4bbf79e099b57f6ee4735989cade4f78903495f95f9->enter($__internal_cba8cdefb3f6810fae15f4bbf79e099b57f6ee4735989cade4f78903495f95f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_cba8cdefb3f6810fae15f4bbf79e099b57f6ee4735989cade4f78903495f95f9->leave($__internal_cba8cdefb3f6810fae15f4bbf79e099b57f6ee4735989cade4f78903495f95f9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
