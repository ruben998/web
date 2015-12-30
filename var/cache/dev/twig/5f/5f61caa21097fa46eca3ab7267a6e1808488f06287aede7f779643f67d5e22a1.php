<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_d983f13c1593fc2ed7a25132d2bac453e06cb6e898787f62cb60fb5bf7b78842 extends Twig_Template
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
        $__internal_2ff55404045b155f78f3087e3ed6c4b48c195ea069b613d8c6b9e546b3b98abc = $this->env->getExtension("native_profiler");
        $__internal_2ff55404045b155f78f3087e3ed6c4b48c195ea069b613d8c6b9e546b3b98abc->enter($__internal_2ff55404045b155f78f3087e3ed6c4b48c195ea069b613d8c6b9e546b3b98abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_2ff55404045b155f78f3087e3ed6c4b48c195ea069b613d8c6b9e546b3b98abc->leave($__internal_2ff55404045b155f78f3087e3ed6c4b48c195ea069b613d8c6b9e546b3b98abc_prof);

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
