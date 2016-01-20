<?php

/* default/contact.html.twig */
class __TwigTemplate_43abe6c059cbe236f6db283522195164c438ed30204f17e66d5b6077e478e177 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/contact.html.twig", 1);
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
        $__internal_573f74bdc441e7f890d0f93fe0f5505ea38f9c521c1beb5d8677927da3e7d8e0 = $this->env->getExtension("native_profiler");
        $__internal_573f74bdc441e7f890d0f93fe0f5505ea38f9c521c1beb5d8677927da3e7d8e0->enter($__internal_573f74bdc441e7f890d0f93fe0f5505ea38f9c521c1beb5d8677927da3e7d8e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_573f74bdc441e7f890d0f93fe0f5505ea38f9c521c1beb5d8677927da3e7d8e0->leave($__internal_573f74bdc441e7f890d0f93fe0f5505ea38f9c521c1beb5d8677927da3e7d8e0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c14721728f2e53c64ca59701704b27aadf23b64b89cf9f292e8d795fc83fb015 = $this->env->getExtension("native_profiler");
        $__internal_c14721728f2e53c64ca59701704b27aadf23b64b89cf9f292e8d795fc83fb015->enter($__internal_c14721728f2e53c64ca59701704b27aadf23b64b89cf9f292e8d795fc83fb015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\".jumbotron div-jumbotron\" align=\"center\">
        <h1>CONTACTO</h1>
        <p>Página personal</p>
    </div>
";
        
        $__internal_c14721728f2e53c64ca59701704b27aadf23b64b89cf9f292e8d795fc83fb015->leave($__internal_c14721728f2e53c64ca59701704b27aadf23b64b89cf9f292e8d795fc83fb015_prof);

    }

    public function getTemplateName()
    {
        return "default/contact.html.twig";
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
/*     <div class=".jumbotron div-jumbotron" align="center">*/
/*         <h1>CONTACTO</h1>*/
/*         <p>Página personal</p>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* */
