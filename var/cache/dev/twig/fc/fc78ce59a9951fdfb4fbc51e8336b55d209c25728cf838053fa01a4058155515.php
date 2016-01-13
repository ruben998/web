<?php

/* :default:bio.html.twig */
class __TwigTemplate_b65a334318465b4761ea918e2c85a2acbd0018bb04d3fff040c1093458a70104 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:bio.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b52b0f7aa82d23f36668b9cf6b276223c32510fc9f5f0454070d59f02d3dbbc = $this->env->getExtension("native_profiler");
        $__internal_2b52b0f7aa82d23f36668b9cf6b276223c32510fc9f5f0454070d59f02d3dbbc->enter($__internal_2b52b0f7aa82d23f36668b9cf6b276223c32510fc9f5f0454070d59f02d3dbbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:bio.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b52b0f7aa82d23f36668b9cf6b276223c32510fc9f5f0454070d59f02d3dbbc->leave($__internal_2b52b0f7aa82d23f36668b9cf6b276223c32510fc9f5f0454070d59f02d3dbbc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_21d8375f38616a18c5fc6e99507897a9332ae1139cb6cfc0a6b6380b11813e28 = $this->env->getExtension("native_profiler");
        $__internal_21d8375f38616a18c5fc6e99507897a9332ae1139cb6cfc0a6b6380b11813e28->enter($__internal_21d8375f38616a18c5fc6e99507897a9332ae1139cb6cfc0a6b6380b11813e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        
        $__internal_21d8375f38616a18c5fc6e99507897a9332ae1139cb6cfc0a6b6380b11813e28->leave($__internal_21d8375f38616a18c5fc6e99507897a9332ae1139cb6cfc0a6b6380b11813e28_prof);

    }

    public function getTemplateName()
    {
        return ":default:bio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* {% endblock %}*/
/* */
/* */
