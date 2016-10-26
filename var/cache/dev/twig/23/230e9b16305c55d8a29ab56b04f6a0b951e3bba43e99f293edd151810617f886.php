<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_1c481f33f0ad7c62a465e5800d5180e487c832c620da3db25c56fd1d0b841788 extends Twig_Template
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
        $__internal_196032d2c03b509e9b75801a6001686b3d021a4b2fa2efcb3597732587004a38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_196032d2c03b509e9b75801a6001686b3d021a4b2fa2efcb3597732587004a38->enter($__internal_196032d2c03b509e9b75801a6001686b3d021a4b2fa2efcb3597732587004a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_196032d2c03b509e9b75801a6001686b3d021a4b2fa2efcb3597732587004a38->leave($__internal_196032d2c03b509e9b75801a6001686b3d021a4b2fa2efcb3597732587004a38_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
    }
}
