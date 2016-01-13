<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c99fe5574e29ff270fcd9461fd9f61c15cc46caea27d5ee7cf1ad2f76175fb59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6aaf631c028e0ad1974b84fa77608f2a3ace3c853fb4af21e32ed9c81fd13f32 = $this->env->getExtension("native_profiler");
        $__internal_6aaf631c028e0ad1974b84fa77608f2a3ace3c853fb4af21e32ed9c81fd13f32->enter($__internal_6aaf631c028e0ad1974b84fa77608f2a3ace3c853fb4af21e32ed9c81fd13f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6aaf631c028e0ad1974b84fa77608f2a3ace3c853fb4af21e32ed9c81fd13f32->leave($__internal_6aaf631c028e0ad1974b84fa77608f2a3ace3c853fb4af21e32ed9c81fd13f32_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_54e69e09a0e76a7fb7b448d2769e5377d05dc69dece4d30530b129c10b9d29f8 = $this->env->getExtension("native_profiler");
        $__internal_54e69e09a0e76a7fb7b448d2769e5377d05dc69dece4d30530b129c10b9d29f8->enter($__internal_54e69e09a0e76a7fb7b448d2769e5377d05dc69dece4d30530b129c10b9d29f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_54e69e09a0e76a7fb7b448d2769e5377d05dc69dece4d30530b129c10b9d29f8->leave($__internal_54e69e09a0e76a7fb7b448d2769e5377d05dc69dece4d30530b129c10b9d29f8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f116beebe3f72e34609e57a8ac93e7b90df537e0097188a0299fa1daff9065bc = $this->env->getExtension("native_profiler");
        $__internal_f116beebe3f72e34609e57a8ac93e7b90df537e0097188a0299fa1daff9065bc->enter($__internal_f116beebe3f72e34609e57a8ac93e7b90df537e0097188a0299fa1daff9065bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f116beebe3f72e34609e57a8ac93e7b90df537e0097188a0299fa1daff9065bc->leave($__internal_f116beebe3f72e34609e57a8ac93e7b90df537e0097188a0299fa1daff9065bc_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2fd4df7f9ea4deed6d7673ca79fa4af5023a4300ce70ebeb1f1abd2cefad2adc = $this->env->getExtension("native_profiler");
        $__internal_2fd4df7f9ea4deed6d7673ca79fa4af5023a4300ce70ebeb1f1abd2cefad2adc->enter($__internal_2fd4df7f9ea4deed6d7673ca79fa4af5023a4300ce70ebeb1f1abd2cefad2adc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_2fd4df7f9ea4deed6d7673ca79fa4af5023a4300ce70ebeb1f1abd2cefad2adc->leave($__internal_2fd4df7f9ea4deed6d7673ca79fa4af5023a4300ce70ebeb1f1abd2cefad2adc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
