<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_bc91987fa8051d57a56b3c236c67475a396de0bb05fda68bcda039a2da286e05 extends Twig_Template
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
        $__internal_938d030f51afdceb160d48eb9b29f20a3c5e6123965a6dcdf3c719e21bc550a4 = $this->env->getExtension("native_profiler");
        $__internal_938d030f51afdceb160d48eb9b29f20a3c5e6123965a6dcdf3c719e21bc550a4->enter($__internal_938d030f51afdceb160d48eb9b29f20a3c5e6123965a6dcdf3c719e21bc550a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_938d030f51afdceb160d48eb9b29f20a3c5e6123965a6dcdf3c719e21bc550a4->leave($__internal_938d030f51afdceb160d48eb9b29f20a3c5e6123965a6dcdf3c719e21bc550a4_prof);

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
