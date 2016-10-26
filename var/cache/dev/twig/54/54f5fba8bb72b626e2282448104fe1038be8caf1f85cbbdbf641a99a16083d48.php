<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_508c444539c872b59791dd9af7ef8f04da96365517cd1204b0331392337f4302 extends Twig_Template
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
        $__internal_2888ce7d071985c717e966380f0cb8487688235af992bbdfdf171efa011d5813 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2888ce7d071985c717e966380f0cb8487688235af992bbdfdf171efa011d5813->enter($__internal_2888ce7d071985c717e966380f0cb8487688235af992bbdfdf171efa011d5813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_2888ce7d071985c717e966380f0cb8487688235af992bbdfdf171efa011d5813->leave($__internal_2888ce7d071985c717e966380f0cb8487688235af992bbdfdf171efa011d5813_prof);

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
