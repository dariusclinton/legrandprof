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
        $__internal_79e7419eef63948661e7c8251c08b285d146a831060076d694b2f02fb5edb0c5 = $this->env->getExtension("native_profiler");
        $__internal_79e7419eef63948661e7c8251c08b285d146a831060076d694b2f02fb5edb0c5->enter($__internal_79e7419eef63948661e7c8251c08b285d146a831060076d694b2f02fb5edb0c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_79e7419eef63948661e7c8251c08b285d146a831060076d694b2f02fb5edb0c5->leave($__internal_79e7419eef63948661e7c8251c08b285d146a831060076d694b2f02fb5edb0c5_prof);

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
