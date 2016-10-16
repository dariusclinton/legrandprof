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
        $__internal_b9ad2066b9abbe82c8f5c5370d8e0f371e2f48db963b2ca12b4176bf38ff8c48 = $this->env->getExtension("native_profiler");
        $__internal_b9ad2066b9abbe82c8f5c5370d8e0f371e2f48db963b2ca12b4176bf38ff8c48->enter($__internal_b9ad2066b9abbe82c8f5c5370d8e0f371e2f48db963b2ca12b4176bf38ff8c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_b9ad2066b9abbe82c8f5c5370d8e0f371e2f48db963b2ca12b4176bf38ff8c48->leave($__internal_b9ad2066b9abbe82c8f5c5370d8e0f371e2f48db963b2ca12b4176bf38ff8c48_prof);

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
