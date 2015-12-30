<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_b0b55489e66f581e533fdb173b33f2c86cb31a8abc114fb2eb677189502d5756 extends Twig_Template
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
        $__internal_40357e6f257b79c87bfe07f0cc81e573b4e973c73f553e0253eedeb982e68564 = $this->env->getExtension("native_profiler");
        $__internal_40357e6f257b79c87bfe07f0cc81e573b4e973c73f553e0253eedeb982e68564->enter($__internal_40357e6f257b79c87bfe07f0cc81e573b4e973c73f553e0253eedeb982e68564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_40357e6f257b79c87bfe07f0cc81e573b4e973c73f553e0253eedeb982e68564->leave($__internal_40357e6f257b79c87bfe07f0cc81e573b4e973c73f553e0253eedeb982e68564_prof);

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
