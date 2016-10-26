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
        $__internal_ec7a8e33d6bdf8b1ed817a4951ab3f819a9637c83d4effe575d8d10ad6cc9120 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec7a8e33d6bdf8b1ed817a4951ab3f819a9637c83d4effe575d8d10ad6cc9120->enter($__internal_ec7a8e33d6bdf8b1ed817a4951ab3f819a9637c83d4effe575d8d10ad6cc9120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ec7a8e33d6bdf8b1ed817a4951ab3f819a9637c83d4effe575d8d10ad6cc9120->leave($__internal_ec7a8e33d6bdf8b1ed817a4951ab3f819a9637c83d4effe575d8d10ad6cc9120_prof);

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
