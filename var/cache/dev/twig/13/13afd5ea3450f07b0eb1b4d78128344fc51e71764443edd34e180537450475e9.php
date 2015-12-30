<?php

/* default/another.html.twig */
class __TwigTemplate_f382133b16684348624249d17aef825ff6023bd130dd1bd16d1b158d4e6a34b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/another.html.twig", 1);
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
        $__internal_fd677dc9c7850875deb1e9e5bf61b159395159f50ddec24e3e408ab582404d6a = $this->env->getExtension("native_profiler");
        $__internal_fd677dc9c7850875deb1e9e5bf61b159395159f50ddec24e3e408ab582404d6a->enter($__internal_fd677dc9c7850875deb1e9e5bf61b159395159f50ddec24e3e408ab582404d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/another.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd677dc9c7850875deb1e9e5bf61b159395159f50ddec24e3e408ab582404d6a->leave($__internal_fd677dc9c7850875deb1e9e5bf61b159395159f50ddec24e3e408ab582404d6a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_87b38a75336cc26dfba8438156356768f7c703a99911358ec5a3d31f49b907e7 = $this->env->getExtension("native_profiler");
        $__internal_87b38a75336cc26dfba8438156356768f7c703a99911358ec5a3d31f49b907e7->enter($__internal_87b38a75336cc26dfba8438156356768f7c703a99911358ec5a3d31f49b907e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ANOTHERPAGE!
";
        
        $__internal_87b38a75336cc26dfba8438156356768f7c703a99911358ec5a3d31f49b907e7->leave($__internal_87b38a75336cc26dfba8438156356768f7c703a99911358ec5a3d31f49b907e7_prof);

    }

    public function getTemplateName()
    {
        return "default/another.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     ANOTHERPAGE!*/
/* {% endblock %}*/
/* */
/* */
