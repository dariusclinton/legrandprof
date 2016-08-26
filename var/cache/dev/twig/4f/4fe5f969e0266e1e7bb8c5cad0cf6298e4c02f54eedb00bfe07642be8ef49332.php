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
        $__internal_a93dba5e8a90316a6ec9184eab6e8444337c0c3a543814a9db2c9bb1fe607b5b = $this->env->getExtension("native_profiler");
        $__internal_a93dba5e8a90316a6ec9184eab6e8444337c0c3a543814a9db2c9bb1fe607b5b->enter($__internal_a93dba5e8a90316a6ec9184eab6e8444337c0c3a543814a9db2c9bb1fe607b5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_a93dba5e8a90316a6ec9184eab6e8444337c0c3a543814a9db2c9bb1fe607b5b->leave($__internal_a93dba5e8a90316a6ec9184eab6e8444337c0c3a543814a9db2c9bb1fe607b5b_prof);

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
