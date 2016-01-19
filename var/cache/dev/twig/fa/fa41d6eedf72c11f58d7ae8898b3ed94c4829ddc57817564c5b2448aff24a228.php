<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_25f7931942268d19205d01ad38f0584b660cb30646e3252db33452eec750c842 extends Twig_Template
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
        $__internal_6e48e367a94f1b6425c556d246d73b6b9eeae9744990f34d89324ce7e220ce4a = $this->env->getExtension("native_profiler");
        $__internal_6e48e367a94f1b6425c556d246d73b6b9eeae9744990f34d89324ce7e220ce4a->enter($__internal_6e48e367a94f1b6425c556d246d73b6b9eeae9744990f34d89324ce7e220ce4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_6e48e367a94f1b6425c556d246d73b6b9eeae9744990f34d89324ce7e220ce4a->leave($__internal_6e48e367a94f1b6425c556d246d73b6b9eeae9744990f34d89324ce7e220ce4a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
