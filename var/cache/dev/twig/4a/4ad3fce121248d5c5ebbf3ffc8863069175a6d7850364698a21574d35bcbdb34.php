<?php

/* default/projects.html.twig */
class __TwigTemplate_b90b39cb78fcb11465e17ebde1d8bac5f242492dadecec9d76af03d0cd6dc255 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/projects.html.twig", 1);
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
        $__internal_f557cd4e526a04a5cc8f7e599d990bd8fdd5d0bac8097ce679a020f7874ec54d = $this->env->getExtension("native_profiler");
        $__internal_f557cd4e526a04a5cc8f7e599d990bd8fdd5d0bac8097ce679a020f7874ec54d->enter($__internal_f557cd4e526a04a5cc8f7e599d990bd8fdd5d0bac8097ce679a020f7874ec54d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/projects.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f557cd4e526a04a5cc8f7e599d990bd8fdd5d0bac8097ce679a020f7874ec54d->leave($__internal_f557cd4e526a04a5cc8f7e599d990bd8fdd5d0bac8097ce679a020f7874ec54d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb7d1a12e796aa78813f7e490743dc1d3f6211d9152295d5688ed9690314535a = $this->env->getExtension("native_profiler");
        $__internal_bb7d1a12e796aa78813f7e490743dc1d3f6211d9152295d5688ed9690314535a->enter($__internal_bb7d1a12e796aa78813f7e490743dc1d3f6211d9152295d5688ed9690314535a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\".jumbotron div-jumbotron\" align=\"center\">
        <h1>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "name", array()), "html", null, true);
        echo "</h1>
        <p>Projectos</p>
    </div>
";
        
        $__internal_bb7d1a12e796aa78813f7e490743dc1d3f6211d9152295d5688ed9690314535a->leave($__internal_bb7d1a12e796aa78813f7e490743dc1d3f6211d9152295d5688ed9690314535a_prof);

    }

    public function getTemplateName()
    {
        return "default/projects.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class=".jumbotron div-jumbotron" align="center">*/
/*         <h1>{{ project.name }}</h1>*/
/*         <p>Projectos</p>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* */
