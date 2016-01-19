<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_f4151b8208630fb7c57ef15c0c123eb45c4c444dbf6e5c87caeb7401ac8b6940 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ccad706b5d28b2244ced597ad8404b8d6c1d094a6d258922dd75e537607a8271 = $this->env->getExtension("native_profiler");
        $__internal_ccad706b5d28b2244ced597ad8404b8d6c1d094a6d258922dd75e537607a8271->enter($__internal_ccad706b5d28b2244ced597ad8404b8d6c1d094a6d258922dd75e537607a8271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ccad706b5d28b2244ced597ad8404b8d6c1d094a6d258922dd75e537607a8271->leave($__internal_ccad706b5d28b2244ced597ad8404b8d6c1d094a6d258922dd75e537607a8271_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2291b4bf400f93a282b7b2f26b2dd704a7bbc748493ddd7f6b7acc8aedcbcf4e = $this->env->getExtension("native_profiler");
        $__internal_2291b4bf400f93a282b7b2f26b2dd704a7bbc748493ddd7f6b7acc8aedcbcf4e->enter($__internal_2291b4bf400f93a282b7b2f26b2dd704a7bbc748493ddd7f6b7acc8aedcbcf4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_2291b4bf400f93a282b7b2f26b2dd704a7bbc748493ddd7f6b7acc8aedcbcf4e->leave($__internal_2291b4bf400f93a282b7b2f26b2dd704a7bbc748493ddd7f6b7acc8aedcbcf4e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
