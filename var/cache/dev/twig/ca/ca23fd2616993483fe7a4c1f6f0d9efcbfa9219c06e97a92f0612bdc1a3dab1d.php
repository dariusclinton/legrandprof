<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_06102e44eea4bb9be2efc8de462e20c56d55bb77100b7d1a1e08482697023de0 extends Twig_Template
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
        $__internal_4daff363344cefe678724abfba5fc65699473a025a94abacd4268fa429a97d70 = $this->env->getExtension("native_profiler");
        $__internal_4daff363344cefe678724abfba5fc65699473a025a94abacd4268fa429a97d70->enter($__internal_4daff363344cefe678724abfba5fc65699473a025a94abacd4268fa429a97d70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_4daff363344cefe678724abfba5fc65699473a025a94abacd4268fa429a97d70->leave($__internal_4daff363344cefe678724abfba5fc65699473a025a94abacd4268fa429a97d70_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
    }
}
