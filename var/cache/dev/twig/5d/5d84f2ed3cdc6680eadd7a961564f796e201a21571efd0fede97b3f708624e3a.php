<?php

/* project/show.html.twig */
class __TwigTemplate_db8024914fbfb92b316c4b8881cbd471cb87af2e43130f56e6bec1a588d42ded extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "project/show.html.twig", 1);
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
        $__internal_30b145b296361398cbb56f9c3fbd559605a4f132dc5e54b4eafad2a3d0cd767c = $this->env->getExtension("native_profiler");
        $__internal_30b145b296361398cbb56f9c3fbd559605a4f132dc5e54b4eafad2a3d0cd767c->enter($__internal_30b145b296361398cbb56f9c3fbd559605a4f132dc5e54b4eafad2a3d0cd767c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "project/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30b145b296361398cbb56f9c3fbd559605a4f132dc5e54b4eafad2a3d0cd767c->leave($__internal_30b145b296361398cbb56f9c3fbd559605a4f132dc5e54b4eafad2a3d0cd767c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9fc266dfc39e695b5bd0dfbb212f1a3d9e2f1c3733fc52ebc84be30dace000bd = $this->env->getExtension("native_profiler");
        $__internal_9fc266dfc39e695b5bd0dfbb212f1a3d9e2f1c3733fc52ebc84be30dace000bd->enter($__internal_9fc266dfc39e695b5bd0dfbb212f1a3d9e2f1c3733fc52ebc84be30dace000bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "name", array()), "html", null, true);
        echo "</h1>

    <h3>Descripción</h3>
    <p>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "description", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "image", array()), "html", null, true);
        echo "</p>

    <ul>
        <li>
            <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("projects_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_9fc266dfc39e695b5bd0dfbb212f1a3d9e2f1c3733fc52ebc84be30dace000bd->leave($__internal_9fc266dfc39e695b5bd0dfbb212f1a3d9e2f1c3733fc52ebc84be30dace000bd_prof);

    }

    public function getTemplateName()
    {
        return "project/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 12,  51 => 8,  47 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>{{ project.name }}</h1>*/
/* */
/*     <h3>Descripción</h3>*/
/*     <p>{{ project.description }}</p>*/
/*     <p>{{ project.image }}</p>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('projects_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
