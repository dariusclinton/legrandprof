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
        $__internal_9199c9bb3f9553f8b58bb53adad5d6981d6569a2adb2b464713d086bce32d4b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9199c9bb3f9553f8b58bb53adad5d6981d6569a2adb2b464713d086bce32d4b3->enter($__internal_9199c9bb3f9553f8b58bb53adad5d6981d6569a2adb2b464713d086bce32d4b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_9199c9bb3f9553f8b58bb53adad5d6981d6569a2adb2b464713d086bce32d4b3->leave($__internal_9199c9bb3f9553f8b58bb53adad5d6981d6569a2adb2b464713d086bce32d4b3_prof);

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
