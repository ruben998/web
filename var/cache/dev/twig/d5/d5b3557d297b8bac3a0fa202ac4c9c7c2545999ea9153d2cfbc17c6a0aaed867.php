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
        $__internal_b1444da52d399870094d78c2f570bcea451f4308b8288d74c28b33a94829b22b = $this->env->getExtension("native_profiler");
        $__internal_b1444da52d399870094d78c2f570bcea451f4308b8288d74c28b33a94829b22b->enter($__internal_b1444da52d399870094d78c2f570bcea451f4308b8288d74c28b33a94829b22b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_b1444da52d399870094d78c2f570bcea451f4308b8288d74c28b33a94829b22b->leave($__internal_b1444da52d399870094d78c2f570bcea451f4308b8288d74c28b33a94829b22b_prof);

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
