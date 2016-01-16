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
        $__internal_36395d9a1e2cb9af80605f7bfaf0fef44aee87364befab66e942d21185da8662 = $this->env->getExtension("native_profiler");
        $__internal_36395d9a1e2cb9af80605f7bfaf0fef44aee87364befab66e942d21185da8662->enter($__internal_36395d9a1e2cb9af80605f7bfaf0fef44aee87364befab66e942d21185da8662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_36395d9a1e2cb9af80605f7bfaf0fef44aee87364befab66e942d21185da8662->leave($__internal_36395d9a1e2cb9af80605f7bfaf0fef44aee87364befab66e942d21185da8662_prof);

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
