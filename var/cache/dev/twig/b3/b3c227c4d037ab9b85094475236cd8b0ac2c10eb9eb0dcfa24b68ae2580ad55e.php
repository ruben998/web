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
        $__internal_f19cd2ef8cd21e90d17b92cec43df0328f1b1aa0edfaea53ac813bfb1b4d4c9a = $this->env->getExtension("native_profiler");
        $__internal_f19cd2ef8cd21e90d17b92cec43df0328f1b1aa0edfaea53ac813bfb1b4d4c9a->enter($__internal_f19cd2ef8cd21e90d17b92cec43df0328f1b1aa0edfaea53ac813bfb1b4d4c9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":auth:admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f19cd2ef8cd21e90d17b92cec43df0328f1b1aa0edfaea53ac813bfb1b4d4c9a->leave($__internal_f19cd2ef8cd21e90d17b92cec43df0328f1b1aa0edfaea53ac813bfb1b4d4c9a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0905a998be1b31349500fac0fc8b5997de0825bb7fe33860cc4d4a0656d1ae84 = $this->env->getExtension("native_profiler");
        $__internal_0905a998be1b31349500fac0fc8b5997de0825bb7fe33860cc4d4a0656d1ae84->enter($__internal_0905a998be1b31349500fac0fc8b5997de0825bb7fe33860cc4d4a0656d1ae84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        
        $__internal_0905a998be1b31349500fac0fc8b5997de0825bb7fe33860cc4d4a0656d1ae84->leave($__internal_0905a998be1b31349500fac0fc8b5997de0825bb7fe33860cc4d4a0656d1ae84_prof);

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
