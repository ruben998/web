<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_ad034729fe9613e2d818a7acb372492595a4776896419ea4d6edb00cc1fda6bd extends Twig_Template
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
        $__internal_c2855246923fcfb9c0cfe8c1724fc06f77bd558017056e3f3dda3e5766c84238 = $this->env->getExtension("native_profiler");
        $__internal_c2855246923fcfb9c0cfe8c1724fc06f77bd558017056e3f3dda3e5766c84238->enter($__internal_c2855246923fcfb9c0cfe8c1724fc06f77bd558017056e3f3dda3e5766c84238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_c2855246923fcfb9c0cfe8c1724fc06f77bd558017056e3f3dda3e5766c84238->leave($__internal_c2855246923fcfb9c0cfe8c1724fc06f77bd558017056e3f3dda3e5766c84238_prof);

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
