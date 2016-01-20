<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_cc10b34e6d7f7752e762865ce8ba6c1cf406db9c2945c91d5bf2b0eab8deaa06 extends Twig_Template
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
        $__internal_b72c4e158b209c5bd5f486f6bf1808e63e61e67b273432d4e147d807b50a29d3 = $this->env->getExtension("native_profiler");
        $__internal_b72c4e158b209c5bd5f486f6bf1808e63e61e67b273432d4e147d807b50a29d3->enter($__internal_b72c4e158b209c5bd5f486f6bf1808e63e61e67b273432d4e147d807b50a29d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b72c4e158b209c5bd5f486f6bf1808e63e61e67b273432d4e147d807b50a29d3->leave($__internal_b72c4e158b209c5bd5f486f6bf1808e63e61e67b273432d4e147d807b50a29d3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_593423991ae5748e4e562f97c64a24fd8a9f7bc0cdb7667a8f0fd3ca0977a5bb = $this->env->getExtension("native_profiler");
        $__internal_593423991ae5748e4e562f97c64a24fd8a9f7bc0cdb7667a8f0fd3ca0977a5bb->enter($__internal_593423991ae5748e4e562f97c64a24fd8a9f7bc0cdb7667a8f0fd3ca0977a5bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_593423991ae5748e4e562f97c64a24fd8a9f7bc0cdb7667a8f0fd3ca0977a5bb->leave($__internal_593423991ae5748e4e562f97c64a24fd8a9f7bc0cdb7667a8f0fd3ca0977a5bb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cf36000baea74155778aa9118fc1491fe11bc334451a0abe7360e2e401c4d1bb = $this->env->getExtension("native_profiler");
        $__internal_cf36000baea74155778aa9118fc1491fe11bc334451a0abe7360e2e401c4d1bb->enter($__internal_cf36000baea74155778aa9118fc1491fe11bc334451a0abe7360e2e401c4d1bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cf36000baea74155778aa9118fc1491fe11bc334451a0abe7360e2e401c4d1bb->leave($__internal_cf36000baea74155778aa9118fc1491fe11bc334451a0abe7360e2e401c4d1bb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_026c92e8c4c15c04a56551f4422db15e930d6a112c469831ae8569cdf5ca2886 = $this->env->getExtension("native_profiler");
        $__internal_026c92e8c4c15c04a56551f4422db15e930d6a112c469831ae8569cdf5ca2886->enter($__internal_026c92e8c4c15c04a56551f4422db15e930d6a112c469831ae8569cdf5ca2886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_026c92e8c4c15c04a56551f4422db15e930d6a112c469831ae8569cdf5ca2886->leave($__internal_026c92e8c4c15c04a56551f4422db15e930d6a112c469831ae8569cdf5ca2886_prof);

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
