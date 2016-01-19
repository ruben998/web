<?php

/* :default:login.html.twig */
class __TwigTemplate_8580e1c2f39a31ba6238cbd42484a2f54be49b8742e7952ed7e77de90d3b55c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:login.html.twig", 1);
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
        $__internal_c28756cec6beb5a6ef0c18e56a082130fadbe453ec1929c8678781987eef66f7 = $this->env->getExtension("native_profiler");
        $__internal_c28756cec6beb5a6ef0c18e56a082130fadbe453ec1929c8678781987eef66f7->enter($__internal_c28756cec6beb5a6ef0c18e56a082130fadbe453ec1929c8678781987eef66f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c28756cec6beb5a6ef0c18e56a082130fadbe453ec1929c8678781987eef66f7->leave($__internal_c28756cec6beb5a6ef0c18e56a082130fadbe453ec1929c8678781987eef66f7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a07adf456241bc4ca1dc4356d9fab874059154144a84db2d89265c90014da3fc = $this->env->getExtension("native_profiler");
        $__internal_a07adf456241bc4ca1dc4356d9fab874059154144a84db2d89265c90014da3fc->enter($__internal_a07adf456241bc4ca1dc4356d9fab874059154144a84db2d89265c90014da3fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 5
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
    ";
        }
        // line 7
        echo "
    <form action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
        <label for=\"username\">Username:</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

        <label for=\"password\">Password:</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />
        <input type=\"hidden\" name=\"_csrf_token\"
               value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
        >

        <input type=\"hidden\" name=\"_target_path\" value=\"/auth/admin\" />
        ";
        // line 24
        echo "
        <button type=\"submit\">login</button>
    </form>
";
        
        $__internal_a07adf456241bc4ca1dc4356d9fab874059154144a84db2d89265c90014da3fc->leave($__internal_a07adf456241bc4ca1dc4356d9fab874059154144a84db2d89265c90014da3fc_prof);

    }

    public function getTemplateName()
    {
        return ":default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 24,  65 => 15,  57 => 10,  52 => 8,  49 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {% if error %}*/
/*         <div>{{ error.message }}</div>*/
/*     {% endif %}*/
/* */
/*     <form action="{{ path('login_check') }}" method="post">*/
/*         <label for="username">Username:</label>*/
/*         <input type="text" id="username" name="_username" value="{{ last_username }}" />*/
/* */
/*         <label for="password">Password:</label>*/
/*         <input type="password" id="password" name="_password" />*/
/*         <input type="hidden" name="_csrf_token"*/
/*                value="{{ csrf_token('authenticate') }}"*/
/*         >*/
/* */
/*         <input type="hidden" name="_target_path" value="/auth/admin" />*/
/*         {#*/
/*             añade lo siguiente si quieres redirigir al usuario a una*/
/*             URL concreta después del login (explicado más adelante)*/
/*             <input type="hidden" name="_target_path" value="/account" />*/
/*         #}*/
/* */
/*         <button type="submit">login</button>*/
/*     </form>*/
/* {% endblock %}*/
