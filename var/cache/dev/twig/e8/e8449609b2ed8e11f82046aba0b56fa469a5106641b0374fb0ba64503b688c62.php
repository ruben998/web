<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_6770a2634264b5ccf55786f909f0220f79b82b7f7418986faf3bd957a4ac1931 extends Twig_Template
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
        $__internal_4969de04d7c852c9daed31e9600ac2d0575d606d82a9f3a6d96c92b77c9c60df = $this->env->getExtension("native_profiler");
        $__internal_4969de04d7c852c9daed31e9600ac2d0575d606d82a9f3a6d96c92b77c9c60df->enter($__internal_4969de04d7c852c9daed31e9600ac2d0575d606d82a9f3a6d96c92b77c9c60df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_4969de04d7c852c9daed31e9600ac2d0575d606d82a9f3a6d96c92b77c9c60df->leave($__internal_4969de04d7c852c9daed31e9600ac2d0575d606d82a9f3a6d96c92b77c9c60df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
