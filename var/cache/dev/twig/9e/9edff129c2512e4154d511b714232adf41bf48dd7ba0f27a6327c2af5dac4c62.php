<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_e7739b684c0b4928dc6c2c8d82da1a2f2ba7b64bb5c36dbaf31fa1e3109a5e32 extends Twig_Template
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
        $__internal_8ec5bbe09c624038cb65642bfb3f5ac7925c1757d493bd05fd0edc181987494e = $this->env->getExtension("native_profiler");
        $__internal_8ec5bbe09c624038cb65642bfb3f5ac7925c1757d493bd05fd0edc181987494e->enter($__internal_8ec5bbe09c624038cb65642bfb3f5ac7925c1757d493bd05fd0edc181987494e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_8ec5bbe09c624038cb65642bfb3f5ac7925c1757d493bd05fd0edc181987494e->leave($__internal_8ec5bbe09c624038cb65642bfb3f5ac7925c1757d493bd05fd0edc181987494e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
