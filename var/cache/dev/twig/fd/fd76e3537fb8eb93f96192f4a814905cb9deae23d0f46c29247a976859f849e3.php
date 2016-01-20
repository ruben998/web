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
        $__internal_bcc506b05b401f3b268ac739bea4dbddca027068fc7d797f099a8ee95b9d23cd = $this->env->getExtension("native_profiler");
        $__internal_bcc506b05b401f3b268ac739bea4dbddca027068fc7d797f099a8ee95b9d23cd->enter($__internal_bcc506b05b401f3b268ac739bea4dbddca027068fc7d797f099a8ee95b9d23cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "project/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bcc506b05b401f3b268ac739bea4dbddca027068fc7d797f099a8ee95b9d23cd->leave($__internal_bcc506b05b401f3b268ac739bea4dbddca027068fc7d797f099a8ee95b9d23cd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc0189bb8c1daedfae7498ae37f75c435b5e699624f3ec3a3e24f1fe0c0bef51 = $this->env->getExtension("native_profiler");
        $__internal_fc0189bb8c1daedfae7498ae37f75c435b5e699624f3ec3a3e24f1fe0c0bef51->enter($__internal_fc0189bb8c1daedfae7498ae37f75c435b5e699624f3ec3a3e24f1fe0c0bef51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Project list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Image</th>
                <th>Language</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projects"]) ? $context["projects"] : $this->getContext($context, "projects")));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("projects_show", array("id" => $this->getAttribute($context["project"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "image", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "language", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("projects_show", array("id" => $this->getAttribute($context["project"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </tbody>
    </table>

";
        
        $__internal_fc0189bb8c1daedfae7498ae37f75c435b5e699624f3ec3a3e24f1fe0c0bef51->leave($__internal_fc0189bb8c1daedfae7498ae37f75c435b5e699624f3ec3a3e24f1fe0c0bef51_prof);

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
        return array (  100 => 34,  88 => 28,  81 => 24,  77 => 23,  73 => 22,  69 => 21,  63 => 20,  60 => 19,  56 => 18,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Project list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Name</th>*/
/*                 <th>Description</th>*/
/*                 <th>Image</th>*/
/*                 <th>Language</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for project in projects %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('projects_show', { 'id': project.id }) }}">{{ project.id }}</a></td>*/
/*                 <td>{{ project.name }}</td>*/
/*                 <td>{{ project.description }}</td>*/
/*                 <td>{{ project.image }}</td>*/
/*                 <td>{{ project.language }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('projects_show', { 'id': project.id }) }}">show</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/* {% endblock %}*/
/* */
