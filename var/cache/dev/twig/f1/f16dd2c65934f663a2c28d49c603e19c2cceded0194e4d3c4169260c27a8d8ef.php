<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_3da330ca1345203613f6e01ad972c28cc3f4729baa9e19270bc4095e03abb40a extends Twig_Template
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
        $__internal_5f908c4dbbef9054e572ab75e398e8d119c9c4d2cc0dfef592a13f2f6cc3b86f = $this->env->getExtension("native_profiler");
        $__internal_5f908c4dbbef9054e572ab75e398e8d119c9c4d2cc0dfef592a13f2f6cc3b86f->enter($__internal_5f908c4dbbef9054e572ab75e398e8d119c9c4d2cc0dfef592a13f2f6cc3b86f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_5f908c4dbbef9054e572ab75e398e8d119c9c4d2cc0dfef592a13f2f6cc3b86f->leave($__internal_5f908c4dbbef9054e572ab75e398e8d119c9c4d2cc0dfef592a13f2f6cc3b86f_prof);

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
