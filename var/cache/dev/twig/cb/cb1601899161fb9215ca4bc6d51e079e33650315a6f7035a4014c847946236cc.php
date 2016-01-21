<?php

/* default/bio.html.twig */
class __TwigTemplate_bb94182ecbb924b14ea5ce9024a4f3501f916e8e766da5b871c06fe86890aa23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/bio.html.twig", 1);
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
        $__internal_ccc3cdbd5de23314e330b8c8e00aacbf7ab779b94ca9d4bc34769cdfd8319aaa = $this->env->getExtension("native_profiler");
        $__internal_ccc3cdbd5de23314e330b8c8e00aacbf7ab779b94ca9d4bc34769cdfd8319aaa->enter($__internal_ccc3cdbd5de23314e330b8c8e00aacbf7ab779b94ca9d4bc34769cdfd8319aaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/bio.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ccc3cdbd5de23314e330b8c8e00aacbf7ab779b94ca9d4bc34769cdfd8319aaa->leave($__internal_ccc3cdbd5de23314e330b8c8e00aacbf7ab779b94ca9d4bc34769cdfd8319aaa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_27c8cf21f42c086c0b35f1e289f7ed1d9b5d6d18fe5df62f39c726e9f6c3325e = $this->env->getExtension("native_profiler");
        $__internal_27c8cf21f42c086c0b35f1e289f7ed1d9b5d6d18fe5df62f39c726e9f6c3325e->enter($__internal_27c8cf21f42c086c0b35f1e289f7ed1d9b5d6d18fe5df62f39c726e9f6c3325e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"col-sm-8\">
        <h1>Biografia</h1>
        <h4>
            <br>Sóc un noi de Badalona amant de les noves tecnologies i amb moltíssimes ganes d'aprendre. En aquesta
            pàgina podràs trobar els projectes fets fins ara i els meus temes d'interès. Em considero un noi amb inquietuds
            i molts dubtes. Sóc estudiant a punt d'acabar enginyeria informàtica a la Universitat de Barcelona.<br>

            <br>Aquesta web personal és tot un repte personal per plasmar les meves idees. Les TICs són la meva passió
            però en particular les aplicacions mòbils útils pel dia a dia. La robòtica és un dels meus hobbies favorits.<br>

            <br>M'encanta relacionar-me amb la gent i sentir a dir que opinen sobre política, música i els seus propis interessos.<br>

            <br>Els animals en general i els gossos en particular per mi signifiquen molt. No entenc la vida sense un gos al meu costat.<br>
        </h4>
    </div>
    <div class=\".col-sm-4\" align=\"center\">
        <br>
        <table>
            <tr align=\"center\">
                <td><a href=\"https://www.github.com/ruben998\"><img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/images/github_icon.png"), "html", null, true);
        echo "\"   width=\"50px\" height=\"50px\" class=\"icon\"></a> </td>
            </tr>

            <tr>
                <td><a href=\"https://www.linkedin.com/in/ruben998\"><img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/images/linkedin_icon.svg"), "html", null, true);
        echo "\" width=\"50px\" height=\"50px\" class=\"icon\"></a></td>
            </tr>

            <tr>
                <td><a href=\"https://www.twitter.com/ruben998\"><img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/images/twitter_icon.svg"), "html", null, true);
        echo "\"  width=\"55px\" height=\"55px\" class=\"icon\"></a></td>
            </tr>
        </table>

    </div>
";
        
        $__internal_27c8cf21f42c086c0b35f1e289f7ed1d9b5d6d18fe5df62f39c726e9f6c3325e->leave($__internal_27c8cf21f42c086c0b35f1e289f7ed1d9b5d6d18fe5df62f39c726e9f6c3325e_prof);

    }

    public function getTemplateName()
    {
        return "default/bio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 31,  68 => 27,  61 => 23,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="col-sm-8">*/
/*         <h1>Biografia</h1>*/
/*         <h4>*/
/*             <br>Sóc un noi de Badalona amant de les noves tecnologies i amb moltíssimes ganes d'aprendre. En aquesta*/
/*             pàgina podràs trobar els projectes fets fins ara i els meus temes d'interès. Em considero un noi amb inquietuds*/
/*             i molts dubtes. Sóc estudiant a punt d'acabar enginyeria informàtica a la Universitat de Barcelona.<br>*/
/* */
/*             <br>Aquesta web personal és tot un repte personal per plasmar les meves idees. Les TICs són la meva passió*/
/*             però en particular les aplicacions mòbils útils pel dia a dia. La robòtica és un dels meus hobbies favorits.<br>*/
/* */
/*             <br>M'encanta relacionar-me amb la gent i sentir a dir que opinen sobre política, música i els seus propis interessos.<br>*/
/* */
/*             <br>Els animals en general i els gossos en particular per mi signifiquen molt. No entenc la vida sense un gos al meu costat.<br>*/
/*         </h4>*/
/*     </div>*/
/*     <div class=".col-sm-4" align="center">*/
/*         <br>*/
/*         <table>*/
/*             <tr align="center">*/
/*                 <td><a href="https://www.github.com/ruben998"><img src="{{ asset('bundles/framework/images/github_icon.png') }}"   width="50px" height="50px" class="icon"></a> </td>*/
/*             </tr>*/
/* */
/*             <tr>*/
/*                 <td><a href="https://www.linkedin.com/in/ruben998"><img src="{{ asset('bundles/framework/images/linkedin_icon.svg') }}" width="50px" height="50px" class="icon"></a></td>*/
/*             </tr>*/
/* */
/*             <tr>*/
/*                 <td><a href="https://www.twitter.com/ruben998"><img src="{{ asset('bundles/framework/images/twitter_icon.svg') }}"  width="55px" height="55px" class="icon"></a></td>*/
/*             </tr>*/
/*         </table>*/
/* */
/*     </div>*/
/* {% endblock %}*/
/* */
/* */
