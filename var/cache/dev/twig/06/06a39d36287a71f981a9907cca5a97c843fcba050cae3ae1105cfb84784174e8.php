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
        $__internal_d71db061fa82ecf2aa238add2155ee25a3a2c9cbec15e5d2987497e8193de00a = $this->env->getExtension("native_profiler");
        $__internal_d71db061fa82ecf2aa238add2155ee25a3a2c9cbec15e5d2987497e8193de00a->enter($__internal_d71db061fa82ecf2aa238add2155ee25a3a2c9cbec15e5d2987497e8193de00a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d71db061fa82ecf2aa238add2155ee25a3a2c9cbec15e5d2987497e8193de00a->leave($__internal_d71db061fa82ecf2aa238add2155ee25a3a2c9cbec15e5d2987497e8193de00a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_324b5865471379b6669b28a5af3f8730d0270ac1ff70ee6b31f566f1a0db486a = $this->env->getExtension("native_profiler");
        $__internal_324b5865471379b6669b28a5af3f8730d0270ac1ff70ee6b31f566f1a0db486a->enter($__internal_324b5865471379b6669b28a5af3f8730d0270ac1ff70ee6b31f566f1a0db486a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_324b5865471379b6669b28a5af3f8730d0270ac1ff70ee6b31f566f1a0db486a->leave($__internal_324b5865471379b6669b28a5af3f8730d0270ac1ff70ee6b31f566f1a0db486a_prof);

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
