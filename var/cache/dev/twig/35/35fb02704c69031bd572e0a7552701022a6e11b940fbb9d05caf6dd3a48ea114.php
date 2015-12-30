<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_1ae270c375fd09efbb02a6a3fd953653713c1157b65361cc9db10d0b29771ad3 extends Twig_Template
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
        $__internal_356b6fd53cded24949dfbe17a73c29b4a15e31ef885028b0825bf2453cd73659 = $this->env->getExtension("native_profiler");
        $__internal_356b6fd53cded24949dfbe17a73c29b4a15e31ef885028b0825bf2453cd73659->enter($__internal_356b6fd53cded24949dfbe17a73c29b4a15e31ef885028b0825bf2453cd73659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_356b6fd53cded24949dfbe17a73c29b4a15e31ef885028b0825bf2453cd73659->leave($__internal_356b6fd53cded24949dfbe17a73c29b4a15e31ef885028b0825bf2453cd73659_prof);

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
