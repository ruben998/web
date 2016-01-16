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
        $__internal_fee00bef1bb33d2ea8ec41c8db7ed8ba9015c8799d13844d3f5ff2f7e777a02f = $this->env->getExtension("native_profiler");
        $__internal_fee00bef1bb33d2ea8ec41c8db7ed8ba9015c8799d13844d3f5ff2f7e777a02f->enter($__internal_fee00bef1bb33d2ea8ec41c8db7ed8ba9015c8799d13844d3f5ff2f7e777a02f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:project.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fee00bef1bb33d2ea8ec41c8db7ed8ba9015c8799d13844d3f5ff2f7e777a02f->leave($__internal_fee00bef1bb33d2ea8ec41c8db7ed8ba9015c8799d13844d3f5ff2f7e777a02f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f18557e8614d1b5b64c8284aed936d8803e3ddcecfa160fb16df418cae705a9 = $this->env->getExtension("native_profiler");
        $__internal_6f18557e8614d1b5b64c8284aed936d8803e3ddcecfa160fb16df418cae705a9->enter($__internal_6f18557e8614d1b5b64c8284aed936d8803e3ddcecfa160fb16df418cae705a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\".jumbotron div-jumbotron\" align=\"center\">
        <h1>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "name", array()), "html", null, true);
        echo "</h1>
        <p>Projectos</p>
    </div>
";
        
        $__internal_6f18557e8614d1b5b64c8284aed936d8803e3ddcecfa160fb16df418cae705a9->leave($__internal_6f18557e8614d1b5b64c8284aed936d8803e3ddcecfa160fb16df418cae705a9_prof);

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
