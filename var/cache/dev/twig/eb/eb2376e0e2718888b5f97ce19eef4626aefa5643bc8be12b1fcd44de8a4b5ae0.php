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
        $__internal_ffadc204f884c2617ff442726747330add3369af22e33724536314adb384d87c = $this->env->getExtension("native_profiler");
        $__internal_ffadc204f884c2617ff442726747330add3369af22e33724536314adb384d87c->enter($__internal_ffadc204f884c2617ff442726747330add3369af22e33724536314adb384d87c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_ffadc204f884c2617ff442726747330add3369af22e33724536314adb384d87c->leave($__internal_ffadc204f884c2617ff442726747330add3369af22e33724536314adb384d87c_prof);

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
