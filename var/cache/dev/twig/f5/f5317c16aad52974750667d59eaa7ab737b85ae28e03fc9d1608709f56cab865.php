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
        $__internal_d4ca63d0cb2c5c93030e124cc92367b149084749de8033f1721c8072acc8d829 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4ca63d0cb2c5c93030e124cc92367b149084749de8033f1721c8072acc8d829->enter($__internal_d4ca63d0cb2c5c93030e124cc92367b149084749de8033f1721c8072acc8d829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_d4ca63d0cb2c5c93030e124cc92367b149084749de8033f1721c8072acc8d829->leave($__internal_d4ca63d0cb2c5c93030e124cc92367b149084749de8033f1721c8072acc8d829_prof);

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
