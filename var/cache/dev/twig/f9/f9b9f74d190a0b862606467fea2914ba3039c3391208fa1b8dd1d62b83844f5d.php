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
        $__internal_dd38d879e64ed587327dee0b819239aa6168b147b761abf96ad399caa2345567 = $this->env->getExtension("native_profiler");
        $__internal_dd38d879e64ed587327dee0b819239aa6168b147b761abf96ad399caa2345567->enter($__internal_dd38d879e64ed587327dee0b819239aa6168b147b761abf96ad399caa2345567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_dd38d879e64ed587327dee0b819239aa6168b147b761abf96ad399caa2345567->leave($__internal_dd38d879e64ed587327dee0b819239aa6168b147b761abf96ad399caa2345567_prof);

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
