<?php

/* auth/project_new.html.twig */
class __TwigTemplate_a042b021a63e1da9a6592840b81ba7f8d085102fa60f9fa3005e0c65eca44e15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "auth/project_new.html.twig", 1);
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
        $__internal_a27d2b65842dee8761e259a37e048d4a7807d079b0099eb0d7bcc6026ef97b8e = $this->env->getExtension("native_profiler");
        $__internal_a27d2b65842dee8761e259a37e048d4a7807d079b0099eb0d7bcc6026ef97b8e->enter($__internal_a27d2b65842dee8761e259a37e048d4a7807d079b0099eb0d7bcc6026ef97b8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "auth/project_new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a27d2b65842dee8761e259a37e048d4a7807d079b0099eb0d7bcc6026ef97b8e->leave($__internal_a27d2b65842dee8761e259a37e048d4a7807d079b0099eb0d7bcc6026ef97b8e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6160852ed33d6c2d9cd6846cb07783c7f9cc7afddc763419f350c02d93f09ce8 = $this->env->getExtension("native_profiler");
        $__internal_6160852ed33d6c2d9cd6846cb07783c7f9cc7afddc763419f350c02d93f09ce8->enter($__internal_6160852ed33d6c2d9cd6846cb07783c7f9cc7afddc763419f350c02d93f09ce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6160852ed33d6c2d9cd6846cb07783c7f9cc7afddc763419f350c02d93f09ce8->leave($__internal_6160852ed33d6c2d9cd6846cb07783c7f9cc7afddc763419f350c02d93f09ce8_prof);

    }

    public function getTemplateName()
    {
        return "auth/project_new.html.twig";
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
