<?php

/* default/index.html */
class __TwigTemplate_d38fe5ea07470a963abf9112f713cdf87e0a8e84f7c71971280fe66eb97a0fee extends Twig_Template
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
        $__internal_9e1e6bc09d7705a846016621dbea4eee108cba61b08a0f86432cae1eddb668d2 = $this->env->getExtension("native_profiler");
        $__internal_9e1e6bc09d7705a846016621dbea4eee108cba61b08a0f86432cae1eddb668d2->enter($__internal_9e1e6bc09d7705a846016621dbea4eee108cba61b08a0f86432cae1eddb668d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Title</title>
</head>
<body>
HOMEPAGE!
</body>
</html>";
        
        $__internal_9e1e6bc09d7705a846016621dbea4eee108cba61b08a0f86432cae1eddb668d2->leave($__internal_9e1e6bc09d7705a846016621dbea4eee108cba61b08a0f86432cae1eddb668d2_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="UTF-8">*/
/*     <title>Title</title>*/
/* </head>*/
/* <body>*/
/* HOMEPAGE!*/
/* </body>*/
/* </html>*/
