<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_d1ec4706cf35c4b0e39fbf33f03a8748a1a77d117878ffc3350947d3ece33445 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fecc57d8ca3f3287fec2d267dee23572feba4f2b4996b5411edcc1dbe7a65e5e = $this->env->getExtension("native_profiler");
        $__internal_fecc57d8ca3f3287fec2d267dee23572feba4f2b4996b5411edcc1dbe7a65e5e->enter($__internal_fecc57d8ca3f3287fec2d267dee23572feba4f2b4996b5411edcc1dbe7a65e5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_fecc57d8ca3f3287fec2d267dee23572feba4f2b4996b5411edcc1dbe7a65e5e->leave($__internal_fecc57d8ca3f3287fec2d267dee23572feba4f2b4996b5411edcc1dbe7a65e5e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  34 => 5,  32 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/*         <traces>*/
/* {% for trace in exception.trace %}*/
/*             <trace>*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/*             </trace>*/
/* {% endfor %}*/
/*         </traces>*/
/* */
