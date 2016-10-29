<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_c4f94d31f2e523e47e35d0e1c45888f50f2b7ef8e5ddd575c47d94eb4a311e06 extends Twig_Template
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
        $__internal_25fc858783e02cf03b38c879fba436739349c1caa1f15127bc8b1c47f7b13815 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25fc858783e02cf03b38c879fba436739349c1caa1f15127bc8b1c47f7b13815->enter($__internal_25fc858783e02cf03b38c879fba436739349c1caa1f15127bc8b1c47f7b13815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_25fc858783e02cf03b38c879fba436739349c1caa1f15127bc8b1c47f7b13815->leave($__internal_25fc858783e02cf03b38c879fba436739349c1caa1f15127bc8b1c47f7b13815_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
    }
}
