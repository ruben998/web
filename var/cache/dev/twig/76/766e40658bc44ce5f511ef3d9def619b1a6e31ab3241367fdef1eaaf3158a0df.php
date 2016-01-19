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
        $__internal_74c8b2841885a1fd49be4dd22f80e4275eb3441cd94af751496972d78d4161dd = $this->env->getExtension("native_profiler");
        $__internal_74c8b2841885a1fd49be4dd22f80e4275eb3441cd94af751496972d78d4161dd->enter($__internal_74c8b2841885a1fd49be4dd22f80e4275eb3441cd94af751496972d78d4161dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_74c8b2841885a1fd49be4dd22f80e4275eb3441cd94af751496972d78d4161dd->leave($__internal_74c8b2841885a1fd49be4dd22f80e4275eb3441cd94af751496972d78d4161dd_prof);

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
