<?php

/* :auth:admin.html.twig */
class __TwigTemplate_92408872094ab597b40fc6d464c64ca68fc8be192b7b5135573f9cac3e971b8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":auth:admin.html.twig", 1);
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
        $__internal_6533dccaec37d7471f4e4c9593d4527d0331f86bdb7661bd8222ad1b32086f38 = $this->env->getExtension("native_profiler");
        $__internal_6533dccaec37d7471f4e4c9593d4527d0331f86bdb7661bd8222ad1b32086f38->enter($__internal_6533dccaec37d7471f4e4c9593d4527d0331f86bdb7661bd8222ad1b32086f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":auth:admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6533dccaec37d7471f4e4c9593d4527d0331f86bdb7661bd8222ad1b32086f38->leave($__internal_6533dccaec37d7471f4e4c9593d4527d0331f86bdb7661bd8222ad1b32086f38_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_186162e57325449b94e747ff39c78283a6e944856fb7fc68fd689e25f718e4b3 = $this->env->getExtension("native_profiler");
        $__internal_186162e57325449b94e747ff39c78283a6e944856fb7fc68fd689e25f718e4b3->enter($__internal_186162e57325449b94e747ff39c78283a6e944856fb7fc68fd689e25f718e4b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        
        $__internal_186162e57325449b94e747ff39c78283a6e944856fb7fc68fd689e25f718e4b3->leave($__internal_186162e57325449b94e747ff39c78283a6e944856fb7fc68fd689e25f718e4b3_prof);

    }

    public function getTemplateName()
    {
        return ":auth:admin.html.twig";
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
