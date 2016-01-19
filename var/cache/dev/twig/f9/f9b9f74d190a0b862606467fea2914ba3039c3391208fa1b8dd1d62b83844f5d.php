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
        $__internal_a65ae2ba5e841cf2ac7d396a651c56f1c10e8a42ff92152dfc21f874b7f198cf = $this->env->getExtension("native_profiler");
        $__internal_a65ae2ba5e841cf2ac7d396a651c56f1c10e8a42ff92152dfc21f874b7f198cf->enter($__internal_a65ae2ba5e841cf2ac7d396a651c56f1c10e8a42ff92152dfc21f874b7f198cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_a65ae2ba5e841cf2ac7d396a651c56f1c10e8a42ff92152dfc21f874b7f198cf->leave($__internal_a65ae2ba5e841cf2ac7d396a651c56f1c10e8a42ff92152dfc21f874b7f198cf_prof);

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
