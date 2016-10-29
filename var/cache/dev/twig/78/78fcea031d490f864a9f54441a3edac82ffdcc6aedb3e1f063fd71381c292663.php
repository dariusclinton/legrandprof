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
        $__internal_3753d0629756dcfbf8680e7932ebeb7365bb6ad7e4a04aef89c6881d7f2a0b1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3753d0629756dcfbf8680e7932ebeb7365bb6ad7e4a04aef89c6881d7f2a0b1c->enter($__internal_3753d0629756dcfbf8680e7932ebeb7365bb6ad7e4a04aef89c6881d7f2a0b1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_3753d0629756dcfbf8680e7932ebeb7365bb6ad7e4a04aef89c6881d7f2a0b1c->leave($__internal_3753d0629756dcfbf8680e7932ebeb7365bb6ad7e4a04aef89c6881d7f2a0b1c_prof);

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
