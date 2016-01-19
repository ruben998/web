<?php

/* :default:index.html.twig */
class __TwigTemplate_b92a74b0c7ed1d49a251e2baa87d7ec74ed209859023e50a9234adab92bb4183 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
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
        $__internal_f16d067da84d7d75c0f4699f54c4e83c920116deb34e6cbf1bc5cf31076411c9 = $this->env->getExtension("native_profiler");
        $__internal_f16d067da84d7d75c0f4699f54c4e83c920116deb34e6cbf1bc5cf31076411c9->enter($__internal_f16d067da84d7d75c0f4699f54c4e83c920116deb34e6cbf1bc5cf31076411c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f16d067da84d7d75c0f4699f54c4e83c920116deb34e6cbf1bc5cf31076411c9->leave($__internal_f16d067da84d7d75c0f4699f54c4e83c920116deb34e6cbf1bc5cf31076411c9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ad9cfbf105d5fcf60d79ccc5485308a57272e8861e009c6e71d3e6c673d91bc1 = $this->env->getExtension("native_profiler");
        $__internal_ad9cfbf105d5fcf60d79ccc5485308a57272e8861e009c6e71d3e6c673d91bc1->enter($__internal_ad9cfbf105d5fcf60d79ccc5485308a57272e8861e009c6e71d3e6c673d91bc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"jumbotron div-jumbotron\" align=\"center\">
        <h1>R U B É N &nbsp; N I E T O</h1>
        <p>Página personal</p>
    </div>
    <div align=\"center\" class=\"col-md-4\">
        <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("biografia");
        echo "\"><p class=\"div-btn\">Biografia</p></a>
    </div>
    <div align=\"center\" class=\"col-md-4\">
        <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("projects_index");
        echo "\"><p class=\"div-btn\">Proyectos</p></a>
    </div>
    <div align=\"center\" class=\"col-md-4\">
        <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("contact");
        echo "\"><p class=\"div-btn\">Contacto</p></a>
    </div>
";
        
        $__internal_ad9cfbf105d5fcf60d79ccc5485308a57272e8861e009c6e71d3e6c673d91bc1->leave($__internal_ad9cfbf105d5fcf60d79ccc5485308a57272e8861e009c6e71d3e6c673d91bc1_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 15,  53 => 12,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="jumbotron div-jumbotron" align="center">*/
/*         <h1>R U B É N &nbsp; N I E T O</h1>*/
/*         <p>Página personal</p>*/
/*     </div>*/
/*     <div align="center" class="col-md-4">*/
/*         <a href="{{ path('biografia') }}"><p class="div-btn">Biografia</p></a>*/
/*     </div>*/
/*     <div align="center" class="col-md-4">*/
/*         <a href="{{ path('projects_index') }}"><p class="div-btn">Proyectos</p></a>*/
/*     </div>*/
/*     <div align="center" class="col-md-4">*/
/*         <a href="{{ path('contact') }}"><p class="div-btn">Contacto</p></a>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* */
