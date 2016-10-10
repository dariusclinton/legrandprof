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
        $__internal_c898a215883a03e0fdd745cb4f99d8b7cb8738a40d2769cb8996d9cf6291edc3 = $this->env->getExtension("native_profiler");
        $__internal_c898a215883a03e0fdd745cb4f99d8b7cb8738a40d2769cb8996d9cf6291edc3->enter($__internal_c898a215883a03e0fdd745cb4f99d8b7cb8738a40d2769cb8996d9cf6291edc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_c898a215883a03e0fdd745cb4f99d8b7cb8738a40d2769cb8996d9cf6291edc3->leave($__internal_c898a215883a03e0fdd745cb4f99d8b7cb8738a40d2769cb8996d9cf6291edc3_prof);

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
