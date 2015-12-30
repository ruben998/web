<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_7fd0ba9fc5afbd4a83f499758b72494b35a7205787c3af3e1e1fbb49d041beee extends Twig_Template
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
        $__internal_cf536bcceb0ef058e3d8d83eb8576253f235ffccb0675b276eca90f9e6b03169 = $this->env->getExtension("native_profiler");
        $__internal_cf536bcceb0ef058e3d8d83eb8576253f235ffccb0675b276eca90f9e6b03169->enter($__internal_cf536bcceb0ef058e3d8d83eb8576253f235ffccb0675b276eca90f9e6b03169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_cf536bcceb0ef058e3d8d83eb8576253f235ffccb0675b276eca90f9e6b03169->leave($__internal_cf536bcceb0ef058e3d8d83eb8576253f235ffccb0675b276eca90f9e6b03169_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
