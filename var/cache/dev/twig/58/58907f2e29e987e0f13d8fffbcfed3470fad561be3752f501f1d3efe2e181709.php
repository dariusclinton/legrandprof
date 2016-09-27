<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_96c58e350ea033969fc1d9f3810226b54d99d18cd9df1a4a70c4cba895a9ae62 extends Twig_Template
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
        $__internal_48b8b20e086c657678fbce609adeacde3e82c94c7994789986430e8b232f7444 = $this->env->getExtension("native_profiler");
        $__internal_48b8b20e086c657678fbce609adeacde3e82c94c7994789986430e8b232f7444->enter($__internal_48b8b20e086c657678fbce609adeacde3e82c94c7994789986430e8b232f7444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_48b8b20e086c657678fbce609adeacde3e82c94c7994789986430e8b232f7444->leave($__internal_48b8b20e086c657678fbce609adeacde3e82c94c7994789986430e8b232f7444_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
    }
}
