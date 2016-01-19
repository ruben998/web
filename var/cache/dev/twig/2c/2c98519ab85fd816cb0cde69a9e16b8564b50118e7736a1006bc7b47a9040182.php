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
        $__internal_24415f1903c0f1f8d39a4a509321cdd5c7664577f5fa650db1d81a74351b9d6e = $this->env->getExtension("native_profiler");
        $__internal_24415f1903c0f1f8d39a4a509321cdd5c7664577f5fa650db1d81a74351b9d6e->enter($__internal_24415f1903c0f1f8d39a4a509321cdd5c7664577f5fa650db1d81a74351b9d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_24415f1903c0f1f8d39a4a509321cdd5c7664577f5fa650db1d81a74351b9d6e->leave($__internal_24415f1903c0f1f8d39a4a509321cdd5c7664577f5fa650db1d81a74351b9d6e_prof);

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
