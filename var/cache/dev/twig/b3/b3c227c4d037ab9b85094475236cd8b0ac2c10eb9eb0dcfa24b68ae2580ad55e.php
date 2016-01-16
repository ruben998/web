<?php

/* auth/admin.html.twig */
class __TwigTemplate_92408872094ab597b40fc6d464c64ca68fc8be192b7b5135573f9cac3e971b8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "auth/admin.html.twig", 1);
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
        $__internal_929de17cca4de8c3e0c346b203d3095db008b60704fd731cfb60398620f0183b = $this->env->getExtension("native_profiler");
        $__internal_929de17cca4de8c3e0c346b203d3095db008b60704fd731cfb60398620f0183b->enter($__internal_929de17cca4de8c3e0c346b203d3095db008b60704fd731cfb60398620f0183b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "auth/admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_929de17cca4de8c3e0c346b203d3095db008b60704fd731cfb60398620f0183b->leave($__internal_929de17cca4de8c3e0c346b203d3095db008b60704fd731cfb60398620f0183b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_01fc9bbc576d06dd2c20e674e53e18a1adfbfd14484a96cc6eea462a675b55eb = $this->env->getExtension("native_profiler");
        $__internal_01fc9bbc576d06dd2c20e674e53e18a1adfbfd14484a96cc6eea462a675b55eb->enter($__internal_01fc9bbc576d06dd2c20e674e53e18a1adfbfd14484a96cc6eea462a675b55eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        
        $__internal_01fc9bbc576d06dd2c20e674e53e18a1adfbfd14484a96cc6eea462a675b55eb->leave($__internal_01fc9bbc576d06dd2c20e674e53e18a1adfbfd14484a96cc6eea462a675b55eb_prof);

    }

    public function getTemplateName()
    {
        return "auth/admin.html.twig";
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
