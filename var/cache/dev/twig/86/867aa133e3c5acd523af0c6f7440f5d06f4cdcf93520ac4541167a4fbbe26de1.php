<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_f841b77f88bfc9a562cb0cdac89e27ab18ca7bb3efdaa5986fc13bda3b840e86 extends Twig_Template
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
        $__internal_1b3e943de6dae5d8a9e0ac8f0c409fd0190faa2eb2d964537c2348ef0a813621 = $this->env->getExtension("native_profiler");
        $__internal_1b3e943de6dae5d8a9e0ac8f0c409fd0190faa2eb2d964537c2348ef0a813621->enter($__internal_1b3e943de6dae5d8a9e0ac8f0c409fd0190faa2eb2d964537c2348ef0a813621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_1b3e943de6dae5d8a9e0ac8f0c409fd0190faa2eb2d964537c2348ef0a813621->leave($__internal_1b3e943de6dae5d8a9e0ac8f0c409fd0190faa2eb2d964537c2348ef0a813621_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
