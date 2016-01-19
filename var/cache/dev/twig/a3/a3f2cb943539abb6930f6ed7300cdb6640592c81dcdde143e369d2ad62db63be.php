<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_7190d509de81e7e2ab076a15fd5b1602fac4368d2dbdfacfcbdcf9cf98825fdf extends Twig_Template
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
        $__internal_d2b935de1385824718870ca3da3671e521ac19bd66bcba91f09875cd2c4fada0 = $this->env->getExtension("native_profiler");
        $__internal_d2b935de1385824718870ca3da3671e521ac19bd66bcba91f09875cd2c4fada0->enter($__internal_d2b935de1385824718870ca3da3671e521ac19bd66bcba91f09875cd2c4fada0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_d2b935de1385824718870ca3da3671e521ac19bd66bcba91f09875cd2c4fada0->leave($__internal_d2b935de1385824718870ca3da3671e521ac19bd66bcba91f09875cd2c4fada0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
