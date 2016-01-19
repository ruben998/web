<?php

/* :project:new.html.twig */
class __TwigTemplate_4e6b8cd0e33eab0302d9cbd37987e3b587e7477f5569fd6abb4d9389c2c8177e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":project:new.html.twig", 1);
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
        $__internal_e2a3c7245955deabd20d90dda630d34c55c054396afa68c6b183de7c91a4cc45 = $this->env->getExtension("native_profiler");
        $__internal_e2a3c7245955deabd20d90dda630d34c55c054396afa68c6b183de7c91a4cc45->enter($__internal_e2a3c7245955deabd20d90dda630d34c55c054396afa68c6b183de7c91a4cc45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":project:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2a3c7245955deabd20d90dda630d34c55c054396afa68c6b183de7c91a4cc45->leave($__internal_e2a3c7245955deabd20d90dda630d34c55c054396afa68c6b183de7c91a4cc45_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f5772454969f7581efb652d7cf19c9313da6cfa39be8d3b38a71cba8ef96f84 = $this->env->getExtension("native_profiler");
        $__internal_4f5772454969f7581efb652d7cf19c9313da6cfa39be8d3b38a71cba8ef96f84->enter($__internal_4f5772454969f7581efb652d7cf19c9313da6cfa39be8d3b38a71cba8ef96f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Project creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("projects_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_4f5772454969f7581efb652d7cf19c9313da6cfa39be8d3b38a71cba8ef96f84->leave($__internal_4f5772454969f7581efb652d7cf19c9313da6cfa39be8d3b38a71cba8ef96f84_prof);

    }

    public function getTemplateName()
    {
        return ":project:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Project creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('projects_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
