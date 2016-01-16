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
        $__internal_48252af9e41363042a254f4ba9bd60a0704f853a82db818c6e9978f9d9f61660 = $this->env->getExtension("native_profiler");
        $__internal_48252af9e41363042a254f4ba9bd60a0704f853a82db818c6e9978f9d9f61660->enter($__internal_48252af9e41363042a254f4ba9bd60a0704f853a82db818c6e9978f9d9f61660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48252af9e41363042a254f4ba9bd60a0704f853a82db818c6e9978f9d9f61660->leave($__internal_48252af9e41363042a254f4ba9bd60a0704f853a82db818c6e9978f9d9f61660_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_00d75def939bb5713b3293f573c00a3c19360d1f356895179c41f63be63ffbd9 = $this->env->getExtension("native_profiler");
        $__internal_00d75def939bb5713b3293f573c00a3c19360d1f356895179c41f63be63ffbd9->enter($__internal_00d75def939bb5713b3293f573c00a3c19360d1f356895179c41f63be63ffbd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_00d75def939bb5713b3293f573c00a3c19360d1f356895179c41f63be63ffbd9->leave($__internal_00d75def939bb5713b3293f573c00a3c19360d1f356895179c41f63be63ffbd9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_eac2b011be664a57edcd53f53c19feb13b2b1ad20d9729bd8f474074ec8155af = $this->env->getExtension("native_profiler");
        $__internal_eac2b011be664a57edcd53f53c19feb13b2b1ad20d9729bd8f474074ec8155af->enter($__internal_eac2b011be664a57edcd53f53c19feb13b2b1ad20d9729bd8f474074ec8155af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_eac2b011be664a57edcd53f53c19feb13b2b1ad20d9729bd8f474074ec8155af->leave($__internal_eac2b011be664a57edcd53f53c19feb13b2b1ad20d9729bd8f474074ec8155af_prof);

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
