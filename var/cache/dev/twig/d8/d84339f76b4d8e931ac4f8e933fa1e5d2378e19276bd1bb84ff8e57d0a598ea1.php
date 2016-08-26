<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_387ca02271c4554898fe08bdf8debad34f4a0c96e912de72aebabe3438e694c0 extends Twig_Template
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
        $__internal_59e7f4e0375ed1040c1b96c634498f6be0ca3cf6d95bea78cb93fddc6606ec06 = $this->env->getExtension("native_profiler");
        $__internal_59e7f4e0375ed1040c1b96c634498f6be0ca3cf6d95bea78cb93fddc6606ec06->enter($__internal_59e7f4e0375ed1040c1b96c634498f6be0ca3cf6d95bea78cb93fddc6606ec06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_59e7f4e0375ed1040c1b96c634498f6be0ca3cf6d95bea78cb93fddc6606ec06->leave($__internal_59e7f4e0375ed1040c1b96c634498f6be0ca3cf6d95bea78cb93fddc6606ec06_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
