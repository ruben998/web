<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_2ae80e15b100bb474442ec2022038c6bd9325d63c7ff881836608c32477dd072 extends Twig_Template
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
        $__internal_fd01fe4bde150415ce28f68bc075c8ea4db89cc5674aac63d514fc36e3b2fa58 = $this->env->getExtension("native_profiler");
        $__internal_fd01fe4bde150415ce28f68bc075c8ea4db89cc5674aac63d514fc36e3b2fa58->enter($__internal_fd01fe4bde150415ce28f68bc075c8ea4db89cc5674aac63d514fc36e3b2fa58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_fd01fe4bde150415ce28f68bc075c8ea4db89cc5674aac63d514fc36e3b2fa58->leave($__internal_fd01fe4bde150415ce28f68bc075c8ea4db89cc5674aac63d514fc36e3b2fa58_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
