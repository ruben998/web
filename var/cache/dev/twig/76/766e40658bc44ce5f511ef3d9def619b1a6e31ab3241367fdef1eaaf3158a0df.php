<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_436a522eb9c58e6a52f5d9b72d699fa3f8186908ba51e9a303c2ce60b763ac31 extends Twig_Template
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
        $__internal_43274208054929caf97b35e92c14baff3df386bb756c5a19b3071d2f0ee88751 = $this->env->getExtension("native_profiler");
        $__internal_43274208054929caf97b35e92c14baff3df386bb756c5a19b3071d2f0ee88751->enter($__internal_43274208054929caf97b35e92c14baff3df386bb756c5a19b3071d2f0ee88751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_43274208054929caf97b35e92c14baff3df386bb756c5a19b3071d2f0ee88751->leave($__internal_43274208054929caf97b35e92c14baff3df386bb756c5a19b3071d2f0ee88751_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
