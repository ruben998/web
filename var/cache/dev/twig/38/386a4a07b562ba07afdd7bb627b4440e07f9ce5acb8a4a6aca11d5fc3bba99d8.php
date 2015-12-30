<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_6fe2b587eb4df5e3d8f113bf38ebda9bf168cf9aa34e79b55ff3935eae3132c0 extends Twig_Template
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
        $__internal_ac8127bd3a9264fa0f9295eed11170aafd20fe4fabfd56b08b1f7ba495f8d10a = $this->env->getExtension("native_profiler");
        $__internal_ac8127bd3a9264fa0f9295eed11170aafd20fe4fabfd56b08b1f7ba495f8d10a->enter($__internal_ac8127bd3a9264fa0f9295eed11170aafd20fe4fabfd56b08b1f7ba495f8d10a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_ac8127bd3a9264fa0f9295eed11170aafd20fe4fabfd56b08b1f7ba495f8d10a->leave($__internal_ac8127bd3a9264fa0f9295eed11170aafd20fe4fabfd56b08b1f7ba495f8d10a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
