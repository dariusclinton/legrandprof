<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_381dd6b1a069a468d256beabca879fe42dee9c323283f3367a0da5652a481215 extends Twig_Template
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
        $__internal_ecc760ad1bdfc16f0669dccfa3349ba70d8d033a47809251fafbd021a8b5273e = $this->env->getExtension("native_profiler");
        $__internal_ecc760ad1bdfc16f0669dccfa3349ba70d8d033a47809251fafbd021a8b5273e->enter($__internal_ecc760ad1bdfc16f0669dccfa3349ba70d8d033a47809251fafbd021a8b5273e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_ecc760ad1bdfc16f0669dccfa3349ba70d8d033a47809251fafbd021a8b5273e->leave($__internal_ecc760ad1bdfc16f0669dccfa3349ba70d8d033a47809251fafbd021a8b5273e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
    }
}
