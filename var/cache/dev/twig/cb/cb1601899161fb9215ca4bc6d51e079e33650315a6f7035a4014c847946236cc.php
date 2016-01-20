<?php

/* default/bio.html.twig */
class __TwigTemplate_bb94182ecbb924b14ea5ce9024a4f3501f916e8e766da5b871c06fe86890aa23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/bio.html.twig", 1);
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
        $__internal_725d39dab2397b7c47360cee3ceedaabd73e803d90a96981bb8d2888b306327a = $this->env->getExtension("native_profiler");
        $__internal_725d39dab2397b7c47360cee3ceedaabd73e803d90a96981bb8d2888b306327a->enter($__internal_725d39dab2397b7c47360cee3ceedaabd73e803d90a96981bb8d2888b306327a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/bio.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_725d39dab2397b7c47360cee3ceedaabd73e803d90a96981bb8d2888b306327a->leave($__internal_725d39dab2397b7c47360cee3ceedaabd73e803d90a96981bb8d2888b306327a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1da5e59016442053e51897f56964fbd71692cb167d80e49810096c84413b674d = $this->env->getExtension("native_profiler");
        $__internal_1da5e59016442053e51897f56964fbd71692cb167d80e49810096c84413b674d->enter($__internal_1da5e59016442053e51897f56964fbd71692cb167d80e49810096c84413b674d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Biografia</h1>
    <h4>Sóc un noi de Badalona amant de les noves tecnologies i amb curiositats per aprendre. En aquesta pàgina podràs
    trobar els projectes fets fins ara. Sóc estudiant d'enginyeria informàtica en la Universitat de Barcelona. </h4>
";
        
        $__internal_1da5e59016442053e51897f56964fbd71692cb167d80e49810096c84413b674d->leave($__internal_1da5e59016442053e51897f56964fbd71692cb167d80e49810096c84413b674d_prof);

    }

    public function getTemplateName()
    {
        return "default/bio.html.twig";
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
/*     <h1>Biografia</h1>*/
/*     <h4>Sóc un noi de Badalona amant de les noves tecnologies i amb curiositats per aprendre. En aquesta pàgina podràs*/
/*     trobar els projectes fets fins ara. Sóc estudiant d'enginyeria informàtica en la Universitat de Barcelona. </h4>*/
/* {% endblock %}*/
/* */
/* */
