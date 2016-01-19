<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_3532792e9de40e2bac7a29fe9ff831e1c2e541a49dcdc71606a0b98213e8068e extends Twig_Template
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
        $__internal_a03bd8ae87997499bfd10de5e68f95326b0b56aa1386a4a27265d0d4f05bbe69 = $this->env->getExtension("native_profiler");
        $__internal_a03bd8ae87997499bfd10de5e68f95326b0b56aa1386a4a27265d0d4f05bbe69->enter($__internal_a03bd8ae87997499bfd10de5e68f95326b0b56aa1386a4a27265d0d4f05bbe69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_a03bd8ae87997499bfd10de5e68f95326b0b56aa1386a4a27265d0d4f05bbe69->leave($__internal_a03bd8ae87997499bfd10de5e68f95326b0b56aa1386a4a27265d0d4f05bbe69_prof);

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
