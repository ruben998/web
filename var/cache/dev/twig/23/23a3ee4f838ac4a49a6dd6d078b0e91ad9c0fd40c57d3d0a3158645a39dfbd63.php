<?php

/* :default:project.html.twig */
class __TwigTemplate_2c8984bf16237a392531518a44a72070b7cf97b6ef0b854826391172b75108f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:project.html.twig", 1);
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
        $__internal_3c2e0617522a3c4fe51173718bba71c7b098a31be9d1f5157f706070f7a12018 = $this->env->getExtension("native_profiler");
        $__internal_3c2e0617522a3c4fe51173718bba71c7b098a31be9d1f5157f706070f7a12018->enter($__internal_3c2e0617522a3c4fe51173718bba71c7b098a31be9d1f5157f706070f7a12018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:project.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c2e0617522a3c4fe51173718bba71c7b098a31be9d1f5157f706070f7a12018->leave($__internal_3c2e0617522a3c4fe51173718bba71c7b098a31be9d1f5157f706070f7a12018_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fb81f3a524ac899568a50f95bb3cb454374766cf917043fa340b6372027f7bcb = $this->env->getExtension("native_profiler");
        $__internal_fb81f3a524ac899568a50f95bb3cb454374766cf917043fa340b6372027f7bcb->enter($__internal_fb81f3a524ac899568a50f95bb3cb454374766cf917043fa340b6372027f7bcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\".jumbotron div-jumbotron\" align=\"center\">
        <h1>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "name", array()), "html", null, true);
        echo "</h1>
        <p>Projectos</p>
    </div>
";
        
        $__internal_fb81f3a524ac899568a50f95bb3cb454374766cf917043fa340b6372027f7bcb->leave($__internal_fb81f3a524ac899568a50f95bb3cb454374766cf917043fa340b6372027f7bcb_prof);

    }

    public function getTemplateName()
    {
        return ":default:project.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class=".jumbotron div-jumbotron" align="center">*/
/*         <h1>{{ project.name }}</h1>*/
/*         <p>Projectos</p>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* */
