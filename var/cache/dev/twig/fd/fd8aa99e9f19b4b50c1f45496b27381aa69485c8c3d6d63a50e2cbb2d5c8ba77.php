<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_5c76b927fa391640ed481a26fee9c7dc1ae822b36028178d85cb4b26e39ef7b9 extends Twig_Template
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
        $__internal_a807d87f80fa0b8b18e5fe08147265a1950601bf44db27c82b7cba4d38eb14a4 = $this->env->getExtension("native_profiler");
        $__internal_a807d87f80fa0b8b18e5fe08147265a1950601bf44db27c82b7cba4d38eb14a4->enter($__internal_a807d87f80fa0b8b18e5fe08147265a1950601bf44db27c82b7cba4d38eb14a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_a807d87f80fa0b8b18e5fe08147265a1950601bf44db27c82b7cba4d38eb14a4->leave($__internal_a807d87f80fa0b8b18e5fe08147265a1950601bf44db27c82b7cba4d38eb14a4_prof);

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
