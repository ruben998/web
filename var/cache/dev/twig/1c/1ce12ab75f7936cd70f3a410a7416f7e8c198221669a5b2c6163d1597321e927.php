<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_c99fe5574e29ff270fcd9461fd9f61c15cc46caea27d5ee7cf1ad2f76175fb59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_678346213253a57ea1858afd4151e91dcbdebd9f0b3afee85a268348921ef58d = $this->env->getExtension("native_profiler");
        $__internal_678346213253a57ea1858afd4151e91dcbdebd9f0b3afee85a268348921ef58d->enter($__internal_678346213253a57ea1858afd4151e91dcbdebd9f0b3afee85a268348921ef58d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_678346213253a57ea1858afd4151e91dcbdebd9f0b3afee85a268348921ef58d->leave($__internal_678346213253a57ea1858afd4151e91dcbdebd9f0b3afee85a268348921ef58d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_be15a2e533b527c2ee6f65c5aa63bc9493b4fc360a61e9d6d4836f27c441447c = $this->env->getExtension("native_profiler");
        $__internal_be15a2e533b527c2ee6f65c5aa63bc9493b4fc360a61e9d6d4836f27c441447c->enter($__internal_be15a2e533b527c2ee6f65c5aa63bc9493b4fc360a61e9d6d4836f27c441447c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_be15a2e533b527c2ee6f65c5aa63bc9493b4fc360a61e9d6d4836f27c441447c->leave($__internal_be15a2e533b527c2ee6f65c5aa63bc9493b4fc360a61e9d6d4836f27c441447c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_49e7405ea1b3dfcf3605370a3ed034b890e1591191d81f102a8566da0ba56532 = $this->env->getExtension("native_profiler");
        $__internal_49e7405ea1b3dfcf3605370a3ed034b890e1591191d81f102a8566da0ba56532->enter($__internal_49e7405ea1b3dfcf3605370a3ed034b890e1591191d81f102a8566da0ba56532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_49e7405ea1b3dfcf3605370a3ed034b890e1591191d81f102a8566da0ba56532->leave($__internal_49e7405ea1b3dfcf3605370a3ed034b890e1591191d81f102a8566da0ba56532_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_db58d0f3b48edde8d09f28ef502824b8128abd16ce722e0206dd8e4064b532c3 = $this->env->getExtension("native_profiler");
        $__internal_db58d0f3b48edde8d09f28ef502824b8128abd16ce722e0206dd8e4064b532c3->enter($__internal_db58d0f3b48edde8d09f28ef502824b8128abd16ce722e0206dd8e4064b532c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_db58d0f3b48edde8d09f28ef502824b8128abd16ce722e0206dd8e4064b532c3->leave($__internal_db58d0f3b48edde8d09f28ef502824b8128abd16ce722e0206dd8e4064b532c3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
