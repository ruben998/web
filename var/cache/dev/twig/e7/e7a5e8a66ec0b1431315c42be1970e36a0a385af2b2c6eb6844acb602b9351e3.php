<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_cf3606b3e64afda5753d0608ef24bc240190cbb5c72c1b72f4bad20fa931bff6 extends Twig_Template
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
        $__internal_f706829bf6c88c07ae9cf71ca2b2332e51eb607a0dcd45075b7ac6180f7fab58 = $this->env->getExtension("native_profiler");
        $__internal_f706829bf6c88c07ae9cf71ca2b2332e51eb607a0dcd45075b7ac6180f7fab58->enter($__internal_f706829bf6c88c07ae9cf71ca2b2332e51eb607a0dcd45075b7ac6180f7fab58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_f706829bf6c88c07ae9cf71ca2b2332e51eb607a0dcd45075b7ac6180f7fab58->leave($__internal_f706829bf6c88c07ae9cf71ca2b2332e51eb607a0dcd45075b7ac6180f7fab58_prof);

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
