<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_cb5d8fca84d41cbc05aadc12b2562fc8d146c51d1fb2daf437ae5ebd4edae4d6 extends Twig_Template
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
        $__internal_4a61b94969ba65c0717f51d5af663f1a9500c2dbd6598fd0e5808b41ea56f6ef = $this->env->getExtension("native_profiler");
        $__internal_4a61b94969ba65c0717f51d5af663f1a9500c2dbd6598fd0e5808b41ea56f6ef->enter($__internal_4a61b94969ba65c0717f51d5af663f1a9500c2dbd6598fd0e5808b41ea56f6ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_4a61b94969ba65c0717f51d5af663f1a9500c2dbd6598fd0e5808b41ea56f6ef->leave($__internal_4a61b94969ba65c0717f51d5af663f1a9500c2dbd6598fd0e5808b41ea56f6ef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
    }
}
