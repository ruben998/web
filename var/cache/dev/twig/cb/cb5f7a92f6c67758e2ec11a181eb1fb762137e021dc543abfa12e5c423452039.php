<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_b7ee9bacb3d7edbcd1da8878bfbe8f5a5900954723797b745d0bccef757a545b extends Twig_Template
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
        $__internal_2a245e7f99a25779488fc10ee464f7166ab644d6bd5f27920418a2061d73bc73 = $this->env->getExtension("native_profiler");
        $__internal_2a245e7f99a25779488fc10ee464f7166ab644d6bd5f27920418a2061d73bc73->enter($__internal_2a245e7f99a25779488fc10ee464f7166ab644d6bd5f27920418a2061d73bc73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_2a245e7f99a25779488fc10ee464f7166ab644d6bd5f27920418a2061d73bc73->leave($__internal_2a245e7f99a25779488fc10ee464f7166ab644d6bd5f27920418a2061d73bc73_prof);

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
