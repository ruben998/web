<?php

/* :default:another.html.twig */
class __TwigTemplate_c53844c2cc9ef78f2abd30054dcd71da3a35e848603aec068b4e6194dee62c95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:another.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_37283f58d86a293d75f78bc5fca5a0c2a7be6419b2686bef3b64bd416ab4a8f5 = $this->env->getExtension("native_profiler");
        $__internal_37283f58d86a293d75f78bc5fca5a0c2a7be6419b2686bef3b64bd416ab4a8f5->enter($__internal_37283f58d86a293d75f78bc5fca5a0c2a7be6419b2686bef3b64bd416ab4a8f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:another.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37283f58d86a293d75f78bc5fca5a0c2a7be6419b2686bef3b64bd416ab4a8f5->leave($__internal_37283f58d86a293d75f78bc5fca5a0c2a7be6419b2686bef3b64bd416ab4a8f5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0db78741a90fecdd611def19fda4955f30df94cbd83461a234476a6f4736bee = $this->env->getExtension("native_profiler");
        $__internal_d0db78741a90fecdd611def19fda4955f30df94cbd83461a234476a6f4736bee->enter($__internal_d0db78741a90fecdd611def19fda4955f30df94cbd83461a234476a6f4736bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    CONTACT!
";
        
        $__internal_d0db78741a90fecdd611def19fda4955f30df94cbd83461a234476a6f4736bee->leave($__internal_d0db78741a90fecdd611def19fda4955f30df94cbd83461a234476a6f4736bee_prof);

    }

    public function getTemplateName()
    {
        return ":default:another.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     CONTACT!*/
/* {% endblock %}*/
/* */
/* */
