<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_a058e4905300998a530d0fbc9de3f6e42150d988329a7b38a04fd1f8f93bd59e extends Twig_Template
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
        $__internal_9cc647fa0a180bd657672bf22448aeb46bf361a241e78a0fcd2fa8f0abde92d5 = $this->env->getExtension("native_profiler");
        $__internal_9cc647fa0a180bd657672bf22448aeb46bf361a241e78a0fcd2fa8f0abde92d5->enter($__internal_9cc647fa0a180bd657672bf22448aeb46bf361a241e78a0fcd2fa8f0abde92d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_9cc647fa0a180bd657672bf22448aeb46bf361a241e78a0fcd2fa8f0abde92d5->leave($__internal_9cc647fa0a180bd657672bf22448aeb46bf361a241e78a0fcd2fa8f0abde92d5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
