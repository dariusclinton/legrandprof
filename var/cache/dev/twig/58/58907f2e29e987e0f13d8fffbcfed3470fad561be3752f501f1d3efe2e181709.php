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
        $__internal_4fefedad7ef376d1ff7868e9a61c96560339787d6280f17d3d2d72c23f765254 = $this->env->getExtension("native_profiler");
        $__internal_4fefedad7ef376d1ff7868e9a61c96560339787d6280f17d3d2d72c23f765254->enter($__internal_4fefedad7ef376d1ff7868e9a61c96560339787d6280f17d3d2d72c23f765254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_4fefedad7ef376d1ff7868e9a61c96560339787d6280f17d3d2d72c23f765254->leave($__internal_4fefedad7ef376d1ff7868e9a61c96560339787d6280f17d3d2d72c23f765254_prof);

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
