<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_4805fb2ab060f9f25e61d3a32aba8775ed9532cf0c67a696f1f78d6925d76de1 extends Twig_Template
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
        $__internal_5cecbc0625bfa7ab03ff642d5f6420372f81cf01a3264378c925c0fec6e796f1 = $this->env->getExtension("native_profiler");
        $__internal_5cecbc0625bfa7ab03ff642d5f6420372f81cf01a3264378c925c0fec6e796f1->enter($__internal_5cecbc0625bfa7ab03ff642d5f6420372f81cf01a3264378c925c0fec6e796f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_5cecbc0625bfa7ab03ff642d5f6420372f81cf01a3264378c925c0fec6e796f1->leave($__internal_5cecbc0625bfa7ab03ff642d5f6420372f81cf01a3264378c925c0fec6e796f1_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a68c0974852d4914f1cd8dcdc8e515b5cf6a880dc8803f05d827994f36a6e117 = $this->env->getExtension("native_profiler");
        $__internal_a68c0974852d4914f1cd8dcdc8e515b5cf6a880dc8803f05d827994f36a6e117->enter($__internal_a68c0974852d4914f1cd8dcdc8e515b5cf6a880dc8803f05d827994f36a6e117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a68c0974852d4914f1cd8dcdc8e515b5cf6a880dc8803f05d827994f36a6e117->leave($__internal_a68c0974852d4914f1cd8dcdc8e515b5cf6a880dc8803f05d827994f36a6e117_prof);

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
