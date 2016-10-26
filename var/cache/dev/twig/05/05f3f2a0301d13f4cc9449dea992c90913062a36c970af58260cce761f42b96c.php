<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_5b83bba05ce7eed38b9d2337cb08cd6b82e56fd7123c0aa8274279fd732908cb extends Twig_Template
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
        $__internal_141be27c5a781a05791ddf8f1ce597f9b2733f35911caab14b58063d39a2c194 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_141be27c5a781a05791ddf8f1ce597f9b2733f35911caab14b58063d39a2c194->enter($__internal_141be27c5a781a05791ddf8f1ce597f9b2733f35911caab14b58063d39a2c194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_141be27c5a781a05791ddf8f1ce597f9b2733f35911caab14b58063d39a2c194->leave($__internal_141be27c5a781a05791ddf8f1ce597f9b2733f35911caab14b58063d39a2c194_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
    }
}
