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
        $__internal_5481da05a41ca07880f83eca6f6b6f39bf75fa63a8c9008d58c5028d9db0b1d0 = $this->env->getExtension("native_profiler");
        $__internal_5481da05a41ca07880f83eca6f6b6f39bf75fa63a8c9008d58c5028d9db0b1d0->enter($__internal_5481da05a41ca07880f83eca6f6b6f39bf75fa63a8c9008d58c5028d9db0b1d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_5481da05a41ca07880f83eca6f6b6f39bf75fa63a8c9008d58c5028d9db0b1d0->leave($__internal_5481da05a41ca07880f83eca6f6b6f39bf75fa63a8c9008d58c5028d9db0b1d0_prof);

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
