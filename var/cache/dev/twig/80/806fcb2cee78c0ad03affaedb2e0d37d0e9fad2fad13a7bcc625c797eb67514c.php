<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_d5b6081db465c51262386b43b75522424735fb6bdaa4121c4a8fe59c2dffa37a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_08358fea1f8a1766e0394c3815c3f8e3b4ca7e5b3a17d8d3e13e685281196aa2 = $this->env->getExtension("native_profiler");
        $__internal_08358fea1f8a1766e0394c3815c3f8e3b4ca7e5b3a17d8d3e13e685281196aa2->enter($__internal_08358fea1f8a1766e0394c3815c3f8e3b4ca7e5b3a17d8d3e13e685281196aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_08358fea1f8a1766e0394c3815c3f8e3b4ca7e5b3a17d8d3e13e685281196aa2->leave($__internal_08358fea1f8a1766e0394c3815c3f8e3b4ca7e5b3a17d8d3e13e685281196aa2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
