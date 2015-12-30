<?php

/* default/index.html.twig */
class __TwigTemplate_b92a74b0c7ed1d49a251e2baa87d7ec74ed209859023e50a9234adab92bb4183 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_da478266e0fb318b82f9ff7bbdf524384db17345e2b197e04f5020475488dd71 = $this->env->getExtension("native_profiler");
        $__internal_da478266e0fb318b82f9ff7bbdf524384db17345e2b197e04f5020475488dd71->enter($__internal_da478266e0fb318b82f9ff7bbdf524384db17345e2b197e04f5020475488dd71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da478266e0fb318b82f9ff7bbdf524384db17345e2b197e04f5020475488dd71->leave($__internal_da478266e0fb318b82f9ff7bbdf524384db17345e2b197e04f5020475488dd71_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b4e9c51422e0da1e2844f56492e44ccb6998fbf6244ead91dd272068cb32643f = $this->env->getExtension("native_profiler");
        $__internal_b4e9c51422e0da1e2844f56492e44ccb6998fbf6244ead91dd272068cb32643f->enter($__internal_b4e9c51422e0da1e2844f56492e44ccb6998fbf6244ead91dd272068cb32643f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        
        $__internal_b4e9c51422e0da1e2844f56492e44ccb6998fbf6244ead91dd272068cb32643f->leave($__internal_b4e9c51422e0da1e2844f56492e44ccb6998fbf6244ead91dd272068cb32643f_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
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
