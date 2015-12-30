<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_cd75537e0cff7e4af53276bd6077a54035cef9b7eb2221ec47aaf954b503d210 extends Twig_Template
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
        $__internal_e73d6ae0c5a5b805b73b7a9222b091c0766b654563795564f1dbea1ba941a035 = $this->env->getExtension("native_profiler");
        $__internal_e73d6ae0c5a5b805b73b7a9222b091c0766b654563795564f1dbea1ba941a035->enter($__internal_e73d6ae0c5a5b805b73b7a9222b091c0766b654563795564f1dbea1ba941a035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e73d6ae0c5a5b805b73b7a9222b091c0766b654563795564f1dbea1ba941a035->leave($__internal_e73d6ae0c5a5b805b73b7a9222b091c0766b654563795564f1dbea1ba941a035_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4b09f137d32c9ac1176d84641b728ff2ac78741de13b519c5e2db9f213ff415a = $this->env->getExtension("native_profiler");
        $__internal_4b09f137d32c9ac1176d84641b728ff2ac78741de13b519c5e2db9f213ff415a->enter($__internal_4b09f137d32c9ac1176d84641b728ff2ac78741de13b519c5e2db9f213ff415a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4b09f137d32c9ac1176d84641b728ff2ac78741de13b519c5e2db9f213ff415a->leave($__internal_4b09f137d32c9ac1176d84641b728ff2ac78741de13b519c5e2db9f213ff415a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_201f42875cdb30b551f72f34151f32be0e0021cf81959407f500983df77b3604 = $this->env->getExtension("native_profiler");
        $__internal_201f42875cdb30b551f72f34151f32be0e0021cf81959407f500983df77b3604->enter($__internal_201f42875cdb30b551f72f34151f32be0e0021cf81959407f500983df77b3604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_201f42875cdb30b551f72f34151f32be0e0021cf81959407f500983df77b3604->leave($__internal_201f42875cdb30b551f72f34151f32be0e0021cf81959407f500983df77b3604_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_78527136d85fe4886143442af6a730f585c87510abe2d1be69bb84e64649b6c1 = $this->env->getExtension("native_profiler");
        $__internal_78527136d85fe4886143442af6a730f585c87510abe2d1be69bb84e64649b6c1->enter($__internal_78527136d85fe4886143442af6a730f585c87510abe2d1be69bb84e64649b6c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_78527136d85fe4886143442af6a730f585c87510abe2d1be69bb84e64649b6c1->leave($__internal_78527136d85fe4886143442af6a730f585c87510abe2d1be69bb84e64649b6c1_prof);

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
