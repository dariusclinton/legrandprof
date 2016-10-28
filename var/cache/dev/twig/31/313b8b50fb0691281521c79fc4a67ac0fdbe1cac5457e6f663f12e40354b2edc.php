<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_d6a804073c2c9cc371739acd3d0c65ac6493059f80db099693958b7721117e9a extends Twig_Template
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
        $__internal_b354aa11a1b7158674d142c7999348a76cd8260a7f8f0017eef07b7546071e92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b354aa11a1b7158674d142c7999348a76cd8260a7f8f0017eef07b7546071e92->enter($__internal_b354aa11a1b7158674d142c7999348a76cd8260a7f8f0017eef07b7546071e92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_b354aa11a1b7158674d142c7999348a76cd8260a7f8f0017eef07b7546071e92->leave($__internal_b354aa11a1b7158674d142c7999348a76cd8260a7f8f0017eef07b7546071e92_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
    }
}
