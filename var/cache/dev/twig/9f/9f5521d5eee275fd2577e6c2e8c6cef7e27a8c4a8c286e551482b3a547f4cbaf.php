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
        $__internal_925c4cc1fa220e379de2d61474e75aca1c02e1bd23af7a316be482b7201ac065 = $this->env->getExtension("native_profiler");
        $__internal_925c4cc1fa220e379de2d61474e75aca1c02e1bd23af7a316be482b7201ac065->enter($__internal_925c4cc1fa220e379de2d61474e75aca1c02e1bd23af7a316be482b7201ac065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_925c4cc1fa220e379de2d61474e75aca1c02e1bd23af7a316be482b7201ac065->leave($__internal_925c4cc1fa220e379de2d61474e75aca1c02e1bd23af7a316be482b7201ac065_prof);

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
