<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_667cbc1594e3d640ca4363abe6814a108eb3b09879355cf189c95fe7397bacad extends Twig_Template
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
        $__internal_f9fcec28d8319747bdf53415dd7ba30d90cd820fe4434f6c291e8c18da45c200 = $this->env->getExtension("native_profiler");
        $__internal_f9fcec28d8319747bdf53415dd7ba30d90cd820fe4434f6c291e8c18da45c200->enter($__internal_f9fcec28d8319747bdf53415dd7ba30d90cd820fe4434f6c291e8c18da45c200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_f9fcec28d8319747bdf53415dd7ba30d90cd820fe4434f6c291e8c18da45c200->leave($__internal_f9fcec28d8319747bdf53415dd7ba30d90cd820fe4434f6c291e8c18da45c200_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
