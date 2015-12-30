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
        $__internal_6c5723bc2792a00a7da62c864ab853033fc5a89614572112e4018554054c8a4c = $this->env->getExtension("native_profiler");
        $__internal_6c5723bc2792a00a7da62c864ab853033fc5a89614572112e4018554054c8a4c->enter($__internal_6c5723bc2792a00a7da62c864ab853033fc5a89614572112e4018554054c8a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c5723bc2792a00a7da62c864ab853033fc5a89614572112e4018554054c8a4c->leave($__internal_6c5723bc2792a00a7da62c864ab853033fc5a89614572112e4018554054c8a4c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5f4d5a54888f899d9a7181a1430598c1ba3f0a7783441dd6f60b72b37d79c29b = $this->env->getExtension("native_profiler");
        $__internal_5f4d5a54888f899d9a7181a1430598c1ba3f0a7783441dd6f60b72b37d79c29b->enter($__internal_5f4d5a54888f899d9a7181a1430598c1ba3f0a7783441dd6f60b72b37d79c29b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5f4d5a54888f899d9a7181a1430598c1ba3f0a7783441dd6f60b72b37d79c29b->leave($__internal_5f4d5a54888f899d9a7181a1430598c1ba3f0a7783441dd6f60b72b37d79c29b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2156343cd941ac521d8d0d6daf45d68e974bc2ca315a67a8ad50a836b7318280 = $this->env->getExtension("native_profiler");
        $__internal_2156343cd941ac521d8d0d6daf45d68e974bc2ca315a67a8ad50a836b7318280->enter($__internal_2156343cd941ac521d8d0d6daf45d68e974bc2ca315a67a8ad50a836b7318280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2156343cd941ac521d8d0d6daf45d68e974bc2ca315a67a8ad50a836b7318280->leave($__internal_2156343cd941ac521d8d0d6daf45d68e974bc2ca315a67a8ad50a836b7318280_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a07f39b8102e3e379c6f95d341a03f42db42dceedc6ce377fe557454dfb699b = $this->env->getExtension("native_profiler");
        $__internal_7a07f39b8102e3e379c6f95d341a03f42db42dceedc6ce377fe557454dfb699b->enter($__internal_7a07f39b8102e3e379c6f95d341a03f42db42dceedc6ce377fe557454dfb699b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_7a07f39b8102e3e379c6f95d341a03f42db42dceedc6ce377fe557454dfb699b->leave($__internal_7a07f39b8102e3e379c6f95d341a03f42db42dceedc6ce377fe557454dfb699b_prof);

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
