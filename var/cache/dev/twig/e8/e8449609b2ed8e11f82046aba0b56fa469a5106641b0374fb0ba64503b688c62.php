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
        $__internal_c135efbd20872a61391d099d83761e58c94ffef4629cbcd9de746857a859b504 = $this->env->getExtension("native_profiler");
        $__internal_c135efbd20872a61391d099d83761e58c94ffef4629cbcd9de746857a859b504->enter($__internal_c135efbd20872a61391d099d83761e58c94ffef4629cbcd9de746857a859b504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_c135efbd20872a61391d099d83761e58c94ffef4629cbcd9de746857a859b504->leave($__internal_c135efbd20872a61391d099d83761e58c94ffef4629cbcd9de746857a859b504_prof);

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
