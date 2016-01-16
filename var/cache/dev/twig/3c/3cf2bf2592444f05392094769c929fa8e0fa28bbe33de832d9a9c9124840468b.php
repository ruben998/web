<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_9227a27485385da3108af2dfc989f4656b3b66314f68cd25a32ec970c7e62632 extends Twig_Template
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
        $__internal_da842b9b3bf17673e537fd62a333b301009e917787fa0ef48abac1be3ef674f6 = $this->env->getExtension("native_profiler");
        $__internal_da842b9b3bf17673e537fd62a333b301009e917787fa0ef48abac1be3ef674f6->enter($__internal_da842b9b3bf17673e537fd62a333b301009e917787fa0ef48abac1be3ef674f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_da842b9b3bf17673e537fd62a333b301009e917787fa0ef48abac1be3ef674f6->leave($__internal_da842b9b3bf17673e537fd62a333b301009e917787fa0ef48abac1be3ef674f6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
