<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_5935209cf6a8796e67df6c1fb925901cc2e329a2fda543e642c9a19342e09901 extends Twig_Template
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
        $__internal_8619885514bea65fcc0e404b50eec98fe7d16def7820e4f1300034cba71a868b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8619885514bea65fcc0e404b50eec98fe7d16def7820e4f1300034cba71a868b->enter($__internal_8619885514bea65fcc0e404b50eec98fe7d16def7820e4f1300034cba71a868b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_8619885514bea65fcc0e404b50eec98fe7d16def7820e4f1300034cba71a868b->leave($__internal_8619885514bea65fcc0e404b50eec98fe7d16def7820e4f1300034cba71a868b_prof);

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
