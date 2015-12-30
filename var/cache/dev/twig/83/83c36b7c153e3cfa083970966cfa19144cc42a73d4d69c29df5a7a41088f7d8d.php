<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_450bf75ac37cbbbd1c76c065c106653c53083f61ea525cbfc2aeb62ead4c3d72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_79a95a0e3226e2a1f8f3dd783f7302d2fdec4a81a172a76352454149e1638cc2 = $this->env->getExtension("native_profiler");
        $__internal_79a95a0e3226e2a1f8f3dd783f7302d2fdec4a81a172a76352454149e1638cc2->enter($__internal_79a95a0e3226e2a1f8f3dd783f7302d2fdec4a81a172a76352454149e1638cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79a95a0e3226e2a1f8f3dd783f7302d2fdec4a81a172a76352454149e1638cc2->leave($__internal_79a95a0e3226e2a1f8f3dd783f7302d2fdec4a81a172a76352454149e1638cc2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_96de017511c6b10ad7546ad7f41a56a9fcbe0c3d000494745a97e7d4e9e88c35 = $this->env->getExtension("native_profiler");
        $__internal_96de017511c6b10ad7546ad7f41a56a9fcbe0c3d000494745a97e7d4e9e88c35->enter($__internal_96de017511c6b10ad7546ad7f41a56a9fcbe0c3d000494745a97e7d4e9e88c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_96de017511c6b10ad7546ad7f41a56a9fcbe0c3d000494745a97e7d4e9e88c35->leave($__internal_96de017511c6b10ad7546ad7f41a56a9fcbe0c3d000494745a97e7d4e9e88c35_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1cb64fdbe7d2f9df83929397fba4046ac5669a2bf4d7456d821f9d2ace7b3d89 = $this->env->getExtension("native_profiler");
        $__internal_1cb64fdbe7d2f9df83929397fba4046ac5669a2bf4d7456d821f9d2ace7b3d89->enter($__internal_1cb64fdbe7d2f9df83929397fba4046ac5669a2bf4d7456d821f9d2ace7b3d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_1cb64fdbe7d2f9df83929397fba4046ac5669a2bf4d7456d821f9d2ace7b3d89->leave($__internal_1cb64fdbe7d2f9df83929397fba4046ac5669a2bf4d7456d821f9d2ace7b3d89_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fe4d7c27da3ef40456823cde5ccb82fa20ac3ed1cf1b6374f64a5b284e41efa3 = $this->env->getExtension("native_profiler");
        $__internal_fe4d7c27da3ef40456823cde5ccb82fa20ac3ed1cf1b6374f64a5b284e41efa3->enter($__internal_fe4d7c27da3ef40456823cde5ccb82fa20ac3ed1cf1b6374f64a5b284e41efa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_fe4d7c27da3ef40456823cde5ccb82fa20ac3ed1cf1b6374f64a5b284e41efa3->leave($__internal_fe4d7c27da3ef40456823cde5ccb82fa20ac3ed1cf1b6374f64a5b284e41efa3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
