<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_bbe0252d8faae8e5b32fafa37ac0f09d57cea674644d0aaf9a8f64e7113cdc0a extends Twig_Template
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
        $__internal_e036b89d37c5c7553564e39e49bfd6e153e034c8a6a0895d347922a75a24348b = $this->env->getExtension("native_profiler");
        $__internal_e036b89d37c5c7553564e39e49bfd6e153e034c8a6a0895d347922a75a24348b->enter($__internal_e036b89d37c5c7553564e39e49bfd6e153e034c8a6a0895d347922a75a24348b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_e036b89d37c5c7553564e39e49bfd6e153e034c8a6a0895d347922a75a24348b->leave($__internal_e036b89d37c5c7553564e39e49bfd6e153e034c8a6a0895d347922a75a24348b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
