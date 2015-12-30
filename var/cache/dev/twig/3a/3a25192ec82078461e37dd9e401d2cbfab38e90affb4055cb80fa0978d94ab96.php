<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_abda59307cc3370fed47a56c03cbf790ee3beb112d513d74d39bd79070ec36cc extends Twig_Template
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
        $__internal_1360089529227b10f347a052d5b54a685c739b9126f6cd88e7d74ee40720850d = $this->env->getExtension("native_profiler");
        $__internal_1360089529227b10f347a052d5b54a685c739b9126f6cd88e7d74ee40720850d->enter($__internal_1360089529227b10f347a052d5b54a685c739b9126f6cd88e7d74ee40720850d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_1360089529227b10f347a052d5b54a685c739b9126f6cd88e7d74ee40720850d->leave($__internal_1360089529227b10f347a052d5b54a685c739b9126f6cd88e7d74ee40720850d_prof);

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
