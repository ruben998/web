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
        $__internal_0eaf860c1c78d9ee8b14dd3e7e8cbc5a40736678beefbeea96b2ffbd438d2d0f = $this->env->getExtension("native_profiler");
        $__internal_0eaf860c1c78d9ee8b14dd3e7e8cbc5a40736678beefbeea96b2ffbd438d2d0f->enter($__internal_0eaf860c1c78d9ee8b14dd3e7e8cbc5a40736678beefbeea96b2ffbd438d2d0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_0eaf860c1c78d9ee8b14dd3e7e8cbc5a40736678beefbeea96b2ffbd438d2d0f->leave($__internal_0eaf860c1c78d9ee8b14dd3e7e8cbc5a40736678beefbeea96b2ffbd438d2d0f_prof);

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
