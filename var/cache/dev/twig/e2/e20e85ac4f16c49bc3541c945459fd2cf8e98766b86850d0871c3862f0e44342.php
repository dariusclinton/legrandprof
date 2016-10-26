<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_2685ee4c956a0b3e6d48bb029b4aabf894f7dab2597d21378aebc786241b635d extends Twig_Template
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
        $__internal_f4f6eb993d36456c8cc4a42b70830e36f5c4272e046e797cd9e7d461113820f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4f6eb993d36456c8cc4a42b70830e36f5c4272e046e797cd9e7d461113820f6->enter($__internal_f4f6eb993d36456c8cc4a42b70830e36f5c4272e046e797cd9e7d461113820f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_f4f6eb993d36456c8cc4a42b70830e36f5c4272e046e797cd9e7d461113820f6->leave($__internal_f4f6eb993d36456c8cc4a42b70830e36f5c4272e046e797cd9e7d461113820f6_prof);

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
