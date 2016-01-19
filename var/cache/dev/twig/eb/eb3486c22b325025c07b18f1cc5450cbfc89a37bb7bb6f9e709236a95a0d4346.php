<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_dd76941a6a66123147d6993366a565631d3d22a710625b23d287d18c41e3112c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_436c03c76e0a356cd6380c4b74a8ce7a6cd1354898fe72dd8839ec804d198a2e = $this->env->getExtension("native_profiler");
        $__internal_436c03c76e0a356cd6380c4b74a8ce7a6cd1354898fe72dd8839ec804d198a2e->enter($__internal_436c03c76e0a356cd6380c4b74a8ce7a6cd1354898fe72dd8839ec804d198a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_436c03c76e0a356cd6380c4b74a8ce7a6cd1354898fe72dd8839ec804d198a2e->leave($__internal_436c03c76e0a356cd6380c4b74a8ce7a6cd1354898fe72dd8839ec804d198a2e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1f70e5e53d102877ef861dfb123d436bf2aa28bcf61cb6c1ef27bc7349507f3c = $this->env->getExtension("native_profiler");
        $__internal_1f70e5e53d102877ef861dfb123d436bf2aa28bcf61cb6c1ef27bc7349507f3c->enter($__internal_1f70e5e53d102877ef861dfb123d436bf2aa28bcf61cb6c1ef27bc7349507f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_1f70e5e53d102877ef861dfb123d436bf2aa28bcf61cb6c1ef27bc7349507f3c->leave($__internal_1f70e5e53d102877ef861dfb123d436bf2aa28bcf61cb6c1ef27bc7349507f3c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f4db9f2e7dd2323c9fe169a56c1f9ad6a4c1dec82c3d81bb6b8905863f25b21e = $this->env->getExtension("native_profiler");
        $__internal_f4db9f2e7dd2323c9fe169a56c1f9ad6a4c1dec82c3d81bb6b8905863f25b21e->enter($__internal_f4db9f2e7dd2323c9fe169a56c1f9ad6a4c1dec82c3d81bb6b8905863f25b21e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_f4db9f2e7dd2323c9fe169a56c1f9ad6a4c1dec82c3d81bb6b8905863f25b21e->leave($__internal_f4db9f2e7dd2323c9fe169a56c1f9ad6a4c1dec82c3d81bb6b8905863f25b21e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_561adbf91cd624ad4a01d15a14f8b27ad28a631891de09dda01f90c008ff6461 = $this->env->getExtension("native_profiler");
        $__internal_561adbf91cd624ad4a01d15a14f8b27ad28a631891de09dda01f90c008ff6461->enter($__internal_561adbf91cd624ad4a01d15a14f8b27ad28a631891de09dda01f90c008ff6461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_561adbf91cd624ad4a01d15a14f8b27ad28a631891de09dda01f90c008ff6461->leave($__internal_561adbf91cd624ad4a01d15a14f8b27ad28a631891de09dda01f90c008ff6461_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
