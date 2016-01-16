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
        $__internal_e441075bb94eb2945eb692eab7b8602a0bd83c93f2a367f18daf2e16e1d5f90c = $this->env->getExtension("native_profiler");
        $__internal_e441075bb94eb2945eb692eab7b8602a0bd83c93f2a367f18daf2e16e1d5f90c->enter($__internal_e441075bb94eb2945eb692eab7b8602a0bd83c93f2a367f18daf2e16e1d5f90c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_e441075bb94eb2945eb692eab7b8602a0bd83c93f2a367f18daf2e16e1d5f90c->leave($__internal_e441075bb94eb2945eb692eab7b8602a0bd83c93f2a367f18daf2e16e1d5f90c_prof);

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
