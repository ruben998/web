<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_742ea62ac9f4252c9d539b8080fe39cda7749287d2a90da01f7a6d13cf694a66 extends Twig_Template
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
        $__internal_f67e86a66da1d71e9d91a2fcb4436374c0f1e237ffa3b690fab14f7e601586f7 = $this->env->getExtension("native_profiler");
        $__internal_f67e86a66da1d71e9d91a2fcb4436374c0f1e237ffa3b690fab14f7e601586f7->enter($__internal_f67e86a66da1d71e9d91a2fcb4436374c0f1e237ffa3b690fab14f7e601586f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_f67e86a66da1d71e9d91a2fcb4436374c0f1e237ffa3b690fab14f7e601586f7->leave($__internal_f67e86a66da1d71e9d91a2fcb4436374c0f1e237ffa3b690fab14f7e601586f7_prof);

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
