<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_33d245b5ddeb3280fafae7e92c048da06e9923bec2418c9842d4282315c6cbc6 extends Twig_Template
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
        $__internal_f86faaa3d2d75c199baeed7198dcf18ebda84129a0d4e78c97949f49d2108201 = $this->env->getExtension("native_profiler");
        $__internal_f86faaa3d2d75c199baeed7198dcf18ebda84129a0d4e78c97949f49d2108201->enter($__internal_f86faaa3d2d75c199baeed7198dcf18ebda84129a0d4e78c97949f49d2108201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_f86faaa3d2d75c199baeed7198dcf18ebda84129a0d4e78c97949f49d2108201->leave($__internal_f86faaa3d2d75c199baeed7198dcf18ebda84129a0d4e78c97949f49d2108201_prof);

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
