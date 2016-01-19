<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_426546756467112f2a0ef22d32de7ed7c4eb4a090bd0c585b888e22510a2fb62 extends Twig_Template
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
        $__internal_c7113b81bdb8058480a8e9107f9721bc9d2f37a0093706783bc35fdfa4b2ca94 = $this->env->getExtension("native_profiler");
        $__internal_c7113b81bdb8058480a8e9107f9721bc9d2f37a0093706783bc35fdfa4b2ca94->enter($__internal_c7113b81bdb8058480a8e9107f9721bc9d2f37a0093706783bc35fdfa4b2ca94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_c7113b81bdb8058480a8e9107f9721bc9d2f37a0093706783bc35fdfa4b2ca94->leave($__internal_c7113b81bdb8058480a8e9107f9721bc9d2f37a0093706783bc35fdfa4b2ca94_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
