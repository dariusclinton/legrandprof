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
        $__internal_81d90a4b6e28f7051372c25f0582d04d7d6d685035c91539ff2b4b3d2fd2b0cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81d90a4b6e28f7051372c25f0582d04d7d6d685035c91539ff2b4b3d2fd2b0cf->enter($__internal_81d90a4b6e28f7051372c25f0582d04d7d6d685035c91539ff2b4b3d2fd2b0cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_81d90a4b6e28f7051372c25f0582d04d7d6d685035c91539ff2b4b3d2fd2b0cf->leave($__internal_81d90a4b6e28f7051372c25f0582d04d7d6d685035c91539ff2b4b3d2fd2b0cf_prof);

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
