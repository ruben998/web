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
        $__internal_f468a6e6f840617be2f56c73d9c25040b88fe7fbdffe45dc12de32ae1b12cde3 = $this->env->getExtension("native_profiler");
        $__internal_f468a6e6f840617be2f56c73d9c25040b88fe7fbdffe45dc12de32ae1b12cde3->enter($__internal_f468a6e6f840617be2f56c73d9c25040b88fe7fbdffe45dc12de32ae1b12cde3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f468a6e6f840617be2f56c73d9c25040b88fe7fbdffe45dc12de32ae1b12cde3->leave($__internal_f468a6e6f840617be2f56c73d9c25040b88fe7fbdffe45dc12de32ae1b12cde3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ed0b2f05d409c28e2133ac043e4dc9a25edf9f2ace9d5e6a9d533d583cd03025 = $this->env->getExtension("native_profiler");
        $__internal_ed0b2f05d409c28e2133ac043e4dc9a25edf9f2ace9d5e6a9d533d583cd03025->enter($__internal_ed0b2f05d409c28e2133ac043e4dc9a25edf9f2ace9d5e6a9d533d583cd03025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ed0b2f05d409c28e2133ac043e4dc9a25edf9f2ace9d5e6a9d533d583cd03025->leave($__internal_ed0b2f05d409c28e2133ac043e4dc9a25edf9f2ace9d5e6a9d533d583cd03025_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_11fb352da09afe619280f0ada135d0c1c28de6db43430f1eda1ee34d315a1d76 = $this->env->getExtension("native_profiler");
        $__internal_11fb352da09afe619280f0ada135d0c1c28de6db43430f1eda1ee34d315a1d76->enter($__internal_11fb352da09afe619280f0ada135d0c1c28de6db43430f1eda1ee34d315a1d76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_11fb352da09afe619280f0ada135d0c1c28de6db43430f1eda1ee34d315a1d76->leave($__internal_11fb352da09afe619280f0ada135d0c1c28de6db43430f1eda1ee34d315a1d76_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d61f64446dbf52c999288fc75e079fce2a34c3d5d73053f2ac58be7ca88953dc = $this->env->getExtension("native_profiler");
        $__internal_d61f64446dbf52c999288fc75e079fce2a34c3d5d73053f2ac58be7ca88953dc->enter($__internal_d61f64446dbf52c999288fc75e079fce2a34c3d5d73053f2ac58be7ca88953dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d61f64446dbf52c999288fc75e079fce2a34c3d5d73053f2ac58be7ca88953dc->leave($__internal_d61f64446dbf52c999288fc75e079fce2a34c3d5d73053f2ac58be7ca88953dc_prof);

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
