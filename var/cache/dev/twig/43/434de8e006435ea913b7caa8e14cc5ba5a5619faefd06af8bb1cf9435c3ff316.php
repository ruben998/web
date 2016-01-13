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
        $__internal_bdc9d8dcd2667be51fe1e966b2ac9101778eb342cb08a23bfe795e77153c813a = $this->env->getExtension("native_profiler");
        $__internal_bdc9d8dcd2667be51fe1e966b2ac9101778eb342cb08a23bfe795e77153c813a->enter($__internal_bdc9d8dcd2667be51fe1e966b2ac9101778eb342cb08a23bfe795e77153c813a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bdc9d8dcd2667be51fe1e966b2ac9101778eb342cb08a23bfe795e77153c813a->leave($__internal_bdc9d8dcd2667be51fe1e966b2ac9101778eb342cb08a23bfe795e77153c813a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5f41ae6de17ee73a224192e2e28e9dd5e938f73892c202a6ad588ff73e969976 = $this->env->getExtension("native_profiler");
        $__internal_5f41ae6de17ee73a224192e2e28e9dd5e938f73892c202a6ad588ff73e969976->enter($__internal_5f41ae6de17ee73a224192e2e28e9dd5e938f73892c202a6ad588ff73e969976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5f41ae6de17ee73a224192e2e28e9dd5e938f73892c202a6ad588ff73e969976->leave($__internal_5f41ae6de17ee73a224192e2e28e9dd5e938f73892c202a6ad588ff73e969976_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1df67df3735c71feebdc7262612041cb6c7294dad204e689e247fd30112197e4 = $this->env->getExtension("native_profiler");
        $__internal_1df67df3735c71feebdc7262612041cb6c7294dad204e689e247fd30112197e4->enter($__internal_1df67df3735c71feebdc7262612041cb6c7294dad204e689e247fd30112197e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1df67df3735c71feebdc7262612041cb6c7294dad204e689e247fd30112197e4->leave($__internal_1df67df3735c71feebdc7262612041cb6c7294dad204e689e247fd30112197e4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_90b509c9684dbc397f1f3258d0c12be40a92064a8a7f2e8bc40b2ac62d56bb3a = $this->env->getExtension("native_profiler");
        $__internal_90b509c9684dbc397f1f3258d0c12be40a92064a8a7f2e8bc40b2ac62d56bb3a->enter($__internal_90b509c9684dbc397f1f3258d0c12be40a92064a8a7f2e8bc40b2ac62d56bb3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_90b509c9684dbc397f1f3258d0c12be40a92064a8a7f2e8bc40b2ac62d56bb3a->leave($__internal_90b509c9684dbc397f1f3258d0c12be40a92064a8a7f2e8bc40b2ac62d56bb3a_prof);

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
