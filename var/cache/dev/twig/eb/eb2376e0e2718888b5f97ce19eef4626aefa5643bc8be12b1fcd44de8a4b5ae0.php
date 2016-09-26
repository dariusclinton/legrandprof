<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_0056b327bb85321e66c0166dbdebfbb03e4aed9d79b5a5609bfdfaf65eb31b1f extends Twig_Template
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
        $__internal_5764414a87834d80546dc4df4cae2cb009f7c124179d60049e0e9c8954f32e55 = $this->env->getExtension("native_profiler");
        $__internal_5764414a87834d80546dc4df4cae2cb009f7c124179d60049e0e9c8954f32e55->enter($__internal_5764414a87834d80546dc4df4cae2cb009f7c124179d60049e0e9c8954f32e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_5764414a87834d80546dc4df4cae2cb009f7c124179d60049e0e9c8954f32e55->leave($__internal_5764414a87834d80546dc4df4cae2cb009f7c124179d60049e0e9c8954f32e55_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
    }
}
