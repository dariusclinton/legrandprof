<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_e0e6d3e0088f16a89f21dfca5ac3dc5884566e56019704143cda7513d0cb0d0c extends Twig_Template
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
        $__internal_ca15582548eb6f7ea5e983aac497e9ad8c107d5e3b2226af204cc31ec0d6a671 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca15582548eb6f7ea5e983aac497e9ad8c107d5e3b2226af204cc31ec0d6a671->enter($__internal_ca15582548eb6f7ea5e983aac497e9ad8c107d5e3b2226af204cc31ec0d6a671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_ca15582548eb6f7ea5e983aac497e9ad8c107d5e3b2226af204cc31ec0d6a671->leave($__internal_ca15582548eb6f7ea5e983aac497e9ad8c107d5e3b2226af204cc31ec0d6a671_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
    }
}
