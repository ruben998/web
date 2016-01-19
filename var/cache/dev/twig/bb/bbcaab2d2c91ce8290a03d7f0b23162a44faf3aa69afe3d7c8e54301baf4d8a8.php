<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_ef38dbdc122a1c57fb36954496679767e4b35e7283acb086700144cfede96c55 extends Twig_Template
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
        $__internal_76ed13981e2520b1ed0eb2553465f8fc8948ea4bc54aa15f78b53dff5cad15aa = $this->env->getExtension("native_profiler");
        $__internal_76ed13981e2520b1ed0eb2553465f8fc8948ea4bc54aa15f78b53dff5cad15aa->enter($__internal_76ed13981e2520b1ed0eb2553465f8fc8948ea4bc54aa15f78b53dff5cad15aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_76ed13981e2520b1ed0eb2553465f8fc8948ea4bc54aa15f78b53dff5cad15aa->leave($__internal_76ed13981e2520b1ed0eb2553465f8fc8948ea4bc54aa15f78b53dff5cad15aa_prof);

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
