<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_5920d291d1b35fd90f2e1d14cf9e1c93df5475161de939c6e6e875f6d18e9728 extends Twig_Template
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
        $__internal_5956f30816baf1fe84747ce18cb5262492f48065ebd7ed8b01a3ba4e9b304a38 = $this->env->getExtension("native_profiler");
        $__internal_5956f30816baf1fe84747ce18cb5262492f48065ebd7ed8b01a3ba4e9b304a38->enter($__internal_5956f30816baf1fe84747ce18cb5262492f48065ebd7ed8b01a3ba4e9b304a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_5956f30816baf1fe84747ce18cb5262492f48065ebd7ed8b01a3ba4e9b304a38->leave($__internal_5956f30816baf1fe84747ce18cb5262492f48065ebd7ed8b01a3ba4e9b304a38_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
