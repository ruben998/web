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
        $__internal_8b7790da29e954be1bb7b951417050f9e488018bb5be626613c9f537497e761c = $this->env->getExtension("native_profiler");
        $__internal_8b7790da29e954be1bb7b951417050f9e488018bb5be626613c9f537497e761c->enter($__internal_8b7790da29e954be1bb7b951417050f9e488018bb5be626613c9f537497e761c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_8b7790da29e954be1bb7b951417050f9e488018bb5be626613c9f537497e761c->leave($__internal_8b7790da29e954be1bb7b951417050f9e488018bb5be626613c9f537497e761c_prof);

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
