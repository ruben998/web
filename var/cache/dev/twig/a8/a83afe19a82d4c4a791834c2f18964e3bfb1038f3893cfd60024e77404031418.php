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
        $__internal_b0f1d5eb0cc86ae341465c3153e40e23e776bd248feba0761c112a971fa1328a = $this->env->getExtension("native_profiler");
        $__internal_b0f1d5eb0cc86ae341465c3153e40e23e776bd248feba0761c112a971fa1328a->enter($__internal_b0f1d5eb0cc86ae341465c3153e40e23e776bd248feba0761c112a971fa1328a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b0f1d5eb0cc86ae341465c3153e40e23e776bd248feba0761c112a971fa1328a->leave($__internal_b0f1d5eb0cc86ae341465c3153e40e23e776bd248feba0761c112a971fa1328a_prof);

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
