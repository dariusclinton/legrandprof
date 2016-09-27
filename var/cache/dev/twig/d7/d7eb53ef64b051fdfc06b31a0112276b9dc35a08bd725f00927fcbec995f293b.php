<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_75d83b86124bed283d6d6afd0cec38bf6feea5bc5d40e0ae9daadf081df289ef extends Twig_Template
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
        $__internal_eed6351e2c0c8b1f5d72ebab9e4258b0eb7f12116f1da9c8e078e78aef905c80 = $this->env->getExtension("native_profiler");
        $__internal_eed6351e2c0c8b1f5d72ebab9e4258b0eb7f12116f1da9c8e078e78aef905c80->enter($__internal_eed6351e2c0c8b1f5d72ebab9e4258b0eb7f12116f1da9c8e078e78aef905c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_eed6351e2c0c8b1f5d72ebab9e4258b0eb7f12116f1da9c8e078e78aef905c80->leave($__internal_eed6351e2c0c8b1f5d72ebab9e4258b0eb7f12116f1da9c8e078e78aef905c80_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
    }
}
