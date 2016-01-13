<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_05329ce54ff164c699b7d65f97ad502522ab68346ac7519a5afdcbeafaaad0d6 extends Twig_Template
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
        $__internal_c61a363ecf1f124c2d8befc06c7b24ab1e74e8b1e051ad8f91b1cbf7f78183fd = $this->env->getExtension("native_profiler");
        $__internal_c61a363ecf1f124c2d8befc06c7b24ab1e74e8b1e051ad8f91b1cbf7f78183fd->enter($__internal_c61a363ecf1f124c2d8befc06c7b24ab1e74e8b1e051ad8f91b1cbf7f78183fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_c61a363ecf1f124c2d8befc06c7b24ab1e74e8b1e051ad8f91b1cbf7f78183fd->leave($__internal_c61a363ecf1f124c2d8befc06c7b24ab1e74e8b1e051ad8f91b1cbf7f78183fd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
