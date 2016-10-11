<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_dde133c16800bd09b33276c5477b6563110c6ea136292ee3342b07c5b3622c08 extends Twig_Template
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
        $__internal_eba0f7a8c0805e04e22bd37b6db6373ccb69f16a4dd37d7e49ac9ad5b2a4223e = $this->env->getExtension("native_profiler");
        $__internal_eba0f7a8c0805e04e22bd37b6db6373ccb69f16a4dd37d7e49ac9ad5b2a4223e->enter($__internal_eba0f7a8c0805e04e22bd37b6db6373ccb69f16a4dd37d7e49ac9ad5b2a4223e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_eba0f7a8c0805e04e22bd37b6db6373ccb69f16a4dd37d7e49ac9ad5b2a4223e->leave($__internal_eba0f7a8c0805e04e22bd37b6db6373ccb69f16a4dd37d7e49ac9ad5b2a4223e_prof);

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
