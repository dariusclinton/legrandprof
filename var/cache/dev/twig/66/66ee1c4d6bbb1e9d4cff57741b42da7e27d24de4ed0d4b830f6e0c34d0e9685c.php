<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_49df4044b70ecc228934b7a60b1e4b0c77bc55efce5254ecc5ec613bff0f5e8f extends Twig_Template
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
        $__internal_3113a98d9810d7e94775aa3798634d4ac0f4b586e793c1aa89e8a98e854903ea = $this->env->getExtension("native_profiler");
        $__internal_3113a98d9810d7e94775aa3798634d4ac0f4b586e793c1aa89e8a98e854903ea->enter($__internal_3113a98d9810d7e94775aa3798634d4ac0f4b586e793c1aa89e8a98e854903ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_3113a98d9810d7e94775aa3798634d4ac0f4b586e793c1aa89e8a98e854903ea->leave($__internal_3113a98d9810d7e94775aa3798634d4ac0f4b586e793c1aa89e8a98e854903ea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
    }
}
