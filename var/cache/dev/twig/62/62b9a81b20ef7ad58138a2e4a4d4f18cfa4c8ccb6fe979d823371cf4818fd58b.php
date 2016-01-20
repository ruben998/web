<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3ef0a05f3142c9a28e136e4c12e552319efa617978f0776517220a790dc75fee extends Twig_Template
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
        $__internal_0efcdbc73f93d342ffec1b56214ed3ca9a91f535eb0ef8d2709a5848822b9b03 = $this->env->getExtension("native_profiler");
        $__internal_0efcdbc73f93d342ffec1b56214ed3ca9a91f535eb0ef8d2709a5848822b9b03->enter($__internal_0efcdbc73f93d342ffec1b56214ed3ca9a91f535eb0ef8d2709a5848822b9b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0efcdbc73f93d342ffec1b56214ed3ca9a91f535eb0ef8d2709a5848822b9b03->leave($__internal_0efcdbc73f93d342ffec1b56214ed3ca9a91f535eb0ef8d2709a5848822b9b03_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3d6472a6421a6f80adfd5b8b51a3827fe7aebb17de574e30358352bb86726507 = $this->env->getExtension("native_profiler");
        $__internal_3d6472a6421a6f80adfd5b8b51a3827fe7aebb17de574e30358352bb86726507->enter($__internal_3d6472a6421a6f80adfd5b8b51a3827fe7aebb17de574e30358352bb86726507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3d6472a6421a6f80adfd5b8b51a3827fe7aebb17de574e30358352bb86726507->leave($__internal_3d6472a6421a6f80adfd5b8b51a3827fe7aebb17de574e30358352bb86726507_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_371201b49abdda181151508d0650fae5ba31a49702ccf658e3e0d2ceae01bbc9 = $this->env->getExtension("native_profiler");
        $__internal_371201b49abdda181151508d0650fae5ba31a49702ccf658e3e0d2ceae01bbc9->enter($__internal_371201b49abdda181151508d0650fae5ba31a49702ccf658e3e0d2ceae01bbc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_371201b49abdda181151508d0650fae5ba31a49702ccf658e3e0d2ceae01bbc9->leave($__internal_371201b49abdda181151508d0650fae5ba31a49702ccf658e3e0d2ceae01bbc9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e1cb178525414cdf9fc0e34590f9ef0b587f96063706523dcc18b0f516e3eb43 = $this->env->getExtension("native_profiler");
        $__internal_e1cb178525414cdf9fc0e34590f9ef0b587f96063706523dcc18b0f516e3eb43->enter($__internal_e1cb178525414cdf9fc0e34590f9ef0b587f96063706523dcc18b0f516e3eb43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e1cb178525414cdf9fc0e34590f9ef0b587f96063706523dcc18b0f516e3eb43->leave($__internal_e1cb178525414cdf9fc0e34590f9ef0b587f96063706523dcc18b0f516e3eb43_prof);

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
