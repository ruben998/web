<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_5a73e08594526fcdeee6b4516c03cf179b31f3c431cb0af9349d44fc4879d430 extends Twig_Template
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
        $__internal_09de6cce3596730c2fe3c806a02842837cc7497e6710c206815f29d53f70f85a = $this->env->getExtension("native_profiler");
        $__internal_09de6cce3596730c2fe3c806a02842837cc7497e6710c206815f29d53f70f85a->enter($__internal_09de6cce3596730c2fe3c806a02842837cc7497e6710c206815f29d53f70f85a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_09de6cce3596730c2fe3c806a02842837cc7497e6710c206815f29d53f70f85a->leave($__internal_09de6cce3596730c2fe3c806a02842837cc7497e6710c206815f29d53f70f85a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
