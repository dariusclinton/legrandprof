<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_23f4fd72d332c1e94ccc04a5e2afe935dbbd559c13bafe401332a6c2ab34ebdf extends Twig_Template
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
        $__internal_df778dbb4c058932c12a427611792cd9cae49f671b534fc4208fe0e1b853b6e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df778dbb4c058932c12a427611792cd9cae49f671b534fc4208fe0e1b853b6e1->enter($__internal_df778dbb4c058932c12a427611792cd9cae49f671b534fc4208fe0e1b853b6e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_df778dbb4c058932c12a427611792cd9cae49f671b534fc4208fe0e1b853b6e1->leave($__internal_df778dbb4c058932c12a427611792cd9cae49f671b534fc4208fe0e1b853b6e1_prof);

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
