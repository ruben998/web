<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_08bda690c8e56cfc91af463124f39dd5632c66034221651ed3936d2963efd62a extends Twig_Template
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
        $__internal_3bf4d50e2c03167a5156ce7a342f0c422d7da30c346358bb365c56f8ad8236cc = $this->env->getExtension("native_profiler");
        $__internal_3bf4d50e2c03167a5156ce7a342f0c422d7da30c346358bb365c56f8ad8236cc->enter($__internal_3bf4d50e2c03167a5156ce7a342f0c422d7da30c346358bb365c56f8ad8236cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_3bf4d50e2c03167a5156ce7a342f0c422d7da30c346358bb365c56f8ad8236cc->leave($__internal_3bf4d50e2c03167a5156ce7a342f0c422d7da30c346358bb365c56f8ad8236cc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($form->vars['multipart']): ?>enctype="multipart/form-data"<?php endif ?>*/
/* */
