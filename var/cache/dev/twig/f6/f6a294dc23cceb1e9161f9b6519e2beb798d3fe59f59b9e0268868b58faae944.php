<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_2b0958c74374dba0e80a3fe9eb4ea14f9716afe122d45839d17a804cae06653b extends Twig_Template
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
        $__internal_7a75d56f5ada7139889d7f97125853b77036f22eff23a8f0fd187cb72e9005e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a75d56f5ada7139889d7f97125853b77036f22eff23a8f0fd187cb72e9005e9->enter($__internal_7a75d56f5ada7139889d7f97125853b77036f22eff23a8f0fd187cb72e9005e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_7a75d56f5ada7139889d7f97125853b77036f22eff23a8f0fd187cb72e9005e9->leave($__internal_7a75d56f5ada7139889d7f97125853b77036f22eff23a8f0fd187cb72e9005e9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
    }
}
