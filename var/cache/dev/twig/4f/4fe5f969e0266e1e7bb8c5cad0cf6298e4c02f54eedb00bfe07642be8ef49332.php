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
        $__internal_22be91cca91265f089035dc3f8f20e1f74678c6d49c2269a5e5fa1ddb61fd1ee = $this->env->getExtension("native_profiler");
        $__internal_22be91cca91265f089035dc3f8f20e1f74678c6d49c2269a5e5fa1ddb61fd1ee->enter($__internal_22be91cca91265f089035dc3f8f20e1f74678c6d49c2269a5e5fa1ddb61fd1ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_22be91cca91265f089035dc3f8f20e1f74678c6d49c2269a5e5fa1ddb61fd1ee->leave($__internal_22be91cca91265f089035dc3f8f20e1f74678c6d49c2269a5e5fa1ddb61fd1ee_prof);

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
