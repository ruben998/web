<?php

/* project/project_show.html.twig */
class __TwigTemplate_8eea9dbeec865490fd36ed5ececeff66f2345cf191f1ad7d256255c09cce4ebc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "project/project_show.html.twig", 1);
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
        $__internal_613d2d1e546bc53c24553e34e3938ea4d4209d7b5394f5316f18cc7a6bfb0910 = $this->env->getExtension("native_profiler");
        $__internal_613d2d1e546bc53c24553e34e3938ea4d4209d7b5394f5316f18cc7a6bfb0910->enter($__internal_613d2d1e546bc53c24553e34e3938ea4d4209d7b5394f5316f18cc7a6bfb0910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "project/project_show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_613d2d1e546bc53c24553e34e3938ea4d4209d7b5394f5316f18cc7a6bfb0910->leave($__internal_613d2d1e546bc53c24553e34e3938ea4d4209d7b5394f5316f18cc7a6bfb0910_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_31a03ca621373734287978c875f5995773174e73c9d0dfeb489130be34707303 = $this->env->getExtension("native_profiler");
        $__internal_31a03ca621373734287978c875f5995773174e73c9d0dfeb489130be34707303->enter($__internal_31a03ca621373734287978c875f5995773174e73c9d0dfeb489130be34707303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Project</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Image</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "image", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Language</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "language", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("projects_auth_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("projects_edit", array("id" => $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 39
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 41
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_31a03ca621373734287978c875f5995773174e73c9d0dfeb489130be34707303->leave($__internal_31a03ca621373734287978c875f5995773174e73c9d0dfeb489130be34707303_prof);

    }

    public function getTemplateName()
    {
        return "project/project_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 41,  98 => 39,  92 => 36,  86 => 33,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Project</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ project.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Name</th>*/
/*                 <td>{{ project.name }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Description</th>*/
/*                 <td>{{ project.description }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Image</th>*/
/*                 <td>{{ project.image }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Language</th>*/
/*                 <td>{{ project.language }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('projects_auth_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('projects_edit', { 'id': project.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
