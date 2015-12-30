<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_9f05943135a5f6f980c2e98d977ea23f7a1cadfa2548008d1a09b706d1e27569 extends Twig_Template
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
        $__internal_7dfcd0dac2711015e661ee1ff963017ebfb07e3a41f9a52d7c8603deb67dc8ac = $this->env->getExtension("native_profiler");
        $__internal_7dfcd0dac2711015e661ee1ff963017ebfb07e3a41f9a52d7c8603deb67dc8ac->enter($__internal_7dfcd0dac2711015e661ee1ff963017ebfb07e3a41f9a52d7c8603deb67dc8ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_7dfcd0dac2711015e661ee1ff963017ebfb07e3a41f9a52d7c8603deb67dc8ac->leave($__internal_7dfcd0dac2711015e661ee1ff963017ebfb07e3a41f9a52d7c8603deb67dc8ac_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
