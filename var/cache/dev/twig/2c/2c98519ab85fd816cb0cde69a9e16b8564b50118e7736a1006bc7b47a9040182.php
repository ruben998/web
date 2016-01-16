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
        $__internal_b78cfd554a167cc9cad3dab61b081bf0a33ebe1ae74d31f3f3d02d8c626c60dc = $this->env->getExtension("native_profiler");
        $__internal_b78cfd554a167cc9cad3dab61b081bf0a33ebe1ae74d31f3f3d02d8c626c60dc->enter($__internal_b78cfd554a167cc9cad3dab61b081bf0a33ebe1ae74d31f3f3d02d8c626c60dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_b78cfd554a167cc9cad3dab61b081bf0a33ebe1ae74d31f3f3d02d8c626c60dc->leave($__internal_b78cfd554a167cc9cad3dab61b081bf0a33ebe1ae74d31f3f3d02d8c626c60dc_prof);

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
