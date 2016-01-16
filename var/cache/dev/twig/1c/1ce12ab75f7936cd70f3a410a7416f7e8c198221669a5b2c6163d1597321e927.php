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
        $__internal_0cdc4c72f7fa9deb5f55af71e5fef37f711413fdbf80ec680cffb5a19dabeeb8 = $this->env->getExtension("native_profiler");
        $__internal_0cdc4c72f7fa9deb5f55af71e5fef37f711413fdbf80ec680cffb5a19dabeeb8->enter($__internal_0cdc4c72f7fa9deb5f55af71e5fef37f711413fdbf80ec680cffb5a19dabeeb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0cdc4c72f7fa9deb5f55af71e5fef37f711413fdbf80ec680cffb5a19dabeeb8->leave($__internal_0cdc4c72f7fa9deb5f55af71e5fef37f711413fdbf80ec680cffb5a19dabeeb8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cd991a23342125d692488b55d02a692799b1e5318ca479630d96dc70b7c1d6d7 = $this->env->getExtension("native_profiler");
        $__internal_cd991a23342125d692488b55d02a692799b1e5318ca479630d96dc70b7c1d6d7->enter($__internal_cd991a23342125d692488b55d02a692799b1e5318ca479630d96dc70b7c1d6d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_cd991a23342125d692488b55d02a692799b1e5318ca479630d96dc70b7c1d6d7->leave($__internal_cd991a23342125d692488b55d02a692799b1e5318ca479630d96dc70b7c1d6d7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_778855b361a8e811143cb3ad04086f4b6585515b6fbff0a33cca76ffa6435126 = $this->env->getExtension("native_profiler");
        $__internal_778855b361a8e811143cb3ad04086f4b6585515b6fbff0a33cca76ffa6435126->enter($__internal_778855b361a8e811143cb3ad04086f4b6585515b6fbff0a33cca76ffa6435126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_778855b361a8e811143cb3ad04086f4b6585515b6fbff0a33cca76ffa6435126->leave($__internal_778855b361a8e811143cb3ad04086f4b6585515b6fbff0a33cca76ffa6435126_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_936b40b6768630816f52f4d714ae7e5195caa231bcde759838bd466e99ecd5dc = $this->env->getExtension("native_profiler");
        $__internal_936b40b6768630816f52f4d714ae7e5195caa231bcde759838bd466e99ecd5dc->enter($__internal_936b40b6768630816f52f4d714ae7e5195caa231bcde759838bd466e99ecd5dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_936b40b6768630816f52f4d714ae7e5195caa231bcde759838bd466e99ecd5dc->leave($__internal_936b40b6768630816f52f4d714ae7e5195caa231bcde759838bd466e99ecd5dc_prof);

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
