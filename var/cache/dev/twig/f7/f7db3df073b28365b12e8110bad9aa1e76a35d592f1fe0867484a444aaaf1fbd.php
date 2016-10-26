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
        $__internal_5bb9cf5cf4f83da270e79b809eb89684c16b0a488987d56ab7826c82dff3259f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bb9cf5cf4f83da270e79b809eb89684c16b0a488987d56ab7826c82dff3259f->enter($__internal_5bb9cf5cf4f83da270e79b809eb89684c16b0a488987d56ab7826c82dff3259f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_5bb9cf5cf4f83da270e79b809eb89684c16b0a488987d56ab7826c82dff3259f->leave($__internal_5bb9cf5cf4f83da270e79b809eb89684c16b0a488987d56ab7826c82dff3259f_prof);

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
