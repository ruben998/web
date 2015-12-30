<?php

/* hello/name.html.twig */
class __TwigTemplate_0ad927de8712842da5c6b9b29659dd79568fab5ec48aff5d397b58c0e03f51a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "hello/name.html.twig", 1);
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
        $__internal_8e3795052ece2ce962cbff3bc3371c7711d4455f507fcae3b634870f0f3c540a = $this->env->getExtension("native_profiler");
        $__internal_8e3795052ece2ce962cbff3bc3371c7711d4455f507fcae3b634870f0f3c540a->enter($__internal_8e3795052ece2ce962cbff3bc3371c7711d4455f507fcae3b634870f0f3c540a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hello/name.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e3795052ece2ce962cbff3bc3371c7711d4455f507fcae3b634870f0f3c540a->leave($__internal_8e3795052ece2ce962cbff3bc3371c7711d4455f507fcae3b634870f0f3c540a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_57222bc929d34aa6bab263d41682f92c9b44cbddab7858717bc22a7fe4ba19e8 = $this->env->getExtension("native_profiler");
        $__internal_57222bc929d34aa6bab263d41682f92c9b44cbddab7858717bc22a7fe4ba19e8->enter($__internal_57222bc929d34aa6bab263d41682f92c9b44cbddab7858717bc22a7fe4ba19e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_57222bc929d34aa6bab263d41682f92c9b44cbddab7858717bc22a7fe4ba19e8->leave($__internal_57222bc929d34aa6bab263d41682f92c9b44cbddab7858717bc22a7fe4ba19e8_prof);

    }

    public function getTemplateName()
    {
        return "hello/name.html.twig";
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
