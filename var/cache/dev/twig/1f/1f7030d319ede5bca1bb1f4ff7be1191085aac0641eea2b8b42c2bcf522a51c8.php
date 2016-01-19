<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_0fce2f87628b71747e1d6f6ac9ce03aa775fd861f3d5532984f7f694d8617576 extends Twig_Template
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
        $__internal_a632c6906115cef8c2078b8e0e01fe0de275ca443f423025c8e247f901ca51ef = $this->env->getExtension("native_profiler");
        $__internal_a632c6906115cef8c2078b8e0e01fe0de275ca443f423025c8e247f901ca51ef->enter($__internal_a632c6906115cef8c2078b8e0e01fe0de275ca443f423025c8e247f901ca51ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_a632c6906115cef8c2078b8e0e01fe0de275ca443f423025c8e247f901ca51ef->leave($__internal_a632c6906115cef8c2078b8e0e01fe0de275ca443f423025c8e247f901ca51ef_prof);

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
