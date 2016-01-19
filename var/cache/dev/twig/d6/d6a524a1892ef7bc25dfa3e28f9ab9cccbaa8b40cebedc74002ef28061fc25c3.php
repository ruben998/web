<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_ab7a91fa05a49882592b96c304c1885bc469c0e7088990f3672a09af488c153d extends Twig_Template
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
        $__internal_467c384a0d528b0b468162e25bb4a283833b8280f67894384a3f86207224ed74 = $this->env->getExtension("native_profiler");
        $__internal_467c384a0d528b0b468162e25bb4a283833b8280f67894384a3f86207224ed74->enter($__internal_467c384a0d528b0b468162e25bb4a283833b8280f67894384a3f86207224ed74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_467c384a0d528b0b468162e25bb4a283833b8280f67894384a3f86207224ed74->leave($__internal_467c384a0d528b0b468162e25bb4a283833b8280f67894384a3f86207224ed74_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
