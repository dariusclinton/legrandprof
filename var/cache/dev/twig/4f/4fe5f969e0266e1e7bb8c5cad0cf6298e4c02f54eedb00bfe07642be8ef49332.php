<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_d8c38f65fcefecda918f0acfd42d14caac4a2044b46bc0a8faa2ae51f38b41d6 extends Twig_Template
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
        $__internal_42dee2e060a4ff4f040a852a8d7ae6e5a03a26317836a4aeeac03406d7991c07 = $this->env->getExtension("native_profiler");
        $__internal_42dee2e060a4ff4f040a852a8d7ae6e5a03a26317836a4aeeac03406d7991c07->enter($__internal_42dee2e060a4ff4f040a852a8d7ae6e5a03a26317836a4aeeac03406d7991c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_42dee2e060a4ff4f040a852a8d7ae6e5a03a26317836a4aeeac03406d7991c07->leave($__internal_42dee2e060a4ff4f040a852a8d7ae6e5a03a26317836a4aeeac03406d7991c07_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
