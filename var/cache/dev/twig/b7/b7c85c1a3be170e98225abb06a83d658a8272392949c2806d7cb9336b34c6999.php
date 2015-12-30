<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_c1752b21f06234356e7dd2b9f9a91ee91cdbf5c8f11348c2a21d9d07e1825696 extends Twig_Template
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
        $__internal_93dc9dcc90d641fa8251e30500bed6eeaac7e6c7b421b4718ec1783d1ca8c2e5 = $this->env->getExtension("native_profiler");
        $__internal_93dc9dcc90d641fa8251e30500bed6eeaac7e6c7b421b4718ec1783d1ca8c2e5->enter($__internal_93dc9dcc90d641fa8251e30500bed6eeaac7e6c7b421b4718ec1783d1ca8c2e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_93dc9dcc90d641fa8251e30500bed6eeaac7e6c7b421b4718ec1783d1ca8c2e5->leave($__internal_93dc9dcc90d641fa8251e30500bed6eeaac7e6c7b421b4718ec1783d1ca8c2e5_prof);

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
