<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_c7cd46cb1fd7824a2ca065a9adba7858d26451344e21e89473f438211bd25ec6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_63659daa31903b3e1b33dcee4864e39482b2911868c10e283be2cd2840fb56b5 = $this->env->getExtension("native_profiler");
        $__internal_63659daa31903b3e1b33dcee4864e39482b2911868c10e283be2cd2840fb56b5->enter($__internal_63659daa31903b3e1b33dcee4864e39482b2911868c10e283be2cd2840fb56b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63659daa31903b3e1b33dcee4864e39482b2911868c10e283be2cd2840fb56b5->leave($__internal_63659daa31903b3e1b33dcee4864e39482b2911868c10e283be2cd2840fb56b5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5988359944e59e4f0e794f463226ddb0622b64b061c0c5672c138f883be541ac = $this->env->getExtension("native_profiler");
        $__internal_5988359944e59e4f0e794f463226ddb0622b64b061c0c5672c138f883be541ac->enter($__internal_5988359944e59e4f0e794f463226ddb0622b64b061c0c5672c138f883be541ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5988359944e59e4f0e794f463226ddb0622b64b061c0c5672c138f883be541ac->leave($__internal_5988359944e59e4f0e794f463226ddb0622b64b061c0c5672c138f883be541ac_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_36416011780aed4d279a3eff5eb2967cbf1c4aaa91fccaeb187df414e9f3e1fe = $this->env->getExtension("native_profiler");
        $__internal_36416011780aed4d279a3eff5eb2967cbf1c4aaa91fccaeb187df414e9f3e1fe->enter($__internal_36416011780aed4d279a3eff5eb2967cbf1c4aaa91fccaeb187df414e9f3e1fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_36416011780aed4d279a3eff5eb2967cbf1c4aaa91fccaeb187df414e9f3e1fe->leave($__internal_36416011780aed4d279a3eff5eb2967cbf1c4aaa91fccaeb187df414e9f3e1fe_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f2a1d53be14472ffac0ee8d7dca2b78980aff22c06de2f08180b77abe5a298f4 = $this->env->getExtension("native_profiler");
        $__internal_f2a1d53be14472ffac0ee8d7dca2b78980aff22c06de2f08180b77abe5a298f4->enter($__internal_f2a1d53be14472ffac0ee8d7dca2b78980aff22c06de2f08180b77abe5a298f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f2a1d53be14472ffac0ee8d7dca2b78980aff22c06de2f08180b77abe5a298f4->leave($__internal_f2a1d53be14472ffac0ee8d7dca2b78980aff22c06de2f08180b77abe5a298f4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
