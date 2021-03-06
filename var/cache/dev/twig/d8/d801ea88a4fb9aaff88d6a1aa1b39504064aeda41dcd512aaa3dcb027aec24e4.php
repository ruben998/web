<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_b02d5933fa2c6844f29cd2b95f60e01e5105a9139e620cda2541c29019219fec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_cffc2f7c532ff395f777eeaba9ac7303dd40aef77ba14c8a643eca0c97f6c8bf = $this->env->getExtension("native_profiler");
        $__internal_cffc2f7c532ff395f777eeaba9ac7303dd40aef77ba14c8a643eca0c97f6c8bf->enter($__internal_cffc2f7c532ff395f777eeaba9ac7303dd40aef77ba14c8a643eca0c97f6c8bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cffc2f7c532ff395f777eeaba9ac7303dd40aef77ba14c8a643eca0c97f6c8bf->leave($__internal_cffc2f7c532ff395f777eeaba9ac7303dd40aef77ba14c8a643eca0c97f6c8bf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f0e792514cb4c555cc4bf5245711967cc7230d22de6a15c5438407afd7145f95 = $this->env->getExtension("native_profiler");
        $__internal_f0e792514cb4c555cc4bf5245711967cc7230d22de6a15c5438407afd7145f95->enter($__internal_f0e792514cb4c555cc4bf5245711967cc7230d22de6a15c5438407afd7145f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f0e792514cb4c555cc4bf5245711967cc7230d22de6a15c5438407afd7145f95->leave($__internal_f0e792514cb4c555cc4bf5245711967cc7230d22de6a15c5438407afd7145f95_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_579d15a95cce2430bdb9863432a6676d8c1f9edbb562088bf7b2e6f0c10a2aa6 = $this->env->getExtension("native_profiler");
        $__internal_579d15a95cce2430bdb9863432a6676d8c1f9edbb562088bf7b2e6f0c10a2aa6->enter($__internal_579d15a95cce2430bdb9863432a6676d8c1f9edbb562088bf7b2e6f0c10a2aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_579d15a95cce2430bdb9863432a6676d8c1f9edbb562088bf7b2e6f0c10a2aa6->leave($__internal_579d15a95cce2430bdb9863432a6676d8c1f9edbb562088bf7b2e6f0c10a2aa6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
