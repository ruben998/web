<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_6985d69562a448c32891266aba4e54801a92dfb29061a5adaea22f56dc5aaeb4 extends Twig_Template
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
        $__internal_4f9c06b0aa726e0f690e08fbfddc82593a0a019db6738d316fd532f0420f2706 = $this->env->getExtension("native_profiler");
        $__internal_4f9c06b0aa726e0f690e08fbfddc82593a0a019db6738d316fd532f0420f2706->enter($__internal_4f9c06b0aa726e0f690e08fbfddc82593a0a019db6738d316fd532f0420f2706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_4f9c06b0aa726e0f690e08fbfddc82593a0a019db6738d316fd532f0420f2706->leave($__internal_4f9c06b0aa726e0f690e08fbfddc82593a0a019db6738d316fd532f0420f2706_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
