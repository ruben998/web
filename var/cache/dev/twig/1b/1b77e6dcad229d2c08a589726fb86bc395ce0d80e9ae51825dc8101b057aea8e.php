<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_e10e33b2c19716c6530faf06553cf25dd50997dc53a444b1053f649cbd8cc1ee extends Twig_Template
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
        $__internal_0f1f3864d3a3c1843cec8a1dbf4c6e1484285580b1e14c192c337b35e224b2b2 = $this->env->getExtension("native_profiler");
        $__internal_0f1f3864d3a3c1843cec8a1dbf4c6e1484285580b1e14c192c337b35e224b2b2->enter($__internal_0f1f3864d3a3c1843cec8a1dbf4c6e1484285580b1e14c192c337b35e224b2b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_0f1f3864d3a3c1843cec8a1dbf4c6e1484285580b1e14c192c337b35e224b2b2->leave($__internal_0f1f3864d3a3c1843cec8a1dbf4c6e1484285580b1e14c192c337b35e224b2b2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
