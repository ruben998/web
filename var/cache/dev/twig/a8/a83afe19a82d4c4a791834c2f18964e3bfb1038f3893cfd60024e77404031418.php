<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_ea277648fa9c4d8905920f803e6dd53bff73665d0ed001ce58565492431bf48c extends Twig_Template
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
        $__internal_8b3dcfdb15df02208abc92aec7c7228cfa2c6661927394927c7b43a07f9af459 = $this->env->getExtension("native_profiler");
        $__internal_8b3dcfdb15df02208abc92aec7c7228cfa2c6661927394927c7b43a07f9af459->enter($__internal_8b3dcfdb15df02208abc92aec7c7228cfa2c6661927394927c7b43a07f9af459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_8b3dcfdb15df02208abc92aec7c7228cfa2c6661927394927c7b43a07f9af459->leave($__internal_8b3dcfdb15df02208abc92aec7c7228cfa2c6661927394927c7b43a07f9af459_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
