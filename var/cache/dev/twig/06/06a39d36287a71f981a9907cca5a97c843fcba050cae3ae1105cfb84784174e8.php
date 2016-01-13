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
        $__internal_aaaa479b3e780fcc65126e709c10a9cd52ab020c7d632591913563896cbaca4a = $this->env->getExtension("native_profiler");
        $__internal_aaaa479b3e780fcc65126e709c10a9cd52ab020c7d632591913563896cbaca4a->enter($__internal_aaaa479b3e780fcc65126e709c10a9cd52ab020c7d632591913563896cbaca4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_aaaa479b3e780fcc65126e709c10a9cd52ab020c7d632591913563896cbaca4a->leave($__internal_aaaa479b3e780fcc65126e709c10a9cd52ab020c7d632591913563896cbaca4a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_63d0a675367f2a6b0c3ef5f663078409cf62596e8d66bd514040a47ca72ad48a = $this->env->getExtension("native_profiler");
        $__internal_63d0a675367f2a6b0c3ef5f663078409cf62596e8d66bd514040a47ca72ad48a->enter($__internal_63d0a675367f2a6b0c3ef5f663078409cf62596e8d66bd514040a47ca72ad48a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_63d0a675367f2a6b0c3ef5f663078409cf62596e8d66bd514040a47ca72ad48a->leave($__internal_63d0a675367f2a6b0c3ef5f663078409cf62596e8d66bd514040a47ca72ad48a_prof);

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
