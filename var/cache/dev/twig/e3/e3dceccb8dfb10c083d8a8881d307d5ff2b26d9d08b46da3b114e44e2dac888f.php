<?php

/* :project:project_edit.html.twig */
class __TwigTemplate_1d9a29cf68b07e0c06f431f36f9b480cb24919a66b9c4af3ca481cde11ca2d97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":project:project_edit.html.twig", 1);
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
        $__internal_8dba9db2b5566bcc496533f07e399637c947f2011a9cb50d3ad11df993c60003 = $this->env->getExtension("native_profiler");
        $__internal_8dba9db2b5566bcc496533f07e399637c947f2011a9cb50d3ad11df993c60003->enter($__internal_8dba9db2b5566bcc496533f07e399637c947f2011a9cb50d3ad11df993c60003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":project:project_edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8dba9db2b5566bcc496533f07e399637c947f2011a9cb50d3ad11df993c60003->leave($__internal_8dba9db2b5566bcc496533f07e399637c947f2011a9cb50d3ad11df993c60003_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1087bdafcd1d758f50fc2d226bd72db12c00f9e1a3fc100eccd98ac6a7f085f6 = $this->env->getExtension("native_profiler");
        $__internal_1087bdafcd1d758f50fc2d226bd72db12c00f9e1a3fc100eccd98ac6a7f085f6->enter($__internal_1087bdafcd1d758f50fc2d226bd72db12c00f9e1a3fc100eccd98ac6a7f085f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Project edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("projects_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_1087bdafcd1d758f50fc2d226bd72db12c00f9e1a3fc100eccd98ac6a7f085f6->leave($__internal_1087bdafcd1d758f50fc2d226bd72db12c00f9e1a3fc100eccd98ac6a7f085f6_prof);

    }

    public function getTemplateName()
    {
        return ":project:project_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Project edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('projects_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
