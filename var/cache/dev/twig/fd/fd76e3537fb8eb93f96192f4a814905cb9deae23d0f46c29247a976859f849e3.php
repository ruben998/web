<?php

/* project/index.html.twig */
class __TwigTemplate_4b62bc42d63427766f8704e055f67792c401090ab068be122c9a43047c010973 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "project/index.html.twig", 1);
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
        $__internal_073b63dd66f4e33fbddd581efec8dd92f7a79a9f089776591149841456f9cee7 = $this->env->getExtension("native_profiler");
        $__internal_073b63dd66f4e33fbddd581efec8dd92f7a79a9f089776591149841456f9cee7->enter($__internal_073b63dd66f4e33fbddd581efec8dd92f7a79a9f089776591149841456f9cee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "project/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_073b63dd66f4e33fbddd581efec8dd92f7a79a9f089776591149841456f9cee7->leave($__internal_073b63dd66f4e33fbddd581efec8dd92f7a79a9f089776591149841456f9cee7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f086e18a5f37f4999c5c7eb13a05784a61b22ac25a620d81896ba18769d3b232 = $this->env->getExtension("native_profiler");
        $__internal_f086e18a5f37f4999c5c7eb13a05784a61b22ac25a620d81896ba18769d3b232->enter($__internal_f086e18a5f37f4999c5c7eb13a05784a61b22ac25a620d81896ba18769d3b232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Project list</h1>


    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch((isset($context["projects"]) ? $context["projects"] : $this->getContext($context, "projects")), 3));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 8
            echo "        <div class=\"row\" align=\"center\">
            ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
                // line 10
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("projects_show", array("id" => $this->getAttribute($context["project"], "id", array()))), "html", null, true);
                echo "\">
                    <div class=\"col-md-4 project\">
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <h2>";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "name", array()), "html", null, true);
                echo "</h2>
                    </div>
                </a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
";
        
        $__internal_f086e18a5f37f4999c5c7eb13a05784a61b22ac25a620d81896ba18769d3b232->leave($__internal_f086e18a5f37f4999c5c7eb13a05784a61b22ac25a620d81896ba18769d3b232_prof);

    }

    public function getTemplateName()
    {
        return "project/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 23,  77 => 21,  67 => 17,  56 => 10,  52 => 9,  49 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Project list</h1>*/
/* */
/* */
/*     {% for row in projects|batch(3) %}*/
/*         <div class="row" align="center">*/
/*             {% for project in row %}*/
/*                 <a href="{{ path('projects_show', { 'id': project.id }) }}">*/
/*                     <div class="col-md-4 project">*/
/*                         <br>*/
/*                         <br>*/
/*                         <br>*/
/*                         <br>*/
/*                         <br>*/
/*                         <h2>{{ project.name }}</h2>*/
/*                     </div>*/
/*                 </a>*/
/*             {% endfor %}*/
/*         </div>*/
/*     {% endfor %}*/
/* */
/* {% endblock %}*/
