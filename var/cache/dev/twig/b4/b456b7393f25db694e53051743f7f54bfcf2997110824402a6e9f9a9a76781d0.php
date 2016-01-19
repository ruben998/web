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
        $__internal_f69040f8ae803731a3d419aa778ec6a6318bc4253e7ddb36e7b66134a7be6814 = $this->env->getExtension("native_profiler");
        $__internal_f69040f8ae803731a3d419aa778ec6a6318bc4253e7ddb36e7b66134a7be6814->enter($__internal_f69040f8ae803731a3d419aa778ec6a6318bc4253e7ddb36e7b66134a7be6814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_f69040f8ae803731a3d419aa778ec6a6318bc4253e7ddb36e7b66134a7be6814->leave($__internal_f69040f8ae803731a3d419aa778ec6a6318bc4253e7ddb36e7b66134a7be6814_prof);

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
