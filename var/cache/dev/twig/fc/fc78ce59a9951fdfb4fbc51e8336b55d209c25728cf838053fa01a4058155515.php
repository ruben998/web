<?php

/* default/bio.html.twig */
class __TwigTemplate_b65a334318465b4761ea918e2c85a2acbd0018bb04d3fff040c1093458a70104 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/bio.html.twig", 1);
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
        $__internal_fd6bf0f451f26094854ac3890b80a0b2db9295318b4ea7b67b7330b2234970f9 = $this->env->getExtension("native_profiler");
        $__internal_fd6bf0f451f26094854ac3890b80a0b2db9295318b4ea7b67b7330b2234970f9->enter($__internal_fd6bf0f451f26094854ac3890b80a0b2db9295318b4ea7b67b7330b2234970f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/bio.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd6bf0f451f26094854ac3890b80a0b2db9295318b4ea7b67b7330b2234970f9->leave($__internal_fd6bf0f451f26094854ac3890b80a0b2db9295318b4ea7b67b7330b2234970f9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f96d8a6cdd9b11deff9830c8abe4744d0c84190d1a3e33ca62692306c5203315 = $this->env->getExtension("native_profiler");
        $__internal_f96d8a6cdd9b11deff9830c8abe4744d0c84190d1a3e33ca62692306c5203315->enter($__internal_f96d8a6cdd9b11deff9830c8abe4744d0c84190d1a3e33ca62692306c5203315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        
        $__internal_f96d8a6cdd9b11deff9830c8abe4744d0c84190d1a3e33ca62692306c5203315->leave($__internal_f96d8a6cdd9b11deff9830c8abe4744d0c84190d1a3e33ca62692306c5203315_prof);

    }

    public function getTemplateName()
    {
        return "default/bio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* {% endblock %}*/
/* */
/* */
