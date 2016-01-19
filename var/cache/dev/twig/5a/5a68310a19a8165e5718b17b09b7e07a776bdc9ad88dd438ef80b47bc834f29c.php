<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_a86d90a7d5c8913eb48cf574c2cfd3e0451ebdb49e66f5e5e3f70cf17d949758 extends Twig_Template
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
        $__internal_b9b4373e5aecb67f765a62c73b534c989a1e944b1375ab0fdfbb081f3af98eb8 = $this->env->getExtension("native_profiler");
        $__internal_b9b4373e5aecb67f765a62c73b534c989a1e944b1375ab0fdfbb081f3af98eb8->enter($__internal_b9b4373e5aecb67f765a62c73b534c989a1e944b1375ab0fdfbb081f3af98eb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_b9b4373e5aecb67f765a62c73b534c989a1e944b1375ab0fdfbb081f3af98eb8->leave($__internal_b9b4373e5aecb67f765a62c73b534c989a1e944b1375ab0fdfbb081f3af98eb8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
