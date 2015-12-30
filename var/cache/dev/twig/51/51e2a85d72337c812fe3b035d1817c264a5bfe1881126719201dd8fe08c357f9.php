<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_7decb80a5f2ab29427f9bdf4b3aad35adda285e0e41827b514ce12eddb77d7c5 extends Twig_Template
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
        $__internal_902cdd7752cc35385ef9128f8029f1e213416fe341b431f325d064df37ad2e41 = $this->env->getExtension("native_profiler");
        $__internal_902cdd7752cc35385ef9128f8029f1e213416fe341b431f325d064df37ad2e41->enter($__internal_902cdd7752cc35385ef9128f8029f1e213416fe341b431f325d064df37ad2e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_902cdd7752cc35385ef9128f8029f1e213416fe341b431f325d064df37ad2e41->leave($__internal_902cdd7752cc35385ef9128f8029f1e213416fe341b431f325d064df37ad2e41_prof);

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
