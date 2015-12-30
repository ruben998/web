<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_4ec456082d69a9236356fd791e24e409dce82f29574dfa257af3a37ba879e492 extends Twig_Template
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
        $__internal_650a95dd28bf14cd04bb7d706ce59e03486a6454408306e3a6d85df9e95da81a = $this->env->getExtension("native_profiler");
        $__internal_650a95dd28bf14cd04bb7d706ce59e03486a6454408306e3a6d85df9e95da81a->enter($__internal_650a95dd28bf14cd04bb7d706ce59e03486a6454408306e3a6d85df9e95da81a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_650a95dd28bf14cd04bb7d706ce59e03486a6454408306e3a6d85df9e95da81a->leave($__internal_650a95dd28bf14cd04bb7d706ce59e03486a6454408306e3a6d85df9e95da81a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
