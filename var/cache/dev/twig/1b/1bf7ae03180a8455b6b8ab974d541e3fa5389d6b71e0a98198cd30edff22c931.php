<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_df4c6f92fcf86208b82b4ed30e7cbed56f753b81f3454af145f5879fa3d49902 extends Twig_Template
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
        $__internal_a87c9064a353ea013a8a2c3f9d582723fecac842aa5eaca3004e62577d99da43 = $this->env->getExtension("native_profiler");
        $__internal_a87c9064a353ea013a8a2c3f9d582723fecac842aa5eaca3004e62577d99da43->enter($__internal_a87c9064a353ea013a8a2c3f9d582723fecac842aa5eaca3004e62577d99da43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_a87c9064a353ea013a8a2c3f9d582723fecac842aa5eaca3004e62577d99da43->leave($__internal_a87c9064a353ea013a8a2c3f9d582723fecac842aa5eaca3004e62577d99da43_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
