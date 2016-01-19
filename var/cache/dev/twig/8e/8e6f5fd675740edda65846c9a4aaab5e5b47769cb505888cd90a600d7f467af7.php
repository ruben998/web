<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_58aecbcbd49f2291b0b11e65646efe08dfdd1b3cfbba3291ce1b37b1f6e4d788 extends Twig_Template
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
        $__internal_3b34ebdccf4f7176b9ce2ea72398a1819476f585a908522280f2149cbc38d278 = $this->env->getExtension("native_profiler");
        $__internal_3b34ebdccf4f7176b9ce2ea72398a1819476f585a908522280f2149cbc38d278->enter($__internal_3b34ebdccf4f7176b9ce2ea72398a1819476f585a908522280f2149cbc38d278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_3b34ebdccf4f7176b9ce2ea72398a1819476f585a908522280f2149cbc38d278->leave($__internal_3b34ebdccf4f7176b9ce2ea72398a1819476f585a908522280f2149cbc38d278_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
