<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_ef6c3f567e5fc289f7826f4f4c5dd982f793f6721b250082afb51ccf5df0aa40 extends Twig_Template
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
        $__internal_c774dd7e51062ea0cf3b27782960948a5a81eeccf502b72707c424d3a6572dae = $this->env->getExtension("native_profiler");
        $__internal_c774dd7e51062ea0cf3b27782960948a5a81eeccf502b72707c424d3a6572dae->enter($__internal_c774dd7e51062ea0cf3b27782960948a5a81eeccf502b72707c424d3a6572dae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_c774dd7e51062ea0cf3b27782960948a5a81eeccf502b72707c424d3a6572dae->leave($__internal_c774dd7e51062ea0cf3b27782960948a5a81eeccf502b72707c424d3a6572dae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
    }
}
