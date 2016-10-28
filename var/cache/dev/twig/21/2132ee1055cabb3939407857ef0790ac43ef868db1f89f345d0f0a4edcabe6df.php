<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_bef471473eb0f8fa0406f58b33130c51beb6081cc278bac1aee983f6abc78734 extends Twig_Template
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
        $__internal_6e2f682e6fd1c8785afb6b743d2ba10e7a437473d8518201ce73adcce621de8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e2f682e6fd1c8785afb6b743d2ba10e7a437473d8518201ce73adcce621de8f->enter($__internal_6e2f682e6fd1c8785afb6b743d2ba10e7a437473d8518201ce73adcce621de8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_6e2f682e6fd1c8785afb6b743d2ba10e7a437473d8518201ce73adcce621de8f->leave($__internal_6e2f682e6fd1c8785afb6b743d2ba10e7a437473d8518201ce73adcce621de8f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
    }
}
