<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_55191186a15fc7d2636da9979941c1eab9e7ac9c29d307216a8033604f31d835 extends Twig_Template
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
        $__internal_0f7612999c4158a392ff870f32c3218da1587112717b3b732fb07b4d6801b580 = $this->env->getExtension("native_profiler");
        $__internal_0f7612999c4158a392ff870f32c3218da1587112717b3b732fb07b4d6801b580->enter($__internal_0f7612999c4158a392ff870f32c3218da1587112717b3b732fb07b4d6801b580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_0f7612999c4158a392ff870f32c3218da1587112717b3b732fb07b4d6801b580->leave($__internal_0f7612999c4158a392ff870f32c3218da1587112717b3b732fb07b4d6801b580_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
