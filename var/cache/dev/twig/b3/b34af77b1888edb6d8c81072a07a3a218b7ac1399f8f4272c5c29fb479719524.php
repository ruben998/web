<?php

/* project/project_new.html.twig */
class __TwigTemplate_38ffbccd0107a736338ed0f5d43e35b6229c167ef7b9d5b4257f95bc6644813c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "project/project_new.html.twig", 1);
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
        $__internal_24c99c9f4bd36729f4a7697c3ce4291aa444c1bc14f058d332676d6604453f58 = $this->env->getExtension("native_profiler");
        $__internal_24c99c9f4bd36729f4a7697c3ce4291aa444c1bc14f058d332676d6604453f58->enter($__internal_24c99c9f4bd36729f4a7697c3ce4291aa444c1bc14f058d332676d6604453f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "project/project_new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24c99c9f4bd36729f4a7697c3ce4291aa444c1bc14f058d332676d6604453f58->leave($__internal_24c99c9f4bd36729f4a7697c3ce4291aa444c1bc14f058d332676d6604453f58_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_247bfc4c5d436b7e23da53edaa246d03ea6ef88b10e832e991be28df0ccae841 = $this->env->getExtension("native_profiler");
        $__internal_247bfc4c5d436b7e23da53edaa246d03ea6ef88b10e832e991be28df0ccae841->enter($__internal_247bfc4c5d436b7e23da53edaa246d03ea6ef88b10e832e991be28df0ccae841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('routing')->getPath("projects_auth_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_247bfc4c5d436b7e23da53edaa246d03ea6ef88b10e832e991be28df0ccae841->leave($__internal_247bfc4c5d436b7e23da53edaa246d03ea6ef88b10e832e991be28df0ccae841_prof);

    }

    public function getTemplateName()
    {
        return "project/project_new.html.twig";
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
/*             <a href="{{ path('projects_auth_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
