<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_09f632d4aa5ae6bddf11a8997faa42a59820b4c253fa7e6101af29644c85a605 extends Twig_Template
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
        $__internal_b19a2c0e1de49eb0e60878471ddbbf7781efeb112bbbd8b549ded8625a781286 = $this->env->getExtension("native_profiler");
        $__internal_b19a2c0e1de49eb0e60878471ddbbf7781efeb112bbbd8b549ded8625a781286->enter($__internal_b19a2c0e1de49eb0e60878471ddbbf7781efeb112bbbd8b549ded8625a781286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_b19a2c0e1de49eb0e60878471ddbbf7781efeb112bbbd8b549ded8625a781286->leave($__internal_b19a2c0e1de49eb0e60878471ddbbf7781efeb112bbbd8b549ded8625a781286_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
    }
}
