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
        $__internal_bf2611d1d007880f63d5741c6643860ca02071ca6c79a1c6d90ac251939f5713 = $this->env->getExtension("native_profiler");
        $__internal_bf2611d1d007880f63d5741c6643860ca02071ca6c79a1c6d90ac251939f5713->enter($__internal_bf2611d1d007880f63d5741c6643860ca02071ca6c79a1c6d90ac251939f5713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_bf2611d1d007880f63d5741c6643860ca02071ca6c79a1c6d90ac251939f5713->leave($__internal_bf2611d1d007880f63d5741c6643860ca02071ca6c79a1c6d90ac251939f5713_prof);

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
