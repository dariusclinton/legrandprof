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
        $__internal_9ee5edc6abaec889e822805c1e0198e9f530fb87cd4304fecc98aad8cf8f8d00 = $this->env->getExtension("native_profiler");
        $__internal_9ee5edc6abaec889e822805c1e0198e9f530fb87cd4304fecc98aad8cf8f8d00->enter($__internal_9ee5edc6abaec889e822805c1e0198e9f530fb87cd4304fecc98aad8cf8f8d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_9ee5edc6abaec889e822805c1e0198e9f530fb87cd4304fecc98aad8cf8f8d00->leave($__internal_9ee5edc6abaec889e822805c1e0198e9f530fb87cd4304fecc98aad8cf8f8d00_prof);

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
