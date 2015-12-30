<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_1bb3298ebbbcf741bd82bff32d9976fe70798859f382c429a330258777803a91 extends Twig_Template
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
        $__internal_a3527ceb96ca8f5ce9245b13793020cda04510f2156ea67e9296b823125ccfe6 = $this->env->getExtension("native_profiler");
        $__internal_a3527ceb96ca8f5ce9245b13793020cda04510f2156ea67e9296b823125ccfe6->enter($__internal_a3527ceb96ca8f5ce9245b13793020cda04510f2156ea67e9296b823125ccfe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_a3527ceb96ca8f5ce9245b13793020cda04510f2156ea67e9296b823125ccfe6->leave($__internal_a3527ceb96ca8f5ce9245b13793020cda04510f2156ea67e9296b823125ccfe6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
