<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_18c643de2337cf1e448fe982e89e7d29999c4b43a9d3d1a17475546968fd915a extends Twig_Template
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
        $__internal_c45d74cf35b20fd741c79ba16ac89c41140bc22aaa135dc658653ca03b290551 = $this->env->getExtension("native_profiler");
        $__internal_c45d74cf35b20fd741c79ba16ac89c41140bc22aaa135dc658653ca03b290551->enter($__internal_c45d74cf35b20fd741c79ba16ac89c41140bc22aaa135dc658653ca03b290551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_c45d74cf35b20fd741c79ba16ac89c41140bc22aaa135dc658653ca03b290551->leave($__internal_c45d74cf35b20fd741c79ba16ac89c41140bc22aaa135dc658653ca03b290551_prof);

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
