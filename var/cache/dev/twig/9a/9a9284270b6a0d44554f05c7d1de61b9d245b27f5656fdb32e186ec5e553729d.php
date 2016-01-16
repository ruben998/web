<?php

/* default/contact.html.twig */
class __TwigTemplate_36dcb6647da473e1d8c20d11888c59628b9286e15e2e310f8dd42f670447b6ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/contact.html.twig", 1);
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
        $__internal_88298f300ca69eec63ed1ee58775d53e05d053bd2aef96ee1d54e07ce7f44c65 = $this->env->getExtension("native_profiler");
        $__internal_88298f300ca69eec63ed1ee58775d53e05d053bd2aef96ee1d54e07ce7f44c65->enter($__internal_88298f300ca69eec63ed1ee58775d53e05d053bd2aef96ee1d54e07ce7f44c65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88298f300ca69eec63ed1ee58775d53e05d053bd2aef96ee1d54e07ce7f44c65->leave($__internal_88298f300ca69eec63ed1ee58775d53e05d053bd2aef96ee1d54e07ce7f44c65_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e52f96a949dda71edf05f3443ff17fb67f7df387d0c2dc4526bd26d48b32f4e = $this->env->getExtension("native_profiler");
        $__internal_7e52f96a949dda71edf05f3443ff17fb67f7df387d0c2dc4526bd26d48b32f4e->enter($__internal_7e52f96a949dda71edf05f3443ff17fb67f7df387d0c2dc4526bd26d48b32f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\".jumbotron div-jumbotron\" align=\"center\">
        <h1>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "name", array()), "html", null, true);
        echo "</h1>
        <p>Página personal</p>
    </div>
";
        
        $__internal_7e52f96a949dda71edf05f3443ff17fb67f7df387d0c2dc4526bd26d48b32f4e->leave($__internal_7e52f96a949dda71edf05f3443ff17fb67f7df387d0c2dc4526bd26d48b32f4e_prof);

    }

    public function getTemplateName()
    {
        return "default/contact.html.twig";
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
/*         <p>Página personal</p>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* */
