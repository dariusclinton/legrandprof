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
        $__internal_a2057c93b9ea56723adc5f4054fa4c50442c6f62fba63b3fc4a07097e9e923c2 = $this->env->getExtension("native_profiler");
        $__internal_a2057c93b9ea56723adc5f4054fa4c50442c6f62fba63b3fc4a07097e9e923c2->enter($__internal_a2057c93b9ea56723adc5f4054fa4c50442c6f62fba63b3fc4a07097e9e923c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_a2057c93b9ea56723adc5f4054fa4c50442c6f62fba63b3fc4a07097e9e923c2->leave($__internal_a2057c93b9ea56723adc5f4054fa4c50442c6f62fba63b3fc4a07097e9e923c2_prof);

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
