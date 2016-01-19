<?php

/* :Exception:error404.html.twig */
class __TwigTemplate_7504d87552ae936e0047bd01013e34d00ffa760f1b09aa68a95c6d2a914e5aaa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Exception:error404.html.twig", 1);
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
        $__internal_9434ab260043cc0f69c68a1ad989b1232c013771a4f53faa149f45c2b8b5bb77 = $this->env->getExtension("native_profiler");
        $__internal_9434ab260043cc0f69c68a1ad989b1232c013771a4f53faa149f45c2b8b5bb77->enter($__internal_9434ab260043cc0f69c68a1ad989b1232c013771a4f53faa149f45c2b8b5bb77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Exception:error404.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9434ab260043cc0f69c68a1ad989b1232c013771a4f53faa149f45c2b8b5bb77->leave($__internal_9434ab260043cc0f69c68a1ad989b1232c013771a4f53faa149f45c2b8b5bb77_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dfa168bb201aea07a6d62ab2caa9c8c6ae176af4d1c77525c9a56f288bedf80b = $this->env->getExtension("native_profiler");
        $__internal_dfa168bb201aea07a6d62ab2caa9c8c6ae176af4d1c77525c9a56f288bedf80b->enter($__internal_dfa168bb201aea07a6d62ab2caa9c8c6ae176af4d1c77525c9a56f288bedf80b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Page not found</h1>

    ";
        // line 7
        echo "    ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 8
            echo "        ";
            // line 9
            echo "    ";
        }
        // line 10
        echo "
    <p>
        The requested page couldn't be located. Checkout for any URL
        misspelling or <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">return to the homepage</a>.
    </p>
";
        
        $__internal_dfa168bb201aea07a6d62ab2caa9c8c6ae176af4d1c77525c9a56f288bedf80b->leave($__internal_dfa168bb201aea07a6d62ab2caa9c8c6ae176af4d1c77525c9a56f288bedf80b_prof);

    }

    public function getTemplateName()
    {
        return ":Exception:error404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 13,  52 => 10,  49 => 9,  47 => 8,  44 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Page not found</h1>*/
/* */
/*     {# example security usage, see below #}*/
/*     {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*         {# ... #}*/
/*     {% endif %}*/
/* */
/*     <p>*/
/*         The requested page couldn't be located. Checkout for any URL*/
/*         misspelling or <a href="{{ path('homepage') }}">return to the homepage</a>.*/
/*     </p>*/
/* {% endblock %}*/
/* */
/* */
