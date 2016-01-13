<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_e6270450f30044d572782beb337857ea9c402b9399de64ccf0109738b31fa17b extends Twig_Template
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
        $__internal_ed9dc969fd3ecc241e7b0772a96e22188ef97a715870cb4d89c659858dc01e6d = $this->env->getExtension("native_profiler");
        $__internal_ed9dc969fd3ecc241e7b0772a96e22188ef97a715870cb4d89c659858dc01e6d->enter($__internal_ed9dc969fd3ecc241e7b0772a96e22188ef97a715870cb4d89c659858dc01e6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_ed9dc969fd3ecc241e7b0772a96e22188ef97a715870cb4d89c659858dc01e6d->leave($__internal_ed9dc969fd3ecc241e7b0772a96e22188ef97a715870cb4d89c659858dc01e6d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
