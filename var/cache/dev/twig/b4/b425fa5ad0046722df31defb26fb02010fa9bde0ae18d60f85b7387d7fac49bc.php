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
        $__internal_dadd9d6fb01716aab707b5647d9b1d51c27e3266e7246ae1dc8df814118da7d2 = $this->env->getExtension("native_profiler");
        $__internal_dadd9d6fb01716aab707b5647d9b1d51c27e3266e7246ae1dc8df814118da7d2->enter($__internal_dadd9d6fb01716aab707b5647d9b1d51c27e3266e7246ae1dc8df814118da7d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_dadd9d6fb01716aab707b5647d9b1d51c27e3266e7246ae1dc8df814118da7d2->leave($__internal_dadd9d6fb01716aab707b5647d9b1d51c27e3266e7246ae1dc8df814118da7d2_prof);

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
