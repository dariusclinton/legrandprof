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
        $__internal_cacd3cc1d52143b96ed619556f062f3c105bcebba22406c2dba347f8a0c8a34d = $this->env->getExtension("native_profiler");
        $__internal_cacd3cc1d52143b96ed619556f062f3c105bcebba22406c2dba347f8a0c8a34d->enter($__internal_cacd3cc1d52143b96ed619556f062f3c105bcebba22406c2dba347f8a0c8a34d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_cacd3cc1d52143b96ed619556f062f3c105bcebba22406c2dba347f8a0c8a34d->leave($__internal_cacd3cc1d52143b96ed619556f062f3c105bcebba22406c2dba347f8a0c8a34d_prof);

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
