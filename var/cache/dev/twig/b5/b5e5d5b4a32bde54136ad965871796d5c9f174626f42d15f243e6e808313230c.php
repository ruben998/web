<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_fb5c71ac9c7955822780e241fdb9e4d6e87e67b9c05ac97667dbe19b5eba9cec extends Twig_Template
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
        $__internal_7c0d2ea5bc73e7a79c97cc94d1dd35ee44f0e1c7680f83358e5c04772a80ce79 = $this->env->getExtension("native_profiler");
        $__internal_7c0d2ea5bc73e7a79c97cc94d1dd35ee44f0e1c7680f83358e5c04772a80ce79->enter($__internal_7c0d2ea5bc73e7a79c97cc94d1dd35ee44f0e1c7680f83358e5c04772a80ce79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_7c0d2ea5bc73e7a79c97cc94d1dd35ee44f0e1c7680f83358e5c04772a80ce79->leave($__internal_7c0d2ea5bc73e7a79c97cc94d1dd35ee44f0e1c7680f83358e5c04772a80ce79_prof);

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
