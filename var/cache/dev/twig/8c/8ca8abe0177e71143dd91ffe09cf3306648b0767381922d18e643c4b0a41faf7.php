<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_d22ca37279342bc82d5735bbaf26f21bcee2feacae72ec3b4b34ec84824b61c9 extends Twig_Template
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
        $__internal_e73609a2ed4786b2001aab44059a8e85fbc82077528eeb8a52927306ef4f9690 = $this->env->getExtension("native_profiler");
        $__internal_e73609a2ed4786b2001aab44059a8e85fbc82077528eeb8a52927306ef4f9690->enter($__internal_e73609a2ed4786b2001aab44059a8e85fbc82077528eeb8a52927306ef4f9690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e73609a2ed4786b2001aab44059a8e85fbc82077528eeb8a52927306ef4f9690->leave($__internal_e73609a2ed4786b2001aab44059a8e85fbc82077528eeb8a52927306ef4f9690_prof);

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
