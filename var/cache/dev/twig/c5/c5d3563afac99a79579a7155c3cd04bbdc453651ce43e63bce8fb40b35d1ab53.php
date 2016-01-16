<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_309eccbeed18de850ccaf833a83be286a624b34ca3d4bdc3a4f3c35cee6b8cdc extends Twig_Template
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
        $__internal_353de7004033d66e57994acb3f586a586736b937d557d4c9115a39cd6a74605e = $this->env->getExtension("native_profiler");
        $__internal_353de7004033d66e57994acb3f586a586736b937d557d4c9115a39cd6a74605e->enter($__internal_353de7004033d66e57994acb3f586a586736b937d557d4c9115a39cd6a74605e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_353de7004033d66e57994acb3f586a586736b937d557d4c9115a39cd6a74605e->leave($__internal_353de7004033d66e57994acb3f586a586736b937d557d4c9115a39cd6a74605e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
