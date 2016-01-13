<?php

/* :hello:name.html.twig */
class __TwigTemplate_1aaaacb1ecdb5ee99688b4a84953a78907add0a4f08a8260e0f3fad38244f079 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":hello:name.html.twig", 1);
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
        $__internal_01b0a68985f4cc4dd78d65fb972c7a5c3713c5e329d0e36a11803dba5d35751a = $this->env->getExtension("native_profiler");
        $__internal_01b0a68985f4cc4dd78d65fb972c7a5c3713c5e329d0e36a11803dba5d35751a->enter($__internal_01b0a68985f4cc4dd78d65fb972c7a5c3713c5e329d0e36a11803dba5d35751a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":hello:name.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01b0a68985f4cc4dd78d65fb972c7a5c3713c5e329d0e36a11803dba5d35751a->leave($__internal_01b0a68985f4cc4dd78d65fb972c7a5c3713c5e329d0e36a11803dba5d35751a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d543a6097ab9e30a4e9033c8cfc02a74e69a2225b5d4b6902a88a05cc5edf36 = $this->env->getExtension("native_profiler");
        $__internal_4d543a6097ab9e30a4e9033c8cfc02a74e69a2225b5d4b6902a88a05cc5edf36->enter($__internal_4d543a6097ab9e30a4e9033c8cfc02a74e69a2225b5d4b6902a88a05cc5edf36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>hello</h1>

    <p>hi ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "</p>
    <p>also hello ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["other_name"]) ? $context["other_name"] : $this->getContext($context, "other_name")), "html", null, true);
        echo "</p>
    <button class=\"btn btn-primary\">Button</button>
";
        
        $__internal_4d543a6097ab9e30a4e9033c8cfc02a74e69a2225b5d4b6902a88a05cc5edf36->leave($__internal_4d543a6097ab9e30a4e9033c8cfc02a74e69a2225b5d4b6902a88a05cc5edf36_prof);

    }

    public function getTemplateName()
    {
        return ":hello:name.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>hello</h1>*/
/* */
/*     <p>hi {{ name }}</p>*/
/*     <p>also hello {{ other_name }}</p>*/
/*     <button class="btn btn-primary">Button</button>*/
/* {% endblock %}*/
