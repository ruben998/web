<?php

/* auth/admin.html.twig */
class __TwigTemplate_95dcb6c4a0c446b24b1b0c9397f0abba014192404c4663acbffb59fa241cadf4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "auth/admin.html.twig", 1);
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
        $__internal_28d06729e712f45d5127e93a782b148b923a1869f879e5a9e010e4e02c7418af = $this->env->getExtension("native_profiler");
        $__internal_28d06729e712f45d5127e93a782b148b923a1869f879e5a9e010e4e02c7418af->enter($__internal_28d06729e712f45d5127e93a782b148b923a1869f879e5a9e010e4e02c7418af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "auth/admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28d06729e712f45d5127e93a782b148b923a1869f879e5a9e010e4e02c7418af->leave($__internal_28d06729e712f45d5127e93a782b148b923a1869f879e5a9e010e4e02c7418af_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_317d87c2308a63a07c2dfd019920a02f8b4f4367a3b85dd5467ee79c807eb125 = $this->env->getExtension("native_profiler");
        $__internal_317d87c2308a63a07c2dfd019920a02f8b4f4367a3b85dd5467ee79c807eb125->enter($__internal_317d87c2308a63a07c2dfd019920a02f8b4f4367a3b85dd5467ee79c807eb125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Admin Page</h1>
    <ul>
        <li>
            <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("projects_new");
        echo "\">Create a new project</a>
        </li>
    </ul>
";
        
        $__internal_317d87c2308a63a07c2dfd019920a02f8b4f4367a3b85dd5467ee79c807eb125->leave($__internal_317d87c2308a63a07c2dfd019920a02f8b4f4367a3b85dd5467ee79c807eb125_prof);

    }

    public function getTemplateName()
    {
        return "auth/admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Admin Page</h1>*/
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('projects_new') }}">Create a new project</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
/* */
