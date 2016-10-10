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
        $__internal_2d9a2712007f3a7216018da93a49bfccc44e6eebd470cad97b646c52d40b0624 = $this->env->getExtension("native_profiler");
        $__internal_2d9a2712007f3a7216018da93a49bfccc44e6eebd470cad97b646c52d40b0624->enter($__internal_2d9a2712007f3a7216018da93a49bfccc44e6eebd470cad97b646c52d40b0624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_2d9a2712007f3a7216018da93a49bfccc44e6eebd470cad97b646c52d40b0624->leave($__internal_2d9a2712007f3a7216018da93a49bfccc44e6eebd470cad97b646c52d40b0624_prof);

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
