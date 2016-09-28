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
        $__internal_ed5a7e8de5089ab009c36db498eeff98a80790ecf6bc51c22d97ae7471a664f2 = $this->env->getExtension("native_profiler");
        $__internal_ed5a7e8de5089ab009c36db498eeff98a80790ecf6bc51c22d97ae7471a664f2->enter($__internal_ed5a7e8de5089ab009c36db498eeff98a80790ecf6bc51c22d97ae7471a664f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ed5a7e8de5089ab009c36db498eeff98a80790ecf6bc51c22d97ae7471a664f2->leave($__internal_ed5a7e8de5089ab009c36db498eeff98a80790ecf6bc51c22d97ae7471a664f2_prof);

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
