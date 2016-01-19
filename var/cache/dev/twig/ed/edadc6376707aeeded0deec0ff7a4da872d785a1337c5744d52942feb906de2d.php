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
        $__internal_512d9f331c51daf668496f9519eb38e84894f25f03365b05d9f64a7bcf358f19 = $this->env->getExtension("native_profiler");
        $__internal_512d9f331c51daf668496f9519eb38e84894f25f03365b05d9f64a7bcf358f19->enter($__internal_512d9f331c51daf668496f9519eb38e84894f25f03365b05d9f64a7bcf358f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_512d9f331c51daf668496f9519eb38e84894f25f03365b05d9f64a7bcf358f19->leave($__internal_512d9f331c51daf668496f9519eb38e84894f25f03365b05d9f64a7bcf358f19_prof);

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
