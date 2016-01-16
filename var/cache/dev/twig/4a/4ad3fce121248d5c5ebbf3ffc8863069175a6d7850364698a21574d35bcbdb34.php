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
        $__internal_d8ee1d0c300c3d1c05b63f1cd5d29e669cfac09b83490fd74150751d39e4fe1b = $this->env->getExtension("native_profiler");
        $__internal_d8ee1d0c300c3d1c05b63f1cd5d29e669cfac09b83490fd74150751d39e4fe1b->enter($__internal_d8ee1d0c300c3d1c05b63f1cd5d29e669cfac09b83490fd74150751d39e4fe1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/projects.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8ee1d0c300c3d1c05b63f1cd5d29e669cfac09b83490fd74150751d39e4fe1b->leave($__internal_d8ee1d0c300c3d1c05b63f1cd5d29e669cfac09b83490fd74150751d39e4fe1b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b7a793f41961eb6614eb37f0bc76c7dc3087b364c62df501ffbd533175bd504 = $this->env->getExtension("native_profiler");
        $__internal_2b7a793f41961eb6614eb37f0bc76c7dc3087b364c62df501ffbd533175bd504->enter($__internal_2b7a793f41961eb6614eb37f0bc76c7dc3087b364c62df501ffbd533175bd504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\".jumbotron div-jumbotron\" align=\"center\">
        <h1>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "name", array()), "html", null, true);
        echo "</h1>
        <p>Projectos</p>
    </div>
";
        
        $__internal_2b7a793f41961eb6614eb37f0bc76c7dc3087b364c62df501ffbd533175bd504->leave($__internal_2b7a793f41961eb6614eb37f0bc76c7dc3087b364c62df501ffbd533175bd504_prof);

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
