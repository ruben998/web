<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_36c9c2c7311b69cbea175f94992c1c8ad352eca03916a898b283484701bd368f extends Twig_Template
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
        $__internal_693a3271242f858ea88393c54cccbaeb0669e3d83614c700928e5e47ff0d7907 = $this->env->getExtension("native_profiler");
        $__internal_693a3271242f858ea88393c54cccbaeb0669e3d83614c700928e5e47ff0d7907->enter($__internal_693a3271242f858ea88393c54cccbaeb0669e3d83614c700928e5e47ff0d7907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_693a3271242f858ea88393c54cccbaeb0669e3d83614c700928e5e47ff0d7907->leave($__internal_693a3271242f858ea88393c54cccbaeb0669e3d83614c700928e5e47ff0d7907_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
