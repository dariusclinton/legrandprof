<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_5a9bddda9980d710f2bfa51744450a154bbd9a3d7a89346dcff79aa80db06893 extends Twig_Template
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
        $__internal_600c4c4f012c1ba6221b3ac6c0a6351c68084ec3655c503a988fafb49f4716ae = $this->env->getExtension("native_profiler");
        $__internal_600c4c4f012c1ba6221b3ac6c0a6351c68084ec3655c503a988fafb49f4716ae->enter($__internal_600c4c4f012c1ba6221b3ac6c0a6351c68084ec3655c503a988fafb49f4716ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_600c4c4f012c1ba6221b3ac6c0a6351c68084ec3655c503a988fafb49f4716ae->leave($__internal_600c4c4f012c1ba6221b3ac6c0a6351c68084ec3655c503a988fafb49f4716ae_prof);

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
