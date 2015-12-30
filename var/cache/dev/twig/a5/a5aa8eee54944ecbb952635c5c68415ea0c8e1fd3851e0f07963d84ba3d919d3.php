<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_5b68315d83b4a26c23d2465b23943f9c3155d9f6d1663bd876193190b343e3ff extends Twig_Template
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
        $__internal_509437d35952005d8b41132403b73570c33d868756fd9ab4766926f60b2fb8b0 = $this->env->getExtension("native_profiler");
        $__internal_509437d35952005d8b41132403b73570c33d868756fd9ab4766926f60b2fb8b0->enter($__internal_509437d35952005d8b41132403b73570c33d868756fd9ab4766926f60b2fb8b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_509437d35952005d8b41132403b73570c33d868756fd9ab4766926f60b2fb8b0->leave($__internal_509437d35952005d8b41132403b73570c33d868756fd9ab4766926f60b2fb8b0_prof);

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
