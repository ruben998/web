<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_95d3f2ffb6ca00a7beef860bf32b2096376199d631b412616be36bef5c077c24 extends Twig_Template
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
        $__internal_c72c393bae28066e6f09b5eb968d5be4dbaa027aa6f62e3db714378b78ae063c = $this->env->getExtension("native_profiler");
        $__internal_c72c393bae28066e6f09b5eb968d5be4dbaa027aa6f62e3db714378b78ae063c->enter($__internal_c72c393bae28066e6f09b5eb968d5be4dbaa027aa6f62e3db714378b78ae063c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c72c393bae28066e6f09b5eb968d5be4dbaa027aa6f62e3db714378b78ae063c->leave($__internal_c72c393bae28066e6f09b5eb968d5be4dbaa027aa6f62e3db714378b78ae063c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
