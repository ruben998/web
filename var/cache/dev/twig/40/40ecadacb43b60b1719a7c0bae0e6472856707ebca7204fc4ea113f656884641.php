<?php

/* auth/admin.html.twig */
class __TwigTemplate_95dcb6c4a0c446b24b1b0c9397f0abba014192404c4663acbffb59fa241cadf4 extends Twig_Template
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
        $__internal_6e6234def43fb8dccb8212ca8ee8baf853ea4a42032256413894832c409a8838 = $this->env->getExtension("native_profiler");
        $__internal_6e6234def43fb8dccb8212ca8ee8baf853ea4a42032256413894832c409a8838->enter($__internal_6e6234def43fb8dccb8212ca8ee8baf853ea4a42032256413894832c409a8838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "auth/admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e6234def43fb8dccb8212ca8ee8baf853ea4a42032256413894832c409a8838->leave($__internal_6e6234def43fb8dccb8212ca8ee8baf853ea4a42032256413894832c409a8838_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fb2474d4e6a8f8acb796dcc6dbc4b73def848c0d7c88f4a85e621cb0d7c42988 = $this->env->getExtension("native_profiler");
        $__internal_fb2474d4e6a8f8acb796dcc6dbc4b73def848c0d7c88f4a85e621cb0d7c42988->enter($__internal_fb2474d4e6a8f8acb796dcc6dbc4b73def848c0d7c88f4a85e621cb0d7c42988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        
        $__internal_fb2474d4e6a8f8acb796dcc6dbc4b73def848c0d7c88f4a85e621cb0d7c42988->leave($__internal_fb2474d4e6a8f8acb796dcc6dbc4b73def848c0d7c88f4a85e621cb0d7c42988_prof);

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
