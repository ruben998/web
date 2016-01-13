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
        $__internal_f8347a755acc324b705487c823cc13b817d2d50425d53a984509f351acfa6cd5 = $this->env->getExtension("native_profiler");
        $__internal_f8347a755acc324b705487c823cc13b817d2d50425d53a984509f351acfa6cd5->enter($__internal_f8347a755acc324b705487c823cc13b817d2d50425d53a984509f351acfa6cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8347a755acc324b705487c823cc13b817d2d50425d53a984509f351acfa6cd5->leave($__internal_f8347a755acc324b705487c823cc13b817d2d50425d53a984509f351acfa6cd5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e90afbd81281488f64f32cb7f16b7c0ce8dc40acef58b138019fa8b0e0ee41cc = $this->env->getExtension("native_profiler");
        $__internal_e90afbd81281488f64f32cb7f16b7c0ce8dc40acef58b138019fa8b0e0ee41cc->enter($__internal_e90afbd81281488f64f32cb7f16b7c0ce8dc40acef58b138019fa8b0e0ee41cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e90afbd81281488f64f32cb7f16b7c0ce8dc40acef58b138019fa8b0e0ee41cc->leave($__internal_e90afbd81281488f64f32cb7f16b7c0ce8dc40acef58b138019fa8b0e0ee41cc_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_36847bb3b3c0a847e9a251b1d41ec8bb04894bf3d78c482f006e923cb73396ee = $this->env->getExtension("native_profiler");
        $__internal_36847bb3b3c0a847e9a251b1d41ec8bb04894bf3d78c482f006e923cb73396ee->enter($__internal_36847bb3b3c0a847e9a251b1d41ec8bb04894bf3d78c482f006e923cb73396ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_36847bb3b3c0a847e9a251b1d41ec8bb04894bf3d78c482f006e923cb73396ee->leave($__internal_36847bb3b3c0a847e9a251b1d41ec8bb04894bf3d78c482f006e923cb73396ee_prof);

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
