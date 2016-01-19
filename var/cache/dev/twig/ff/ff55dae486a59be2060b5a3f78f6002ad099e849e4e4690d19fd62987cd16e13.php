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
        $__internal_a38ee831b877175dad6235cc152875f412e71f94cfd99c24022d2bf2685f2502 = $this->env->getExtension("native_profiler");
        $__internal_a38ee831b877175dad6235cc152875f412e71f94cfd99c24022d2bf2685f2502->enter($__internal_a38ee831b877175dad6235cc152875f412e71f94cfd99c24022d2bf2685f2502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a38ee831b877175dad6235cc152875f412e71f94cfd99c24022d2bf2685f2502->leave($__internal_a38ee831b877175dad6235cc152875f412e71f94cfd99c24022d2bf2685f2502_prof);

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
