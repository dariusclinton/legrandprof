<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_fce3c86c2d245d78301115855a15fe52b5f7dc58ed55cbc9ae4efde3ce31fdec extends Twig_Template
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
        $__internal_76e39a8569b747bc6224680e713c304e7fd943f2234653dc8c467ebdf63969bf = $this->env->getExtension("native_profiler");
        $__internal_76e39a8569b747bc6224680e713c304e7fd943f2234653dc8c467ebdf63969bf->enter($__internal_76e39a8569b747bc6224680e713c304e7fd943f2234653dc8c467ebdf63969bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_76e39a8569b747bc6224680e713c304e7fd943f2234653dc8c467ebdf63969bf->leave($__internal_76e39a8569b747bc6224680e713c304e7fd943f2234653dc8c467ebdf63969bf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
    }
}
