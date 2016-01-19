<?php

/* :default:contact.html.twig */
class __TwigTemplate_36dcb6647da473e1d8c20d11888c59628b9286e15e2e310f8dd42f670447b6ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:contact.html.twig", 1);
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
        $__internal_974d4676784a6589bd4811409d0c6b0d51bd462a3f81637a841ebe87f7cd7559 = $this->env->getExtension("native_profiler");
        $__internal_974d4676784a6589bd4811409d0c6b0d51bd462a3f81637a841ebe87f7cd7559->enter($__internal_974d4676784a6589bd4811409d0c6b0d51bd462a3f81637a841ebe87f7cd7559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_974d4676784a6589bd4811409d0c6b0d51bd462a3f81637a841ebe87f7cd7559->leave($__internal_974d4676784a6589bd4811409d0c6b0d51bd462a3f81637a841ebe87f7cd7559_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a0a8ca057f90e29259e54fde8aba057f3b6448894676811fe358303da2e14786 = $this->env->getExtension("native_profiler");
        $__internal_a0a8ca057f90e29259e54fde8aba057f3b6448894676811fe358303da2e14786->enter($__internal_a0a8ca057f90e29259e54fde8aba057f3b6448894676811fe358303da2e14786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\".jumbotron div-jumbotron\" align=\"center\">
        <h1>CONTACTO</h1>
        <p>Página personal</p>
    </div>
";
        
        $__internal_a0a8ca057f90e29259e54fde8aba057f3b6448894676811fe358303da2e14786->leave($__internal_a0a8ca057f90e29259e54fde8aba057f3b6448894676811fe358303da2e14786_prof);

    }

    public function getTemplateName()
    {
        return ":default:contact.html.twig";
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
