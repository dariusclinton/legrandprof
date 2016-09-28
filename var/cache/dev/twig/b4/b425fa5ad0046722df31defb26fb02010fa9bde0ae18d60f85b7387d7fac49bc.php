<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_ef7e21c454ddcfb702e319b80a8bd8c72de8dfc4f9aa9afb64a1077ef82e5f55 extends Twig_Template
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
        $__internal_421165779e082f440d858c730a0a4072721bc269af2e774487b020e8f123eace = $this->env->getExtension("native_profiler");
        $__internal_421165779e082f440d858c730a0a4072721bc269af2e774487b020e8f123eace->enter($__internal_421165779e082f440d858c730a0a4072721bc269af2e774487b020e8f123eace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_421165779e082f440d858c730a0a4072721bc269af2e774487b020e8f123eace->leave($__internal_421165779e082f440d858c730a0a4072721bc269af2e774487b020e8f123eace_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
    }
}
