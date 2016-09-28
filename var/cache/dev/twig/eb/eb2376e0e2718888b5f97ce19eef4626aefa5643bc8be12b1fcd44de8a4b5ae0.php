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
        $__internal_dcd242538260b95eb9225ca86f67adbd288ce83c7feb07b616703881a8e9b2e6 = $this->env->getExtension("native_profiler");
        $__internal_dcd242538260b95eb9225ca86f67adbd288ce83c7feb07b616703881a8e9b2e6->enter($__internal_dcd242538260b95eb9225ca86f67adbd288ce83c7feb07b616703881a8e9b2e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_dcd242538260b95eb9225ca86f67adbd288ce83c7feb07b616703881a8e9b2e6->leave($__internal_dcd242538260b95eb9225ca86f67adbd288ce83c7feb07b616703881a8e9b2e6_prof);

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
