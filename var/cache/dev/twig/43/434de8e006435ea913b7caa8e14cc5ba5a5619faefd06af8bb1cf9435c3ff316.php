<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c7cd46cb1fd7824a2ca065a9adba7858d26451344e21e89473f438211bd25ec6 extends Twig_Template
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
        $__internal_6359a2c65510df1cdc4a04211316c09b81b685e1f63484c7b2049dc441ca5198 = $this->env->getExtension("native_profiler");
        $__internal_6359a2c65510df1cdc4a04211316c09b81b685e1f63484c7b2049dc441ca5198->enter($__internal_6359a2c65510df1cdc4a04211316c09b81b685e1f63484c7b2049dc441ca5198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6359a2c65510df1cdc4a04211316c09b81b685e1f63484c7b2049dc441ca5198->leave($__internal_6359a2c65510df1cdc4a04211316c09b81b685e1f63484c7b2049dc441ca5198_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9f2311f5a031419d4647417f5d78124ea3abee4e46a67732557099943752b6fe = $this->env->getExtension("native_profiler");
        $__internal_9f2311f5a031419d4647417f5d78124ea3abee4e46a67732557099943752b6fe->enter($__internal_9f2311f5a031419d4647417f5d78124ea3abee4e46a67732557099943752b6fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9f2311f5a031419d4647417f5d78124ea3abee4e46a67732557099943752b6fe->leave($__internal_9f2311f5a031419d4647417f5d78124ea3abee4e46a67732557099943752b6fe_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_410eb18fba87116924ee490ae5291c1868885e8f5a59dfccec8e24303ea91ba4 = $this->env->getExtension("native_profiler");
        $__internal_410eb18fba87116924ee490ae5291c1868885e8f5a59dfccec8e24303ea91ba4->enter($__internal_410eb18fba87116924ee490ae5291c1868885e8f5a59dfccec8e24303ea91ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_410eb18fba87116924ee490ae5291c1868885e8f5a59dfccec8e24303ea91ba4->leave($__internal_410eb18fba87116924ee490ae5291c1868885e8f5a59dfccec8e24303ea91ba4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b531ab3cc0ce7416cc6aabb4161ee620f62cbd378db6c5d76d2529764bd0615e = $this->env->getExtension("native_profiler");
        $__internal_b531ab3cc0ce7416cc6aabb4161ee620f62cbd378db6c5d76d2529764bd0615e->enter($__internal_b531ab3cc0ce7416cc6aabb4161ee620f62cbd378db6c5d76d2529764bd0615e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b531ab3cc0ce7416cc6aabb4161ee620f62cbd378db6c5d76d2529764bd0615e->leave($__internal_b531ab3cc0ce7416cc6aabb4161ee620f62cbd378db6c5d76d2529764bd0615e_prof);

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
