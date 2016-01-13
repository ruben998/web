<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_1136ce36b4140b3ed0e11608edc8211537426e19e5325bf3c8f047e1e367feb8 extends Twig_Template
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
        $__internal_b80b3fa3bc1328dfa1427051b4fe4f1c43eb41f96c68a950047bc9cb8b2d8928 = $this->env->getExtension("native_profiler");
        $__internal_b80b3fa3bc1328dfa1427051b4fe4f1c43eb41f96c68a950047bc9cb8b2d8928->enter($__internal_b80b3fa3bc1328dfa1427051b4fe4f1c43eb41f96c68a950047bc9cb8b2d8928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_b80b3fa3bc1328dfa1427051b4fe4f1c43eb41f96c68a950047bc9cb8b2d8928->leave($__internal_b80b3fa3bc1328dfa1427051b4fe4f1c43eb41f96c68a950047bc9cb8b2d8928_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
