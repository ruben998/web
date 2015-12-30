<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_c9b9643c1e444b7be8d02a057087375f3513eff468d20caecdab4d6dd5fe793f extends Twig_Template
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
        $__internal_7efd85b5edfd4f6dace5bd192da697cc31341c509c1cd88f5da51e41f636f1b3 = $this->env->getExtension("native_profiler");
        $__internal_7efd85b5edfd4f6dace5bd192da697cc31341c509c1cd88f5da51e41f636f1b3->enter($__internal_7efd85b5edfd4f6dace5bd192da697cc31341c509c1cd88f5da51e41f636f1b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_7efd85b5edfd4f6dace5bd192da697cc31341c509c1cd88f5da51e41f636f1b3->leave($__internal_7efd85b5edfd4f6dace5bd192da697cc31341c509c1cd88f5da51e41f636f1b3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
