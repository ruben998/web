<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_7dc10a8d3775f02d755d18bf650588246e95fa12e3de53fcffd2cc6edcbe7f8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_859aa2cdf48ae4815aeff01728fc8720cdee803511319bf04320ce6a36ccb02c = $this->env->getExtension("native_profiler");
        $__internal_859aa2cdf48ae4815aeff01728fc8720cdee803511319bf04320ce6a36ccb02c->enter($__internal_859aa2cdf48ae4815aeff01728fc8720cdee803511319bf04320ce6a36ccb02c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_859aa2cdf48ae4815aeff01728fc8720cdee803511319bf04320ce6a36ccb02c->leave($__internal_859aa2cdf48ae4815aeff01728fc8720cdee803511319bf04320ce6a36ccb02c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4446757838941ed94b25d13d0bf39fa42420faaeb50087674565eb3373cd9c7f = $this->env->getExtension("native_profiler");
        $__internal_4446757838941ed94b25d13d0bf39fa42420faaeb50087674565eb3373cd9c7f->enter($__internal_4446757838941ed94b25d13d0bf39fa42420faaeb50087674565eb3373cd9c7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4446757838941ed94b25d13d0bf39fa42420faaeb50087674565eb3373cd9c7f->leave($__internal_4446757838941ed94b25d13d0bf39fa42420faaeb50087674565eb3373cd9c7f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_73530e4828b7dcfc6e73b7c0c26ea82f401294aabc91f507b6acac7346b81401 = $this->env->getExtension("native_profiler");
        $__internal_73530e4828b7dcfc6e73b7c0c26ea82f401294aabc91f507b6acac7346b81401->enter($__internal_73530e4828b7dcfc6e73b7c0c26ea82f401294aabc91f507b6acac7346b81401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_73530e4828b7dcfc6e73b7c0c26ea82f401294aabc91f507b6acac7346b81401->leave($__internal_73530e4828b7dcfc6e73b7c0c26ea82f401294aabc91f507b6acac7346b81401_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6701c72d01645720e171366e32462eb5ac0d284cbade51c2a7e1cd2bd1bb55c2 = $this->env->getExtension("native_profiler");
        $__internal_6701c72d01645720e171366e32462eb5ac0d284cbade51c2a7e1cd2bd1bb55c2->enter($__internal_6701c72d01645720e171366e32462eb5ac0d284cbade51c2a7e1cd2bd1bb55c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6701c72d01645720e171366e32462eb5ac0d284cbade51c2a7e1cd2bd1bb55c2->leave($__internal_6701c72d01645720e171366e32462eb5ac0d284cbade51c2a7e1cd2bd1bb55c2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
