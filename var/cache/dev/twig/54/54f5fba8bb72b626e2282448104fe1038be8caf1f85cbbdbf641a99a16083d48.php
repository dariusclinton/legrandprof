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
        $__internal_4817ae72178e12cbae8ff5a15516c7ea3be1ab9d816dbe3180518e39707373b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4817ae72178e12cbae8ff5a15516c7ea3be1ab9d816dbe3180518e39707373b3->enter($__internal_4817ae72178e12cbae8ff5a15516c7ea3be1ab9d816dbe3180518e39707373b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_4817ae72178e12cbae8ff5a15516c7ea3be1ab9d816dbe3180518e39707373b3->leave($__internal_4817ae72178e12cbae8ff5a15516c7ea3be1ab9d816dbe3180518e39707373b3_prof);

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
