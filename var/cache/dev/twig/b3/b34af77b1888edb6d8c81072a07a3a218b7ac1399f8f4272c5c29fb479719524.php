<?php

/* project/new.html.twig */
class __TwigTemplate_38ffbccd0107a736338ed0f5d43e35b6229c167ef7b9d5b4257f95bc6644813c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "project/new.html.twig", 1);
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
        $__internal_6e255fc3a5b98c1991798be7bf088bfb45efdeb4ce4e0b8f0f3add6287baa895 = $this->env->getExtension("native_profiler");
        $__internal_6e255fc3a5b98c1991798be7bf088bfb45efdeb4ce4e0b8f0f3add6287baa895->enter($__internal_6e255fc3a5b98c1991798be7bf088bfb45efdeb4ce4e0b8f0f3add6287baa895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "project/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e255fc3a5b98c1991798be7bf088bfb45efdeb4ce4e0b8f0f3add6287baa895->leave($__internal_6e255fc3a5b98c1991798be7bf088bfb45efdeb4ce4e0b8f0f3add6287baa895_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_38081c143e36c25786df3fb6a5f848eca9bb435a4bb53c98e387768955e43ee6 = $this->env->getExtension("native_profiler");
        $__internal_38081c143e36c25786df3fb6a5f848eca9bb435a4bb53c98e387768955e43ee6->enter($__internal_38081c143e36c25786df3fb6a5f848eca9bb435a4bb53c98e387768955e43ee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_38081c143e36c25786df3fb6a5f848eca9bb435a4bb53c98e387768955e43ee6->leave($__internal_38081c143e36c25786df3fb6a5f848eca9bb435a4bb53c98e387768955e43ee6_prof);

    }

    public function getTemplateName()
    {
        return "project/new.html.twig";
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
