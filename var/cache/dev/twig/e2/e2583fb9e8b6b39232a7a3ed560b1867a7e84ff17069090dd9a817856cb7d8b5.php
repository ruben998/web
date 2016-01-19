<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_1136ce36b4140b3ed0e11608edc8211537426e19e5325bf3c8f047e1e367feb8 extends Twig_Template
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
        $__internal_3d01f3c0ba589b3a7394240cfe565e645de5194f7eac154fc20fa071b6c2cc52 = $this->env->getExtension("native_profiler");
        $__internal_3d01f3c0ba589b3a7394240cfe565e645de5194f7eac154fc20fa071b6c2cc52->enter($__internal_3d01f3c0ba589b3a7394240cfe565e645de5194f7eac154fc20fa071b6c2cc52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_3d01f3c0ba589b3a7394240cfe565e645de5194f7eac154fc20fa071b6c2cc52->leave($__internal_3d01f3c0ba589b3a7394240cfe565e645de5194f7eac154fc20fa071b6c2cc52_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
