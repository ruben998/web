<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_f45964b5da0413a950e62c03fdc61318cd65934d261a669ae2a723c69edf0a75 extends Twig_Template
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
        $__internal_3886d3d84a080fc3daa1eb37a86a5c3ddac86f016d0a92d65cedc11a1cf165db = $this->env->getExtension("native_profiler");
        $__internal_3886d3d84a080fc3daa1eb37a86a5c3ddac86f016d0a92d65cedc11a1cf165db->enter($__internal_3886d3d84a080fc3daa1eb37a86a5c3ddac86f016d0a92d65cedc11a1cf165db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_3886d3d84a080fc3daa1eb37a86a5c3ddac86f016d0a92d65cedc11a1cf165db->leave($__internal_3886d3d84a080fc3daa1eb37a86a5c3ddac86f016d0a92d65cedc11a1cf165db_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
