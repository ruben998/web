<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_85e37803c200af25ab2883d6db1b498ccdfa7f75411e150416e57e0a5d148ed7 extends Twig_Template
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
        $__internal_ea4454319f72ed2a32fad7f5616dc8d6ca1ff163bf69c9df419fa7fec4cf7c71 = $this->env->getExtension("native_profiler");
        $__internal_ea4454319f72ed2a32fad7f5616dc8d6ca1ff163bf69c9df419fa7fec4cf7c71->enter($__internal_ea4454319f72ed2a32fad7f5616dc8d6ca1ff163bf69c9df419fa7fec4cf7c71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_ea4454319f72ed2a32fad7f5616dc8d6ca1ff163bf69c9df419fa7fec4cf7c71->leave($__internal_ea4454319f72ed2a32fad7f5616dc8d6ca1ff163bf69c9df419fa7fec4cf7c71_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
