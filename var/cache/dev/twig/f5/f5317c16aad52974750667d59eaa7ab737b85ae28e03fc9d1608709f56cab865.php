<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_d997f75404313c671c971603ca2e7b4c0431be16d7d42d5366731dddda5b8ab8 extends Twig_Template
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
        $__internal_05a44ca2c6cc9de8a2b466ad1ba36a9a81f101145dceac6250abf4d113a95915 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05a44ca2c6cc9de8a2b466ad1ba36a9a81f101145dceac6250abf4d113a95915->enter($__internal_05a44ca2c6cc9de8a2b466ad1ba36a9a81f101145dceac6250abf4d113a95915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_05a44ca2c6cc9de8a2b466ad1ba36a9a81f101145dceac6250abf4d113a95915->leave($__internal_05a44ca2c6cc9de8a2b466ad1ba36a9a81f101145dceac6250abf4d113a95915_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
    }
}
