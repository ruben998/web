<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_523b873c3deb434db6f0662a138925365cd7c48bb59224d22250041f5328eb77 extends Twig_Template
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
        $__internal_fd881331cbdef45d2aa0cee6a8e0675e07e49fa82813eaafd0876da392062207 = $this->env->getExtension("native_profiler");
        $__internal_fd881331cbdef45d2aa0cee6a8e0675e07e49fa82813eaafd0876da392062207->enter($__internal_fd881331cbdef45d2aa0cee6a8e0675e07e49fa82813eaafd0876da392062207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_fd881331cbdef45d2aa0cee6a8e0675e07e49fa82813eaafd0876da392062207->leave($__internal_fd881331cbdef45d2aa0cee6a8e0675e07e49fa82813eaafd0876da392062207_prof);

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
